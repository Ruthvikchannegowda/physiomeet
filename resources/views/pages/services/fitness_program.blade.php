
@extends('layouts.site_layouts')
@section('content')

    <!-- rts breadcrumb area start -->
    <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Fitness & Wellness Programs</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Fitness & Wellness Programs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->


    <!-- service details area start -->
    <div class="service-details rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pr--40 pr_md--10 pr_sm--15">
                    <div class="service-details-left-wrapper">
                        <div class="thumbnail-large-service">
                            <img src="{{asset('images\banner\fitness_program.png')}} " alt="service">
                        </div>
                        <h3 class="title mt--35">Offering personalized and group fitness programs tailored to your health and wellness goals:
                        </h3>

                        <h5>Diabetic Fitness</h5>
                        <p class="disc mb--30">
                        Diabetic Fitness involves a tailored exercise program to help individuals with diabetes manage blood sugar levels, improve cardiovascular health, and enhance overall well-being. It includes aerobic exercises, strength training, and flexibility routines. The goal is to control blood glucose, prevent complications, and improve overall fitness and quality of life.
                        </p>

                        <h5>Obesity Management</h5>
                        <p class="disc mb--30">Obesity Management involves a comprehensive approach to weight loss, combining dietary changes, physical activity, and behavioral therapy. It focuses on creating sustainable habits to reduce body fat, improve metabolic health, and prevent related conditions like diabetes and heart disease. The goal is to achieve and maintain a healthy weight for long-term health benefits.</p>


                        <h5>Hypertension Management</h5>
                        <p class="disc mb--30">Hypertension Management focuses on controlling high blood pressure through lifestyle changes, medication, and regular monitoring. Key strategies include a balanced diet, regular exercise, stress reduction, and avoiding excessive salt intake. The goal is to lower blood pressure to safe levels, reducing the risk of heart disease, stroke, and other complications.</p>


                        <h5>Senior Fitness</h5>
                        <p class="disc mb--30">Senior Fitness focuses on exercises that improve strength, balance, flexibility, and cardiovascular health for older adults. It includes low-impact activities tailored to individual abilities to enhance mobility, prevent falls, and promote independence. The goal is to maintain or improve quality of life and overall health as individuals age.</p>


                        <h5>Stress Managemen</h5>
                        <p class="disc mb--30">Stress Management involves techniques and strategies to reduce and cope with stress effectively. It includes practices such as mindfulness, deep breathing exercises, regular physical activity, and time management. The goal is to improve mental well-being, enhance resilience, and prevent stress-related health issues</p>


                        <h5>Flexibility & Mobility Training</h5>
                        <p class="disc mb--30">Flexibility and Mobility Training focuses on improving the range of motion in muscles and joints to enhance overall movement and prevent injury. It includes stretching exercises, dynamic movements, and mobility drills to increase flexibility, joint function, and posture. The goal is to improve movement efficiency, reduce stiffness, and promote better functional performance.</p>



                        <h5>Sports Performance Training</h5>
                        <p class="disc mb--30">Sports Performance Training focuses on enhancing an athlete's strength, speed, agility, endurance, and overall physical performance. It includes sport-specific drills, strength conditioning, and injury prevention techniques tailored to the athlete’s goals. The goal is to optimize athletic abilities, improve performance, and reduce the risk of injury during competition.</p>

                        <h5>Prenatal & Postnatal Fitness</h5>
                        <p class="disc mb--30">Prenatal and Postnatal Fitness focuses on exercises designed to support a healthy pregnancy and recovery after childbirth. Prenatal exercises help maintain strength, flexibility, and reduce discomfort during pregnancy, while postnatal fitness promotes recovery, strengthens the pelvic floor, and improves overall stamina after delivery. The goal is to support the mother’s health, enhance well-being, and prepare for safe childbirth and recovery.</p>


                        <h5>Corporate Wellness Programs</h5>
                        <p class="disc mb--30">Corporate Wellness Programs focus on promoting health and well-being among employees through a variety of fitness, nutrition, and stress management initiatives. These programs may include fitness challenges, health screenings, ergonomic assessments, and mental wellness support. The goal is to improve employee health, reduce absenteeism, boost productivity, and foster a positive work environment.</p>



                        <h5>Children & Youth Fitness</h5>
                        <p class="disc mb--30">Children & Youth Fitness focuses on physical activities that promote strength, coordination, and overall health in children and adolescents. It includes age-appropriate exercises, games, and sports to improve cardiovascular health, flexibility, and motor skills. The goal is to encourage healthy habits, boost self-confidence, and set a foundation for lifelong physical activity.</p>



                        <h5>Injury Prevention Programs</h5>
                        <p class="disc mb--30">Injury Prevention Programs focus on reducing the risk of injuries through targeted exercises, proper technique, and education. These programs include strength training, flexibility exercises, and balance drills, along with advice on posture and ergonomics. The goal is to enhance physical performance while minimizing the likelihood of strains, sprains, and other injuries.</p>

                    </div>
                   
                    
                </div>
                <div class="col-lg-3">
                    <div class="single-rightsidebar-single">
                        <h2 class="title">
                            All Service
                        </h2>
                        <a href="{{url('/pediatric_rehabilitation')}}" class="single-department-service-wrapper">
                            <div class="left-side">
                                <h4 class="title">Pediatric Rehabilitation</h4>
                            </div>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="{{url('/orthopedic')}}" class="single-department-service-wrapper">
                            <div class="left-side">
                               
                                <h4 class="title"> Orthopedic & Pain Management</h4>
                            </div>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="{{url('/cardio_pulmonary_rehabilitation')}}" class="single-department-service-wrapper">
                            <div class="left-side">
                               
                                <h4 class="title">Cardio-Pulmonary Rehabilitation</h4>
                            </div>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="{{url('/vestibular_rehabilitation_therapy')}}" class="single-department-service-wrapper">
                            <div class="left-side">
                               
                                <h4 class="title">Vestibular Rehabilitation Therapy</h4>
                            </div>
                           <i class="fa-solid fa-arrow-right"></i>
                        </a>
                         <a href="{{url('/neuro_rehabilitation')}}" class="single-department-service-wrapper">
                            <div class="left-side">
                               
                                <h4 class="title">Neuro Rehabilitation</h4>
                            </div>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <!-- <a href="#" class="single-department-service-wrapper">
                            <div class="left-side">
                               
                                <h4 class="title">Service Name</h4>
                            </div>
                           <i class="fa-solid fa-arrow-right"></i>
                        </a> -->
                        <!-- <a href="#" class="single-department-service-wrapper">
                            <div class="left-side">
                               
                                <h4 class="title">Service Name</h4>
                            </div>
                           <i class="fa-solid fa-arrow-right"></i>
                        </a> -->
                    </div>
                    <div class="single-rightsidebar-single">
                        <div class="doctor-title-table">
                            <div class="top">
                                <h5 class="title">Doctor TimeTable</h5>
                                <p class="disc">
                                    doctor's timetable, or schedule, is an organized plan detailing when a physician
                                    will be available.
                                </p>
                                <a href="#" class="rts-btn btn-primary btn-border">View Details</a>
                                <img class="move-down" src="assets/images/service/icon/11.png" alt="">
                            </div>
                            <!-- <div class="bottom">
                                <h5 class="title">
                                    Doctor TimeTable
                                </h5>
                                <div class="single-table pt--0">
                                    <span>Monday - Friday</span>
                                    <span>8:00 - 4:00</span>
                                </div>
                                <div class="single-table">
                                    <span>Monday - Friday</span>
                                    <span>8:00 - 4:00</span>
                                </div>
                                <div class="single-table">
                                    <span>Monday - Friday</span>
                                    <span>8:00 - 4:00</span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                     <div class="single-rightsidebar-single">
                        <div class="thumbnail-image-right-cardio">
                            <img src=" {{asset('images/banner/side_banner.png')}}" alt="service">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- service details area end -->


    <div class="request-appoinment-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="request-appoinemnt-area-main-wrapper bg_image rts-section-gap">
                        <span class="pre">Book Appointment</span>
                        <h2 class="title">
                            Request Your <br>
                            <span>Appointment</span>
                        </h2>
                        <a href="#" class="rts-btn btn-primary">Get Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection