
@extends('layouts.site_layouts')
@section('content')

    <!-- rts breadcrumb area start -->
    <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Neuro Rehabilitation</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Neuro Rehabilitation</a>
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
                            <img src="{{asset('images/banner/neuro_service_banner.png')}} " alt="service">
                        </div>
                        <h3 class="title mt--35">Neurological Rehabilitation Programs
                        </h3>

                        <h5>Stroke Recovery Training </h5>
                        <p class="disc mb--30">
                        Stroke Recovery Training in Neurological Rehabilitation Programs plays a critical role in helping individuals regain physical, cognitive, and emotional functions after a stroke. These programs are tailored to the unique needs of stroke survivors and are designed to promote neuroplasticity—the brain’s ability to reorganize and form new connections.
                        </p>

                        <h5>Spinal Cord Injury Rehab</h5>
                        <p class="disc mb--30">Spinal cord injury rehabilitation focuses on restoring mobility, strength, and independence through targeted physical and occupational therapy. It includes specialized medical management to address bowel, bladder, and respiratory functions, which are often affected by the injury. Psychological support is a key part of the process, helping individuals adapt to emotional and lifestyle changes. Additionally, the use of assistive technologies and caregiver training plays a crucial role in improving long-term quality of life and promoting community reintegration.</p>


                        <h5>Parkinson’s Disease Exercise Therapy</h5>
                        <p class="disc mb--30">Parkinson’s Disease Exercise Therapy is a vital part of managing symptoms and slowing disease progression. It focuses on improving balance, flexibility, strength, and overall mobility through structured physical activity. Regular exercise helps reduce stiffness, enhance coordination, and maintain independence in daily tasks. Additionally, it supports mental well-being by reducing anxiety and depression, while promoting neuroplasticity to preserve motor functions for longer.</p>


                        <h5> Multiple Sclerosis Fitness</h5>
                        <p class="disc mb--30">Multiple Sclerosis (MS) Fitness programs are designed to improve strength, endurance, and mobility while managing fatigue and other symptoms. Regular, moderate exercise helps maintain muscle function, balance, and flexibility, which are often affected by MS. It also supports cardiovascular health and mental well-being, reducing the impact of stress and depression. Customized fitness routines ensure safety and adapt to each individual's abilities and disease progression.</p>


                        <h5>Balance & Fall Prevention Training</h5>
                        <p class="disc mb--30">Balance and Fall Prevention Training is essential for reducing the risk of falls, especially in older adults and those with neurological or mobility impairments. This training focuses on strengthening core and lower body muscles, improving coordination, and enhancing postural stability. It often includes balance exercises, gait training, and environmental awareness techniques. Consistent practice not only boosts confidence but also promotes independence and safety in daily activities.</p>


                        <h5>Cerebral Palsy Therapy</h5>
                        <p class="disc mb--30">Cerebral Palsy Therapy aims to improve movement, posture, and functional abilities in individuals with cerebral palsy. It includes a combination of physical, occupational, and speech therapy tailored to each person's needs. These therapies help enhance motor skills, reduce muscle tightness, and support communication and daily living activities. Early intervention and consistent therapy play a crucial role in maximizing independence and quality of life.</p>



                        <h5>Traumatic Brain Injury (TBI) Rehabilitation</h5>
                        <p class="disc mb--30">Traumatic Brain Injury (TBI) Rehabilitation focuses on restoring physical, cognitive, and emotional functions affected by brain trauma. It involves a multidisciplinary approach, including physical therapy for mobility, occupational therapy for daily tasks, and cognitive therapy for memory and problem-solving. Psychological support is also crucial to manage behavioral changes and emotional challenges. The goal is to help individuals regain independence and reintegrate into their communities and daily lives.</p>

                        <h5>Peripheral Neuropathy Rehabilitation</h5>
                        <p class="disc mb--30">Peripheral Neuropathy Rehabilitation focuses on managing symptoms like pain, numbness, and weakness caused by nerve damage. Therapy includes physical exercises to improve strength, balance, and coordination, reducing the risk of falls. Occupational therapy helps patients adapt daily activities and use assistive devices effectively. Education on foot care, lifestyle changes, and pain management techniques also plays a vital role in enhancing overall function and quality of life.</p>


                        <h5>Dystonia Therapy </h5>
                        <p class="disc mb--30">Dystonia Therapy focuses on reducing involuntary muscle contractions and improving motor control. Treatment often includes physical and occupational therapy to enhance posture, flexibility, and coordination. Speech therapy may be needed for those with facial or vocal muscle involvement. In some cases, therapies are combined with medications or botulinum toxin injections to help manage symptoms effectively.</p>



                        <h5>Guillain-Barré Syndrome (GBS) Rehabilitation</h5>
                        <p class="disc mb--30">Guillain-Barré Syndrome (GBS) Rehabilitation aims to support recovery from nerve inflammation and muscle weakness caused by the syndrome. Therapy focuses on restoring strength, balance, and mobility through progressive physical therapy. Occupational therapy helps patients regain independence in daily tasks. Emotional support and gradual reconditioning are essential parts of long-term recovery.</p>
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