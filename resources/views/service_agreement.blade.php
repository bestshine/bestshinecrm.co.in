<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Edu app, education app, School web app, school mobile app, School app, school software, e- School app, smartphone school app, educational management app, cloud based school app" />
<meta name="description" content=" A School Management App development company in Chennai, Tamilnadu, India, best Mobile App integrated to Web Application, Integrated school management, School software, Web Designing, SMS/Text portal, NEET/IAS coaching." />
<title>BEC-Service Agreement</title>
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/bootstrap.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/bs-slider.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/animate.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/font-awesome.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/font-awesome.css') }}"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,900" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,500i,700" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,500,600,700,800,900" rel="stylesheet"> -->

<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
<script src="https://use.fontawesome.com/c7a7b2acb2.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <script src="{{ url('tuttee/js/js.js')}}"></script>
   <script src="{{ url('tuttee/js/wow.min.js')}}"></script>
   <script>
              new WOW().init();
              </script> 
  <script>
function myFunction() {
    var x = document.getElementById("myDate").value;
    document.getElementById("demo").innerHTML = x;
}

</script>
<script type="text/javascript">
     // auto-width-input-box
$.fn.textWidth = function(text, font) {
    
    if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
    
    $.fn.textWidth.fakeEl.text(text || this.val() || this.text() || this.attr('placeholder')).css('font', font || this.css('font'));
    
    return $.fn.textWidth.fakeEl.width();
};

$('.width-dynamic').on('input', function() {
    var inputWidth = $(this).textWidth();
    $(this).css({
        width: inputWidth
    })
}).trigger('input');


function inputWidth(elem, minW, maxW) {
    elem = $(this);
    console.log(elem)
}

var targetElem = $('.width-dynamic');

inputWidth(targetElem);
// end
</script>
  <link rel="shortcut icon" type="text/css" href="{{url('tuttee/images/images/fav-ico.ico')}}">
</head>


<body class="franchiess-pg">
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
                          <li><a href="{{route('/')}}" class="">Home</a></li>
                          <li><a href="{{route('about')}}">About</a></li>
                          <li> <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('services')}}">Services</a>
                          </li>
                            <li class="dropdown">
                              <a class="dropdown-toggle disabled" data-toggle="dropdown" href="{{route('features')}}">Features
                              <!-- <span class="v_algn"><i class="fa fa-angle-down" aria-hidden="true"></i></span> --></a>
                              <!--<ul class="dropdown-menu">
                                <li><a href="#"></a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                              </ul>-->
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
                             <li class="dropdown active">
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
                           <li><a href="{{route('home')}}" target="blank" >Login <span><i class="fa fa-bars" aria-hidden="true"></i></span></a></li>
      </ul>

        </div>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div>
  </div>
<!--/.navbar -->
<!--  -->

  <!--  -->
  <div class="sub-page wrapper hidden-xs">
   
  </div>
