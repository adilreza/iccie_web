@extends('layout.master')
@section('page_title','Call For Paper - ICCIE 2019')

@section('scope_page')
<div>
        <div id="content">
            <div class="content_item">
                <h3>Call for Paper</h3> 
                <hr>
                <p style="margin-right:10px;">Please Download From the Link Below</p>   				  
            
                <ul>
                    @foreach($call_for_paper as $paper)
                        <li><a href="{{URL::asset('iccie_all_web_file/call_for_paper/'.$paper->paper_name)}}">{{$paper->paper_name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
</div>

<br>

<script>
        document.documentElement.scrollTop = document.body.scrollTop = 450;
</script>


      






    
@endsection
