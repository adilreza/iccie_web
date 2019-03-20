@extends('layout.master')
@section('page_title',' Committee Member - ICCIE 2019')

@section('scope_page')
<div style="height:100%;">
        <div>
            <div id="content">
                <div style="text-shadow: 1px 0px 1px 0px #fff;padding: 25px 0px 1px 0px; font-style: normal;font-size: large;"><b>CHIEF PATRON</b></div>
                   <hr style="width:80%;"/>

                   @foreach ($chief_member as $member)
                                
                            
                           <div class="content_imagetext">		   
                               <div class="content_image">
                              <img style="height:150px;width:150px;" src="{{URL::asset('iccie_all_web_file/iccie_image_gallery/member_image/'.$member->member_image)}}"" alt="member_image"/>
                            </div>
                            <p> 
                            <b>{{$member->member_name}}</b>  
                            <!-- Professor<br/>  -->
                            <br/>{{$member->member_department}}
                            <br/>{{$member->member_university}}
                            </p>
                        </div>

                    @endforeach

            </div>
        </div>

        <div>
                <div id="content">
                    <div style="text-shadow: 1px 0px 1px 0px #fff;padding: 25px 0px 1px 0px; font-style: normal;font-size: large;"><b>TECHNICAL PATRON</b></div>
                    <hr style="width:80%;"/>


                       @foreach ($technical_member as $member)
                                
                            
                           <div class="content_imagetext">		   
                               <div class="content_image">
                              <img style="height:150px;width:150px;" src="{{URL::asset('iccie_all_web_file/iccie_image_gallery/member_image/'.$member->member_image)}}" alt="member_image" />
                            </div>
                            <p> 
                            <b>{{$member->member_name}}</b>  
                            <!-- Professor<br/>  -->
                            <br/>{{$member->member_department}}
                            <br/>{{$member->member_university}}
                            </p>
                        </div>

                        @endforeach

                </div>
            </div>
        
            <div>
                    <div id="content">
                        <div style="text-shadow: 1px 0px 1px 0px #fff;padding: 25px 0px 1px 0px; font-style: normal;font-size: large;"><b>INTERNATIONAL ADVISORY COMMITTEE</b></div>
                        <hr style="width:80%;"/>

                            @foreach ($international_member as $member)
                                
                            
                           <div class="content_imagetext">		   
                               <div class="content_image">
                              <img style="height:150px;width:150px;" src="{{URL::asset('iccie_all_web_file/iccie_image_gallery/member_image/'.$member->member_image)}}" alt="member_image"/>
                            </div>
                            <p> 
                            <b>{{$member->member_name}}</b>  
                            <!-- Professor<br/>  -->
                            <br/>{{$member->member_department}}
                            <br/>{{$member->member_university}}
                            </p>
                        </div>

                        @endforeach

                    </div>
                </div>

                <div>
                <div id="content">
                    <div style="text-shadow: 1px 0px 1px 0px #fff;padding: 25px 0px 1px 0px; font-style: normal;font-size: large;"><b>ORGANIZING COMMITTEE</b></div>
                    <hr style="width:80%;"/>


                       @foreach ($technical_member as $member)
                                
                            
                           <div class="content_imagetext">		   
                               <div class="content_image">
                              <img style="height:150px;width:150px;" src="{{URL::asset('iccie_all_web_file/iccie_image_gallery/member_image/'.$member->member_image)}}" alt="member_image" />
                            </div>
                            <p> 
                            <b>{{$member->member_name}}</b>  
                            <!-- Professor<br/>  -->
                            <br/>{{$member->member_department}}
                            <br/>{{$member->member_university}}
                            </p>
                        </div>

                        @endforeach

                </div>
            </div>
            
        
        
</div>
<br>


<script>
    document.documentElement.scrollTop = document.body.scrollTop = 450;
</script>
      






    
@endsection
