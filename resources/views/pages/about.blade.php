@extends('layouts.site_layouts')
@section('content')


<!-- rts breadcrumb area start -->
<div class="rts-breadcrumb-area bg_image rts-section-gap">
    <div class="container ptb--40">
        <div class="row">
            <div class="breadcrumb-area-wrapper">
                <h1 class="title">About Us</h1>
                <div class="nav-bread-crumb">
                    <a href="/">Home</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <a href="#" class="current">About US</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts breadcrumb area end -->


<!-- rts about area start -->
<div class="rts-about-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s"
                    style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.4s; animation-name: fadeInUp;">
                    About PhysioMeet
                </h2>
                <div class="about-seven-left-content">
                    <p class="disc-large">
                        At Physio Meet, we redefine rehabilitation and fitness through science-backed exercise therapy.
                        Our brand stands for expert care, innovation, and personalized recovery solutions for
                        individuals with spinal cord injuries, stroke, and musculoskeletal conditions. We integrate
                        physiotherapy, advanced rehabilitation strategies, home-based therapy, and virtual consultations
                        to ensure accessibility and effectiveness. Whether rebuilding strength, restoring mobility, or
                        enhancing overall wellness, Physio Meet is where expertise meets recovery, and movement leads
                        to transformation.
                    </p>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="thumbnail-seven-about">
                    <img class="wow move-right img-fluid" src="{{asset('images/about-1.jpg')}}" alt="">
                    <div class="counter-up-area">
                        <div class="icon">
                            <img src="assets/images/about/05.svg" alt="">
                        </div>
                        <h3 class="title"><span class="countet">32+</span></h3>
                        <span>Winning Awards</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts about area end -->






<!-- why Team section start -->
<!-- <div class="team-style-wrapper bg-light  rts-section-gap ">
    <div class="container pb--40">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-between-area">
                    <div class="title-wrapper-left">
                        <span class="pre">Our Doctors</span>
                        <h2 class="title">
                            Discover Expert <br> Team Member
                        </h2>
                    </div>
                    <p class="disc">
                        our team of dedicated and highly skilled doctors is at the heart of our commitment to
                        providing exceptional medical care. Each member of our team brings a wealth of knowledge,
                        experience.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--30">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb_sm--50 mb_md--50 wow fadeInUp" data-wow-delay=".2s"
                data-wow-duration=".8s">
                <div class="single-team-area-start team-absolute-bottom">
                    <a href="doctor-details.html" class="thumbnail">
                        <img src="{{asset('images/ganapathi.png')}}" alt="team">
                    </a>
                    <div class="bottom">
                        <div class="social-area-tranaparent">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                            <h6 class="title">Dr. Ganapathi</h6>
                        </a>
                        <p>Physiotherapist | MPT (Neurology) <br> PhD (Scholar)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb_sm--50 mb_md--50 wow fadeInUp" data-wow-delay=".4s"
                data-wow-duration=".8s">
                <div class="single-team-area-start team-absolute-bottom">
                    <a href="doctor-details.html" class="thumbnail">
                        <img src="assets/images/team/02.jpg" alt="team">
                    </a>
                    <div class="bottom">
                        <div class="social-area-tranaparent">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                            <h6 class="title">Dr. Jessica Lee</h6>
                        </a>
                        <p>MBBS, MD - Oncologists</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb_sm--50 wow fadeInUp" data-wow-delay=".6s"
                data-wow-duration=".8s">
                <div class="single-team-area-start team-absolute-bottom">
                    <a href="doctor-details.html" class="thumbnail">
                        <img src="assets/images/team/03.jpg" alt="team">
                    </a>
                    <div class="bottom">
                        <div class="social-area-tranaparent">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                            <h6 class="title">Dr. Lisa Morgan</h6>
                        </a>
                        <p>MBBS, MD - Oncologists</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".8s" data-wow-duration=".8s">
                <div class="single-team-area-start team-absolute-bottom">
                    <a href="doctor-details.html" class="thumbnail">
                        <img src="assets/images/team/04.jpg" alt="team">
                    </a>
                    <div class="bottom">
                        <div class="social-area-tranaparent">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                            <h6 class="title">Dr. Emily Carter</h6>
                        </a>
                        <p>MBBS, MD - Oncologists</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- why Team section end -->

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
                                    What is Physio Meet?

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Physio Meet is a leading physiotherapy, rehabilitation, fitness, and wellness center
                                    dedicated to helping individuals recover from injuries, improve mobility, and
                                    achieve overall well-being. We offer specialized rehabilitation programs, fitness
                                    training, and virtual consultations to ensure holistic care.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Does Physio Meet accept insurance?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Many health insurance plans cover physiotherapy.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do I need an appointment to visit Physio Meet?

                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, appointments are recommended. Walk-ins may be accommodated based on
                                    availability.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What are Physio Meet’s specialized rehabilitation services?

                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We offer expert rehabilitation programs, including:

                                    Spinal Cord Injury Rehabilitation – Helping individuals regain mobility and function

                                    Stroke Recovery Program – Focused on movement retraining and independence

                                    Blood Flow Restriction (BFR) Training – Safe, low-intensity strength training for
                                    muscle recovery

                                    Vestibular Rehabilitation Therapy (VRT) – For balance disorders and dizziness

                                    Post-Surgical Rehabilitation – Recovery after joint replacements, ligament repairs,
                                    and spine surgery


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What fitness & wellness services does Physio Meet provide?

                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We integrate physiotherapy with wellness services, including:

                                    Personal Training & Strength Programs

                                    Yoga & Flexibility Training

                                    Posture Correction & Ergonomic Assessments

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



@endsection