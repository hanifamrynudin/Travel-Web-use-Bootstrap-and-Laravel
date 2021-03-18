@extends('layouts.checkout')

@section('title')
 Checkout
@endsection


@section('content')
<main>
<section class="section-details-header"></section>
<section class="section-details-content">
    <div class="container">
    <div class="row">
        <div class="col p-0 pl-3 pl-lg-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page">
                Event
            </li>
            <li class="breadcrumb-item" aria-current="page">
                Details
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Checkout
            </li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 pl-lg-0">
        <div class="card card-details">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <h1>Who is Going?</h1>
            <p>
            Mountjak to {{$item->event_package->title}}, {{$item->event_package->location}}
            </p>
            <div class="attendee">
            <table class="table table-borderless table-responsive-sm text-center" id="table" style="color:black !important">
                <thead>
                <tr>
                    <td scope="col" style="font-weight: 700">Picture</td>
                    <td scope="col" style="font-weight: 700">Name</td>
                    <td scope="col" style="font-weight: 700">Equipment</td>
                    <td scope="col" style="font-weight: 700">Action</td>
                </tr>
                </thead>
                <tbody>
                    @forelse ($item->details as $event)
                        <tr>
                            <td>
                            <img
                                src="https://ui-avatars.com/api/?name={{ $event->username }}"
                                class="rounded-circle"
                                alt=""
                                height="60"
                            />
                            </td>
                            <td class="align-middle">
                                {{ $event->username }}
                            </td>
                            <td class="align-middle">
                                {{ $event->is_equipment ? 'Yes' : 'No' }}
                            </td class="align-middle">
                            <a href="{{route('checkout_remove'), $event_id}}">
                                <img src="{{url('frontend/images/ic_remove.png')}}" alt="" />
                            </a>
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            No Visitor
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
            <div class="member mt-3">
            <h2>Add Member</h2>
            <form class="form-inline">
                <label class="sr-only" for="inputUsername">Name</label>
                <input
                type="text"
                class="form-control mb-2 mr-sm-2"
                id="inputUsername"
                placeholder="Username"
                />

                <label
                class="sr-only"
                class="mr-2"
                for="inlineFormCustomSelectPref"
                >Preference</label
                >
                <select
                class="custom-select mb-2 mr-sm-2"
                id="inlineFormCustomSelectPref"
                >
                <option selected value="">Equipment</option>
                <option value="2">Yes</option>
                <option value="3">No</option>
                </select>
                <button type="submit" class="btn btn-add-now mb-2 px-4">
                Add Now
                </button>
            </form>
            <h3 class="mt-2 mb-0">Note</h3>
            <p class="disclaimer mb-0">
                You are only able to invite member that has registered in
                Mountjak.
            </p>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card card-details card-right">
            <h2>Checkout Information</h2>
            <table class="trip-informations">
            <tr>
                <th width="50%">Date</th>
                <td width="50%" class="text-right">12-31-2019</td>
            </tr>
            <tr>
                <th width="50%">Members</th>
                <td width="50%" class="text-right">2 person</td>
            </tr>
            <tr>
                <th width="50%">Additional Equipment</th>
                <td width="50%" class="text-right">$ 190,00</td>
            </tr>
            <tr>
                <th width="50%">Trip Price</th>
                <td width="50%" class="text-right">$ 80,00 / person</td>
            </tr>
            <tr>
                <th width="50%">Sub Total</th>
                <td width="50%" class="text-right">$ 280,00</td>
            </tr>
            <tr>
                <th width="50%"> <br> Total (+Unique)</th>
                <td width="50%" class="text-right text-total">
                <span class="text-blue"> <br> $ 280,</span
                ><span class="text-orange">33</span>
                </td>
            </tr>
            </table>

            <hr />
            <h2>Payment Instructions</h2>
            <p class="payment-instructions">
            Please complete your payment before to continue the wonderful
            trip
            </p>
            <div class="bank">
            <div class="bank-item pb-3">
                <img
                src="{{url('frontend/images/ic_bank.png')}}"
                alt=""
                class="bank-image"
                />
                <div class="description">
                <h3>PT Mountjak ID</h3>
                <p>
                    0881 8829 8800
                    <br />
                    Bank Central Asia
                </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bank-item">
                <img
                src="{{url('frontend/images/ic_bank.png')}}"
                alt=""
                class="bank-image"
                />
                <div class="description">
                <h3>PT Mountjak ID</h3>
                <p>
                    0899 8501 7888
                    <br />
                    Go Pay
                </p>
                </div>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>
        <div class="join-container">
            <a href="{{route('event', $item->id)}}" class="btn btn-block btn-join-now mt-3 py-2"
            >I Have Made Payment</a
            >
        </div>
        <div class="text-center mt-3">
            <a href="{{route('event', $item->event_package->slug)}}" class="text-muted" style="color: #CE663A !important">Cancel Booking</a>
        </div>
        </div>
    </div>
    </div>
</section>
    </main>
@endsection
