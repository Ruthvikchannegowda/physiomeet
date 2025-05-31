@extends('layouts.site_layouts')
@section('content')

<!-- <section class="hero-banner">
    <div class="container rts-section-gap">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="fs-85">Restoring Mobility,<br> Renewing Life</h1>
                <p>At Physio Meet, we redefine rehabilitation and fitness through science-backed exercise therapy Our
                    brand stands for expert care, innovation, and personalized recovery solutions.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img  src="{{asset('images\icons\calendar.png')}}" alt="">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4>Consultation</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="main-cont">
                            <div class="icon">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="main-cont">
                            <div class="icon">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="main-cont">
                            <div class="icon">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<div class="banner-area-start">
    <div class="container-full-header">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-area-one rts-section-gap bg_image">
                    <div class="banner-content-area">
                        <div class="pre-title wow fadeInUp" data-wow-delay=".0s" data-wow-duration=".8s">
                            <img src="{{asset('images/icons/pulse.svg')}}" alt="icons">
                            <span>Personalized Care for Pain-Free Living</span>
                        </div>
                        <h1 class="title wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">Meet to get treated
                            with excercise</h1>
                        <p class="disc wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                            At Physio Meet, we redefine rehabilitation and fitness through science-backed exercise
                            therapy. Our brand stands for expert care, innovation, and personalized recovery solutions.
                        </p>
                        <!-- <div class="select-area-down wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                            <form action="#" method="get" accept-charset="utf-8">
                                <select name="my_select" class="mySelect">
                                    <option value="2" selected>Select Department</option>
                                    <option value="10">Medicle</option>
                                    <option value="1">Surgery</option>
                                    <option value="13">Neurosugery</option>
                                </select>
                            </form>
                            <form class="select-2" action="#" method="get" accept-charset="utf-8">
                                <select name="my_select2" class="my_select2">
                                    <option value="2" selected>Select Doctor</option>
                                    <option value="10">Mr.Mark</option>
                                    <option value="1">Mrs. Sajjat</option>
                                    <option value="13">John Dion</option>
                                </select>
                            </form>
                            <a href="#" class="rts-btn btn-primary">Find Doctors</a>
                        </div> -->
                        <a href="{{url('/appointment')}}" class="rts-btn btn-primary">Get Appointment <img src="{{asset('images/icons/arrow.svg')}}" alt=""></a>
                    </div>
                    <!-- person image -->
                    <div class="person-image">
                        <img src="{{asset('images/banner-ganapathi.png')}}" alt="heart">
                        <div class="single-tag wow zoomIn" data-wow-delay=".2s" data-wow-duration=".8s">
                        
                            <img style="width:40px;" src="{{asset('images/icons/reahab.png')}}" alt="heart">
                            <span>Rehab</span>
                        </div>
                        <div class="single-tag two wow zoomIn" data-wow-delay=".4s" data-wow-duration=".8s">
                            <img style="width:40px;"  src="{{asset('images/icons/relief.png')}}" alt="heart">
                            <span>Pain Relief</span>
                        </div>
                        <div class="single-tag three wow zoomIn" data-wow-delay=".6s" data-wow-duration=".8s">
                            <img style="width:40px;" src="{{asset('images/icons/mobility-aids.png')}}" alt="heart">
                            <span>Mobility</span>
                        </div>
                    </div>
                    <!-- person image -->
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <div class="calendly-inline-widget" data-url="https://calendly.com/physiomeet001/30min?hide_gdpr_banner=1&primary_color=f58420" style="min-width:320px;height:700px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script> -->

