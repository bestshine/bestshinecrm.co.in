<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BEC-Home</title>
<meta name="keywords" content="Edu app, education app, School web app, school mobile app, School app, school software, e- School app, smartphone school app, educational management app, cloud based school app" />
<meta name="description" content=" A School Management App development company in Chennai, Tamilnadu, India, best Mobile App integrated to Web Application, Integrated school management, School software, Web Designing, SMS/Text portal, NEET/IAS coaching." />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/bootstrap.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/bs-slider.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/animate.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/font-awesome.css') }}"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,900" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css?family=Exo+2:400,500,600,700,800" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,500i,700" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,500,600,700,800,900" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/font-awesome-css.min.css') }}"/>  -->
<script src="https://use.fontawesome.com/c7a7b2acb2.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--  <script src="{{ url('tuttee/js/c7a7b2acb2.js')}}"></script> -->
   <script src="{{ url('tuttee/js/js.js')}}"></script>
   <script src="{{ url('tuttee/js/wow.min.js')}}"></script>
   <script>
        new WOW().init();
    </script>  
    <script type="text/javascript">
                  var TxtRotate = function(el, toRotate, period) {
              this.toRotate = toRotate;
              this.el = el;
              this.loopNum = 0;
              this.period = parseInt(period, 10) || 1500;
              this.txt = '';
              this.tick();
              this.isDeleting = false;
            };

            TxtRotate.prototype.tick = function() {
              var i = this.loopNum % this.toRotate.length;
              var fullTxt = this.toRotate[i];

              if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
              } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
              }

              this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

              var that = this;
              var delta = 300 - Math.random() * 100;

              if (this.isDeleting) { delta /= 2; }

              if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
              } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
              }

              setTimeout(function() {
                that.tick();
              }, delta);
            };

            window.onload = function() {
              var elements = document.getElementsByClassName('txt-rotate');
              for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-rotate');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                  new TxtRotate(elements[i], JSON.parse(toRotate), period);
                }
              }
              // INJECT CSS
              var css = document.createElement("style");
              css.type = "text/css";
              css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
              document.body.appendChild(css);
            };
    </script>      
  <link rel="shortcut icon" type="text/css" href="{{url('tuttee/images/images/fav-ico.ico')}}">
</head>

<body>

<!-- Wrap all page content here -->
<div id="wrap">
  <div class="nav-sec-wr">
     <header class="masthead">
    <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <a class="navbar-brand" href="{{route('/')}}"><img class="main-hd-logo" src="{{url('tuttee/images/logo.png')}}" alt="Bestshine Edu App"></a>
      </div>
      <div class="col-sm-6 help-div">
        <div class="pull-right  hidden-xs">    
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h3><i class="fa fa-info-circle" aria-hidden="true"></i></h3></a>
          <ul class="dropdown-menu">
              <li><a href="{{route('contact')}}"><i class="fa fa-mobile" aria-hidden="true"></i></i>get in touch</a></li>
              <li><a href="http://bestshineeduapp.com/assets/BestShineEduAppPPT.pptx"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>download ppt</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
