<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radiantpharmabd.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Apr 2022 17:57:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Impala Intech Ltd.">

    <title>Radiant Pharmaceuticals Limited</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('frontend/css/front-end/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/css/front-end/fontawesome.all.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/css/front-end/slick.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/css/front-end/aos.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('images/fav_icon.png')}}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{url('frontend/css/front-end/main.css')}}" rel="stylesheet">

    <link href="{{url('purecookie.css')}}" rel="stylesheet">
    <script src="{{url('purecookie.js')}}"></script>

        <link rel="stylesheet" href="css/front-end/videopopup.css">
    <style>
/*
        .rad-slider {
            margin-top: 80px;
        }
*/
        #hints {
            left: 0;
            top: calc(100% - 20px);
            width: 100%;
        }

        .search-product {
            position: relative;
        }

        #search-icon {
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }


    </style>

    <style>
        .page-heading:after {
            position: absolute;
            content: "";
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #2525906b;
        }
        .ph-slide-caption {
            z-index: 2;
        }
    </style>


    {{-- <script>
        // popup title
        var purecookieTitle = "Cookies.";
        // popup content
        var purecookieDesc = "This website can be browsed without submitting any personal information. If anyone is willing to share any such information, in that case, we may preserve that information, and it will be kept confidential unless it is subject to disclosure due to regulatory obligation. Personal information will not be used for any commercial purposes";
        // policy link
        var purecookieLink = '';
        // button text
        var purecookieButton = "Understood";
    </script> --}}
</head>

<body>

    <!--===== Preloader =====-->
    {{-- <div class="preloader d-flex align-items-center justify-content-center"><div class="lds-ripple"><div></div><div></div></div></div> --}}
    <!--===== End Preloader =====-->

    <!-- Navigation Top -->
    {{-- <div class="topbar">
    <div class="container">
        <div class="d-flex justify-content-end">
            <div class="topbar-right d-flex align-items-center justify-content-end h-100 wow fadeInRight">
                <a class="" href="pharmacovigilance.html">Pharmacovigilance</a>
                <a href="csr-our-commitment.html">CSR</a>
                <a class="" href="career.html">Career</a>
                <a class="" href="contact-us.html">Contact Us</a>
            </div>
        </div>
    </div>
</div> --}}

    <!-- #header -->
  @include('website.fixed.header')

    <!-- Content Area -->
     @yield('content')

{{-- footer --}}
@include('website.fixed.footer')
<div class="footer-copyright">
    {{-- Copyright © Radiant Pharmaceuticals Limited 2020. All Right Reserved By Radiant Pharmaceuticals Limited. --}}
</div>

<!--
<footer class="footer-area">
    <div class="container">
        <div class="footer-logo text-center">
            <a href="http://www.radiantpharmabd.com"><img src="http://www.radiantpharmabd.com/images/logo-footer.png" alt="logo-footer"></a>
        </div>
        <div class="footer-links text-center">
            <ul>
                <li><a href="http://www.radiantpharmabd.com/about-us">About Us</a></li>
                <li><a href="http://www.radiantpharmabd.com/products">Products</a></li>
                <li><a href="http://www.radiantpharmabd.com/sustainability">Sustainability</a></li>
                <li><a href="http://www.radiantpharmabd.com/manufacturing">Manufacturing Facilities</a></li>
                <li><a href="http://www.radiantpharmabd.com/international-business-overview">Global Business</a></li>
                <li><a href="http://www.radiantpharmabd.com/csr-our-commitment">CSR</a></li>
                <li><a href="http://www.radiantpharmabd.com/pharmacovigilance" class="row-body">Pharmacovigilance</a></li>
                <li><a href="http://www.radiantpharmabd.com/career" class="row-body">Carrer</a></li>
                <li><a href="http://www.radiantpharmabd.com/contact-us" class="row-body">Contact Us</a></li>
            </ul>
        </div>
        <div class="social-media text-center">
            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<div class="footer-copyright">
    Copyright © Radiant 2020. All Right Reserved By Radiant
</div>
-->

<!--
<footer class="footer">
    <div class="container">
        <div class="row space">
            <div class="col-md-11 offset-md-1">
                <div class="row">
                    <div class="col-6 col-md-4">
                        <a href="http://www.radiantpharmabd.com/about-us" class="row-body">About Us</a>
                        <a href="http://www.radiantpharmabd.com/products" class="row-body">Products</a>
                        <a href="http://www.radiantpharmabd.com/sustainability" class="row-body">Sustainability</a>
                        <a href="http://www.radiantpharmabd.com/manufacturing" class="row-body">Manufacturing Facilities</a>
                        <a href="http://www.radiantpharmabd.com/international-business-overview" class="row-body">Global Business</a>
                        <a href="http://www.radiantpharmabd.com/csr-our-commitment" class="row-body">CSR</a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="http://www.radiantpharmabd.com/pharmacovigilance" class="row-body">Pharmacovigilance</a>
                        <a href="http://www.radiantpharmabd.com/career" class="row-body">Carrer</a>
                        <a href="#" class="row-body">Media</a>
                        <a href="http://www.radiantpharmabd.com/contact-us" class="row-body">Contact Us</a>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="footer-logo">
                            <a href="index.html"> <img src="http://www.radiantpharmabd.com/images/logo-footer.png" alt="logo-footer"></a>
                        </div>
                        <p class="row-title1">Get In Touch</p>
                        <p class="row-body1">Do you have any question or comments about our website, our products or
                            services ?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-social">
        <div class="overlay"></div>
        <p class="col-12 follow-text">
            Follow Us
        </p>
        <div class="col-12 social-networks">
            <a href="#">
                <i class="fab fa-youtube fa-2x fa-fw"></i>
            </a>
            <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
            </a>
            <a href="#">
                <i class="fab fa-linkedin-in fa-2x fa-fw"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
            </a>
            <a href="#">
                <i class="fab fa-twitter fa-2x fa-fw"></i>
            </a>
        </div>
    </div>

    <div class="footer-copyright">
        <a href="#" class="row-body">Copyright © Radiant</a>
        <div class="develop">
            <a href="#" class="row-body">Conditions of Use</a>
            <a href="#" class="row-body">Privacy Statement</a>
            <a href="#" class="row-body">Developers</a>
        </div>
        <a href="#" class="row-body">Site Map</a>
    </div>