<!-- short service -->
<div class="short-service-area rts-section-gap2">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay=".2s"
                data-wow-duration=".8s">
                <a href="appoinment.html" class="single-short-service">
                    <div class="icon">
                        <img src="{{asset('images/icons/schedule.png')}}" alt="service">
                    </div>
                    <h5 class="title">
                        Request <br> Appointment
                    </h5>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay=".4s"
                data-wow-duration=".8s">
                <a href="doctors-one.html" class="single-short-service">
                    <div class="icon">
                        <img src="{{asset('images/icons/physio.png')}}" alt="service">
                    </div>
                    <h5 class="title">
                        Find <br>
                        Physiotherapist
                    </h5>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay=".6s"
                data-wow-duration=".8s">
                <a href="tel:+4733378901" class="single-short-service">
                    <div class="icon">
                        <img src="{{asset('images/icons/online.png')}}" alt="service">
                    </div>
                    <h5 class="title">
                    Virtual Physio <br>
                    Consultation
                    </h5>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay=".8s"
                data-wow-duration=".8s">
                <a href="contactus.html" class="single-short-service">
                    <div class="icon">
                        <img src="{{asset('images/icons/24-hours-support.png')}}" alt="service">
                    </div>
                    <h5 class="title">
                        24/7 <br>
                        Support
                    </h5>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- short service end -->



<!-- rs about area start -->
<div class="rts-about-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-image-left-wrapper">
                    <div class="thumbnail-main move-right wow">
                        <img src="{{asset('images\grp-of-physio.png')}}" alt="about">
                    </div>
                    <div class="review-area">
                        <img src="assets/images/about/02.jpg" alt="">
                        <div class="stars-area">
                            <div class="wrapper">
                                <div class="single">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                                <div class="single">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                                <div class="single">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                                <div class="single">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                                <div class="single">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="content">
                                <span>TrustScore 4.8</span> |
                                <span>2k reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 mt--30">
                <div class="about-content-wrapper-right">
                    <div class="title-wrapper-left">
                        <span class="pre wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">About Us</span>
                        <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                            Providing Exceptional <br> Physiotheripy with a focus <br> on patient.
                        </h2>
                    </div>
                    <p class="disc wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                        At Physio Meet, we redefine rehabilitation and fitness through science-backed exercise therapy.
                        Our brand stands for expert care, innovation, and personalized recovery solutions for
                        individuals with spinal cord injuries, stroke, and musculoskeletal conditions.
                    </p>
                    <div class="button-wrapper wow fadeInUp" data-wow-delay=".8s" data-wow-duration=".8s">
                        <a href="about.html" class="rts-btn btn-primary">Read More <img
                                src="assets/images/banner/icons/arrow--up-right.svg" alt=""></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rs about area end -->



<!-- srvice area start -->
<div class="service-area position-relative rts-section-gapBottom">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6">
                <div class="title-wrapper-left">
                    <span class="pre wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">Our Services</span>
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                        we provide a wide <br> range of  <br> services
                    </h2>
                    <p class="disc wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                        Our experienced and dedicated teams are committed to providing comprehensive
                        patient-centered care to meet your unique health needs.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">
                <div class="single-service-area">
                    <h4 class="title">Neuro Rehabilitation</h4>
                    <p class="disc">
                        Specialized rehabilitation programs for stroke, spinal cord injury, traumatic brain injury and
                        other neurological conditions.
                    </p>
                    <a href="{{url('/neuro_rehabilitation')}}" class="btn-transparent">Learn More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                <div class="single-service-area">
                   
                    <h4 class="title"> Pediatric Physiotherapy</h4>
                    <p class="disc">
                        Comprehensive care for children with developmental delays, cerebral palsy, and musculoskeletal
                        disorders.
                    </p>
                    <a href="{{url('/pediatric_rehabilitation')}}" class="btn-transparent">Learn More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">
                <div class="single-service-area">
                    
                    <h4 class="title">Orthopedic & Pain Management</h4>
                    <p class="disc">
                        Effective treatment for musculoskeletal conditions, post-surgical recovery, and chronic pain.
                    </p>
                    <a href="{{url('/orthopedic')}}" class="btn-transparent">Learn More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                <div class="single-service-area">
                   
                    <h4 class="title"> Cardio-Pulmonary Rehabilitation</h4>
                    <p class="disc">
                        Tailored programs to enhance heart and lung function for individuals recovering from cardiac
                        conditions.
                    </p>
                    <a href="{{url('/cardio_pulmonary_rehabilitation')}}" class="btn-transparent">Learn More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                <div class="single-service-area">
                   
                    <h4 class="title">Vestibular Rehabilitation Therapy</h4>
                    <p class="disc">
                        Specialized therapy for balance disorders, dizziness, and vertigo. exercises help retrain the
                        brain .
                    </p>
                    <a href="{{url('/vestibular_rehabilitation_therapy')}}" class="btn-transparent">Learn More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s" data-wow-duration=".8s">
                <div class="single-service-area">
                   
                    <h4 class="title">Fitness & Wellness Programs</h4>
                    <p class="disc">
                        Personalized fitness training, yoga, and weight management programs for all age groups.
                    </p>
                    <a href="{{url('/fitness_program')}}" class="btn-transparent">Learn More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </div>
   
