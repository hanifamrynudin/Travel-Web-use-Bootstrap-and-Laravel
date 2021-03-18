@extends('layouts.app')

@section('title')
    MOUNTJAK
@endsection


@section('content')
     <!-- header -->
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url(frontend/images/header.jpg)">
            <div class="container">
            <div class="carousel-caption d-md-block" >
                <h1 class="display-4">
                    Explore all Mountain,
                    <br>
                    As Easy One Click
                </h1>
                <p class="lead">
                You will see beutiful
                <br>
                moment you never see before
                </p>
                <a href="#mountainlist" class="btn btn-get-started px-4 mt-4">
                GET STARTED
                </a>
            </div>
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url(frontend/images/header-2.jpg)">
            <div class="container">
            <div class="carousel-caption d-md-block" >
                <h1 class="display-4">
                    Mountjak to Merapi, <br>  For  New Year Party
                </h1>
                <p class="lead">
                    Start Your New Year <br> from the Peak of Merapi
                </p>
                <a href="mountain-list" class="btn btn-get-started px-4 mt-4">
                GET STARTED
                </a>
            </div>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
    </div>
    </header>
    <main>

    <!-- statistik -->

    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
            <h2>20K</h2>
            <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>100</h2>
            <p>Mountains</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>216</h2>
            <p>Basecamps</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>121</h2>
            <p>Partners</p>
            </div>
        </section>
    </div>
</main>

    <section class="section-list" id="list">
        <div class="container">
        <div class="row">
            <div class="col text-center section-list-heading" id="mountainlist">
            <h2>Mountain List</h2>
            <p>
                Somethings that you never try <br>
                before in this world
            </p>
            </div>
        </div>
        </div>
    </section>
<!-- Mountain List -->
<main>

    <section class="carousel slide" data-ride="carousel" id="postsCarousel">
        <div class="owl-carousel owl-theme">
                @foreach ($items as $item)
                <div class="card">
                        <div class="card-mount text-center d-flex flex-column"
                        style="background-image: url('{{$item->galleries->count() ? Storage::
                        url($item->galleries->first()->image):'' }}');"
                        >
                                <div class="mount-location" style="color:black; font-size:25px; font-family:Arial, Helvetica, sans-serif;">{{$item->title}}</div>
                                <div class="mount-region" style="color:black; font-size:18px;font-family:Arial, Helvetica, sans-serif;">{{$item->location}}</div>
                                <div class="mount-button mt-auto">
                                <a href="{{ route('event', $item->slug) }}" class="btn btn-mount-details" >
                                    Views Details
                                </a>
                                </div>
                        </div>


                </div>
                @endforeach
        </div>

    </section>

    <section class="section-networks" id="networks">
    <div class="container">
        <div class="row">
        <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>
            Companies are trusted us
            <br />
            more than just a trip
            </p>
        </div>
        <div class="col-md-8 text-center">
            <img src="frontend/images/partner.png" class="img-patner" />
        </div>
        </div>
    </div>
    </section>
    <section class="section-testimonials-heading" id="testimonialsHeading">
    <div class="container">
        <div class="row">
        <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p>
            Moments were giving them
            <br />
            the best experience
            </p>
        </div>
        </div>
    </div>

    <div class="owl-carousel owl-theme">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                    <img
                        src="frontend/images/avatar.png"
                        alt=""
                        class="mb-4 rounded-circle"
                    />
                    <h3>Hanif F Amrynudin</h3>
                    <p class="testimonials">
                        “ It was glorious and I could not stop to say wohooo for
                        every single moment Dankeeeeee “
                    </p>
                        <hr />
                    <p class="trip-to mt-2">Mountjak to Rinjani</p>
                    </div>
                </div>
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                    <img
                        src="frontend/images/avatar.png"
                        alt=""
                        class="mb-4 rounded-circle"
                    />
                    <h3>Hanif Fadillah Amrynudin</h3>
                    <p class="testimonials">
                        “ The trip was amazing and I saw something beautiful in that
                        Island that makes me want to learn more “
                    </p>
                        <hr />
                    <p class="trip-to mt-2">Mountjak to Rinjani</p>
                    </div>
                </div>

                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                    <img
                        src="frontend/images/avatar.png"
                        alt=""
                        class="mb-4 rounded-circle"
                    />
                    <h3>Hanif Fadillah Amrynudin</h3>
                    <p class="testimonials">
                        “ The trip was amazing and I saw something beautiful in that
                        Island that makes me want to learn more “
                    </p>
                        <hr />
                    <p class="trip-to mt-2">Mountjak to Rinjani</p>
                    </div>
                </div>
        </div>


        <div class="row">
        <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
            I Need Help
            </a>
            <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
            Get Started
            </a>
        </div>
        </div>
    </div>

</main>
@endsection