</header>
  
  
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" data-spy="affix" data-offset-top="85"> <!-- data-spy="affix" data-offset-top="85" -->
        <div class="container">
          <div class="page-loader progress-container">
            <div class="progress-bar" id="myBar"></div>
          </div>
          <ul class="nav navbar-nav nav-justified m-nav-ul">
        <li class="active"><a href="{{route('/')}}" class="">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li> <a href="{{route('services')}}">Services</a>
                           
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-toggle disabled" data-toggle="dropdown" href="{{route('features')}}">Features
                            <!--  <span class="caret"></span> --></a>
                           <!--  <ul class="dropdown-menu">
                              <li><a href="#"></a></li>
                              <li><a href="#">Page 1-2</a></li>
                              <li><a href="#">Page 1-3</a></li>
                            </ul> -->
                          </li>
                         
                          <li class="dropdown">
                            <a class="dropdown-toggle disabled" data-toggle="dropdown" href="{{route('pricing')}}">Pricing
                            <!-- <span class="v_algn"><i class="fa fa-angle-down" aria-hidden="true"></i></span> --></a>
                            <!--<ul class="dropdown-menu">
                              <li><a href="#"></a></li>
                              <li><a href="#">Page 1-2</a></li>
                              <li><a href="#">Page 1-3</a></li>
                            </ul>-->
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Franchisee
                             <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="{{route('Demo_form')}}">Demo Application</a></li>
                              <li><a href="{{route('schoolvisit')}}">School Visit Form</a></li>
                              <li><a href="http://localhost:8000/tuttee/BEC-BDO-APPLICATION.pdf" download>GET BDO Enquiury Form</a></li>
                              <li><a href="{{route('service_agreement')}}">Service Agreement</a></li>
                              <!-- <li><a href="{{route('franchiess')}}">Franchiess Enquiry</a></li> -->
                            </ul>
                          </li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                           <li><a href="{{route('home')}}"  target="blank">Login <span><i class="fa fa-bars" aria-hidden="true"></i></span></a>
                          </li>
      </ul>

        </div>
      </div><!--/.nav-collapse -->

    </div><!--/.container -->
</div>
  </div>
<!--/.navbar -->
<!--  -->
<div class="banner-wr">
  <!--  -->
  <div class="wrapper hidden-xs">
    
       
            
                  
                      
                      <div class="col-sm-offset-1 col-md-offset-1 item banner-li-wr animated wow bounceInDown" style="animation-delay: 0.2s;"><a  class="hexa-1">
                  <img src="{{url('tuttee/images/images/homepage_hex - Copy.png')}}" alt="img" class="hex-bg-grn">
                <!--   <img src="{{url('tuttee/images/images/homepage_hex - 2.png')}}" alt="img" class="hex-bg-yellow"> -->
                  <span class="hexa-1-span" data-hover="Management">Management</span>
                    </a></div>
               
                      <div class="item banner-li-wr animated wow bounceInDown" style="animation-delay: 0.3s;"> <a>
                      <img src="{{url('tuttee/images/images/homepage_hex - Copy.png')}}" alt="img" class="hex-bg-grn">
                     <!--  <img src="{{url('tuttee/images/images/homepage_hex - 2.png')}}" alt="img"> -->
                      <span class="hexa-1-span" data-hover="Teacher">Teacher</span>
                   </a></div>
               
        
                      <div class="item banner-li-wr animated wow bounceInDown" style="animation-delay: 0.4s;"><a>
                      <img src="{{url('tuttee/images/images/homepage_hex - Copy.png')}}" alt="img" class="hex-bg-grn">
                     <!--  <img src="{{url('tuttee/images/images/homepage_hex - 2.png')}}" alt="img"> -->
                      <span class="hexa-1-span" data-hover="Parent">Parent</span>
                   </a></div>

                    <div class="item banner-li-wr animated wow bounceInDown" style="animation-delay: 0.5s;"><a>
                      <img src="{{url('tuttee/images/images/homepage_hex - Copy.png')}}" alt="img" class="hex-bg-grn">
                      <!-- <img src="{{url('tuttee/images/images/homepage_hex - 2.png')}}" alt="img"> -->
                      <span class="hexa-1-span" data-hover="student">Student</span>
                   </a></div>

                   <div class="item banner-li-wr animated wow bounceInDown" style="animation-delay: 0.6s;"><a>
                      <img src="{{url('tuttee/images/images/homepage_hex - Copy.png')}}" alt="img" class="hex-bg-grn">
                      <!-- <img src="{{url('tuttee/images/images/homepage_hex - 2.png')}}" alt="img"> -->
                      <span class="hexa-1-span" data-hover="Driver">Driver</span>
                   </a></div>
           

                

             
        
    <div class="bg">
      <img src="{{url('tuttee/images/images/hm-bnr-1.png')}}" />
      <img src="{{url('tuttee/images/images/hm-bnr-2.png')}}" />
      <img src="{{url('tuttee/images/images/hm-bnr-3.png')}}" />
      <img src="{{url('tuttee/images/images/hm-bnr-4.png')}}" />
      <img src="{{url('tuttee/images/images/hm-bnr-5.png')}}" />
    </div>
    </div>
    <div class="text-typ-wr">
         <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
         <h3>Smart Solution for 
          <span
             class="txt-rotate"
             data-period="2000"
             data-rotate='[ "Management.", "Teachers.", "Parents.", "Students.", "Driver." ]'></span>
        </h3>
    </div>

