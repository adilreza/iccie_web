<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from cse-events.ruet.ac.bd/iccie/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2017 06:47:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>@yield('page_title')</title>

<link rel="shortcut icon" href="{{URL::asset('iccie_all_web_file/images/ICCIE_training_badge-min.png')}}" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<meta content='biprodip pal' name='author'/>
<meta content='rizoan toufiq' name='author'/>

<meta name="description" content="ICCIE International Conference on Computer and Information Engineering at CSE department of RUET" />
<meta name="keywords" content="ICCIE,Computer, Science, CSE, RUET, Conference, International, Rajshahi,University" />
<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('iccie_all_web_file/css/style.css')}}" />




<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">



<!-- modernizr enables HTML5 elements and feature detects -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">

<script type="text/javascript" src="{{URL::asset('iccie_all_web_file/js/modernizr-1.5.min.js')}}"></script>


</head>

<body>
  <div id="main">
    <header>
	  <div id="banner">
	    <div id="welcome">
	      <div id="wtext"><img width="940" height="100" src="{{URL::asset('banner_all/'.session('banner_title'))}}" alt="banner Title" /></div>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <div id="wslogan"></div>
	    </div><!--close welcome_slogan-->				  
        <div class="slideshow">
            
                <img width="940" height="300" src="{{URL::asset('banner_all/'.session('banner_home'))}}" alt="ICCIE 2015"  />		
  
	    </div><!--close slideshow-->
	    </br>
      <!-- ################## MARQUE TAG SECTION################### -->
	      <p><marquee behavior="scroll" direction="left" scrolldelay="85" onmouseover="this.stop();" onmouseout="this.start();">
                &nbsp&nbsp&nbsp&nbsp ACCEPTED PAPER LIST (<a href="{{URL::asset('iccie_all_web_file/docs/Accepted_Papers.pdf')}}">Download</a>). 
	              &nbsp&nbsp&nbsp&nbsp VALID REGISTRATION LIST (<a href="{{URL::asset('iccie_all_web_file/docs/valid_reg.pdf')}}">Download</a>).
                &nbsp&nbsp&nbsp&nbsp PROGRAM SCHEDULE (<a href="{{URL::asset('iccie_all_web_file/docs/program.pdf')}}">Download</a>).   
                </marquee>	</p> 
	  </div><!--close banner-->	
	</header>
<nav>
	  <div id="menubar">
        <ul id="nav">
          <!--<li id="tabs01" onclick="showStuff(this)"><a href="..\index.html" style="text-decoration: none; color: white;">Home</a></li>-->
        <li ><a style="color:white;text-decoration:none;" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" href="{{URL::to('/')}}">Home</a></li>
        <li ><a style="color:white;text-decoration:none;" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" href="{{URL::to('/committee_member')}}">Committee</a></li>
        <li ><a style="color:white;text-decoration:none;" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" href="{{URL::to('/iccie_scope')}}">Scope</a></li>
        <li ><a style="color:white;text-decoration:none;" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" href="{{URL::to('/speakers')}}">Speakers</a></li>
        <li ><a style="color:white;text-decoration:none;" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" href="{{URL::to('/call_for_paper')}}">Call For Paper</a></li>
        <li ><a style="color:white;text-decoration:none;" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" href="{{URL::to('/camera_submission')}}">Camera Ready Submission</a></li>
        <li id="tabs05" onclick="showStuff(this)">Registration</li>
        
          <!--li class="new" id="tabs07" onclick="showStuff(this)">  Update </li> -->
        </ul>
      </div><!--close menubar-->	
</nav>	


    <div id="site_content" style="">	
        
        <div class="container" style="height:100%;width:100%;">
            <div class="row">
                <div class="col-md-9" >


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
                                     <h3><a href="{{URL::to('/camera_submission')}}">Proceedings & Publication</a></h3>
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

                                 @if(!empty(session('all_dates')))
                                <p style="display:none;">{{$all_date=session('all_dates')}}</p>
                                    @foreach ($all_date as $date)
                                        <p style="font-size:13px;margin-bottom:-1px;"> <b>{{$date->date_title}}</b></p>
                                        <p style="margin-top:1px;font-size:12px" class="date"> {{$date->date}}</p>
                                    @endforeach
                                  @endif
                            
                                 
                                
                                </div>
                             </div>

                         
                        </div>
                        

                </div>

            </div>
        </div>
	
	  


    </div>

<footer style=""> 
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-5 text-center">
              <h3 >Co Organizer</h3>
              <hr style="width:90%;">
              
            <img src ="{{URL::asset('iccie_all_web_file/images/co_org.jpg')}}"  style="height:65px;" alt="CO Organization"/>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-5 text-center">
                <h3 > Sponsored By</h3>
                <hr style="width:90%;">
               
              <img src ="{{URL::asset('iccie_all_web_file/images/CISCOLAC2.png')}}" style="height:65px;" alt="CO Organization"/>
              </div>
          </div>
        </div>
        
      </div>
      <hr>
      <p class="text-center"> Copyright &#169 ICCIE . All rights reserved.Powered by Computer Science & Engineering, RUET.</p>
  </div>
</footer>



  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="{{URL::asset('iccie_all_web_file/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('iccie_all_web_file/js/image_slide.js')}}"></script>
  
</body>

<!-- Mirrored from cse-events.ruet.ac.bd/iccie/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2017 06:50:07 GMT -->
</html>

 


	  
	  
	  
	  
	  
	  
	  	  
	 