<!-- <div class="divider"></div> -->
<section class="sec-1">
   <div class="container">
      <div class="row">
         <div class="col-md-12 sec-1-wr text-center">
          <h2 class="cap head-h gray">Service Agreement<!-- <span class="div-img-wr"><img src="{{url('tuttee/images/images/div-gif.gif')}}"></span> --><span class="heading-line mr-0-a"></span></h2>
          <div class="pad-t-3"></div>
          
        </div>
        <div class="from-wr col-md-12 agreement-section">
            <div>
                 
                <p>
                  Articles of agreement made at Chennai on the<input class="dash" id="dash" type="date" value="yyyy-mm-dd">, between “M/s BestShine Education Campus Pvt Ltd, No. 16/2, Shekhilar Street, RajivGandhi Nagar, Nesapakkam, Chennai-600078   (hereinafter referred to as the “BestShine” or “Service Provider”)  which expression shall, wherever the context so requires or admits be deemed to mean and include its successors, affiliates, legal representative and assigns) acting through Mr.K.Kumaravel, Director/ authorized signatory authorized of the ONE PART. 
                </p>
                <hr>
                 M/s <input type="text" class="width-dynamic proba dva dash" id="dash" />
                 <p>
                   (hereinafter referred to as the “The School/Institute” or “Client”).   which expression shall, wherever the context so requires or admits be deemed to mean and include its successors, affiliates, legal representative and permitted assigns) acting through Mr. <input type="text" class="width-dynamic proba dva dash" id="dash" />, authorized signatory authorized of the OTHER PART. 
                 </p>
                 <p>
                   That “BestShine” or “Service Provider” and “The School/Institute” or “Client” shall hereinafter be collectively referred to as the “PARTIES” and singly as “PARTY”.
                 </p> 

                  <h3>WHEREAS:</h3>

                  <p>
                    Service Provider would be providing the services of an application namely <select id="product-select" class="dash product-select">

                      <option value="item0">--Select an Item--</option>
                      <option value="item1"><b>“Bestshine Edu App”</b></option>
                      <option value="item2"><b>“Mega school app”</b></option>
                      <option value="item3"><b>“Shineschoolapp”</b></option>
                     <!--  <option value="item4"><b>“Shineschoolapp”</b></option> -->

  <!-- <option value=""><b>“Bestshine Edu App”</b></option>
  <option value=""><b>“Bestshine Edu App micro”</b></option>
  <option value=""><b>“Bestshine Edu App mega”</b></option>
  <option value=""><b>“Shineschoolapp”</b></option> -->
