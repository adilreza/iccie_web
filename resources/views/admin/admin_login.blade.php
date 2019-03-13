<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin login | Frontier Semiconductor</title>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

<link href="{{ URL::asset('fsm_all_web_file/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('fsm_all_web_file/css/style.css') }}" rel="stylesheet">
<link href="{{ URL::asset('fsm_all_web_file/css/one.css') }}" id="style_theme" rel="stylesheet">
<link href="{{ URL::asset('fsm_all_web_file/assets/owl-carousel/css/owl.carousel.min.css')}}" rel ="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}">

</head>
<body>
<!-- Pre Loader -->
<div id="dvLoading"></div>
<!-- Top Wrapper Start -->

<!-- Top Wrapper End -->
<!-- Header Logo Area Start -->
<div class="header-logo-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-5 col-lg-3 col-md-12">
          <div class="logo"> <a class="main_sticky_main_l" href="{{route('index')}}" title="Frontier Semiconductor"><img src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}" width="120px" height="50px" alt=""></a> </div>

      </div>
      <div class="col-xl-7 col-lg-9 col-md-12 d-none d-lg-block d-md-block">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="header-logo-address">
              <div class="header-logo-icon"> <i class="fa fa-phone-square"></i> </div>
              <div class="header-logo-text">
                <p>+01 666 777 999</p>
                <p>+01 555 222 457</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="header-logo-address">
              <div class="header-logo-icon"> <i class="fa fa-envelope"></i> </div>
              <div class="header-logo-text">
                <p>info@gmail.com</p>
                <p>info@test.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="header-logo-address last-child">
              <div class="header-logo-icon"> <i class="fa fa-globe"></i> </div>
              <div class="header-logo-text">
                <p>www.website.com</p>
                <p>www.test.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Header Logo Area End -->
<!-- Menu Area Start -->
<div class="mainmenu-area header-sticky bg-dark-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 d-none d-md-block d-lg-block">
          <div class="main-menu-area">
            <nav>
              <ul>
              <li class=""><a href="{{route('index')}}">Home</a></li>
               
      			
           
              <li><a href="{{URL::to('/product_list')}}">Products </a></li>
              
              <li><a href="#">Company<i class="fa fa-angle-down"></i></a>
                <ul class="dropdown_menu">
                    <li><a href="{{URL::to('/contact_us')}}">Contact Us</a></li>
                    <li><a href="{{route('about_us')}}">About Us</a></li>
                      
                </ul>
              </li>

            <li><a href="{{URL::to('/library')}}">Library </a></li>





              </ul>
			{{-- <div class="search-form d-sm-none d-md-none d-xl-block">
              <form method="post" action="contact-us.html">
                <div class="form-group clearfix">
                  <input name="email" value="" placeholder="Search" required="" type="email">
                  <button type="submit" class="theme-btn subscribe-btn"><span class="fa fa-search"></span></button>
                </div>
              </form>
            </div>	   --}}
            </nav>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 d-block d-md-none d-lg-none"> 
          <!-- Mobile Menu Area Start -->
          <div class="mobile-menu-area">
            <div class="mobile-menu">
              <nav id="mobile-menu-active">
                <ul>
                <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
               			
					  
                <li><a href="{{URL::to('/product_list')}}">Products</a></li>
                <li><a href="{{URL::to('/about_us')}}">About Us</a></li>
               
                <li><a href="{{URL::to('/contact_us')}}">Contact Us</a></li>
              </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu Area End --> 
<!-- Breadcrumb Wrapper Start -->
{{-- <div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Subscription Status</h1>
    <ul class="page-breadcrumb">
    <li><a href="{{URL::to('/')}}">Home</a></li>
	  <li>Features</li>
      <li>subscriber</li>
    </ul>
  </div>
</div> --}}
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper search-results-wrapper" style="height:600px;">
<div class="container">


        <div class="login-box" style="background:#c8d6e5;width:50%;">
                <div class="login-title">
                  <h3>Admin Sign In</h3>
                </div>
            <form action="{{URL::to('/fsm_admin/login_request')}}" method="POST" id="admin_login_form">
                  <div class="single-login-field">
                    <input placeholder="Email Address" id="admin_email" name="email" type="email" required>
                  </div>
                <input type="hidden" id="login_token" name="_token" value="{{csrf_token()}}">
                  <br>
                  <div class="single-login-field">
                    <input placeholder="Password" id="admin_password" name="password" type="password" required>
                  </div>
                  
                    <h6 id="message_status"></h6>
                  <div class="single-login-field">
                    <button class="bttn" type="submit">Sign in</button>
                  </div>
                </form>
            <div class="dont_have"> <a href="{{URL::to('/fsm_admin/admin_report')}}">Face problem? Report the problem</a> </div>
        </div>




 


  
