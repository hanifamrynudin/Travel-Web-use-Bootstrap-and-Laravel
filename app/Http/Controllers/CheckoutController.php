<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\TransactionDetail;
use App\EventPackage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details','event_package','user'])->findOrFail($id);

        return view('pages.checkout',[
            'item' => $item
        ]);
    }

    public function process(Request $request, $id)
    {
        $event_package = EventPackage::findOrFail($id);

        $transaction = Transaction::create([
            'event_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_equipment' => 0,
            'transaction_total' => $event_package->price,
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'is_equipment' => false
        ]);

        return redirect()->route('checkout', $transaction->id);
    }

    public function remove(Request $request, $event_id)
    {
        $item = TransactionDetail::findorFail($event_id);

        $transaction = Transaction::with(['events','event_package'])
            ->findOrFail($item->transactions_id);

        if($item->is_equipment)
        {
            $transaction->transaction_total -= 190;
            $transaction->additional_equipment -= 190;
        }

        $transaction->transaction_total -= $transaction->event_package->price;

        $transaction->save();
        $item->delete();

        return redirect()->route('checkout', $item->transactions_id);
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_equipment' => 'required|boolean',
        ]);

        $data = $request->all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['event_package'])->find($id);

        if($request->is_equipment)
        {
            $transaction->transaction_total += 190;
            $transaction->additional_equipment += 190;
        }

        $transaction->transaction_total += $transaction->event_package->price;

        $transaction->save();

        return redirect()->route('checkout', $id);
    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        return view('pages.success');
    }
}