<!-- <div class="divider"></div> -->
<section class="sec-1">
   <div class="container">
       
      <div class="row">
        <div class="col-md-6 sec-1-wr">
          <h2 class="cap head-h">Enhancing your reputation<!-- <span class="div-img-wr"><img src="{{url('tuttee/images/images/div-gif.gif')}}"></span> --><span class="heading-line"></span></h2>
          <div class="pad-t-3"></div>
          <p>
            We affirm our mission to set a standard for our customers with the best web application that aids in efficiently managing educational institutions. And we have a high quality customer-centric service driven school management software and application in hand with efficient people and processes to implement it at your school successfully. 
            </p>
           <p>
             Our dynamic team of professionals with in-depth knowledge and proven expertise recommends best practices in the industry standards and we are ready to provide prompt and professional support to manage problems and concerns at your end. Training programs to meet the specific learning needs of different user groups can be organized with necessary training sessions. With the optimized talent and resources from our side, your school reputation increases among the parents and student community for sure.  
           </p>
           <!--  <div class="pad-t-3">
              
            </div> -->
        </div>
        <div class="col-md-6 sec-wr text-center">
          <img src="{{url('tuttee/images/images/mobi-new.png')}}" alt="mobi-img" vspace="" class="mobi-img-app animated wow rollIn">
        </div>
      </div>
      
  </div>
</section>
<section class="sec-2">
  <div class="black-wr">
    
  </div>

 <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="cap head-h white">Great Technology by Bestshine edu app <!-- <span class="content-logo"><img src="{{url('tuttee/images/images/tyn-logo.png')}}"></span> --><span class="heading-line"></span></h2>
          <div class="pad-t-3"></div>
            <p class="white">
              We present a complete cloud based and mobile app integrate web application for school management that automates the routine work of any institution with a click of a button. With our application in hand you can reduce the monotonous day to day activities of school administration and maintain connectivity loop between parents, teachers and students with the management. 
              Organized and interlinked modules with icon based dashboard features helps you to go paperless to record, tabulate and process every data without compromising on the privacy and security of your institution.

            </p>
        </div>
        
        
      </div>
 </div>
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-12">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
 <!--  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
 <div class="container">
    <div class="carousel-inner">
    <div class="item active">
      <div class="row">
        <div class="col-md-6">
          <h3 class="sub-head">Extremely Responsive</h3>
          <p class="white">
           BestShine Edu App supports in all Platforms like Desktop Application, Mobile Application & Tablet device with an User Friendly manner.
          </p>
          <div class="divider">
            
          </div>
          <div class="col-md-12 moreview-a-wr">
            <a href="#">More views</a>
          </div>
        </div>
        <div class="col-md-6 img-wr-slid">
          <img src="{{url('tuttee/images/images/res-view.png')}}">
        </div>

      </div>
    </div>

    <div class="item">
     <div class="row">
        <div class="col-md-6">
          <h3 class="sub-head">Mobile application screen</h3>
          <p class="white">
           The mobile application screen is interlinked with the Dashboard and comes with a user friendly interface to access, notify, request and update data to and from the management with appropriate user rights and secured login control. The application screen is different for every end user according to the user rights.
          </p>
          <div class="divider">
            
          </div>
          <div class="col-md-12 moreview-a-wr">
            <a href="#">More views</a>
          </div>
        </div>
        <div class="col-md-6 img-wr-slid">
          <img class="mobile-scr-res" src="{{url('tuttee/images/images/slide_mobile.png')}}">
        </div>
      </div>
    </div>

    <div class="item">
      <div class="row">
        <div class="col-md-6">
          <h3 class="sub-head">Dashboard screen</h3>
          <p class="white">
           The interactive dashboard of the web application gives an overall glimpse on the backend functional data of your institution like school profile, total no of employee & student, total attendance etc., Classified and organized modules for each and every feature adds transparency to the administration so that you can view and get an insight of your school data remotely from anywhere anytime. 
          </p>
          <div class="divider">
            
          </div>
          <div class="col-md-12 moreview-a-wr">
            <a href="#">More views</a>
          </div>
        </div>
        <div class="col-md-6 img-wr-slid">
          <img src="{{url('tuttee/images/images/dash-board.png ')}}">
        </div>
      </div>
    </div>
  </div>
 </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="slide-ar slide-lf-ar"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="slide-ar slide-rt-ar"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
   </div>
 </div>
