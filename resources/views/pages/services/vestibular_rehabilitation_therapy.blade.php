
@extends('layouts.site_layouts')
@section('content')

    <!-- rts breadcrumb area start -->
    <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Vestibular Rehabilitation Therapy</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Vestibular Rehabilitation Therapy</a>
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
                            <img src="{{asset('images/banner/vestibul_rehabilitation_therapy.png')}} " alt="service">
                        </div>
                        <h3 class="title mt--35">Regain Balance, Reduce Dizziness, and Improve Stability

                        </h3>

                        <h5>Benign Paroxysmal Positional Vertigo (BPPV)</h5>
                        <p class="disc mb--30">
                        Benign Paroxysmal Positional Vertigo (BPPV) treatment involves repositioning maneuvers, such as the Epley or Semont maneuver, to move displaced ear crystals back into their correct position. These techniques help alleviate dizziness and restore balance. Treatment is typically non-invasive and highly effective in managing symptoms.
                        </p>

                        <h5>Post-Concussion Balance Therapy</h5>
                        <p class="disc mb--30">Post-Concussion Balance Therapy focuses on restoring balance and coordination after a concussion. The therapy includes exercises to improve sensory integration, motor control, and cognitive function. It helps patients regain stability and reduce dizziness or imbalance following a concussion.</p>


                        <h5>Meniere’s Disease Management</h5>
                        <p class="disc mb--30">Meniere’s Disease management involves a combination of lifestyle changes, medication, and therapies to control symptoms like vertigo, hearing loss, and tinnitus. Treatment options may include a low-sodium diet, diuretics, vestibular rehabilitation, and in some cases, surgery. The goal is to reduce attacks and improve quality of life.</p>


                        <h5>Labyrinthitis & Vestibular Neuritis Rehab</h5>
                        <p class="disc mb--30">Labyrinthitis and Vestibular Neuritis rehab focuses on restoring balance and reducing dizziness caused by inner ear inflammation. Treatment includes vestibular exercises, balance training, and habituation techniques to improve the brain's adaptation to sensory disruptions. The goal is to promote recovery of the vestibular system and reduce symptoms.</p>


                        <h5>Post-Stroke Vestibular Training </h5>
                        <p class="disc mb--30">Post-Stroke Vestibular Training helps individuals recover balance and coordination after a stroke. The therapy focuses on exercises to retrain the brain's ability to process sensory information and improve spatial orientation. It aims to reduce dizziness, enhance stability, and support overall mobility and independence.</p>


                        <h5>Motion Sensitivity Therapy</h5>
                        <p class="disc mb--30">Motion Sensitivity Therapy targets reducing dizziness and discomfort caused by movement, such as in cases of motion sickness or vestibular disorders. It includes graded exposure to different motions and balance exercises to desensitize the brain to movement triggers. The goal is to improve tolerance and prevent symptoms from interfering with daily activities.</p>



                        <h5>Peripheral & Central Vestibular Disorder Rehab</h5>
                        <p class="disc mb--30">Peripheral and Central Vestibular Disorder Rehab focuses on restoring balance and reducing dizziness caused by dysfunction in the inner ear (peripheral) or the brain (central). Treatment includes vestibular exercises, gaze stabilization, and balance training to improve the brain’s ability to process sensory information. The aim is to enhance stability, reduce symptoms, and improve quality of life.</p>

                        <h5>Unilateral & Bilateral Vestibular Loss Rehabilitation </h5>
                        <p class="disc mb--30">Unilateral and Bilateral Vestibular Loss Rehabilitation aims to restore balance and compensate for the loss of vestibular function in one (unilateral) or both (bilateral) ears. The therapy includes exercises to improve gaze stabilization, postural control, and overall balance. It helps the brain adapt to the sensory changes, reducing dizziness and improving coordination and mobility.</p>


                        <h5>Gait & Fall Prevention Training</h5>
                        <p class="disc mb--30">Gait and Fall Prevention Training focuses on improving walking patterns and strengthening muscles to reduce the risk of falls. The program includes balance exercises, strength training, and mobility drills to enhance stability and coordination. The goal is to prevent falls, improve confidence in movement, and promote safe, independent walking.</p>



                        <h5>Virtual Reality-Based Vestibular Therapy </h5>
                        <p class="disc mb--30">Virtual Reality-Based Vestibular Therapy uses immersive VR technology to help patients with vestibular disorders retrain their balance and spatial orientation. It provides controlled, interactive exercises that simulate real-world movements and environments to improve dizziness, balance, and coordination. The therapy offers a dynamic and engaging approach to vestibular rehabilitation.</p>



                        <h5>Migraine-Associated Dizziness Management</h5>
                        <p class="disc mb--30">Migraine-Associated Dizziness Management focuses on reducing dizziness and vertigo linked to migraines. Treatment typically includes medications to manage migraines, vestibular rehabilitation exercises, and lifestyle modifications such as stress reduction and dietary changes. The goal is to alleviate symptoms and prevent the frequency of both migraines and associated dizziness.</p>


        
                    </div>
                   
                   
                   
                    <div class="service-details-mid-wrapper mt--60">
                        <img src="assets/images/cardiology/03.jpg" alt="service">
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
                        <a href="{{url('/neuro_rehabilitation')}}" class="single-department-service-wrapper">
                            <div class="left-side">
                               
                                <h4 class="title">Neuro Rehabilitation</h4>
                            </div>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="{{url('/fitness_program')}}" class="single-department-service-wrapper">
                            <div class="left-side">
                                
                                <h4 class="title">Fitness & Wellness Programs</h4>
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