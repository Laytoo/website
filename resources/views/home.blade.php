<!DOCTYPE html>
<html lang="en">
<head>
    <title>smart</title>
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




</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" class="water">

<!--<div class="rr" style="width: 100% ;height:80px ;background-color: #95acb4">-->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">

    <div class="container">

        <a class="navbar-brand" href="#about-section">
            <h1><span>S</span>
                <span>M</span>
                <span>A</span>
                <span>R</span>
                <span>T</span>
            </h1> </a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">




                <li class="nav-item"><a href="#home-section" class="nav-link"><span>@lang('header.home')</span></a></li>

                <li class="nav-item"><a href="#about-section" class="nav-link"><span>@lang('header.aboutus')</span></a></li>
               <!-- <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>-->
                <li class="nav-item"><a href="#services-section" class="nav-link"><span>@lang('header.services')</span></a></li>
               <!-- <li class="nav-item"><a href="#skills-section" class="nav-link"><span>@lang('header.skills')</span></a></li>-->
                <li class="nav-item"><a href="#projects-section" class="nav-link"><span>@lang('header.projects')</span></a></li>
              <!--  <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li> -->
                <li class="nav-item"><a href="#contact-section" class="nav-link dropdown"><span>@lang('header.contact')</span></a></li>
                <table >

                    <tr>

                        <ul class="dropdown>">
                            <li><a href="/language/en" ><i class=" dropdown-content"></i> EN</a></li>
                            <li><a href="/language/tr" ><i class=" dropdown-content"></i> TR</a></li>

                        </ul>

                    </tr>
                    <tr>
                        <ul class="dropdown>">

                            <li><a href="/language/ar" ><i class=" dropdown-content"></i> AR</a></li>
                        </ul>
                    </tr>

                </table>



            </ul>

        </div>
    </div>


</nav>


<section id="home-section" class="hero" >
    <div class="home-slider  owl-carousel" >

        @foreach($data as $dt)
        <div class="slider-item " >

            <div class="container"  >
                <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true" >
                    <div class="one-third js-fullheight order-md-last img" >
                        <img src="{{url('/')}}/fotos/{{$dt->foto}}" >

                    </div>
                    <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }" >
                        <div class="text"style="width: 400px;height: 550px">
                            <span class="subheading" ></span>
                            <h2 class="mb-4 mt-3">name :<span>{{$dt->namee}}</span></h2>
                            <h2 class="mb-4"></h2>
                            <p><a href="{{url('/')}}/detail/{{$dt->Id}}" class="btn btn-primary py-3 px-3">More detail</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-3" >Our Works</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>

</section>

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section" >
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center"  >




                   <!--     <div class="card middle ">
                            <div class="front ">
                                <img src="{{url('/')}}/fotos/{{$about[0]->foto}}" alt="">
                            </div>
                            <div class="back">
                                <div class="back-content middle">
                                    <h2>Smart For Designs</h2>
                                    <span>Dorasoya</span>

                                    <div class="icons">
                                        <a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
                                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->



                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h1 class="big">@lang('header.aboutus')</h1>
                        <h2 class="mb-4">@lang('header.aboutus')</h2>
                        <p>{{$about[0]->description}}</p>
                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex"><span>Name:</span> <span style="color:black">{{$about[0]->namee}}</span></li>
                            <li class="d-flex"><span>Date of birth:</span> <span style="color:black">January 01, 1987</span></li>
                            <li class="d-flex"><span>Address:</span> <span style="color:black">{{$about[0]->address}}</span></li>
                            <li class="d-flex"><span>Zip code:</span> <span style="color:black">1000</span></li>
                            <li class="d-flex"><span>Email:</span> <span style="color:black">{{$about[0]->email}}</span></li>
                            <li class="d-flex"><span>Phone: </span> <span style="color:black">{{$about[0]->phone}}</span></li>
                        </ul>
                    </div>
                </div>
             <!--   <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text">
                        <p class="mb-4">
                            <span class="number" data-number="120">0</span>
                            <span>Project complete</span>

                        </p>
                        <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

</section>



<!--<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h1 class="big big-2">Resume</h1>
                <h2 class="mb-4">Resume</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="resume-wrap ftco-animate">
                    <span class="date">2014-2015</span>
                    <h2>Master Degree of Design</h2>
                    <span class="position">Cambridge University</span>
                    <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="resume-wrap ftco-animate">
                    <span class="date">2014-2015</span>
                    <h2>Bachelor's Degree of C.A</h2>
                    <span class="position">Cambridge University</span>
                    <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="resume-wrap ftco-animate">
                    <span class="date">2014-2015</span>
                    <h2>Diploma in Computer</h2>
                    <span class="position">Cambridge University</span>
                    <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="resume-wrap ftco-animate">
                    <span class="date">2014-2015</span>
                    <h2>Art &amp; Creative Director</h2>
                    <span class="position">Cambridge University</span>
                    <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="resume-wrap ftco-animate">
                    <span class="date">2014-2015</span>
                    <h2>Wordpress Developer</h2>
                    <span class="position">Cambridge University</span>
                    <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="resume-wrap ftco-animate">
                    <span class="date">2017-2018</span>
                    <h2>UI/UX Designer</h2>
                    <span class="position">Cambridge University</span>
                    <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center ftco-animate">
                <p><a href="#" class="btn btn-primary py-4 px-5">Download CV</a></p>
            </div>
        </div>
    </div>
