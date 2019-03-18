@extends('layout.master')
@section('page_title','ICCIE 2019')

@section('home_page')

<div class="container">

   
        
        <div >
            <h3 class="mt-3">{{ $home_article->post_title }}</h3>
            <hr>
            <div class="float-right" style="height:200px; width:280px;margin-left:10px;margin-right:10px;">
                <img style="height:210px;width:300px;" src="{{URL::asset('iccie_all_web_file/iccie_image_gallery/home_image/'.$home_article->display_image)}}" alt="ICCIE 2019">
            </div>
            {!! $home_article->main_content !!}
        </div>

   
	

</div>

		
@endsection

@section('important_date')
    @foreach ($all_date as $date)
        <p style="font-size:13px;margin-bottom:-1px;"> <b>{{$date->date_title}}</b></p>
        <p style="margin-top:1px;font-size:12px" class="date"> {{$date->date}}</p>
    @endforeach
@endsection