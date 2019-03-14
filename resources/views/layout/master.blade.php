<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from cse-events.ruet.ac.bd/iccie/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2017 06:47:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>@yield('page_title')</title>

<link rel="shortcut icon" href="{{URL::asset('iccie_all_web_file/images/ICCIE_training_badge-min.png')}}" type="image/x-icon">

<meta content='biprodip pal' name='author'/>
<meta content='rizoan toufiq' name='author'/>

<meta name="description" content="ICCIE International Conference on Computer and Information Engineering at CSE department of RUET" />
<meta name="keywords" content="ICCIE,Computer, Science, CSE, RUET, Conference, International, Rajshahi,University" />
<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('iccie_all_web_file/css/style.css')}}" />
<!-- modernizr enables HTML5 elements and feature detects -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script type="text/javascript" src="{{URL::asset('iccie_all_web_file/js/modernizr-1.5.min.js')}}"></script>


</head>

<body>
  <div id="main">
    <header>
	  <div id="banner">
	    <div id="welcome">
	      <div id="wtext"><img width="940" height="100" src="{{URL::asset('iccie_all_web_file/images/header2.png')}}" alt="&quot;Enter your caption here&quot;" /></div>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <div id="wslogan"></div>
	    </div><!--close welcome_slogan-->				  
        <div class="slideshow">
	      <ul class="slideshow">
            <li class="show"><img width="940" height="300" src="{{URL::asset('iccie_all_web_file/images/home_1.png')}}" alt="ICCIE 2015"/></li>
			<li ><img width="940" height="300" src="{{URL::asset('iccie_all_web_file/images/home_2.jpg')}}" alt="Somapura Mahavihara: Archeological Site in Bangladesh" /></li>
                         <li><img width="940" height="300" src="{{URL::asset('iccie_all_web_file/images/home_4.png')}}" alt="ICCIE 2015"  /></li>
                         <li ><img width="940" height="300" src="{{URL::asset('iccie_all_web_file/images/home_3.jpg')}}" alt="Cox's Bazar: Continuous 120 Kilometres Sandy Sea Beach in Bangladesh" /></li>
	        
			<li><img width="940" height="300" src="{{URL::asset('iccie_all_web_file/images/home_1.png')}}" alt="ICCIE 2015"  /></li> 
                        <li ><img width="940" height="300" src="{{URL::asset('iccie_all_web_file/images/home_5.jpg')}}" alt="Sundarbans: Largest Tidal Halophytic Mangrove Forest in The World" /></li>
			<li><img width="940" height="300" src="{{URL::asset('iccie_all_web_file/images/home_4.png')}}" alt="ICCIE 2015"  /></li> 
                        <li ><img width="940" height="300" src="{{URL::asset('iccie_all_web_file/images/home_6.jpg')}}" alt=" National Martyrs' Memorial: The National Monument of Bangladesh" /></li>
           
            
		  </ul> 
	    </div><!--close slideshow-->
	    </br>
	      <p><marquee behavior="scroll" direction="left" scrolldelay="85" onmouseover="this.stop();" onmouseout="this.start();">
                &nbsp&nbsp&nbsp&nbsp ACCEPTED PAPER LIST (<a href="docs/Accepted_Papers.pdf">Download</a>). 
	        &nbsp&nbsp&nbsp&nbsp VALID REGISTRATION LIST (<a href="docs/valid_reg.pdf">Download</a>).
                &nbsp&nbsp&nbsp&nbsp PROGRAM SCHEDULE (<a href="docs/program.pdf">Download</a>).   
                </marquee>	</p> 
	  </div><!--close banner-->	
	</header>
<nav>
	  <div id="menubar">
        <ul id="nav">
          <!--<li id="tabs01" onclick="showStuff(this)"><a href="..\index.html" style="text-decoration: none; color: white;">Home</a></li>-->
        <li ><a style="color:white;text-decoration:none;" href="{{URL::to('/')}}">Home</a></li>
		  <li id="tabs02" onclick="showStuff(this)">Committee</li>
      <li ><a style="color:white;text-decoration:none;" href="{{URL::to('/iccie_scope')}}">Scope</a></li>
          <li id="tabs04" onclick="showStuff(this)">Call for Paper</li>
          <li id="tabs05" onclick="showStuff(this)"> Camera Ready Submission</li>
          <li id="tabs05" onclick="showStuff(this)">Registration</li>
        
          <!--li class="new" id="tabs07" onclick="showStuff(this)">  Update </li> -->
        </ul>
      </div><!--close menubar-->	
</nav>	


    <div id="site_content" style="height:760px;">	
        
        <div class="container" style="height:100%;width:100%;">
            <div class="row">
                <div class="col-md-9">


                    @yield('home_page')
                    @yield('scope_page')



                </div>
                <div class="col-md-3" style="">
                        <div class="sidebar_container">              
                        
                                <div class="sidebar">   
                                 <div class="sidebar_item"> 
                                     <h2>  Technical Co-Sponsor</h2> 
                                     <img width="190" height="40" src="{{URL::asset('iccie_all_web_file/images/ieeebds.jpg')}}" alt="IEEEBDS" /> 
                                   </div>  <!--close sidebar_item-->  
                                 </div>   
                                
                                   
                                 <div class="sidebar">
                                    <div class="sidebar_item">
                                     <h2 >Information Desk</h2>
                                     <hr>
                                     <h3 id="tabs08" onclick="showStuff(this)">Proceedings & Publication</h3>
                                     <h3 id="tabs09" onclick="showStuff(this)">Accepted Paper List</h3>
                                     <h3 id="tabs10" onclick="showStuff(this)">Post Conference Tour</h3>
                                     <h3 id="tabs11" onclick="showStuff(this)">Accomodation</h3>
                                      <h3 id="tabs12" onclick="showStuff(this)">About Rajshahi</h3>
                                     <h3 id="tabs13" onclick="showStuff(this)">Contact</h3>
                                    
                                    </div><!--close sidebar_item--> 
                                 </div><!--close sidebar-->
                        </div>
                        <div class="sidebar_container">
                            
                          {{-- <div class="sidebar">
                                <div class="sidebar_item">       
                                  <h2>Importants Dates</h2>
                                </div>
                            </div> --}}
                            
                            <div class="sidebar">
                                <div class="sidebar_item">
                                 <h2 >Important Dates</h2>
                                 <hr>
                                 
                                
                                </div>
                             </div>

                         
                        </div>
                        

                </div>

            </div>
        </div>
	
	  


    </div>

<footer style=""> 
	  Copyright &#169 ICCIE . All rights reserved.Powered by Computer Science & Engineering, RUET.
</footer>


<script>
  document.documentElement.scrollTop = document.body.scrollTop = 450;
</script>






  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="{{URL::asset('iccie_all_web_file/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('iccie_all_web_file/js/image_slide.js')}}"></script>
  
</body>

<!-- Mirrored from cse-events.ruet.ac.bd/iccie/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2017 06:50:07 GMT -->
</html>

 


	  
	  
	  
	  
	  
	  
	  	  
	 
