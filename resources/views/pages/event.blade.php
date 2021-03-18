@extends('layouts.app')

@section('title')
 Event
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/dist/xzoom.css')}}" />
<link rel="stylesheet" href="{{url('frontend/libraries/gijgo/css/gijgo.min.css')}}" />
@endpush

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
        <div class="row">
            <div class="col p-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">
                    Event
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Details
                </li>
                </ol>
            </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
                <p>
                        {{$item->title}}
                </p>
                <h1>    {{$item->location}}</h1>

                <div class="gallery">

                @if($item->galleries->count())
                    <div class="xzoom-container">
                            <img
                            class="xzoom"
                            id="xzoom-default"
                            src="{{Storage::url($item->galleries->first()->image)}}"
                            xoriginal="{{Storage::url($item->galleries->first()->image)}}"
                            />
                            <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $gallery )

                                <a href="{{Storage::url($gallery->image)}}">
                                    <img
                                    src="{{Storage::url($gallery->image)}}"
                                    class="xzoom-gallery"
                                    width="128"
                                    xpreview="{{   Storage::url($gallery->image)}}"
                                    />
                                </a>

                                @endforeach
                            </div>
                        </div>
                @endif

                <h2>About Mountain</h2>
                <p>
                    {!! $item->about !!}
                </p>
                <div class="features row pt-3">
                    <div class="col-md-4">
                    <img
                        src="{{url('frontend/images/ic_event.png')}}"
                        alt=""
                        class="features-image"
                    />
                    <div class="description">
                        <h3>Featured Ticket</h3>
                        <p>{{$item->featured_event}}</p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <img
                        src="{{url('frontend/images/ic_bahasa.png')}}"
                        alt=""
                        class="features-image"
                    />
                    <div class="description">
                        <h3>Language</h3>
                        <p>{{$item->language}}</p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <img
                        src="{{url('frontend/images/ic_foods.png')}}"
                        alt=""
                        class="features-image"
                    />
                    <div class="description">
                        <h3>Foods</h3>
                        <p>{{$item->foods}}</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="card card-details card-right">
                <h2>Members are going</h2>
                <div class="members my-2">
                <img src="{{url('frontend/images/members.png')}}"  />
                </div>
                <hr />
                <h3>Trip Informations</h3>
                <table class="trip-informations">
                <tr>
                    <th width="50%">Date of Departure</th>
                    <td width="50%" class="text-right">
                        {{\Carbon\Carbon::create($item->departure_date)->format('M d, Y')}}
                    </td>
                </tr>
                <tr>
                    <th width="50%">Duration</th>
                    <td width="50%" class="text-right">
                        {{$item->duration}}
                    </td>
                </tr>
                <tr>
                    <th width="50%">Type</th>
                    <td width="50%" class="text-right">
                        {{$item->type}}
                    </td>
                </tr>
                <tr>
                    <th width="50%">Price</th>
                    <td width="50%" class="text-right">Rp.{{$item->price}} / person</td>
                </tr>
                </table>
            </div>
            <div class="join-container">
                @auth
                    <form action="{{route('checkout_process' , $item->id)}}" method="post">
                        @csrf
                        <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                            Join Now
                        </button>
                    </form>
                @endauth

                @guest
                <a href="{{route('login')}}" class="btn btn-block btn-join-now mt-3 py-2">
                Login or Register to Join
                </a>
                @endguest

            </div>
            </div>
        </div>
        </div>
    </section>
    </main>

@endsection



