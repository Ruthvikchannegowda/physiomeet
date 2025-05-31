
@extends('layouts.site_layouts')
@section('content')

    <!-- rts breadcrumb area start -->
    <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Pediatric Rehabilitation</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Pediatric Rehabilitation</a>
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
                            <img src="{{asset('images/banner/pediatric_rehabilitation.png')}} " alt="service">
                        </div>
                        <h3 class="title mt--35">Empowering Children to Move, Play & Thrive
                        </h3>

                        <h5>Cerebral Palsy Therapy </h5>
                        <p class="disc mb--30">
                        Cerebral Palsy Therapy is centered on improving motor function, posture, and independence in individuals with cerebral palsy. It involves a multidisciplinary approach, including physical therapy to enhance mobility and muscle strength, occupational therapy to develop daily living skills, and speech therapy for communication and swallowing issues. Early and consistent intervention is crucial to maximize developmental potential and improve quality of life. Assistive devices and customized treatment plans further support long-term functional gains.
                        </p>

                        <h5>Spina Bifida Rehabilitation</h5>
                        <p class="disc mb--30">Spina Bifida Rehabilitation focuses on improving mobility, independence, and overall quality of life for individuals with spina bifida. The rehabilitation process includes physical therapy to strengthen muscles, improve balance, and enhance coordination. Occupational therapy helps with daily activities and fine motor skills, while speech therapy addresses any communication or swallowing issues. Additionally, bladder and bowel training, along with psychological support, are essential components. Early intervention, combined with the use of assistive devices, plays a crucial role in promoting independence and preventing complications.</p>


                        <h5>Muscular Dystrophy Therapy</h5>
                        <p class="disc mb--30">Muscular Dystrophy Therapy aims to slow the progression of muscle weakness, improve mobility, and maintain function for as long as possible. Physical therapy focuses on strengthening muscles, increasing flexibility, and preventing contractures. Occupational therapy helps individuals maintain independence in daily tasks by adapting environments and using assistive devices. Speech therapy may be used if swallowing or speech is affected. Although there is no cure, therapies are tailored to each individual's needs, helping to manage symptoms and improve quality of life.</p>


                        <h5>Autism & Sensory Integration Therapy</h5>
                        <p class="disc mb--30">Autism & Sensory Integration Therapy focuses on helping individuals with autism spectrum disorder (ASD) manage sensory processing challenges and improve overall functioning. Sensory integration therapy aims to help individuals better respond to sensory stimuli, such as sound, light, touch, and movement, which may be overwhelming or underwhelming for them. This therapy involves structured activities designed to improve sensory processing, motor skills, and coordination. It also supports emotional regulation, communication skills, and daily living tasks, fostering greater independence and social interaction.</p>


                        <h5>Developmental Delay Training </h5>
                        <p class="disc mb--30">Developmental Delay Training focuses on supporting children who experience delays in reaching developmental milestones, such as motor skills, language, and cognitive abilities. Therapy typically involves a combination of physical, occupational, and speech therapy to promote movement, coordination, and communication skills. Early intervention is key, as it helps address delays and provides the tools needed for improvement in daily activities and learning. The goal is to help the child develop to their full potential and support them in achieving greater independence and confidence.</p>


                        <h5>Post-Fracture & Surgery Rehab </h5>
                        <p class="disc mb--30">Post-Fracture & Surgery Rehabilitation focuses on restoring function, mobility, and strength after a bone fracture or surgical procedure. The rehabilitation process typically includes physical therapy to improve joint range of motion, strength, and balance, as well as to reduce pain and swelling. Occupational therapy may be incorporated to help with daily activities and fine motor skills, depending on the injury. Gradual weight-bearing exercises and stretching are used to help rebuild strength and prevent stiffness. The goal is to promote healing, prevent complications, and help the individual return to normal activities safely and effectively.</p>



                        <h5>Juvenile Arthritis Therapy </h5>
                        <p class="disc mb--30">Juvenile Arthritis Therapy aims to manage pain, improve joint function, and enhance the quality of life for children with arthritis. Treatment typically involves a combination of physical therapy to maintain joint mobility and strength, as well as occupational therapy to assist with daily activities and adaptive techniques. Medication may be prescribed to control inflammation and prevent joint damage. Additionally, therapeutic exercises, splints, and regular monitoring help manage symptoms and promote overall growth and development, ensuring that the child can maintain an active and independent lifestyle.</p>

                        <h5>Clubfoot & Scoliosis Management</h5>
                        <p class="disc mb--30"> focuses on addressing the physical deformities and improving function through a combination of medical and therapeutic interventions.</p>


                        <h5>Post-Amputation Training </h5>
                        <p class="disc mb--30">Post-Amputation Training focuses on helping individuals adapt to life after losing a limb, with a goal of restoring independence, mobility, and function. Rehabilitation includes physical therapy to strengthen the remaining muscles, improve balance, and prepare the body for the use of prosthetics. Occupational therapy helps with daily activities and the proper use of adaptive devices. </p>



                        <h5>Pediatric Pulmonary Therapy</h5>
                        <p class="disc mb--30">Pediatric Pulmonary Therapy focuses on managing and improving respiratory health in children with chronic lung conditions such as asthma, cystic fibrosis, or bronchopulmonary dysplasia. The therapy includes breathing exercises, airway clearance techniques, and physical activities to enhance lung function and endurance. It also involves educating both the child and their family on managing symptoms, medication use, and recognizing triggers</p>



                        <h5>Congenital Heart Disease Rehab</h5>
                        <p class="disc mb--30">Supervised endurance and strength training to support heart health.</p>


                        
                        <h5>Gait & Postural Training</h5>
                        <p class="disc mb--30"> Targeted exercises for improved walking, posture, and balance.
                        </p>

                        <h5>Adaptive Sports & Recreational Therapy</h5>
                        <p class="disc mb--30">  Engaging activities to promote movement, fitness, and confidence.
                        </p>

                        <h5>Balance & Coordination Training</h5>
                        <p class="disc mb--30">Stability-focused routines to enhance motor skills and prevent falls.

                        </p>
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
                        <a href="{{url('/neuro_rehabilitation')}}" class="single-department-service-wrapper">
                            <div class="left-side">
                                <h4 class="title">Neuro Rehabilitation</h4>
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