</select> <b>“Bestshine Edu App”</b> based on cloud server, thereby proving real time connectivity between School Management and parents. Through this application the school management could eliminate the gap between teachers and parents. The school can send daily information/ feedback regarding student activities, performances or academic records etc. and parents can also check and evaluate the performance of their children. 
                  </p>
                  <br>
                  <p>
                    Service Provider represented that they have adequate knowledge and requisite infrastructure, proper facilities, in house man power/staff and experience to carry out this activities and have offered to provide services as mentioned in <b>Annexure-A</b> to “The School/Institute”.
                  </p><br>
                  <br>
                  <p>
                    “The School/Institute” relying on the representations of Service Provider, has agreed to appoint them on the following terms and conditions which are mutually acceptable to the Parties:
                  </p>
                  <hr>
                  <h3>NOW THEREFORE IT IS AGREED BY AND BETWEEN THE PARTIES HERETO AS FOLLOWS:</h3>
                   <h4>1) BASIC UNDERSTANDING & APPOINTMENT:</h4>
                  <p>
                    1.  “Service Provider” hereby appoints & “The School/Institute” hereby accepts appointment, on a non exclusive basis for providing of aforesaid services. 
                    <br>
                    <br>
                    2.  List of Services enclosure for exclusive usage of “The School/Institute” in Annexure A. 
                    <br>
                    <br>
                    3.  That “Service Provider” shall also perform all acts, incidental to or as reasonably required for effecting the purpose of this Agreement and towards this end, undertake to execute such other document(s) as may be required by “The School/Institute” and/ or make application(s) that may be required by any law or regulation before statutory authorities/government bodies to give effective discharge to the responsibilities required under this Agreement.
                  </p>
                  <hr>
                   
                   <h4>2) TERMS AND CONDITIONS / PROVISION OF THE SERVICES:</h4>
                  <p>
                    With effect from the commencement date/date of execution of this agreement, the Service Provider shall, throughout the Term of the Agreement, provide the Services to the Client/Second Party.
                  </p>
                  <hr>

                    <h4>3) CONFIDENTIALITY:</h4>
                  <p>
                   That the Parties agree that the contents of this Agreement are of a confidential nature and are Confidential Information for the purpose of this Agreement. Neither Party will, without the prior written consent of the other Party, divulge or disclose to any third party or in any manner publicize the contents of this Agreement.<br>

                    The Service Provider shall provide the Services with reasonable skill and care, commensurate with prevailing standards.<br>
                    <br>
                    The Service Provider shall act in accordance with all reasonable instructions given to it by the Client provided such instructions are compatible with the specification of Services provided in the Agreement.<br>
                    <br>
                    The Service Provider shall use all reasonable endeavours to accommodate any reasonable changes in the Services that may be requested by the Client, subject to the Client’s acceptance of any related reasonable changes to the Fees that may be due as a result of such changes.<br>

                  </p>
                  <hr>

                  <h4>4) CLIENT’S/ SECOND PARTY   OBLIGATIONS:</h4>
                  <p>
                   The Second Party shall use all reasonable endeavours to provide all pertinent information to the Service Provider that is necessary for the Service Provider’s provision/implementation of the Services.<br>
                   <br>
                    The second party shall be responsible for ensuring that it complies with all statutes, regulations, byelaws, standards, codes of conduct and any other rules relevant to the provision of the Services which want to get.<br>
                    <br>
                    The Second Party shall provide data of faculties, students and buses and other necessary details, if any when required for the Technical Services to be completed under this agreement.<br> 
                    <br>
                    The Second party shall provide reasonable efforts to perform the Technical Services requested within the projected time period indicated in this agreement. In the event of Technical Services and Deliverables cannot be completed by the due date and in each case where the circumstances beyond the control of the second party, hey will notify to first party as soon as reasonably possible. <br>
                    <br>
                    The Second Party may, from time to time, issue reasonable instructions to the Service Provider in relation to the Service Provider’s provision of the Services. Any such instructions should be compatible with the specification of the Services provided in the Agreement.<br>
                    <br>
                    In the event that the Service Provider requires the decision, approval, consent or any other communication from the Second Party in order to continue with the provision of the Services or any part thereof at any time, the Second Party shall provide the same in a reasonable and timely manner.<br>
                    <br>
                    If any consents, licences or other permissions are needed from any third parties such as landlords, planning authorities, local authorities or similar, it shall be the Second Party’s responsibility to obtain the same in advance of the provision of the Services (or the relevant part thereof).<br>
                    <br>
                    If the nature of the Services requires that the Service Provider has access to the Second Party’s home or any other location, access to which is lawfully controlled by the Second Party, the Second Party shall ensure that the Service Provider has access to the same at the times to be agreed between the Service Provider and the Second Party as required. <br>
                    <br>
                    Any delay in the provision of the Services resulting from the Second Party’s failure, mistake or delay in complying with any of the provisions of the Agreement shall not be the responsibility or fault of the Service Provider.<br>
                    <br>
                    Service Provider will complete the technical services and provide the Deliverables to Second Party within Sixty Days whereas the Service provider will endeavour to deliver the services as soon as possible after done its part i.e receipt of materials/ data to be analyzed. <br>


                  </p>
                  <hr>

                   <h4>5) EACH PARTY SHALL:</h4>
                   <p>
                   Keep or procure that there are kept, such records and books of account as are necessary to enable the amount of any sums payable pursuant to the Agreement to be accurately calculated.<br>
                   <br>

                    at the reasonable request of the other Party, allow that Party or its agent to inspect those records and books of account and, to the extent that they relate to the calculation of those sums, to take copies of them<br>
                  </p>
                  <hr>

                  <h4>6) RESPONSIBILITIES:</h4>
                   <p>
                   Each party agrees to accept the responsibility for claims for injuries or damages to any person or persons or property that arises out of that party’s negligent acts or omissions or wilful misconduct in connection with this agreement. <br>
                   <br>

                    Each party further agrees that the other party shall not be liable for damages arising solely from injuries or damages sustained by any person or persons or property resulting from its own negligent performance or omission or willful misconduct under this agreement. <br>
                    <br>

                    The parties understand and agrees that the Technical Services to be performed is limited to reporting on the results obtained and shall not include any intellectual contributions by the first party.<br>
                    <br>
                  </p>
                  <hr>

                  <h4>7) RENEWAL AND REVISIONS:</h4>
                   <p>
                   This agreement will be initially valid for a period of 2 year from the date of signing of this agreement for both parties.<br>
                   <br>

                    Upon termination or expiration of this agreement, the parties may elect to renew the agreement for successive one year term upon mutually agreed terms and conditions.<br>
                    <br>
                    Prior to the end of the aforesaid period i.e. 2 year, term of this agreement, the school may notify to the First Party that it desires to renew this agreement with or without any revision or amendment of any of the term and condition set out in this agreement or to any of the schedules or exhibit set out therein.<br>
                    <br>
                  </p>
                  <hr>

                  <h4>8) PUBLICITY AND USE OF NAME:</h4>
                   <p>
                  First party is authorized to use the name of <select id="2nd-product-select" class="dash product-select">
  <option value=""><b>--select product--</b></option>