</footer>
-->

    <!-- Bootstrap core JavaScript -->
    <script src="{{url('frontend/js/front-end/jquery.min.js')}}"></script>
    <script src="{{url('frontend/js/front-end/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('frontend/js/front-end/slick.min.js')}}"></script>
    <script src="{{url('frontend/js/front-end/aos.js')}}"></script>
    <script src="{{url('frontend/js/front-end/vendors/superfish/hoverIntent.js')}}"></script>
    <script src="{{url('frontend/js/front-end/vendors/superfish/superfish.min.js')}}"></script>
    <script src="{{url('frontend/js/front-end/custom.js')}}"></script>
    <script>
        (function($){
        /*--===== Preloader Script =====--*/
            $(window).on("load", function () {
                $(".preloader").addClass("loaderin");
            });
        /*--===== End Preloader Script =====--*/
        })(jQuery);
    </script>

        <script src="{{('urljs/front-end/videopopup.js')}}"></script>
    <script>
        var queryEl = $('#query'),
            searchByEl = $('#search-by'),
            hintsEl = $('#hints'),
            searchIconEl = $('#search-icon');
        
        

        // type hinting
        ProductSearchTypeHint.products = ["Acos","Andepram","Atoz Premium","Atoz Senior","Avenac","Bonova","Carlina","Carlina-M","Carticare","Carticare Max","Coralcal-D","Coralcal-DX","Creva","Dormicum","Duovas","Efodio","Exium","Exium-MUPS","Exler","Fastel","ForMum","Frenvas","Fylox","Lexotanil","Minista","Nalzin","Naprosyn","Naprosyn-Plus","Neucos-B","Novatron","Pantium","Precon","Precon Plus","Prelica","Prelizer","PreMum","Prompton","Radiglip","Radiglip-M","Radimet","Raditil","Raditrend","Radivit-C","Radivit-D","Radizid","Rivotril","Rocaltrol","Rofecin","Rofixim","Rofuclav","Rofurox","Sevitan","Sevitan-HTZ","Toradolin","Triginal MR","Winbac","Xelcom","Xenobese","Xyflo","Zilon"];
        ProductSearchTypeHint.generics = ["Aceclofenac ","Amlodipine+Olmesartan","Ascorbic Acid","Atorvastatin","Azithromycin","Bisoprolol Fumarate","Bromazepam","Calcitriol","Calcium+Vitamin D3","Carbonyl iron+Folic acid+Zinc+Vitamin B-complex+Vitamin C","Carvedilol","Cefixime","Ceftriaxone","Cefuroxime","Cefuroxime+Clavulanic Acid","Cholecalciferol","Ciprofloxacin","Clonazepam","Domperidone","Doxofylline","Ebastine","Escitalopram","Esomeprazole","Fexofenadine","Flunarizine","Folic acid+Zinc","Gliclazide","Glucosamine+Chondroitin","Glucosamine+Diacerein","Ibandronic acid","Ketorolac","Linagliptin","Linagliptin+Metformin Hydrochloride","Losartan","Losartan+Hydrochlorothiazide","Metformin Hydrochloride","Midazolam","Montelukast","Multivitamin+Mineral","Naproxen","Naproxen+Esomeprazole","Olmesartan","Olmesartan+Hydrochlorothiazide","Omeprazole","Ondansetron","Orlistat","Pantoprazole","Paracetamol+Tramadol HCL","Pregabalin","Psyllium + Senna extract","Rabeprazole","Rosuvastatin","Rupatadine ","Sitagliptin","Sitagliptin+Metformin Hydrochloride","Tamsulosin Hydrochloride","Tenoxicam","Tiemonium Methylsulfate","Trimetazidine Dihydrochloride","Vitamin B1+B6+B12"];
        ProductSearchTypeHint.therapeutics = ["Analgesic, Anti-Inflammatory","Anti-Arthritis Supplement","Anti-obesity","Antiasthmatic","Antibacterial","Antidepressant","Antidiabetic","Antihistamine, Antiallergic","Antispasmodic","Antiulcerant","Bone Calcium Regulator","Cardiovascular","Central nervous system (CNS)","Gastro-Intestinal Regulators, Anti-Emetic","Vitamins and Minerals"];
        ProductSearchTypeHint.redirectUrl = "products/search.html";

        ProductSearchTypeHint.onFocus(queryEl, searchByEl, hintsEl);
        ProductSearchTypeHint.onKeyUp(queryEl, searchByEl, hintsEl);
        ProductSearchTypeHint.onBlur(queryEl);
        ProductSearchTypeHint.onHintClick(hintsEl);
        ProductSearchTypeHint.onSearchClick(searchIconEl);
    </script>

    <script type="text/javascript">
        $(function () {
            $('#vidBox').VideoPopUp({
                backgroundColor: "#17212a",
                opener: "video1",
                maxweight: "340",
                idvideo: "plant"
            });
        });
    </script>

</body>



</html>