</div>
</div>
<script type="text/javascript">

function pageRedirect() {
    window.location.replace("{{URL::to('/admin/home')}}");
    }   

    $('#admin_login_form').on('submit', function(e){
        e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{URL::to('/fsm_admin/login_request')}}",
                data: {
                    email: $('#admin_email').val(),
                    password: $('#admin_password').val(),
                    _token: $('#login_token').val()
                },
                success:function(response)
                {
                    if(response=="success")
                    {
                        $("#message_status").text("Ok! Admin Recognized");
                        $("#message_status").css('color','green');
                        //console.log(response);
                        setTimeout("pageRedirect()", 2000);

                    }
                    else if(response=="failed")
                    {
                        $("#message_status").text("Soryy! Admin Not Recognized");
                        $("#message_status").css('color','red');
                        console.log(response);
                    }
                }
            });
    })

</script>






<!-- Inner Page Wrapper End -->
<!-- Our CTA Wrapper Start -->

<!-- Our CTA Wrapper End -->

<!-- Footer Wrapper End -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="footer-text"> 
         <a class="footer-logo" href="{{route('index')}}" title="Frontier Semiconductor"><img src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}" width="120px" height="60px" alt=""></a> 

          <p>Frontier Semiconductor is the leading manufacturer of stress measurement tools for semiconductor, MEMS, optoelectronic, and flat panel applications.</p>
          <div class="social-icons"> <a href="javascript:void(0)" class="bttn"> <i class="fab fa-twitter"></i> </a> <a href="javascript:void(0)" class="bttn"><i class="fab fa-linkedin"></i></a> <a href="https://web.facebook.com/fsmofp" class="bttn"> <i class="fab fa-facebook"></i> </a> <a href="javascript:void(0)" class="bttn"> <i class="fab fa-skype"></i> </a> <a href="javascript:void(0)" class="bttn"> <i class="fab fa-pinterest-p"></i> </a> </div>
        </div>
      </div>
      <div class="col-xl-2 col-md-3">
        <div class="links">
          <h3>Links</h3>
          <ul class="">
          <li><a href="{{route('index')}}">Home Page</a></li>
          <li><a href="{{route('about_us')}}">About Us</a></li>
          <li><a href="{{route('contact_us')}}">Contact Us</a></li>
          <li><a href="{{route('services')}}">Our Services</a></li>
         
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-md-3">
        <div class="location">
          <h3>Location</h3>
          <ul>
            <li>Corporate Head Office. </li>
            <li><i class="fa fa-home"></i>165 Topaz st., Milpitas, CA 95035 </li>
            <li><i class="fa fa-phone"></i> <a href="#">+1 408 432 8838</a></li>
            <li><i class="fa fa-envelope"></i> <a href="mailto:">fsm100@frontiersemi.com</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xl-4 col-md-12">
        <div class="instagram">
          <h3>Instagram</h3>
          <hr style="width:90%;background:darkgrey;">
          <ul class="row gram-image">
            <li class="col-xs-4 col-4"><a href="#"><img  style="height:110px;width:80px;"  alt="" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L_C2C.png')}}"></a></li>
            <li class="col-xs-4 col-4"><a href="#"><img  style="height:110px;width:80px;"  alt="" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413_C2C.png')}}"></a></li>
            <li class="col-xs-4 col-4"><a href="#"><img  style="height:110px;width:80px;"  alt="" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_VIT_C2C.png')}}"></a></li>
            
          </ul>
        </div>
      </div>
      
      <!-- BACK TO TOP BUTTON --> 
      <!-- COPY RIGHT --> 
    </div>
    <div class="copyright">
      <hr>
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <div class="copyRight_text text-center">
            <p>Copyright  &copy; <span id="year"></span> Frontier Semiconductor.  All rights reserved </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Footer Wrapper End --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="{{ URL::asset('fsm_all_web_file/assets/jquery/jquery-min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/jquery/plugins.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/jquery/jquery.animateNumber.min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/bootstrap/js/bootstrap.min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/owl-carousel/js/owl.carousel.min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/wow/wow.min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/jquery/jquery.mainmenu.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/jquery/jquery.nivo.slider.pack.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/jquery/magnific-popup.min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/js/custom.js') }}"></script>



</body>
</html>