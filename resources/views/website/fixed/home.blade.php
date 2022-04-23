@extends('website.master')
@section('content')
<div class="rad-slider text-white text-center">
    <div class="slider-item" style="background-image: url({{url('frontend/images/banner.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="slider-caption">
                <div class="row context">
                    <div class="col col-lg-7">
                        <p class="header" data-aos="fade-right">Manufacturing Facilities</p>
                        <p class="description" data-aos="fade-left">Radiant has distinguished itself as one of the most
                            reliable names in the pharma industry of Bangladesh</p>
                        <a href="manufacturing.html" data-aos="fade-right">/ Read More</a>
                    </div>
                </div>
                <div class="row justify-flex-end" style="margin-top: 40px;">
                    <div class="col col-lg-12 flex-around">
                        <a href="product-development.html" class="sm-item sm-item-1 glossy-effect">
                            <div class="item-overlay"></div>
                            <p>Product Development</p>
                        </a>
                        <a href="production-facilities.html" class="sm-item sm-item-2 glossy-effect">
                            <div class="item-overlay"></div>
                            <p>Production</p>
                        </a>
                        <a href="quality-control-facilities.html"
                           class="sm-item sm-item-3 glossy-effect">
                            <div class="item-overlay"></div>
                            <p>Quality Control Facilities</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item" style="background-image: url({{url('frontend/images/banner1.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="slider-caption">
                <div class="row context">
                    <div class="col col-lg-7">
                        <p class="header" data-aos="fade-right">Product Development</p>
                        <p class="description" data-aos="fade-left">Benchmark of innovator product and commitment to developing quality products</p>
                        <a href="product-development.html" data-aos="fade-right">/ Read More</a>
                    </div>
                </div>
                <div class="row justify-flex-end" style="margin-top: 40px;">
                    <div class="col col-lg-12 flex-around">
                        <a href="product-development.html" class="sm-item sm-item-1 glossy-effect">
                            <div class="item-overlay"></div>
                            <p>Product Development</p>
                        </a>
                        <a href="production-facilities.html" class="sm-item sm-item-2 glossy-effect">
                            <div class="item-overlay"></div>
                            <p>Production</p>
                        </a>
                        <a href="quality-control-facilities.html" class="sm-item sm-item-3 glossy-effect">
                            <div class="item-overlay"></div>
                            <p>Quality Control Facilities</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <section class="testimonials text-center">
        <div class="container">
            <h2 class="mb-3" data-aos="zoom-in">EXPLORE OUR PRODUCTS</h2>
            
                
                    
                        
                        
                        
                
            
            <div class="row justify-content-md-center">
                <div class="col-lg-2 col-md-3" data-aos="fade-right" data-aos-delay="100">
                    <p class="txt-a">A</p>
                </div>
                <div class="col-lg-6 col-md-6 middle-product">
                    <div class="row justify-content-md-center">
                        <div class="col-6 custom-select-container">
                            <div class="custom-select-arrow"><i class="fas fa-chevron-down fa-2x"></i></div>
                            <select class="form-control custom-select" name="searchBy" id="search-by">
                                <option value="brand">Brand Name</option>
                                <option value="generic">Generic Name</option>
                                <option value="therapeutic">Therapeutic Class</option>
                            </select>
                        </div>

                        <div class="col-6 custom-select-container">
                            <a href="products.html" class="d-block">
                                <div class="custom-select-arrow"><i class="fas fa-chevron-right fa-2x"></i></div>
                                <span class="form-control custom-select" style="text-align: left;">All Products</span>
                            </a>
                        </div>
                    </div>

                    <div class="search-product">
                        <input id="query" name="query" type="text" placeholder="Search Products" autocomplete="off">
                        <i class="fas fa-search" id="search-icon"></i>
                        <ul id="hints"></ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3" data-aos="fade-left" data-aos-delay="100">
                    <p class="txt-z">Z</p>
                </div>
            </div>

        </div>
    </section>

    <section class="middle text-center">
        <div class="middle-bg">
            <div class="overlay-img"></div>
            <div class="overlay"></div>
            <div class="container cool-containter align-items-start">
                <h2 class="mb-3 cool-text" data-aos="zoom-out">Our commitment towards sustained excellence includes our efforts to benefit the communities we work with.</h2>
                <a class="read-more" href="csr-our-commitment.html">/ Read More</a>
            </div>
        </div>
    </section>

   <section class="news text-center">
    <div class="container">
        <div class="news-topic" data-aos="zoom-in">
            <span>MORE ABOUT RADIANT PHARMACEUTICALS LIMITED</span>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="news-item item-1" data-aos="fade-right">
                    <div class="item-overlay left"></div>
                    <div class="content-overlay left">
                        <p class="title">Safety, Health and Environment</p>
                        <p class="body">Equipped with necessary safety and environment protection facility.</p>
                        <a href="safety-health-environment.html">/ Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="news-item item-2" data-aos="fade-left">
                    <div class="item-overlay right"></div>
                    <div class="content-overlay right">
                        <p class="title">Global Amplification</p>
                        <p class="body">Radiant started its international business operations in 2011</p>
                        <a href="international-business-overview.html">/ Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="news-item item-3" data-aos="fade-right">
                    <div class="item-overlay left"></div>
                    <div class="content-overlay left">
                        <p class="title">Warehouse </p>
                        <p class="body">Own warehouse of raw materials, packaging materials as well as finished products.
                        </p>
                        <a href="warehouse-facilities.html">/ Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="news-item item-4" data-aos="fade-left">
                    <div class="item-overlay right"></div>
                    <div class="content-overlay right">
                        <p class="title">Pharmacovigilance</p>
                        <p class="body">Enhance safer use of medicine</p>
                        <a href="pharmacovigilance.html">/ Read More</a>
                    </div>
                </div>
            </div>
        </div>
        
            
                
            
        
    </div>
{{-- </section>


    <section class="career text-center">
    <div class="container">
        <div class="career-topic" data-aos="zoom-out">
            <span>Career</span>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="career-img page-heading d-flex align-items-center p-5">
                    <div class="ph-slide-caption text-left">
                        <h2 data-aos="fade-down">Career</h2>
                        <p class="mb-3" data-aos="fade-left">Bring your right attitude</p>
                        <a href="career/all-job-openings.html" class="btn btn-danger" data-aos="fade-up">Job Opening</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    {{-- <section class="middle middle-2 text-center">
        <div class="middle-bg">
            
            <div class="overlay"></div>
            <video id="plant" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="videos/plant-video.mp4" type="video/mp4">
            </video>
            <div class="container cool-containter">
                <h2 class="mb-3 cool-text" data-aos="zoom-in">OUR PLANT</h2>
                <img src="images/play.png" data-aos="fade-up" id="video1">
            </div>
        </div>
        <div id="vidBox">
            <div id="videCont">
                <video autoplay id="plant" loop controls>
                    <source src="videos/plant-video.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section> --}}

    <!-- Footer -->
    <style>
.radinat_company_list_box{
    background-color: #f8f8f8;
    height: 250px;
    padding: 30px;
    transition: 0.5s;
    z-index: 15;
    width: 100%;
}
.radinat_company_list_box:hover{
    background-color: #ffffff;
}
.border_top_white{
    border-top: 1px solid;
    border-color: #F0EBED;
}
.border_bottom_white{
    border-bottom: 1px solid;
    border-color: #F0EBED;
}
.border_left_white{
    border-left: 1px solid;
    border-color: #F0EBED;
}
.border_right_white{
    border-right: 1px solid;
    border-color: #F0EBED;
}
.radinat_company_list_name{
    font-size: 14px;
    color: #000000;
    width: 100%;
}
</style>

<div class="row" style="margin: 0px; padding: 0px;">
    <div style="width: 100%;margin-top: 10px;margin-bottom: 10px"  class="text-center news-topic aos-init aos-animate" >
        <span style="font-size: 2.5em;font-weight: 300;text-transform: uppercase;border-bottom: 3px solid #ea4545;" >RADIANT AFFILIATE COMPANIES</span>
    </div>

    <div class="row" style="margin: 0px; padding: 0px; width: 100%; z-index: 16;">
        <div class="text-center" style="width: 25%; height: 250px;">
            <a target="_blank" href="index.html" style="text-decoration: none;">
                <div class="radinat_company_list_box border_top_white border_bottom_white border_left_white border_right_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2">Radiant Pharmaceuticals Limited</div>
                    <div class="text-center">
                        <img src="images/company_list/radiant_ph.svg">
                    </div>
                </div>
            </a>
        </div>

        <div class="text-center" style="width: 25%; height: 250px;">
            <a target="_blank" href="http://radiantnutrabd.com/" style="text-decoration: none;">
                <div class="radinat_company_list_box border_top_white border_bottom_white border_right_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2">Radiant Nutraceuticals Ltd</div>
                    <div class="text-center">
                        <img src="images/company_list/radiant_nu.svg">
                    </div>
                </div>
            </a>
        </div>

        <div class="text-center" style="width: 25%; height: 250px;">
            <a target="_blank" href="http://jenphar.com/" style="text-decoration: none;">
                <div class="radinat_company_list_box border_top_white border_bottom_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2">Jenphar Bangladesh Limited</div>
                    <div class="text-center">
                        <img src="images/company_list/radiant_jul.svg">
                    </div>
                </div>
            </a>
        </div>

        <div class="text-center" style="width: 25%; height: 250px;">
            <a target="_blank" href="#" style="text-decoration: none;">
                <div class="radinat_company_list_box border_left_white border_bottom_white border_right_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2">Radiant Export Import Enterprise</div>
                        <div class="text-center">
                            <img src="images/company_list/radiant_eie.svg">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="row" style="margin: 0px; padding: 0px; width: 100%; z-index: 16;">
        <div class="text-center" style="width: 25%; height: 250px;">
            <a target="_blank" href="https://rbclbd.com/" style="text-decoration: none;">
                <div class="radinat_company_list_box border_top_white border_bottom_white border_left_white border_right_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2">Radiant Business Consortium Limited</div>
                    <div class="text-center">
                        <img src="images/company_list/radinat_bcl.png" width="140px">
                    </div>
                </div>
            </a>
        </div>

        <div class="text-center" style="width: 25%; height: 250px;">
            <a target="_blank" href="http://radiantdistbd.com/" style="text-decoration: none;">
                <div class="radinat_company_list_box border_top_white border_bottom_white border_right_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2">Radiant Distribution Limited</div>
                    <div class="text-center">
                        <img src="images/company_list/radiant_dl.svg">
                    </div>
                </div>
            </a>
        </div>

        <div class="text-center" style="width: 25%; height: 250px;">
            <a target="_blank" href="http://oncosmolbiol.com/" style="text-decoration: none;">
                <div class="radinat_company_list_box border_top_white border_bottom_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2">Radiant Oncos Molbiol Limited</div>
                    <div class="text-center">
                        <img src="images/company_list/radiant_oml.svg">
                    </div>
                </div>
            </a>
        </div>

        <div class="text-center" style="width: 25%; height: 250px;">
            <a target="_blank" href="#" style="text-decoration: none;">
                <div class="radinat_company_list_box border_left_white border_bottom_white border_right_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2">Shamutshuk Printers Limited</div>
                        <div class="text-center">
                            <img src="images/company_list/radiant_spl.svg">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="row" style="margin: 0px; padding: 0px; width: 100%; z-index: 16;">
        <div class="text-center" style="width: 25%; height: 250px;">
            <a target="_blank" href="https://aeromate.com.bd/" style="text-decoration: none;">
                <div class="radinat_company_list_box border_top_white border_bottom_white border_left_white border_right_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2">Aeromate Services Limited</div>
                    <div class="text-center">
                        <img src="images/company_list/radiant_asl.svg">
                    </div>
                </div>
            </a>
        </div>

        <div class="text-center" style="width: 25%; height: 250px;">
            <a target="_blank" href="https://aerowing.com.bd/" style="text-decoration: none;">
                <div class="radinat_company_list_box border_top_white border_bottom_white border_right_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2">AeroWing Aviation Limited</div>
                    <div class="text-center">
                        <img src="images/company_list/radiant_aal.svg">
                    </div>
                </div>
            </a>
        </div>

        <div class="text-center" style="width: 25%; height: 250px;">
            <a target="_blank" href="#" style="text-decoration: none;">
                <div class="radinat_company_list_box border_top_white border_bottom_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2"></div>
                    <div class="text-center">

                    </div>
                </div>
            </a>
        </div>

        <div style="width: 25%; height: 250px;">
            <a target="_blank" href="#" style="text-decoration: none;">
                <div class="radinat_company_list_box border_left_white border_bottom_white border_right_white d-flex flex-column">
                    <div class="radinat_company_list_name mb-auto p-2"></div>
                        <div class="text-center">

                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>
@endsection