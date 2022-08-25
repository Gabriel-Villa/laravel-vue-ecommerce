@extends('layouts.app')



@section('content')

    {{-- <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"
                aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ asset('/images/slider-1.jpg') }}" alt="slider-1" srcset="" width="100%" height="100%">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/images/slider-3.jpg') }}" alt="slider-2" srcset="" width="100%" height="100%">
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('/images/slider-2.jpg') }}" alt="slider-3" srcset="" width="100%" height="100%">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container marketing">

        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('/images/products/1.jpg') }}" alt="product-1" width="140" height="140">

                <h2>Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the
                    first column.</p>
                <p><a class="btn btn-secondary" href="{{ route('products.index') }}">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ asset('/images/products/2.jpg') }}" alt="product-2" width="140" height="140">
                <h2>Heading</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second
                    column.</p>
                <p><a class="btn btn-secondary" href="{{ route('products.index') }}">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ asset('/images/products/3.jpg') }}" alt="product-3" width="140" height="140">

                <h2>Heading</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>
                <p><a class="btn btn-secondary" href="{{ route('products.index') }}">View details »</a></p>
            </div><!-- /.col-lg-4 -->
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                        mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose
                    here.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('/images/products/1.jpg') }}" alt="product-1" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span>
                </h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how
                    this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('/images/products/2.jpg') }}" alt="product-2" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really
                    intended to be actually read, simply here to give you a better view of what this would look like with
                    some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('/images/products/3.jpg') }}" alt="product-3" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>

        <hr class="featurette-divider">

    </div> --}}

@endsection