</section>

<section class="sec-3 pad-t-3">
  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <span><img src="{{url('tuttee/images/images/ind-div.png')}}"></span><span class="text-center india-best">india's best</span><span><img src="{{url('tuttee/images/images/ind-div-right.png')}}"></span> <h1 class="cap head-h">SCHOOL MANAGEMENT SOFTWARE<span class="heading-line mr-15-a"></span></h1>
        </div>   
        <div class="pad-t-3 container"><p>Educational institutions and its management is a complex and inter-related process that requires lot of dedicated hard work and planning. Ours is a complete cloud based mobile app integrated web application for school management that facilitates an all-round automated backend administration and data management. You will have the privilege of anytime, anywhere access of the data, as a parent, student, driver or the management with the given user role and controlled access.  All day to day administrative monotonous activities of your institution gets automated and becomes hassle free procedures. 
          </p></div>
        <div class="slide-client">
          <div id="clients-carousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                 
    <ol class="carousel-indicators">
        <li data-target="#clients-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#clients-carousel" data-slide-to="1"></li>
        <li data-target="#clients-carousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Carousel items -->
        <div class="carousel-inner">
            
            <div class="item active">
             <div class="row">
                <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sai-junior.png')}}">
                    </a>
                    <span class="school-nm">SAI JUNIORS HOUSE (<i>TN</i>)</span>
                  </div>
                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/al-burooj.png')}}">
                    </a>
                    <span class="school-nm">AL-BUROOJ ISLAMIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/cam-school.png')}}">
                    </a>
                    <span class="school-nm">CAMBRIDGE MATRIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sri-shankara.png')}}">
                    </a>
                    <span class="school-nm">SRI SANKARA MATRICULATION HR. SEC. SCHOOL  (<i>TN</i>)</span>
                  </div>
                 
                  </div>
            </div>

<div class="item">
 <div class="row">
               <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sai-junior.png')}}">
                    </a>
                    <span class="school-nm">SAI JUNIORS HOUSE (<i>TN</i>)</span>
                  </div>
                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/al-burooj.png')}}">
                    </a>
                    <span class="school-nm">AL-BUROOJ ISLAMIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/cam-school.png')}}">
                    </a>
                    <span class="school-nm">CAMBRIDGE MATRIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sri-shankara.png')}}">
                    </a>
                    <span class="school-nm">SRI SANKARA MATRICULATION HR. SEC. SCHOOL  (<i>TN</i>)</span>
                  </div>
                 
                  </div>
</div>
<div class="item">
 <div class="row">
                <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sai-junior.png')}}">
                    </a>
                    <span class="school-nm">SAI JUNIORS HOUSE (<i>TN</i>)</span>
                  </div>
                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/al-burooj.png')}}">
                    </a>
                    <span class="school-nm">AL-BUROOJ ISLAMIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/cam-school.png')}}">
                    </a>
                    <span class="school-nm">CAMBRIDGE MATRIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sri-shankara.png')}}">
                    </a>
                    <span class="school-nm">SRI SANKARA MATRICULATION HR. SEC. SCHOOL  (<i>TN</i>)</span>
                  </div>
                 
                  </div>
            </div>
        </div>

    <a data-slide="prev" href="#clients-carousel" class="left carousel-control">‹</a>
    <a data-slide="next" href="#clients-carousel" class="right carousel-control">›</a>
