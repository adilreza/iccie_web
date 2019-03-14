@extends('layout.master')
@section('page_title','ICCIE 2019')

@section('home_page')

<div class="container">

    @foreach ($home_article as $data)
        
        <div >
            <h3 class="mt-3">{{ $data->post_title }}</h3>
            <hr>
            <div class="float-right" style="height:200px; width:280px;margin-left:10px;margin-right:10px;">
                <img style="height:210px;width:300px;" src="{{URL::asset('iccie_all_web_file/iccie_image_gallery/home_image/'.$data->display_image)}}" alt="ICCIE 2019">
            </div>
            {!! $data->main_content !!}
        </div>

    @endforeach
	

</div>

		
@endsection