</div>
<!-- srvice area end -->



<!-- why choose us section start -->
<div class="why-choose-us-area">
    <div class="container-80">
        <div class="row">
            <div class="col-lg-12">
                <div class="why-choose-area-wrapper bg-light  rts-section-gap ">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-xl-5 col-lg-6 mb_md--80 mb_sm--60">
                                <div class="why-choose-us-area-wrapper-main">
                                    <div class="title-wrapper-left">
                                        <span class="pre wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">Why
                                            Choose Us</span>
                                        <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                                            Why Our Patients Recommend Us
                                        </h2>
                                        <p class="disc wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                                            Our patients have regained mobility with us.
                                        </p>
                                    </div>
                                    <div class="why-choose-us-main-wrapper">
                                        <div class="single-choose-us wow fadeInLeft" data-wow-delay=".2s"
                                            data-wow-duration=".8s">
                                            <div class="icon">
                                                <img src="{{asset('images/icons/people.png')}}" alt="service">
                                            </div>
                                            <div class="info">
                                                <h6 class="title">Expert Care</h6>
                                                <p>Our skilled physiotherapists provide personalized treatment.</p>
                                            </div>
                                        </div>
                                        <div class="single-choose-us wow fadeInLeft" data-wow-delay=".4s"
                                            data-wow-duration=".8s">
                                            <div class="icon">
                                                <img src="{{asset('images/icons/fast.png')}}" alt="service">
                                            </div>
                                            <div class="info">
                                                <h6 class="title">Fast Recovery</h6>
                                                <p>We help you heal and regain strength quickly</p>
                                            </div>
                                        </div>
                                        <div class="single-choose-us wow fadeInLeft" data-wow-delay=".6s"
                                            data-wow-duration=".8s">
                                            <div class="icon">
                                                <img src="{{asset('images/icons/rele.png')}}" alt="service">
                                            </div>
                                            <div class="info">
                                                <h6 class="title">Pain Relief </h6>
                                                <p>Proven techniques to reduce pain and discomfort</p>
                                            </div>
                                        </div>
                                        <div class="single-choose-us wow fadeInLeft" data-wow-delay=".8s"
                                            data-wow-duration=".8s">
                                            <div class="icon">
                                                <img src="{{asset('images/icons/medical.png')}}" alt="service">
                                            </div>
                                            <div class="info">
                                                <h6 class="title">Modern Techniques</h6>
                                                <p>We use the latest physiotherapy methods for the best results.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 offset-xl-1">
                                <div class="right-whychoose-us-style-one">
                                    <div class="feature-bg-primary">
                                        <img src="{{asset('images/banner/why-choose-us.png')}}" alt="medicle">
                                    </div>
                                    <div class="thumbnail-image">
                                        <img src="{{asset('images/phusio-1.png')}}" alt="medicle">
                                    </div>
                                    <div class="inner-content">
                                        <div class="top">
                                            <h3 class="title">Hello!</h3>
                                            <div class="time-shedule">
                                                <img src="{{asset('images/logo/time.svg')}}" alt="medicle">
                                                <span>24/7</span>
                                            </div>
                                        </div>
                                        <div class="call-us">
                                           <i class="fa-solid fa-phone-volume" style="color: #ffffff;"></i>
                                            <span>+91 8667067509</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- why choose us section end -->