</div><!--.Carousel-->
        </div> 
    </div>
  </div>
</section>
<section class="sec-4 pad-t-3">
   <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="cap head-h">Advanced features<span class="heading-line"></span></h2>
          <div class="pad-t-3"></div>
            <p class="">
               The integrated module based solutions for teachers, management, students, drivers and parents enables hassle free administration procedures. Ours is a powerful application that persuades every necessity of administrating any educational institutions. Being a cloud based application with desktop and mobile interface; we facilitate an all-round automated backend administration and data management. 
            </p>
        </div>
        <div class="col-md-6 features-side-im text-center">
          <img src="{{url('tuttee/images/images/touch.jpg')}}" class="wow animated zoomInDown">
        </div>
      </div>
 </div>
 <!-- test -->
<div id="particles-js" class="">
  <div class="pad-t-3 particles-absolute">
  <div class="container">
    <div class="col-md-12 home-feature-sec">
           <div class="pad-t-3 hidden-xs hidden-md">
          
          </div>
          <div class="col-md-12 text-center">
            <h2 class="cap head-h black">Some feature<span class="db"><img src="{{url('tuttee/images/images/element-h-line.png')}}" class="some-fea-img"></span> </h2>
            <div class="pad-t-3">
              
            </div>
          </div>
            <ul>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <img src="{{url('tuttee/images/images/fe-img.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Admission Management</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.1s;">
                  <img src="{{url('tuttee/images/images/fe-img-2.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Student Management</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.2s;">
                  <img src="{{url('tuttee/images/images/fe-img-3.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Staff Management</div></a>
                    </div>
                </div>
              </li><li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.3s;">
                  <img src="{{url('tuttee/images/images/fe-img-4.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Fee Management</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.4s;">
                  <img src="{{url('tuttee/images/images/fe-img-5.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Smart Attendance</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.5s;">
                  <img src="{{url('tuttee/images/images/fe-img-6.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Smart Homework</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.6s;">
                  <img src="{{url('tuttee/images/images/fe-img-7.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                         <a href="#"><div class="fe-text">Result Management</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.7s;">
                  <img src="{{url('tuttee/images/images/fe-img-8.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                    <a href="#"><div class="fe-text">Bus Tracking</div></a>
                    </div>
                </div>
              </li>
            </ul>
            <div class="pad-t-3">
                           <center><a class="more-fea-btn" href="{{route('features')}}">More features</a></center>
            </div>
        </div>
  </div>
 </div>




</div>
<div>

  </div>
<!-- test -->
</section>
<section class="abt-contact-wr container-fluid">
<!--   <div class="black-wr"></div> -->
      <div class="container text-center">
      <h2 class="heading">THE COMPANY YOU CAN TRUST</h2>
      <p class="pad-t-3">Bestshine Edu App allows school Administrator,Teacher,Parent,Driver to stay connected in real time. Bestshine Edu App has come with an comprehensive feature to provide everthing in a finger tip </p>
      <a class="contact-us-btn" href="{{route('contact')}}">CONTACT US</a>
    </div>
   </section>
   <div class="play-wr container text-right col-md-12">
           <div class="text-center">
            <ul>
              <!-- <li><img class="android-gif" src="{{url('tuttee/images/images/tenor.gif')}}"></li> -->
              <li><span><img class="android-gif wow animated rollIn" src="{{url('tuttee/images/images/tenor.gif')}}"></span><img class="wow animated zoomIn" src="{{url('tuttee/images/images/play.png')}}"></li>
            </ul></div>
         </div>
<section class="pd-0">
  <div class="blu-bg-wr">
   <a href="#"> <img src="{{url('tuttee/images/images/sys-bg2.png')}}" class="blu-bg"></a>
 </div>
 