</select> “Bestshine Edu App” to its school advertisement, pamphlets, sign board and any other place as per required and when necessary by the first party. Further the first party can also use the name of second party for their app advertisement and can also refer the name of second party to another party.<br>
                   <br>
                  </p>
                  <hr>

                  <h4>9) ARBITRATION:</h4>
                   <p>
                   That it has further been agreed between the parties that in case of any dispute or difference in the payment, the same can be settled by in-house mechanism i.e by calling a meeting between the senior officials of both the parties. If the dispute persists even after the said meetings the parties are at liberty to refer the matter to a sole Arbitrator with the consent of both the parties. If the parties fails to arrive at a consensus on the name of the proposed arbitrator then they will intimate the same to the other PARTY within 30 days of the receipt of the said proposed name for the arbitration and in such case the PARTY is at liberty to approach the appropriate court for appointment of an Arbitrator for the purpose of adjudication of the dispute.<br>
                   <br>
                  </p>
                  <hr>

                  <h4>10) ASSIGNMENT:</h4>
                   <p>
                   This assignment may not be assigned or transferred by either party without the prior written consent of the other party. <br>
                   <br>
                  </p>
                  <hr>

                  <h4>11) SEVERABILITYL:</h4>
                   <p>
                    If any clause provision or section of this agreement is held to be illegal or invalid by any court, the invalidity of such clause, provision or section shall not affect any of the remaining clauses, provisions or sections and this agreement shall be construed and enforced as if such illegal or invalid clause, provision or section had not been contained herein. <br>
                   <br>
                  </p>
                  <hr>

                  <h4>12) ENTIRETY OF AGREEMENT:</h4>
                   <p>
                      This Agreement constitutes the entire agreement between first and second party with respect to the Technical Services and no statement, whether written or oral, or purchase order made before or at the signing of this agreement will vary or modify these written terms. Any modification of this Agreement shall be in writing and shall be signed by both parties.<br>
                   <br>
                  </p>
                  <hr>

                   <h4>13) TERMINATION:</h4>
                   <p>a.  Either Party, upon 90 days written notice to other Party on valid grounds, may terminate the agreement in whole or in part, at any time before the listed date of expiration.<br>
                   <br>

                    b.  That the termination of this Agreement for any reason whatsoever, shall be without prejudice to and shall not effect any claim, right, action or remedy which may have accrued to either Party prior to such termination.<br>
                  </p>
                  <hr>

                   <h4>14) GOVERNING LAW:</h4>
                   <p>
                   This agreement shall be governed by the laws of the state of Tamil Nadu and any disputes arising under it shall be instituted in the appropriate courts of city in which registered office of first party is situated. <br>
                   <br>
                  </p>
                  <hr>

                   <h4>15) PRICING /CHARGES FOR SERVICES :</h4>
                   <p>
                   A non refundable amount of Rs.<input type="text" class="dash" id="dash">      (Rupee<input type="text" class="width-dynamic proba dva dash" id="dash" /> Only) for installation of various application shall be initially paid, by school to the First Party, on the date of signing of this agreement.
                    <br>
                   <br>
                   The School shall make further payment through DD/cheques/Online to the First Party on monthly basis payable in advance for every forthcoming month or as case may, at rate prescribed in <b>Annexure-B</b> of this agreement.<br>
                  </p>
                  <hr>

                   <h4>16) PAYMENT MODE:</h4>
                   <p>
                   1. By DD “BESTSHINE EDUCATION CAMPUS PVT.LTD".<br>
                   <br>

                    2.  By Cheque in the name of “BESTSHINE EDUCATION CAMPUS PVT.LTD" <br>
                  </p>
                  <hr>

                  <h4>17) INDEMNIFICATION :</h4>
                   <p>
                   Notwithstanding anything to the contrary, the First Party and the Second Party hereby undertake to indemnify and keep indemnified each other and their directors, employees and agents, if any, against all claims, demands, damages, penalties, costs or expenses of any kind whatsoever, which may arise against or be incurred by their employees in connection with any action/omission on their part pursuant to or in connection with this Agreement and/or arising out of running their respective business or otherwise caused by an act, default or neglect of any Party or any of their employees or otherwise arising out of any breach of any of the provisions, undertakings, representations and warranties and covenants of this Agreement. 
                    <br>
                   <br>
                  </p>
                  <hr>

                  <h4>18) FAILURE TO PAY :</h4>
                   <p>
                   In case of any delay in payment as per the schedule agreed as per <b>Annexue-B</b>, The second party not pays the amount within Generate next Month Service Bill,  then all services provided by first party are on hold upto Clear Previous Month Payment .
                    <br>
                   <br>
                   However, in such an event, First Party retain the ownership right of its application.<br>
                  </p>
                  <hr>

                   <h4>19) FORCE MAJEURE:</h4>
                   <p>
                   In case of any delay in payment as per the schedule agreed as per <b>Annexue-B</b>, The second party not pays the amount within Generate next Month Service Bill,  then all services provided by first party are on hold upto Clear Previous Month Payment .No Party to the agreement shall be liable for any failure or delay in performing their obligations where such failure or delay results from any cause that is beyond the reasonable control of that Party. Such causes include, but are not limited to: power failure, internet service provider failure, server related issues, industrial action, civil unrest, fire, flood, storms, earthquakes, acts of terrorism, acts of war, governmental action or any other event that is beyond the control of the Party in question.
                    <br>
                   <br>
                    In the event that a Party to the Agreement cannot perform their obligations hereunder as a result of force majeure for a continuous period two month, the other Party may at its discretion terminate the Agreement by written notice at the end of that period. In the event of such termination, the Parties shall agree upon a fair and reasonable payment for all Services provided up to the date of termination. Such payment shall take into account any prior contractual commitments entered into in reliance on the performance of the Agreement.<br>
                  </p>
                  <hr>

                   <h5>IT WITNESS THEREOF, FIRST PARTY AND SECOND PARTY HAVE EXECUTED THIS AGREEMENT </h5>
                   <div class="col-md-6">
                     <h3>First Party </h3>
                     <b>BestShine Education Campus Private Limited </b>
                     <p>Signature <span class="signature-block"></span> </p>
                     <p>Name& Designation <input type="text" class="dash" id="dash"> </p>
                     <p>DATE <input type="text" class="dash" id="dash"> </p>
                   </div>
                    <div class="col-md-6">
                     <h3>Second Party </h3>
                     <b> </b>
                     <p>Signature <span class="signature-block"></span> </p>
                     <p>Name& Designation <input type="text" class="dash" id="dash"> </p>
                     <p>DATE <input type="text" class="dash" id="dash"> </p>
                   </div>
                  <hr>
                </div>
                <div class="col-md-12">
                  <div class="col-md-6">
                       <h3>1.  Witness:</h3>
                       <p>Signature <span class="signature-block"></span> </p>
                        <p>NAME <input type="text" class="dash" id="dash"> </p>
                       <div class="form-group col-md-4 col-xs-12 checkbox">
                          <div class="form-group">
                           Address:
                            <textarea style="width: 232px;margin-left: 12px;" class="form-control" rows="5" id="comment"></textarea>
                              </div>
                        </div>
                        <br>
                        <br>
                  </div>
                  <div class="col-md-6">
                      
                        <h3>2.  Witness:</h3>
                        <p>Signature <span class="signature-block"></span> </p> 
                        <p>NAME <input type="text" class="dash" id="dash"> </p>
                        <div class="form-group col-md-4 col-xs-12 checkbox">
                          <div class="form-group">
                           Address:
                            <textarea style="width: 232px;margin-left: 12px;" class="form-control" rows="5" id="comment"></textarea>
                              </div>
                        </div>
                  </div>
                 
                </div>

        </div>
      </div>
  </div>
