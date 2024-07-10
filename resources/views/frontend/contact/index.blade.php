@extends('frontend.master')
@section('title')
Contact
@endsection
@section('content')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->


<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="text-center text-success">{{session('msg')}}</h3>
        </div>
    </div>
</div>
    <!-- Contact Info Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-map-marker-alt fa-3x text-dark mb-4"></i>
                            <h5 class="text-white">Office Address</h5>
                            <h5 class="fw-light text-white">123 Street, New York, USA</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-phone-alt fa-3x text-dark mb-4"></i>
                            <h5 class="text-white">Call Us</h5>
                            <h5 class="fw-light text-white">+012 345 67890</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-envelope fa-3x text-dark mb-4"></i>
                            <h5 class="text-white">Mail Us</h5>
                            <h5 class="fw-light text-white">info@example.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


     <!-- Contact Start -->
  <div class="container-fluid py-5 bg-light"> 
    <div class="container">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="text-primary mb-5"><span class="fw-light text-dark">If You Have Any Query,</span> Please Contact Us</h1></div>
        <div class="row g-5">
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.1s">
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    <form action = "{{route('contact.create')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="mobile" placeholder="Your Email">
                                    <label for="mobile">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.5s">
                <a href="https://maps.app.goo.gl/XoLxkpJkZmKNRAZa6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d102721.52554612767!2d90.14454871909783!3d24.12968764226265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1717928169170!5m2!1sen!2sbd" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
            </a>
            </div>
        </div>
    </div>
      <!-- Contact End -->
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



@endsection
{{-- @extends('frontend.master')
@section('title')
Contact
@endsection
@section('content')
 
 <!-- Hero Start -->
 <div class="container-fluid bg-primary hero-header ">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3 animated slideInDown">Contact </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Hero End -->


<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="text-center text-success">{{session('msg')}}</h3>
        </div>
    </div>
</div>

  <!-- Contact Start -->
  <div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="text-primary mb-5"><span class="fw-light text-dark">If You Have Any Query,</span> Please Contact Us</h1></div>
        <div class="row g-5">
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.1s">
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    <form action = "{{route('contact.create')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="mobile" placeholder="Your Email">
                                    <label for="mobile">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.5s">
                <a href="https://maps.app.goo.gl/XoLxkpJkZmKNRAZa6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d102721.52554612767!2d90.14454871909783!3d24.12968764226265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1717928169170!5m2!1sen!2sbd" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
            </a>
            </div>
<!-- Contact End -->
<!-- Contact Info Start -->


<!-- Newsletter Start -->


    <div class="container-fluid py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-3 px-3">
                            <i class="fa fa-map-marker-alt fa-3x text-dark mb-3"></i>
                            <h5 class="text-white">Office Address</h5>
                            <h5 class="fw-light text-white">Chiteswary, Mirzapur, Tangail</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-4 px-3">
                            <i class="fa fa-phone-alt fa-3x text-dark mb-3"></i>
                            <h5 class="text-white">Call Us</h5>
                            <h5 class="fw-light text-white">+8801914-743429</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-4 px-3">
                            <i class="fa fa-envelope fa-3x text-dark mb-3"></i>
                            <h5 class="text-white">Mail Us</h5>
                            <h5 class="fw-light text-white">shaitechbd@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->

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

    <!-- Newsletter Start -->
    <div class="container-fluid newsletter bg-primary py-5 my-5">
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


@endsection --}}
