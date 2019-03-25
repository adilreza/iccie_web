@extends('layout.master')
@section('page_title',' Committee Member - ICCIE 2019')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@section('scope_page')
<div style="height:100%;overflow:scroll;">
    



    
    <!--Accordion wrapper-->
<div class="accordion md-accordion accordion-1" id="accordionEx23" role="tablist">
        <div class="card">
          <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading96">
            <h5 class="text-uppercase mb-0 py-1">
              <a class="white-text font-weight-bold" data-toggle="collapse" href="#collapse96" aria-expanded="true"
                aria-controls="collapse96">
                <h4 style="color:black;">CHIEF PATRON</h4>
              </a>
            </h5>
          </div>
          <div id="collapse96" class="collapse show" role="tabpanel" aria-labelledby="heading96" data-parent="#accordionEx23">
            <div class="card-body">
              <div class="row my-4">
                <div class="col-md-8">

                        <div id="content">
                                <div class="content_imagetext">		   
                                    <div class="content_image">
                                    <img src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$chief->member_image)}}" alt="" class="img-fluid">
                                   
                   
                   
                                 </div>
                                 <p> 
                                  <b>{{$chief->member_name}}</b>  
                                 <!-- Professor<br/>  -->
                                 <br/>{{$chief->member_university}}
                                 <br/>{{$chief->member_department}}
                                 
                                 </p>
                               </div>
                        </div>			
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading97">
            <h5 class="text-uppercase mb-0 py-1">
              <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse97"
                aria-expanded="false" aria-controls="collapse97">
                <h4 style="color:black;">TECHNICAL PATRON</h4>
              </a>
            </h5>
          </div>
          <div id="collapse97" class="collapse" role="tabpanel" aria-labelledby="heading97" data-parent="#accordionEx23">
            <div class="card-body">
                <div class="row my-4">
                    <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i> Technical Chair </h3>
                    <br>
                    <hr style="width:70%;">
                  <div class="col-md-12">
                          <div id="content">
                              @foreach ($technical_chair as $t_member)
                                  
                              
                              @if($t_member->member_image!="none")
                                  <div class="content_imagetext">		   
                                      <div class="content_image">
                                          <img style="height:150px;width:150px;" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$t_member->member_image)}}" alt="" class="img-fluid">
                                      </div>
                                              <p> 
                                                  <b>{{$t_member->member_name}}</b>  
                                                     <!-- Professor<br/>  -->
                                                  <br/>{{$t_member->member_university}}
                                                  <br/>{{$t_member->member_department}}
                                                 
                                              </p>
                                      </div>
                                 <br>
                                 @elseif($t_member->member_image=="none")
                                    <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$t_member->member_name}}, {{$t_member->member_department}}</p>                                    
                                 @endif
                                 @endforeach
  
                          </div>			
                  </div>
                 
                </div>

              <div class="row my-4">
                  <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i> Technical Secretary </h3>
                  <br>
                  <hr style="width:70%;">
                <div class="col-md-12">
                        <div id="content">
                            @foreach ($technical_secretary as $t_member)
                                
                            
                            @if($t_member->member_image!="none")
                                <div class="content_imagetext">		   
                                    <div class="content_image">
                                        <img style="height:150px;width:150px;" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$t_member->member_image)}}" alt="" class="img-fluid">
                                    </div>
                                            <p> 
                                                <b>{{$t_member->member_name}}</b>  
                                                   <!-- Professor<br/>  -->
                                                <br/>{{$t_member->member_university}}
                                                <br/>{{$t_member->member_department}}
                                               
                                            </p>
                                    </div>
                               <br>
                               @elseif($t_member->member_image=="none")
                                  <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$t_member->member_name}}, {{$t_member->member_department}}</p>                                    
                               @endif
                               @endforeach

                        </div>			
                </div>
               
              </div>
            

            <div class="row my-4">
                <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i> Technical Member </h3>
                <br>
                <hr style="width:70%;">
              <div class="col-md-12">
                      <div id="content">
                          @foreach ($technical_member as $t_member)
                              
                          
                          @if($t_member->member_image!="none")
                              <div class="content_imagetext">		   
                                  <div class="content_image">
                                      <img style="height:150px;width:150px;" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$t_member->member_image)}}" alt="" class="img-fluid">
                                 
                                 
                 
                 
                                  </div>
                                          <p> 
                                              <b>{{$t_member->member_name}}</b>  
                                                 <!-- Professor<br/>  -->
                                              <br/>{{$t_member->member_university}}
                                              <br/>{{$t_member->member_department}}
                                             
                                          </p>
                                  </div>
                             <br>
                            

                             @elseif($t_member->member_image=="none")
                                <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$t_member->member_name}}, {{$t_member->member_department}}</p>                                    
                             @endif


                             @endforeach

                      </div>			
              </div>
             
            </div>
          </div>


          </div>
        </div>
        <div class="card">
          <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98">
            <h5 class="text-uppercase mb-0 py-1">
              <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse98"
                aria-expanded="false" aria-controls="collapse98">
                <h4 style="color:black;">ADVISORY COMMITTEE</h4>
              </a>
            </h5>
          </div>
          <div id="collapse98" class="collapse" role="tabpanel" aria-labelledby="heading98" data-parent="#accordionEx23">
              <div class="card-body">
                  <div class="row my-4">
                      <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i> Advisory Chair </h3>
                      <br>
                      <hr style="width:70%;">
                    <div class="col-md-12">
                            <div id="content">
                                @foreach ($advisory_chair as $t_member)
                                    
                                
                                @if($t_member->member_image!="none")
                                    <div class="content_imagetext">		   
                                        <div class="content_image">
                                            <img style="height:150px;width:150px;" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$t_member->member_image)}}" alt="" class="img-fluid">
                                        </div>
                                                <p> 
                                                    <b>{{$t_member->member_name}}</b>  
                                                       <!-- Professor<br/>  -->
                                                    <br/>{{$t_member->member_university}}
                                                    <br/>{{$t_member->member_department}}
                                                   
                                                </p>
                                        </div>
                                   <br>
                                   @elseif($t_member->member_image=="none")
                                      <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$t_member->member_name}}, {{$t_member->member_department}}</p>                                    
                                   @endif
                                   @endforeach
    
                            </div>			
                    </div>
                   
                  </div>
  
                <div class="row my-4">
                    <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i> Advisory Member </h3>
                    <br>
                    <hr style="width:70%;">
                  <div class="col-md-12">
                          <div id="content">
                              @foreach ($advisory_member as $t_member)
                                  
                              
                              @if($t_member->member_image!="none")
                                  <div class="content_imagetext">		   
                                      <div class="content_image">
                                          <img style="height:150px;width:150px;" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$t_member->member_image)}}" alt="" class="img-fluid">
                                      </div>
                                              <p> 
                                                  <b>{{$t_member->member_name}}</b>  
                                                     <!-- Professor<br/>  -->
                                                  <br/>{{$t_member->member_university}}
                                                  <br/>{{$t_member->member_department}}
                                                 
                                              </p>
                                      </div>
                                 <br>
                                 @elseif($t_member->member_image=="none")
                                    <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$t_member->member_name}}, {{$t_member->member_department}}</p>                                    
                                 @endif
                                 @endforeach
  
                          </div>			
                  </div>
                 
                </div>
              
  
              
            </div>
          </div>
        </div>
        <div class="card">
                <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98">
                  <h5 class="text-uppercase mb-0 py-1">
                    <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse988"
                      aria-expanded="false" aria-controls="collapse988">
                      <h4 style="color:black;">ORGANIZING COMMITTEE</h4>
                    </a>
                  </h5>
                </div>
                <div id="collapse988" class="collapse" role="tabpanel" aria-labelledby="heading98" data-parent="#accordionEx23">
                  <div class="card-body">
                    <p style="color:red;font-weight:bold;font-size:20px;padding:0;margin:0px;"><i style="color:brown;" class="fas fa-hand-point-right"></i> Organizig Committee</p>
                    <hr>
                          <div class="row my-4">
                              <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i> Organizing Chair </h3>
                              <br>
                              <hr style="width:70%;">
                            <div class="col-md-12">
                                    <div id="content">
                                        @foreach ($organizing_chair as $t_member)
                                            
                                        
                                        @if($t_member->member_image!="none")
                                            <div class="content_imagetext">		   
                                                <div class="content_image">
                                                    <img style="height:150px;width:150px;" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$t_member->member_image)}}" alt="" class="img-fluid">
                                                </div>
                                                        <p> 
                                                            <b>{{$t_member->member_name}}</b>  
                                                               <!-- Professor<br/>  -->
                                                            <br/>{{$t_member->member_university}}
                                                            <br/>{{$t_member->member_department}}
                                                           
                                                        </p>
                                                </div>
                                           <br>
                                           @elseif($t_member->member_image=="none")
                                              <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$t_member->member_name}}, {{$t_member->member_department}}</p>                                    
                                           @endif
                                           @endforeach
            
                                    </div>			
                            </div>
                           
                          </div>
          
                        <div class="row my-4">
                            <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i> Organizing Co-chair </h3>
                            <br>
                            <hr style="width:70%;">
                          <div class="col-md-12">
                                  <div id="content">
                                      @foreach ($organizing_co_chair as $t_member)
                                          
                                      
                                      @if($t_member->member_image!="none")
                                          <div class="content_imagetext">		   
                                              <div class="content_image">
                                                  <img style="height:150px;width:150px;" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$t_member->member_image)}}" alt="" class="img-fluid">
                                              </div>
                                                      <p> 
                                                          <b>{{$t_member->member_name}}</b>  
                                                             <!-- Professor<br/>  -->
                                                          <br/>{{$t_member->member_university}}
                                                          <br/>{{$t_member->member_department}}
                                                         
                                                      </p>
                                              </div>
                                         <br>
                                         @elseif($t_member->member_image=="none")
                                            <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$t_member->member_name}}, {{$t_member->member_department}}</p>                                    
                                         @endif
                                         @endforeach
          
                                  </div>			
                          </div>
                         
                        </div>
                      
          
                      <div class="row my-4">
                          <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i>Organizing Secretary </h3>
                          <br>
                          <hr style="width:70%;">
                        <div class="col-md-12">
                                <div id="content">
                                    @foreach ($organizing_secretary as $t_member)
                                        
                                    
                                    @if($t_member->member_image!="none")
                                        <div class="content_imagetext">		   
                                            <div class="content_image">
                                                <img style="height:150px;width:150px;" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$t_member->member_image)}}" alt="" class="img-fluid">
                                           
                                           
                           
                           
                                            </div>
                                                    <p> 
                                                        <b>{{$t_member->member_name}}</b>  
                                                           <!-- Professor<br/>  -->
                                                        <br/>{{$t_member->member_university}}
                                                        <br/>{{$t_member->member_department}}
                                                       
                                                    </p>
                                            </div>
                                       <br>
                                      
          
                                       @elseif($t_member->member_image=="none")
                                          <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$t_member->member_name}}, {{$t_member->member_department}}</p>                                    
                                       @endif
          
          
                                       @endforeach
          
                                </div>			
                        </div>
                       
                      </div>
                   
                  <p style="color:red;font-weight:bold;font-size:20px;padding:0;margin:0px;"><i style="color:brown;" class="fas fa-hand-point-right"></i>  Organizig Sub Committee</p>
                    <hr>

                    <div class="row my-4">
                      <div class="col-md-12" style="overflow:scroll;">
                          <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i>  Web & Media Sub-Committee</h3>
                            <hr style="width:60%;">
                         <div style="margin-left:15px;overflow:scroll;">
                             
                                    <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Chair</p>
                                    @foreach ($wm_sub_committee as $item)
                                        @if($item->member_post=='Chair')
                                            <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                        @endif
                                    @endforeach
                               
                                    <br>
                                    <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Co-chair</p>
                                    @foreach ($wm_sub_committee as $item)
                                        @if($item->member_post=='Co-chair')
                                            <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                        @endif
                                    @endforeach
                                    <br>
                                   
                                
                                    <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Sectretary</p>
                                    @foreach ($wm_sub_committee as $item)
                                        @if($item->member_post=='Secretary')
                                            <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                        @endif
                                    @endforeach
                                    <br>
        

                                
                                    <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Member</p>
                                    @foreach ($wm_sub_committee as $item)
                                        @if($item->member_post=='Member')
                                            <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                        @endif
                                    @endforeach
                                    <br>
                                </div>
                            		
                      </div>
                      
                    </div>

                    <div class="row my-4">
                            <div class="col-md-12" style="overflow:scroll;">
                                <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i> Publication Sub-Committee</h3>
                                  <hr style="width:60%;">
                               <div style="margin-left:15px;overflow:scroll;">
                                   
                                          <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Chair</p>
                                          @foreach ($pub_sub_committee as $item)
                                              @if($item->member_post=='Chair')
                                                  <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                              @endif
                                          @endforeach
                                     
                                          <br>
                                          <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Co-chair</p>
                                          @foreach ($pub_sub_committee as $item)
                                              @if($item->member_post=='Co-chair')
                                                  <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                              @endif
                                          @endforeach
                                          <br>
                                         
                                      
                                          <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Sectretary</p>
                                          @foreach ($pub_sub_committee as $item)
                                              @if($item->member_post=='Secretary')
                                                  <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                              @endif
                                          @endforeach
                                          <br>
              
      
                                      
                                          <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Member</p>
                                          @foreach ($pub_sub_committee as $item)
                                              @if($item->member_post=='Member')
                                                  <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                              @endif
                                          @endforeach
                                          <br>
                                      </div>
                                          
                            </div>
                                    
                            
                          </div>

                          <div class="row my-4">
                                <div class="col-md-12" style="overflow:scroll;">
                                    <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i>  Registration Sub-Committee</h3>
                                      <hr style="width:60%;">
                                   <div style="margin-left:15px;overflow:scroll;">
                                       
                                              <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Chair</p>
                                              @foreach ($registration_sub_committee as $item)
                                                  @if($item->member_post=='Chair')
                                                      <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                  @endif
                                              @endforeach
                                         
                                              <br>
                                              <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Co-chair</p>
                                              @foreach ($registration_sub_committee as $item)
                                                  @if($item->member_post=='Co-chair')
                                                      <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                  @endif
                                              @endforeach
                                              <br>
                                             
                                          
                                              <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Sectretary</p>
                                              @foreach ($registration_sub_committee as $item)
                                                  @if($item->member_post=='Secretary')
                                                      <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                  @endif
                                              @endforeach
                                              <br>
                  
          
                                          
                                              <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Member</p>
                                              @foreach ($registration_sub_committee as $item)
                                                  @if($item->member_post=='Member')
                                                      <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                  @endif
                                              @endforeach
                                              <br>
                                          </div>
                                              
                                </div>
                                      
                                
                              </div>

                              <div class="row my-4">
                                    <div class="col-md-12" style="overflow:scroll;">
                                        <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i>  Finance Sub-Committee</h3>
                                          <hr style="width:60%;">
                                       <div style="margin-left:15px;overflow:scroll;">
                                           
                                                  <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Chair</p>
                                                  @foreach ($finance_sub_committee as $item)
                                                      @if($item->member_post=='Chair')
                                                          <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                      @endif
                                                  @endforeach
                                             
                                                  <br>
                                                  <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Co-chair</p>
                                                  @foreach ($finance_sub_committee as $item)
                                                      @if($item->member_post=='Co-chair')
                                                          <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                      @endif
                                                  @endforeach
                                                  <br>
                                                 
                                              
                                                  <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Sectretary</p>
                                                  @foreach ($finance_sub_committee as $item)
                                                      @if($item->member_post=='Secretary')
                                                          <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                      @endif
                                                  @endforeach
                                                  <br>
                      
              
                                              
                                                  <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Member</p>
                                                  @foreach ($finance_sub_committee as $item)
                                                      @if($item->member_post=='Member')
                                                          <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                      @endif
                                                  @endforeach
                                                  <br>
                                              </div>
                                                  
                                    </div>
                                            
                                    
                                  </div>

                                  <div class="row my-4">
                                        <div class="col-md-12" style="overflow:scroll;">
                                            <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:orange;font-size:20px; margin-right:5px;" class="fas fa-asterisk"></i>  Local Arrangement Sub-Committee</h3>
                                              <hr style="width:60%;">
                                           <div style="margin-left:15px;overflow:scroll;">
                                               
                                                      <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Chair</p>
                                                      @foreach ($local_sub_committee as $item)
                                                          @if($item->member_post=='Chair')
                                                              <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                          @endif
                                                      @endforeach
                                                 
                                                      <br>
                                                      <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Co-chair</p>
                                                      @foreach ($local_sub_committee as $item)
                                                          @if($item->member_post=='Co-chair')
                                                              <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                          @endif
                                                      @endforeach
                                                      <br>
                                                     
                                                  
                                                      <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Sectretary</p>
                                                      @foreach ($local_sub_committee as $item)
                                                          @if($item->member_post=='Secretary')
                                                              <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                          @endif
                                                      @endforeach
                                                      <br>
                          
                  
                                                  
                                                      <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Member</p>
                                                      @foreach ($local_sub_committee as $item)
                                                          @if($item->member_post=='Member')
                                                              <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                          @endif
                                                      @endforeach
                                                      <br>
                                                  </div>
                                                      
                                        </div>  
                                        
                                      </div>


                  </div>


                </div>
              </div>
      </div>
      <!--Accordion wrapper-->
       
        
            

                
        
        
</div>
<br>


<script>
    document.documentElement.scrollTop = document.body.scrollTop = 450;
</script>
      






    
@endsection
