@extends('frontend.master')

@section('title')
About
@endsection

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->



 <!-- Blog Start -->
 <div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="text-primary mb-3 pb-2"><span class="fw-light text-dark"> Our</span> Projects Gallery</h1>        </div>
        <div class="row g-4">
            @foreach($projects as $project)
            <div class="col-md-6 col-lg-4 bg-white wow fadeIn" data-wow-delay="0.1s">
                <div class="blog-item border h-100 p-4">
                    <img class="img-fluid mb-4" src="{{asset($project->image)}}" height="300" width="250" alt="">
                    
                    <h5 class="mb-4">{{$project->description}}</h5>
                    <a href="" class="btn btn-outline-primary px-3">Read More</a>
                </div>
            </div>
            @endforeach
                {{-- <div class="blog-item border h-100 p-4">
                    <img class="img-fluid mb-4" src="img/blog-3.jpg" alt="">
                    <a href="" class="h5 lh-base d-inline-block">How to use our natural & organic shampoo</a>
                    <div class="d-flex text-black-50 mb-2">
                        <div class="pe-3">
                            <small class="fa fa-eye me-1"></small>
                            <small>9999 Views</small>
                        </div>
                        <div class="pe-3">
                            <small class="fa fa-comments me-1"></small>
                            <small>9999 Comments</small>
                        </div>
                    </div>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat.</p>
                    <a href="" class="btn btn-outline-primary px-3">Read More</a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


{{-- 
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="img/shampoo-1.png">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
              
                </div>
            </div>
        </div>
    </div>
    <!-- About End --> --}}


    <!-- Newsletter Start -->
    <div class="container-fluid newsletter bg-primary py-5 ">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3"><span class="fw-light text-dark">Let's Subscribe</span> The Newsletter</h1>
                <p class="text-white mb-4">Subscribe now to get 30% discount on any of our products</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control w-100 py-4 ps-4 pe-5" type="text" placeholder="Enter Your Email"
                            style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-white fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
@endsection