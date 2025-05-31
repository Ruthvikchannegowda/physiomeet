
@extends('layouts.site_layouts')
@section('content')

    <!-- rts breadcrumb area start -->
    <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Cardio-Pulmonary Rehabilitation</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Cardio-Pulmonary Rehabilitation</a>
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
                            <img src="{{asset('images/banner/cardiac_rehabilitation.png')}} " alt="service">
                        </div>
                        <h3 class="title mt--35">Heart & Lung Health Programs for Strength, Endurance & Better Breathing
                        </h3>

                        <h5>Post-Heart Attack Recovery</h5>
                        <p class="disc mb--30">
                        Post-Heart Attack Recovery focuses on helping individuals regain strength, improve cardiovascular health, and reduce the risk of future heart events. The recovery process typically includes a combination of monitored physical activity through cardiac rehabilitation, which includes aerobic exercises, strength training, and flexibility work. Lifestyle modifications, such as a heart-healthy diet and stress management techniques, are integral. Education on medication adherence and risk factor management (like controlling blood pressure, cholesterol, and blood sugar) is key. The goal is to restore physical function, enhance emotional well-being, and improve overall heart health.

                        </p>

                        <h5>Heart Failure Management</h5>
                        <p class="disc mb--30">Heart Failure Management focuses on improving heart function, relieving symptoms, and enhancing the quality of life for individuals with heart failure. Treatment typically includes medications to control fluid buildup, reduce blood pressure, and improve heart function. Cardiac rehabilitation programs incorporate physical activity, dietary changes, and lifestyle modifications to strengthen the heart and prevent further complications. Regular monitoring of weight, fluid levels, and activity levels is essential to prevent exacerbations. The goal is to manage symptoms, prevent hospitalizations, and improve overall cardiovascular health.</p>


                        <h5>Post-Cardiac Surgery Rehabilitation</h5>
                        <p class="disc mb--30">Post-Cardiac Surgery Rehabilitation focuses on restoring strength, improving heart function, and enhancing recovery after surgery. The rehabilitation process typically includes supervised physical therapy to improve cardiovascular fitness, strength, and mobility. Breathing exercises may be incorporated to support lung function and reduce complications. Patients are educated on lifestyle changes, including heart-healthy nutrition, stress management, and smoking cessation. Gradual return to normal activities and regular monitoring of heart function help prevent complications and promote long-term health. The goal is to restore independence, prevent further heart issues, and improve overall quality of life.</p>


                        <h5>Hypertension & Heart Disease Fitness</h5>
                        <p class="disc mb--30">Hypertension & Heart Disease Fitness focuses on improving cardiovascular health and managing blood pressure through regular physical activity. Exercise programs typically include aerobic activities like walking, cycling, or swimming, which help lower blood pressure, strengthen the heart, and improve circulation. Resistance training may also be included to build muscle strength and support overall health. Additionally, lifestyle changes such as weight management, healthy eating, and stress reduction techniques are emphasized. The goal is to reduce the risk of heart disease, improve heart function, and enhance overall well-being.</p>


                        <h5>Peripheral Artery Disease (PAD) Therapy</h5>
                        <p class="disc mb--30">Peripheral Artery Disease (PAD) Therapy focuses on improving blood flow to the limbs, reducing symptoms like pain and cramping, and enhancing overall mobility. Treatment typically includes supervised exercise programs to improve walking distance and circulation, along with lifestyle modifications such as smoking cessation, weight management, and a heart-healthy diet. Medications may be prescribed to manage symptoms, control blood pressure, and prevent blood clots. In some cases, surgical interventions like angioplasty or bypass surgery may be necessary. The goal is to alleviate pain, improve function, and reduce the risk of complications like ulcers or amputation.</p>


                        <h5>Chronic Obstructive Pulmonary Disease (COPD) Therapy</h5>
                        <p class="disc mb--30">Chronic Obstructive Pulmonary Disease (COPD) Therapy focuses on managing symptoms, improving lung function, and enhancing the quality of life for individuals with COPD. Treatment typically includes pulmonary rehabilitation, which combines exercise training, breathing techniques, and education on managing symptoms. Medications, such as bronchodilators and steroids, are often prescribed to reduce inflammation and open airways. Oxygen therapy may be used in advanced stages to support breathing. Lifestyle changes, including smoking cessation and a balanced diet, are crucial. The goal is to reduce symptoms, improve lung capacity, and prevent exacerbations.</p>



                        <h5>Post-COVID & Pneumonia Recovery</h5>
                        <p class="disc mb--30">Post-COVID & Pneumonia Recovery focuses on restoring lung function, strength, and overall health after respiratory illness. The rehabilitation process often includes breathing exercises, aerobic activities, and physical therapy to improve stamina and lung capacity. For individuals recovering from COVID-19, addressing fatigue, joint pain, and mental health is also key. Gradual reconditioning, along with nutritional support and hydration, helps in full recovery. Pulmonary rehabilitation programs may be used to optimize respiratory function, while education on managing symptoms and preventing further complications is essential. The goal is to regain strength, prevent future respiratory issues, and enhance overall well-being.</p>

                        <h5>Asthma & Respiratory Fitness </h5>
                        <p class="disc mb--30">Asthma & Respiratory Fitness focuses on improving lung function, reducing asthma symptoms, and enhancing overall fitness for individuals with asthma or other respiratory conditions. Treatment typically includes breathing exercises, aerobic exercises, and strength training to improve stamina and lung capacity without triggering symptoms. Individuals are educated on recognizing and avoiding triggers, using inhalers properly, and managing flare-ups. A tailored fitness plan helps improve respiratory efficiency and increase physical activity tolerance, promoting better overall health and reducing the impact of asthma on daily life.</p>


                        <h5>Interstitial Lung Disease (ILD) Rehab</h5>
                        <p class="disc mb--30">Interstitial Lung Disease (ILD) Rehabilitation focuses on improving lung function, increasing endurance, and enhancing quality of life for individuals with ILD. The rehabilitation process typically includes pulmonary rehabilitation, which combines breathing exercises, aerobic exercise, and strength training to improve cardiovascular and respiratory fitness. Education on energy conservation, symptom management, and techniques to cope with breathlessness are key components. Nutritional support and psychological counseling may also be included to address the emotional impact of living with ILD. The goal is to maximize lung function, improve daily activities, and reduce the symptoms of the disease.</p>



                        <h5>Bronchiectasis Rehabilitation</h5>
                        <p class="disc mb--30">Bronchiectasis Rehabilitation focuses on improving lung function, reducing symptoms, and enhancing overall quality of life for individuals with bronchiectasis. Treatment typically includes pulmonary rehabilitation, which involves exercises to improve cardiovascular fitness, lung capacity, and muscle strength. Airway clearance techniques, such as chest physiotherapy and postural drainage, are essential for helping to clear mucus from the lungs and reduce infections. Breathing exercises and education on managing exacerbations are also critical. The goal is to optimize lung health, reduce the frequency of flare-ups, and improve the individual’s ability to perform daily activities.</p>



                        <h5>Oxygen Therapy & Exercise Training</h5>
                        <p class="disc mb--30">Oxygen Therapy & Exercise Training is designed to improve oxygen levels in the blood and enhance overall physical fitness, especially for individuals with respiratory or cardiovascular conditions. Oxygen therapy helps ensure that the body gets adequate oxygen, particularly during physical activity, to support better endurance and reduce fatigue. Exercise training, including aerobic, strength, and flexibility exercises, is tailored to improve cardiovascular health, lung function, and muscle strength. This combined approach promotes better exercise tolerance, enhances quality of life, and reduces symptoms associated with conditions like COPD, heart failure, or pulmonary disease. Regular monitoring and adjustments ensure safety and effectiveness throughout the program.</p>


                        
                        <h5>Breathing & Diaphragm Strengthening </h5>
                        <p class="disc mb--30">Breathing & Diaphragm Strengthening focuses on improving respiratory function and enhancing the efficiency of the diaphragm, the primary muscle involved in breathing. Specific exercises, like diaphragmatic breathing, aim to strengthen the diaphragm and improve lung capacity by promoting deeper, more controlled breaths. Techniques such as pursed-lip breathing and diaphragmatic exercises help reduce shortness of breath, increase oxygen intake, and improve endurance, especially for individuals with respiratory conditions like COPD, asthma, or post-surgery recovery. Strengthening the diaphragm also supports better posture, reduces fatigue, and helps in managing stress or anxiety by enhancing relaxation.
                        </p>

                       



                        <h5>Pulmonary Hypertension Exercise Therapy</h5>
                        <p class="disc mb--30">Pulmonary Hypertension Exercise Therapy focuses on improving cardiovascular fitness and overall function for individuals with pulmonary hypertension (PH), a condition where high blood pressure in the lungs' arteries makes breathing and physical activity difficult. The therapy is designed to be gentle and tailored to the individual's abilities, with low-impact exercises like walking, cycling, and stretching that help improve oxygen utilization, stamina, and muscle strength. Regular physical activity can reduce symptoms like shortness of breath and fatigue, but it is essential to monitor progress and avoid overexertion. The goal is to enhance quality of life, improve exercise tolerance, and support overall cardiovascular health while managing symptoms safely.
                        </p>




                        <h5> Smoking Cessation & Lung Detox Programs</h5>
                        <p class="disc mb--30">Smoking Cessation & Lung Detox Programs are designed to help individuals quit smoking and promote lung health recovery. These programs typically combine behavioral therapy, support groups, and nicotine replacement therapies (such as patches or gum) to reduce cravings and manage withdrawal symptoms. Lung detox strategies focus on clearing the airways, improving lung function, and reducing inflammation through breathing exercises, pulmonary rehabilitation, and exercise. The goal is to support individuals in quitting smoking, prevent further lung damage, and improve respiratory health, ultimately enhancing overall quality of life. Education on nutrition and lifestyle changes also plays a key role in supporting long-term success.
                        </p>


                        <h5>Home-Based Cardio-Pulmonary Training</h5>
                        <p class="disc mb--30">Home-Based Cardio-Pulmonary Training is a customized exercise program designed for individuals with cardiovascular or pulmonary conditions who need to train at home. It typically includes a combination of aerobic exercises (like walking, cycling, or using a stationary bike), strength training, and breathing exercises aimed at improving heart and lung function. The program is tailored to the individual's fitness level and health status, with regular progress monitoring to ensure safety and effectiveness. The goal is to improve cardiovascular endurance, enhance lung capacity, increase overall fitness, and help manage symptoms of conditions like heart disease, COPD, or pulmonary hypertension—all while providing flexibility and convenience for the individual to train at home.
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
                        <a href="{{url('/neuro_rehabilitation')}}" class="single-department-service-wrapper">
                            <div class="left-side">
                               
                                <h4 class="title">Neuro Rehabilitation</h4>
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