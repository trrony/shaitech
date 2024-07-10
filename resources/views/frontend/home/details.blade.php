@extends('frontend.master')

 @section('title')
    Product Details
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
   <section class="">
      <!-- Product Details Start -->
      <div class="container-fluid py-5 bg-light">
         <div class="container">
             <div class="row g-5 align-items-center">
                 <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                     <img class="img-fluid animated pulse infinite" src="{{asset($product->image)}}">
                 </div>
                 <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                     <h3 class="text-primary mb-4">{{$product->name}}</h1>
                     <p class="text-primary "><b>Price :</b> {{$product->regular_price}}TK. <del> <span class="text-danger">{{$product->selling_price}}TK.</span> </del> </p>
                     <p class="mb-4">{{$product->short_description}}</p>
                     <p class="mb-4">{{$product->long_description}}</p>
                     <a class="btn btn-primary py-2 px-4" href="">Shop Now</a>
                 </div>
             </div>
         </div>
     </div>
      <!-- Product Details End -->
   </section>

 @endsection   