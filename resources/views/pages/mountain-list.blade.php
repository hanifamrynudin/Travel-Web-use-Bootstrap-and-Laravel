@extends('layouts.app')

@section('title')
 Mountain List
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
                    New Year Trip
                    </p>
                    <h1>Merapi Mountain</h1>

                    <div class="gallery">
                    <div class="xzoom-container">
                        <img
                        class="xzoom"
                        id="xzoom-default"
                        src="frontend/images/details-1.jpg"
                        xoriginal="frontend/images/details-1.jpg"
                        />
                        <div class="xzoom-thumbs">
                        <a href="frontend/images/header.jpg"
                            ><img
                            class="xzoom-gallery"
                            width="128"
                            src="frontend/images/header.jpg"
                            xpreview="frontend/images/header.jpg"
                        /></a>
                        <a href="frontend/images/details-1.jpg"
                            ><img
                            class="xzoom-gallery"
                            width="128"
                            src="frontend/images/details-1.jpg"
                            xpreview="frontend/images/details-1.jpg"
                        /></a>
                        <a href="frontend/images/details-1.jpg"
                            ><img
                            class="xzoom-gallery"
                            width="128"
                            src="frontend/images/details-1.jpg"
                            xpreview="frontend/images/details-1.jpg"
                        /></a>
                        <a href="frontend/images/details-1.jpg"
                            ><img
                            class="xzoom-gallery"
                            width="128"
                            src="frontend/images/details-1.jpg"
                            xpreview="frontend/images/details-1.jpg"
                        /></a>
                        <a href="frontend/images/details-1.jpg"
                            ><img
                            class="xzoom-gallery"
                            width="128"
                            src="frontend/images/details-1.jpg"
                            xpreview="frontend/images/details-1.jpg"
                        /></a>
                        </div>
                    </div>
                    <h2>Tentang Wisata</h2>
                    <p>
                                Mount Bromo (Indonesian: Gunung Bromo), is an active volcano
                            and part of the Tengger massif, in East Java, Indonesia.
                            The volcano belongs to the Bromo Tengger Semeru National Park.


                    </p>
                    <p>
                            The name of Bromo derived from Javanese pronunciation of Brahma,
                            the Hindu creator god. It is a major pilgrimage centre for Hindus in Indonesia,
                            particularly Tenggerese Hindus. They make pilgrimage during the Yadnya Kasada.
                    </p>
                    <div class="features row pt-3">
                        <div class="col-md-4">
                        <img
                            src="frontend/images/ic_event.png"
                            alt=""
                            class="features-image"
                        />
                        <div class="description">
                            <h3>Featured Ticket</h3>
                            <p>Tari Kecak</p>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <img
                            src="frontend/images/ic_bahasa.png"
                            alt=""
                            class="features-image"
                        />
                        <div class="description">
                            <h3>Language</h3>
                            <p>Bahasa Indonesia</p>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <img
                            src="frontend/images/ic_foods.png"
                            alt=""
                            class="features-image"
                        />
                        <div class="description">
                            <h3>Foods</h3>
                            <p>Local Foods</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="card card-details card-right">
                    <h4>Reservation

                    </h4>
                    <br>

                    <table class="trip-informations">
                    <tr>
                        <form class="form-inline">
                            <label class="sr-only" for="datepicker"
                            >DOE Passport</label
                            >
                            <div class="input-group mb-2 mr-sm-2">
                            <input
                                type="text"
                                class="form-control datepicker"
                                width="312"
                                id="datepicker"
                                placeholder ="Reservation"
                            />
                            </div>
                    </tr>
                    <hr>


                    <h3>Trip Informations</h3>

                    <tr>
                        <th width="50%">Mountjak Type</th>
                        <td width="50%" class="text-right">Personal/Group</td>
                    </tr>
                    <tr>
                        <th width="50%">Price</th>
                        <td width="50%" class="text-right">$80,00 / person</td>
                    </tr>
                    </table>
                </div>
                <div class="join-container">
                    <a href="checkout.blade.php" class="btn btn-block btn-join-now mt-3 py-2"
                    >Booking Now</a
                    >
                </div>
                </div>
            </div>
            </div>
        </section>
    </main>

@endsection