<!-- book your consulting -->
<div class="book-your-consulting rts-section-gap">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="appoinment-area-main bg_image">

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

                    <h2 class="title">Book your Free Consulting</h2>
                    <form action="{{ url('bookConsultant') }}" method="POST">
                        @csrf
                        <div class="half-input-wrapper">
                            <input type="text" placeholder="Patient name" name="full_name">
                            <input type="text" placeholder="Phone Number" name="phone_number">
                        </div>
                        <!-- <div class="search-input">
                            <select class="">
                                <option data-display="Select Department">Doctor Department</option>
                                <option value="1">Medicine</option>
                                <option value="2">Cardiology</option>
                                <option value="3">Operation</option>
                            </select>
                            <div class="nice-select custom-select one" style="flex-basis: 50%;" tabindex="0">
                                <span class="current">Select Department</span>
                                <ul class="list">
                                    <li data-value="Morning 10 AM" data-display="Morning 10 AM"
                                        class="option selected focus">Medicine</li>
                                    <li data-value="1" class="option">Sergary</li>
                                    <li data-value="2" class="option">Casualty</li>
                                    <li data-value="3" class="option">Cardiology </li>
                                </ul>
                            </div>
                        </div> -->

                        <!-- <div class="search-input">
                            <select class="">
                                <option data-display="Select Time">Doctor Department</option>
                                <option value="1">Medicine</option>
                                <option value="2">Cardiology</option>
                                <option value="3">Operation</option>
                            </select>
                            <div class="nice-select custom-select one" style="flex-basis: 50%;" tabindex="0">
                                <span class="current">Select Doctor</span>
                                <ul class="list">
                                    <li data-value="Morning 10 AM" data-display="Morning 10 AM"
                                        class="option selected focus">Mr. Kadir</li>
                                    <li data-value="1" class="option">David John Lee</li>
                                    <li data-value="2" class="option">Mark John</li>
                                    <li data-value="3" class="option">Kapoor Sharma</li>
                                </ul>
                            </div>
                        </div> -->
                        <input type="email" placeholder="Your Email" name="email">
                      <lable class="text-white ms-3">Male</lable>
                          <input type="radio" class="mt-3" name="gender" value="Male"> 
                          <lable class="ms-3 text-white">Female</lable>
                            <input type="radio" class="mt-3"  name="gender" value="Female"> 
                            <lable class="ms-3 text-white">Others</lable>
                             <input type="radio" class="mt-3"  name="gender" value="Others">
                               
                       <textarea class="form-control mb-4 medical-info px-3 py-3" id="exampleFormControlTextarea1" placeholder="Medical Information" rows="6" name="medical_information"></textarea>
                            
                       
                        <button href="#" class="rts-btn btn-primary">Appoinment <img
                                src="assets/images/banner/icons/arrow--up-right.svg" alt=""></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="thumbnail-appoinment wow move-right">
                    <img src="{{asset('images/physio-2.jpg')}}" alt="appoinment">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- book your consulting end -->

<!-- rts faq area start -->
<div class="rts-faq-area rts-section-gap bg-light">
    <div class="container">
        <div class="row">
            <div class="col-gl-12">
                <div class="container-wrapper-faq">
                    <div class="title-six-center">
                        <h2 class="title">
                            Frequently asked questions
                        </h2>
                    </div>
                    <div class="accordion mt--60" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is physiotherapy?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Physiotherapy is a healthcare profession that helps individuals restore, maintain, and improve physical function and mobility through exercises, manual therapy, education, and other techniques.s
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Who can benefit from physiotherapy?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Physiotherapy benefits people with musculoskeletal injuries, neurological conditions, post-surgical rehabilitation needs, sports injuries, chronic pain, and mobility issues due to aging or medical conditions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do I need a doctor's referral for physiotherapy?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                In most cases, you do not need a referral to see a physiotherapist. However, some insurance providers or healthcare systems may require one.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What can I expect during my first physiotherapy session?

                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                The physiotherapist will assess your medical history, physical condition, movement, strength, and pain levels. Based on the evaluation, they will create a personalized treatment plan.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How long does a physiotherapy session last?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                A session typically lasts between 30 to 60 minutes, depending on the treatment required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts faq area end -->

<!-- request appoinment area start -->
<div class="request-appoinment-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="request-appoinemnt-area-main-wrapper bg_image rts-section-gap">
                    <span class="pre">Book Appointment</span>
                    <h2 class="title">
                        Request Your <br>
                        <span>Appointment</span>
                    </h2>
                    <a href="{{url('/appointment')}}" class="rts-btn btn-primary">Get Appointment</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- request appoinment area end -->

@endsection