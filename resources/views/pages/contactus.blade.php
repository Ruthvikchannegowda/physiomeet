
 @extends('layouts.site_layouts')
 @section('content')
 
 <!-- rts breadcrumb area start -->
 <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Contact</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->



    <!-- contact us area start -->
    <div class="rts-contact-top-wrapper rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <h2 class="title text-center move-right wow">General Contact Information</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-information-card h-100">
                        <div class="icon">
                            <img src="{{asset('images/location_footer.png')}}" alt="icons">
                        </div>
                        <a href="#">
                        No - 14 Varaham Sthala, Neo Town Main Road, Post,
                        Gollahalli, Electronic City, Bengaluru, Karnataka 560100
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-information-card h-100">
                        <div class="icon">
                            <img src="{{asset('images/contact-mail.png')}}" alt="icons">
                        </div>
                        <a href="#">
                        Ph :+91 8667067509
                        </a>
                        <a href="">
                            Email: physiomeet001@gmail.com
                        </a>
                        <!-- <a href="#">
                            +44 20 4154 2541
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-information-card">
                        <div class="icon">
                            <img src="{{asset('images/clock.png')}}" alt="icons">
                        </div>
                        <a href="#">
                            Mon-Fri: 9 AM – 10 PM <br>
                        </a>
                        <p class="mb-3">Online</p>
                        <span> Batch 1 ( Level 1 ) 6 AM to 6.45 AM</span>
                        <span>Batch 2 ( Level 2 ) 7 AM to 7.45 AM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us area end -->


    


     <!-- contact us area start -->
     <div class="contact-form-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <div class="appoinment-area-main contact-page appoinment-page bg_image">


                      @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show fs-18 fw-600" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show fs-18 fw-600" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                       <form action="{{ url('contactUs') }}" method="POST">
                        @csrf
                            <div class="half-input-wrapper">
                                <input type="text" placeholder="Patient name" name="full_name">
                                <input type="text" placeholder="Phone Number" name="phone_number">
                            </div>
                            <!-- <div class="search-input">
                                <select class="" style="display: none;">
                                    <option data-display="Select Department">Doctor Department</option>
                                    <option value="1">Medicine</option>
                                    <option value="2">Cardiology</option>
                                    <option value="3">Operation</option>
                                </select>
                                <div class="nice-select custom-select one" style="flex-basis: 50%;" tabindex="0">
                                    <span class="current">Select Department</span>
                                    <ul class="list">
                                        <li data-value="Morning 10 AM" data-display="Morning 10 AM" class="option selected focus">Medicine</li>
                                        <li data-value="1" class="option">Sergary</li>
                                        <li data-value="2" class="option">Casualty</li>
                                        <li data-value="3" class="option">Cardiology </li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="gender-radio d-flex align-content-center gap-3 mb-4 mx-3">
                            <p class="mb-0">Male</p>
                            <input class="mb-0" type="radio" name="gender" value="Male"> 

                            <p class="mb-0">Female</p>
                            <input class="mb-0"  type="radio" name="gender" value="Female">

                            <p class="mb-0">Others</p>
                            <input class="mb-0"  type="radio" name="gender" value="Other">
                            </div>
                            <input  type="email" placeholder="Your Email" name="email">
                            <textarea class="mb--15" name="medical_description" id="textarea" placeholder="Medical Information"></textarea>
                            
                            <button class="rts-btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                <iframe class="embed-map-frame" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&height=400&hl=en&q=PHYSIO%20MEET&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="100%" style="border-radius:0px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us area end -->
    @endsection