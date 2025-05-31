 @extends('layouts.site_layouts')
 @section('content')

 <!-- rts breadcrumb area start -->
 <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Gallery</h1>
                    <div class="nav-bread-crumb">
                        <a href="/">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->



     <div class="rts-success-story-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center">
                        <!-- <span class="pre">Success Story</span>
                        <h2 class="title text-center text-clip wow move-right" style="font-size: 64px;">Patient Success
                            Story</h2> -->
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--0">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">
                   
                       
                            <img src="{{asset('/images/gal_1.png')}}" alt="success">
                      
                       
                   
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                    
                        
                            <img src="{{asset('/images/gal_2.png')}}" alt="success">
                       
                       
                  
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                    
                            <img src="{{asset('/images/gal_3.png')}}" alt="success">
                       
                        
                   
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">
                   
                        
                            <img src="{{asset('/images/gal_4.png')}}" alt="success">
                      
                       
                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                   
                       
                            <img src="{{asset('/images/gal_5.png')}}" alt="success">
                        
                       
                   
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">   
                            <img src="{{asset('/images/gal-6.png')}}" alt="success">  
                  
                </div>

                 <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                   
                            <img src="{{asset('/images/gal-7.png')}}" alt="success">
                   
                </div>


                 <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                            <img src="{{asset('/images/gal-8.png')}}" alt="success">
                    </div>
                

                 <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                            <img src="{{asset('/images/gal-9.png')}}" alt="success">
                    </div>
                </div>
            </div>
        </div>
    </div>
     @endsection