</section>


<section class="sec-1">
   <div class="container">
      <div class="row">
         <div class="col-md-12 sec-1-wr text-center">
          <h4 class="cap head-h gray">Annexure-A- <br>
           <span class="heading-line mr-0-a"></span></h4>
          <center><p class="text-center">Services Package Offered by BestShine at the time of installation </p></center>
        <br>
        <!-- select-option to hide table colume -->
         <select id="sel">
          <option value="tab">select plan</option>
            <option value="first-tab">Micro</option>
            <option value="second-tab">Basic</option>
            <option value="third-tab">Standard</option>
            <option value="fourth-tab">Premium</option>
        </select>
       <!--  <div class="tab-navigation">              
    <select id="select-box">
      <option value="1">Micro</option>
      <option value="2">Basic</option>
      <option value="3">Standard</option>
      <option value="4">Premium</option>
    </select>
  </div> -->
        <!-- end select-option to hide table colume -->
        <table class="table table-striped choice first-tab">
            <thead>
              <tr class="text-center">
                <th class="text-center">S.No.</th>
                <th class="text-center">Services</th>
                <th class="text-center">Micro</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Web App For: </td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>School admin Management</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              
              
              <tr>
                <td>2</td>
                <td>Mobile App For:</td>
                <td></td>
                 
              </tr>
              <tr>
                <td></td>
                <td>Student</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              
              <tr>
                <td></td>
                <td>Parent</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
             
             <tr>
                <td>3</td>
                <td>Dashboard </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Master</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Employee</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>6</td>
                <td>Student</td>
                 <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>7</td>
                <td>Student Attendance</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              
              <tr>
                <td>9</td>
                <td>Notification</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>10</td>
                <td>Exam Timetable</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>11</td>
                <td>Class Timetable </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>12</td>
                <td>Upload data manager</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>13</td>
                <td>Export manager</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>14</td>
                <td>Homework</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>15</td>
                <td>Post</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>16</td>
                <td>Gallery</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>17</td>
                <td>Text SMS</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>18</td>
                <td>Share </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>19</td>
                <td>Result</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>20</td>
                <td>Report</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
             
            </tbody>
          </table>
          <!-- begining of tab 2 basic -->

          <table class="table table-striped choice second-tab">
            <thead>
              <tr class="text-center">
                <th class="text-center">S.No.</th>
                <th class="text-center">Services</th>
               
                <th>Basic</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Web App For: </td>
                <td></td>
                
              </tr>
              <tr>
                <td></td>
                <td>School admin Management</td>
               
                <td><i class="fa fa-check my_check"></i></td>
                
              </tr>
              <tr>
                <td></td>
                <td>Teaching Staff</td>
              
                <td><i class="fa fa-check my_check"></i></td>
               
              </tr>
              <tr>
                <td></td>
                <td>Non Teaching Staff</td>
               
                <td><i class="fa fa-check my_check"></i></td>
              
              </tr>
              <tr>
                <td>2</td>
                <td>Mobile App For:</td>
                <td></td>
                
              </tr>
              <tr>
                <td></td>
                <td>Parent</td>
               
                <td><i class="fa fa-check my_check"></i></td>
               
              </tr>
              <tr>
                <td></td>
                <td>Teacher</td>
               
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td></td>
                <td>Parent</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              
             <tr>
                <td>3</td>
                <td>Dashboard </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Master</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Employee</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>6</td>
                <td>Student</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>7</td>
                <td>Student Attendance</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>8</td>
                <td>Employee Attendance</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>9</td>
                <td>Notification</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>10</td>
                <td>Exam Timetable</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>11</td>
                <td>Class Timetable </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>12</td>
                <td>Teacher Timetable </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>13</td>
                <td>User role</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>14</td>
                <td>Upload data manager</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>15</td>
                <td>Export manager</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>16</td>
                <td>Homework</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>17</td>
                <td>Post</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>18</td>
                <td>Gallery</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>19</td>
                <td>Text SMS</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>

              <tr>
                <td>20</td>
                <td>Student leave request </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>

               <tr>
                <td>21</td>
                <td>Feed back</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>22</td>
                <td>Share </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>23</td>
                <td>Fees </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>24</td>
                <td>Result</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>25</td>
                <td>Knowledge bank</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>26</td>
                <td>Report</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
             
             
            </tbody>
          </table>
          <!-- end of tab 2 basic -->
          <!-- begining of tab 3 standard -->
           <table class="table table-striped choice third-tab">
            <thead>
              <tr class="text-center">
                <th class="text-center">S.No.</th>
                <th class="text-center">Services</th>
                
                <th>Standard</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Web App For: </td>
                <td></td>
                
              </tr>
              <tr>
                <td></td>
                <td>School admin Management</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td></td>
                <td>Teaching Staff</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td></td>
                <td>Non Teaching Staff</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Mobile App For:</td>
                <td></td>
                
              </tr>
              <tr>
                <td></td>
                <td>Parent</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td></td>
                <td>Teacher</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td></td>
                <td>Parent</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td></td>
                <td>Driver</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
             <tr>
                <td>3</td>
                <td>Dashboard </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Master</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Employee</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>6</td>
                <td>Student</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>7</td>
                <td>Student Attendance</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>8</td>
                <td>Employee Attendance</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>9</td>
                <td>Notification</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>10</td>
                <td>Exam Timetable</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>11</td>
                <td>Class Timetable </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>12</td>
                <td>Teacher Timetable </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>13</td>
                <td>User role</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>14</td>
                <td>Upload data manager</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>15</td>
                <td>Export manager</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>16</td>
                <td>Homework</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>17</td>
                <td>Post</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>18</td>
                <td>Gallery</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>19</td>
                <td>Text SMS</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>

              <tr>
                <td>20</td>
                <td>Student leave request </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>

               <tr>
                <td>21</td>
                <td>Feed back</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>22</td>
                <td>Share </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>23</td>
                <td>Fees </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>24</td>
                <td>Result</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>25</td>
                <td>Knowledge bank</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>26</td>
                <td>Report</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>27</td>
                <td>Voice SMS</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>28</td>
                <td>Bus tracking</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>29</td>
                <td>Library</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>30</td>
                <td>Transport managent</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              
             
            </tbody>
          </table>
          <!-- end of tab 3 standard -->
          <!-- begining of tab 4 premium -->
             <table class="table table-striped choice fourth-tab">
            <thead>
              <tr class="text-center">
                <th class="text-center">S.No.</th>
                <th class="text-center">Services</th>
                <th>Premium</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Web App For: </td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>School admin Management</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td></td>
                <td>Teaching Staff</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td></td>
                <td>Non Teaching Staff</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Mobile App For:</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>Parent</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td></td>
                <td>Teacher</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td></td>
                <td>Parent</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td></td>
                <td>Driver</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
             <tr>
                <td>3</td>
                <td>Dashboard </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Master</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Employee</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>6</td>
                <td>Student</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>7</td>
                <td>Student Attendance</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>8</td>
                <td>Employee Attendance</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>9</td>
                <td>Notification</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>10</td>
                <td>Exam Timetable</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>11</td>
                <td>Class Timetable </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>12</td>
                <td>Teacher Timetable </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>13</td>
                <td>User role</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>14</td>
                <td>Upload data manager</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>15</td>
                <td>Export manager</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>16</td>
                <td>Homework</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>17</td>
                <td>Post</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>18</td>
                <td>Gallery</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>19</td>
                <td>Text SMS</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>

              <tr>
                <td>20</td>
                <td>Student leave request </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>

               <tr>
                <td>21</td>
                <td>Feed back</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>22</td>
                <td>Share </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>23</td>
                <td>Fees </td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>24</td>
                <td>Result</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>25</td>
                <td>Knowledge bank</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>26</td>
                <td>Report</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>27</td>
                <td>Voice SMS</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>28</td>
                <td>Bus tracking</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
              <tr>
                <td>29</td>
                <td>Library</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>30</td>
                <td>Transport managent</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>31</td>
                <td>payroll</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>32</td>
                <td>Daily Expenditure</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>33</td>
                <td>Stock management</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>34</td>
                <td>Lab managent</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
               <tr>
                <td>35</td>
                <td>inventory management</td>
                <td><i class="fa fa-check my_check"></i></td>
              </tr>
             
            </tbody>
          </table>
          <!-- end of the tab 4 premium -->


          <br>
           <h3 class="cap head-h gray text-center">Annexure-B- Payment Schedule</h3>
           <p>Gross Contract Value : <input type="text" class="dash" id="dash"> </p>
           <p>Monthly Basis : <input type="text" class="dash" id="dash"> </p>
          <div class="pad-t-3"></div>
          <div class="col-md-12 table-responsive">
            <table class="table table-striped table-shd">
              <thead>
              <tr class="text-center">
                  <th class="text-center">S.No.</th>
                  <th class="text-center">Month/Time</th>
                  <th class="text-center">Rate /Amount (Rs.)</th>
                  <th class="text-center">Scheduled payment date</th>
              </tr>
            </thead>
              <tbody>
                
               <tr>
                  <td>01.</td>
                  <td>One time</td>
                  <td><p>Rs : <input type="text" class="dash" id="dash"> </p></td>
                  <td>Installation fee (Paid as non- refundable in advance)</td>
                </tr>
                <tr>
                  <td>02.</td>
                  <td>Every month</td>
                  <td><p>Rs : <input type="text" class="dash" id="dash"> </p></td>
                  <td>On or before 7th day of same month</td>
                </tr>
                 <tr>
                  <td>03.</td>
                  <td>Text Message</td>
                  <td><p> <input type="text" class="dash" id="dash"> </p></td>
                  <td></td>
                </tr>
                 <tr>
                  <td>04.</td>
                  <td>Voice call</td>
                  <td><p> <input type="text" class="dash" id="dash"> </p></td>
                  <td></td>
                </tr>
                 <tr>
                  <td>05.</td>
                  <td>Website AMC</td>
                  <td><p>Rs : <input type="text" class="dash" id="dash"> </p></td>
                  <td><p> <input type="text" class="dash" id="dash"> </p></td>
                </tr>
             
            </tbody>
          </table>
          </div>
          
        </div>
          <br>
         <br>
         <div class="col-md-12 text-center">
          <code class="text-center">Note: The all payments are excluding GST.</code>
         <h5 class="text-center">----Please contact with company for detail regarding price and installation of aforesaid apps. ----</h5>
         </div>
         <br>
         <br>
         <div class="div-print-wr text-center" ><button type="button" class="print-btn btn btn-primary">Print</button></div>
         
       
        

         
      </div>
  </div>
</section>




<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a></li>
</ul>
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
  <div class="footer-copyright text-center">
        <!--  -->
            © 2017 Copyright: <a href="#"><strong style="color:#efbf0b;">Bestshine Education campus Pvt.Ltd</strong></a> All rights reserved.
        </div>
    </div>

</footer>
 <script src="{{ url('tuttee/js/particles/particles.js')}}"></script>
<script src="{{ url('tuttee/js/particles/app.js')}}"></script>         
 
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
// date-picker
$(document).ready(function () {
    $('#datepicker').datepicker({
      uiLibrary: 'bootstrap'
    });
});
</script>
</body>
</html>
