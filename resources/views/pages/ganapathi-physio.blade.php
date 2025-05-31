@extends('layouts.site_layouts')
 @section('content')

<!-- rts breadcrumb area start -->
<div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Our Physiotherapist</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Our Physiotherapist</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->



     <!-- rts doctors details area start -->
     <div class="rts-doctors-details-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="large-doctor-details-area-left">
                        <div class="large-team-details-thumbnail">
                            <img src="{{asset('images/ganapathi_profile.jpg')}}" alt="team">
                        </div>
                        <div class="bottom-doctor-details">
                            <div class="inner flipInY wow">
                                <h5 class="title">Doctor TimeTable</h5>
                                <div class="single-shedule">
                                    <p>Monday - Friday</p>
                                    <span>9:00Am - 10:00Pm</span>
                                </div>
                                <div class="single-shedule">
                                    <p>Saturday</p>
                                    <span>-</span>
                                </div>
                                <!-- <div class="single-shedule">
                                    <p>Monday</p>
                                    <span>8:00 - 4:00</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl--40 pl_md--10 pl_sm--15">
                    <div class="doctor-all-details-area">
                        <span class="pre-title">About Physiotheripist</span>
                        <h3 class="name wow move-right">Dr. Ganapathi P (PT)</h3>
                        <p><b>Specialty:</b>Physiotherapist | MPT (Neurology) | PhD (Scholar)</p>
                        <div class="follow-me-social-area">
                            <span>Follow me -</span>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="details-conetnt-here mt--90 mt_md--50 mt_sm--40">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-details-content-info">
                                    <h4 class="title">Expertise & Experience</h4>
                                    <div class="inner flipInY wow">
                                        <p> Neuro Rehabilitation</p>
                                        <p>Cardiac - Pulmonary Rehabilitation</p>
                                        <P>Pediatric Rehabilitation</P>
                                        <P>Pain Management</P>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-details-content-info">
                                    <h4 class="title">Fitness Certifications:</h4>
                                    <div class="inner flipInY wow">
                                        <p>Certified Aerobics Instructor</p>
                                        <p>Pilates Instructor Training</p>
                                        <p>Pre & Post Natal Fitness Training</p>
                                        <p>Diet & Nutrition for Fitness</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-details-content-info">
                                    <h4 class="title">Special Skills</h4>
                                    <div class="inner flipInY wow">
                                        <p>Muscle Energy Technique (MET)</p>
                                        <p>Sensory Integration</p>
                                        <p>Neurodevelopmental Therapy (NDT)</p>
                                        <p>Electrotherapy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-details-content-info">
                                    <h4 class="title">Recognition</h4>
                                    <div class="inner flipInY wow">
                                        <p>Member of the Indian Association of Physiotherapy (IAP)</p>
                                        <p>Registration No: L - 56995</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-details-content-info">
                                    <h4 class="title">Cartification:</h4>
                                    <div class="inner flipInY wow">
                                        <p>Expart and 10+ years of experience of Sergery</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-details-content-info">
                                    <h4 class="title">Pro. Affiliations:</h4>
                                    <div class="inner flipInY wow">
                                        <p>AC of Physicians </p>
                                        <p>*Cardiac Imaging</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-details-content-info">
                                    <h4 class="title">Medicle Cartification:</h4>
                                    <div class="inner flipInY wow">
                                        <p>Doctor of Medicine (MD)</p>
                                        <p>Doctor of Osteopathic Medicine</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-details-content-info">
                                    <h4 class="title">Education</h4>
                                    <div class="inner flipInY wow">
                                        <p>Certification in Internal Medicine</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-details-content-info">
                                    <h4 class="title">Awards & Recognition:</h4>
                                    <div class="inner flipInY wow">
                                        <p>Top Internist Award </p>
                                        <p>Patient Choice Award</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts doctors details area end -->


 @endsection