</section>-->



<section class="ftco-section" id="services-section">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">@lang('header.services')</h1>
                <h2 class="mb-4">@lang('header.services')</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row con">

            @foreach($service as $serv)
            <div class="col-md-4 text-center d-flex ftco-animate box content">
                <a href="#" class="services-1">
							<span class="icon">
                                <img src="{{url('/')}}/fotos/{{$serv->foto}}" style="width: 200px">
							</span>
                    <div class="desc">
                        <h3 class="mb-5">{{$serv->namee}}</h3>
                        <h5 class="mb-3">{{$serv->description}}</h5>

                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>


<!--<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">@lang('header.skills')</h1>
                <h2 class="mb-4">@lang('header.skills')</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>PHP</h3>
                    <div class="progress">
                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                             aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            <span>80%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>JavaScript</h3>
                    <div class="progress">
                        <div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
                             aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            <span>80%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>HTML5</h3>
                    <div class="progress">
                        <div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
                             aria-valuemin="0" aria-valuemax="100" style="width:95%">
                            <span>95%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>CSS3</h3>
                    <div class="progress">
                        <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                             aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            <span>90%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Angular</h3>
                    <div class="progress">
                        <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            <span>70%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Java</h3>
                    <div class="progress">
                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            <span>80%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="ftco-section ftco-project" id="projects-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">@lang('header.projects')</h1>
                <h2 class="mb-4">@lang('header.projects')</h2>
                <p style="color:white;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-4.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-5.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-1.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web sdsesign</span>
                    </div>
                </div>

                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-6.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Ddsn</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-2.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-3.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>







<section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 ftco-animate text-center">
                <h2>We Are <span>Available</span> for You</h2>
                <p>Our Company Will Support And Manage Your Website</p>
                <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Contact Us</a></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">@lang('header.contact')</h1>
                <h2 class="mb-4">@lang('header.contact')</h2>
                <p style="color:white;">We Are Available 24/7 </p>
            </div>
        </div>

        <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <h3 class="mb-4">Address</h3>
                    <p style="color: white">{{$contact[0]->address}}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <h3 class="mb-4">Contact Number</h3>
                    <p><a href="tel://1234567920">{{$contact[0]->phone}}</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <h3 class="mb-4">Email Address</h3>
                    <p><a href="mailto:info@yoursite.com">{{$contact[0]->email}}</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-globe"></span>
                    </div>
                    <h3 class="mb-4">Website</h3>
                    <p><a href="#">{{$contact[0]->website}}</a></p>
                </div>
            </div>
        </div>

        <div class="row no-gutters block-9">


            <div class="col-md-6 order-md-last d-flex">
                <form action="{{url('/')}}" method="post" class="bg-light p-4 p-md-5 contact-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="namee">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                        <textarea name="msg" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div><br />
                @endif

            </div>

            <div class="col-md-6 d-flex">


                  <!--  <div class="img" id="googleMap"></div> -->
                <iframe class="framemap" src="https://www.google.com/maps/d/embed?mid=1qmykZXVilFr_lb1NkIBg9l23am-jRuaY" width="640" height="580"></iframe>



            </div>
        </div>
    </div>
</section>


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
                        <li><a href="#home-section" ><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="#about-section"  ><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                        <li><a href="#projects-section"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                        <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
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
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="">Turkey-Mersin-Mezitli</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="">009090909090</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="">info@info.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

       <!-- <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
            </div>
        </div> -->

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


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
<script>
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 14,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(36.770531, 34.568700), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [


                {
                    "featureType": "administrative",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#ff0000"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#888888"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "hue": "#ff0000"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "color": "#6e6e6e"
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#6f6b6b"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "color": "#c5c5c5"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#cfcfcf"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural.landcover",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#ff0000"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural.landcover",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "hue": "#ff0000"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "off"
                        },
                        {
                            "color": "#909090"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi.medical",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e5e5e5"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e5e5e5"
                        }
                    ]
                },
                {
                    "featureType": "poi.place_of_worship",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ff0000"
                        }
                    ]
                },
                {
                    "featureType": "poi.sports_complex",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f7f7f7"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "gamma": 7.18
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "gamma": 0.48
                        }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#bcbcbc"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('googleMap');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(36.770531, 34.568700),
            map: map,
            title: 'smart',
            icon: 'map.png',
            animation:google.maps.Animation.BOUNCE

        });
    }
</script>




</body>
</html>