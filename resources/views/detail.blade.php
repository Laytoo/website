<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clark - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">



    <link rel="stylesheet" href="{{url('/')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/animate.css">

    <link rel="stylesheet" href="{{url('/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{url('/')}}/css/aos.css">

    <link rel="stylesheet" href="{{url('/')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{url('/')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{url('/')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{url('/')}}/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/css/mystyle.css">

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/awesome/css/all.css">


    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-color: black">


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
       <!-- <a class="navbar-brand" href="index.html">SMART</a> -->


     <!--   <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>@lang('header.home')</span></a></li>

                <li class="nav-item"><a href="#about-section" class="nav-link"><span>@lang('header.aboutus')</span></a></li>

                <li class="nav-item"><a href="#services-section" class="nav-link"><span>@lang('header.services')</span></a></li>
             <li class="nav-item"><a href="#skills-section" class="nav-link"><span>@lang('header.skills')</span></a></li>
                <li class="nav-item"><a href="#projects-section" class="nav-link"><span>@lang('header.projects')</span></a></li>
                <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link dropdown"><span>@lang('header.contact')</span></a></li>

                <ul class="dropdown">
                    <li><a href="/en" ><i class=" dropdown-content"></i> EN</a></li>
                    <li><a href="/tr" ><i class=" dropdown-content"></i> TR</a></li>
                    <li><a href="/ar" ><i class=" dropdown-content"></i> AR</a></li>
                </ul>
            </ul>
        </div> -->
    </div>
</nav>
<section class="hero-wrap js-fullheight detaill" style="background-image: url({{url('/')}}/fotos/{{$template[0]->foto}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>

</section>



        <div class="col-md-12 ftco-animate pb-5 mb-3 text-center" style="height: 10px">
            <h1 class="mb-3 bread"> </h1>
            <p class="breadcrumbs"><span class="mr-2" style="width: 30px"><a href="{{url('/')}}" >Home <i class="ion-ios-arrow-forward"></i></a></span>
                <span class="mr-2">Template Detail </span></p>
        </div>











            <section class="slideshow">

                <ul class="navigation">


                    <!-- slideshow:navigation:item END -->

                    <!-- slideshow:navigation:item START -->

                    @foreach($temp as $dt)
                    <li class="navigation-item ">
                        <span class="rotate-holder"></span>
                        <span class="background-holder" style="background-image: url({{url('/')}}/fotos/{{$dt->images}});"></span>
                    </li>

                    @endforeach

                <!--    <li class="navigation-item">
                        <span class="rotate-holder"></span>
                        <span class="background-holder" style="background-image: url({{url('/')}}/fotos/g3.jpg);"></span>
                    </li>

                <li class="navigation-item">
                        <span class="rotate-holder"></span>
                        <span class="background-holder" style="background-image: url({{url('/')}}/fotos/g4.jpg);"></span>
                    </li>

                    <li class="navigation-item">
                        <span class="rotate-holder"></span>
                        <span class="background-holder" style="background-image: url({{url('/')}}/fotos/g5.jpeg);"></span>
                    </li>

                    <li class="navigation-item">
                        <span class="rotate-holder"></span>
                        <span class="background-holder" style="background-image: url({{url('/')}}/fotos/g6.jpg);"></span>
                    </li>

                     <li class="navigation-item">
                        <span class="rotate-holder"></span>
                        <span class="background-holder" style="background-image: url({{url('/')}}/fotos/g7.jpg);"></span>
                    </li>

                    <li class="navigation-item">
                        <span class="rotate-holder"></span>
                        <span class="background-holder" style="background-image: url({{url('/')}}/fotos/g8.jpg);"></span>
                    </li>

                    <li class="navigation-item">
                        <span class="rotate-holder"></span>
                        <span class="background-holder" style="background-image: url({{url('/')}}/fotos/g9.jpg);"></span>
                    </li> -->


                </ul>


                <div class="detail">



                    @foreach($temp as $dt)
                    <div class="detail-item">
                        <div class="headline"><h2>{{$dt->nam}}</h2></div>
                        <div class="background" style="background-image: url({{url('/')}}/fotos/{{$dt->images}});"></div>
                    </div>

                    @endforeach
                 <!--   <div class="detail-item">
                        <div class="headline">LONDON</div>
                        <div class="background" style="background-image: url({{url('/')}}/fotos/g3.jpg);"></div>
                    </div>


                    <div class="detail-item">
                        <div class="headline">JAPAN</div>
                        <div class="background" style="background-image: url({{url('/')}}/fotos/g4.jpg);"></div>
                    </div>


                    <div class="detail-item">
                        <div class="headline">PARIS</div>
                        <div class="background" style="background-image: url({{url('/')}}/fotos/g5.jpeg);"></div>
                    </div>


                    <div class="detail-item">
                        <div class="headline">SINGAPORE</div>
                        <div class="background" style="background-image: url({{url('/')}}/fotos/g6.jpg);"></div>
                    </div>


                    <div class="detail-item">
                        <div class="headline">Sydney</div>
                        <div class="background" style="background-image: url({{url('/')}}/fotos/g7.jpg);"></div>
                    </div>


                    <div class="detail-item">
                        <div class="headline">Istanbul</div>
                        <div class="background" style="background-image: url({{url('/')}}/fotos/g8.jpg);"></div>
                    </div>



                    <div class="detail-item">
                        <div class="headline">Hong Kong</div>
                        <div class="background" style="background-image: url({{url('/')}}/fotos/g9.jpg);"></div>
                    </div>  -->



                </div>



            </section>














                      <!--<div class="slideshow-container">
                          @foreach($temp as $tem)

                            <div class="mySlides fade" style="margin-top: 50px">

                              <img src="{{url('/')}}/fotos/{{$tem->images}}" style="width: 70%;height: 400px;">
                              <div class="text">Caption Text</div>
                             </div>
                               @endforeach


                              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                              <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                </div> -->






                    <!--  <div class="tag-widget post-tag-container mb-5 mt-5">
                      <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">Life</a>
                            <a href="#" class="tag-cloud-link">Sport</a>
                            <a href="#" class="tag-cloud-link">Tech</a>
                            <a href="#" class="tag-cloud-link">Travel</a>
                        </div>
                </div>-->

             <!-- .col-md-8 -->
         <!-- .section -->


<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Business Strategy</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{url('/')}}/js/jquery.min.js"></script>
<script src="{{url('/')}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{url('/')}}/js/popper.min.js"></script>
<script src="{{url('/')}}/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/js/jquery.easing.1.3.js"></script>
<script src="{{url('/')}}/js/jquery.waypoints.min.js"></script>
<script src="{{url('/')}}/js/jquery.stellar.min.js"></script>
<script src="{{url('/')}}/js/owl.carousel.min.js"></script>
<script src="{{url('/')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{url('/')}}/js/aos.js"></script>
<script src="{{url('/')}}/js/jquery.animateNumber.min.js"></script>
<script src="{{url('/')}}/js/scrollax.min.js"></script>

<script src="{{url('/')}}/js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/TextPlugin.min.js"></script>
<script src="{{url('/')}}/js/demo.js"></script>




<script>

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>



</body>
</html>