</section>





<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a></li>
</ul>
<div class="contact-side-btn">

 <a href="{{route('contact')}}">
   <b style="color:white;">C<br>
o<br>
n<br>
t<br>
  a<br>
c<br>
t<br></b>  
<span>
<em>
  <i class="fa fa-phone-square" aria-hidden="true"></i>+91-63 803 52 803
</em>
<br>
<em>
 <i class="fa fa-envelope" aria-hidden="true"></i>info@bestshineeduapp.com
</em>

</span>
<br>

  </a>
</div>
<!-- modal -->
<!-- <div class="modal fadein animated in wish-pop" id="wish-pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 99999999; display: block;">



        <div class="modal-header text-center" style="border:none !important;">
            <a type="button" class="btn btn-default close" data-dismiss="modal" style="position: absolute;background: #ccccc9;opacity: 0.8;right: 31%;top: 12%;">X</a>
            <img style="min-width: 320px;margin: 54px auto;float: none;width:34%;" src="{{url('tuttee/images/images/wishes.jpg')}}">

        </div>
    </div>
    <div class="modal-backdrop in"></div> -->
<!-- modal -->
<footer class="container-fluid relative">
  <div class="container">
    <div class="row">
      <div class="get-in-touch col-md-6 r-side-br text-center">
      <!--   <h3>GET IN TOUCH....</h3> -->
        <span class="white sub-head">Subscribe to our newsletter</span>
         <form>
           <div class="input-group pad-t-3 mr-0-a">
              <input class="btn btn-lg" name="email" id="email" type="email" placeholder="E-mail" required="">
              <button class="btn sub-btn btn-primary btn-lg" type="submit"> Subscribe </button>
            </div>
         </form>
      </div>

      <div class="col-md-6 footer-blck text-center">
  

                <!--Grid column-->
                <div class="">
                  <span class="white sub-head">Get connected with us on !</span>
                    <!-- <h6 class="white text-center"><span class="sub-head">Get connected with us on !</span></h6> -->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-12 text-center social-ic-ft">
                    <!--Facebook-->
                    <a class="icons-sm fb-ic ml-0 animated wow fadeInRight" style="animation-delay: 0.2"><i class="fa fa-facebook white-text mr-lg-4"> </i></a>
                    <!--Twitter-->
                    <a class="icons-sm tw-ic"><i class="fa fa-twitter white-text mr-lg-4 wow fadeInRight" style="animation-delay: 0.4"> </i></a>
                    <!--Google +-->
                    <a class="icons-sm gplus-ic"><i class="fa fa-google-plus white-text mr-lg-4 wow fadeInRight" style="animation-delay: 0.6"> </i></a>
                    <!--Linkedin-->
                    <a class="icons-sm li-ic"><i class="fa fa-linkedin white-text mr-lg-4 wow fadeInRight" style="animation-delay: 0.8"> </i></a>
                    <!--Instagram-->
                    <a class="icons-sm ins-ic"><i class="fa fa-instagram white-text mr-lg-4 wow fadeInRight" style="animation-delay: 1"> </i></a>
                </div>
                <!--Grid column-->

  </div>
     
    </div>
    
    
  </div>
  <div class="footer-copyright">
        <div class="text-center white">
            © 2017 Copyright: <a href="#"><strong style="color:#efbf0b;">Bestshine Education campus Pvt.Ltd</strong></a> All rights reserved.
        </div>
    </div>

</footer>
 <script src="{{ url('tuttee/js/particles/particles.js')}}"></script>
<script src="{{ url('tuttee/js/particles/app.js')}}"></script> 

      
<!-- <script src="js/particles/stats.js"></script -->
<!-- <script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>  -->
<script type="">
  $('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
}); 

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})
// 
// 
</script>

<!-- <script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script> -->
<script type="text/javascript">
  window.setTimeout(function() {
    $(".wish-pop,.modal-backdrop").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
</body>
</html>
