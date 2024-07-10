@extends('frontend.master')

@section('title')
Home
@endsection
@section('content')
<!-- Hero Start -->
<div class="container-fluid bg-primary hero-header ">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3 animated slideInDown">Products</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Hero End -->


<!-- Product Start -->
<div class="container-fluid  py-4 bg-light">
    <div class="container ">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="text-primary mb-2"><span class="fw-light text-dark">Our </span> Products</h1>
        </div>
        <div class="row g-4">
            @foreach($products as $product)
            <div class="col-md-6 col-lg-4 wow  fadeIn" data-wow-delay="0.1s">
                <div class="product-item text-center bg-white border h-100 p-4">
                    <img class="" src="{{asset($product->image)}}" height="250" width="250"  alt="">
                    <h4 class='pt-3'><a href="{{route('product.details', ['id' => $product->id])}}" class="h6 d-inline-block">{{$product->name}}</a></h4>
                    <p class="text-primary ">Price:{{$product->regular_price}}TK. <del> <span class="text-danger">{{$product->selling_price}}TK.</span> </del> </p>
                    <a class="btn btn-primary btn-sm" href='{{route('product.details', ['id' => $product->id])}}'>Details More..</a><br/><br/>
                </div>
            </div>
            @endforeach
    
            <div class="col-12 text-center">
                <button class="btn btn-primary py-2 px-4">Load More Products</button>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->


<!-- Newsletter Start -->
<div class="container-fluid newsletter bg-primary py-5 ">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="text-white mb-3"><span class="fw-light text-dark">Let's Follow Our </span> Facebook Page,<a class = "text-dark" href="https://www.facebook.com/shaitechbd"> ShaiTech BD</a></h1>
            <h3 class="text-dark mb-4">  </h3>
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


@endsection