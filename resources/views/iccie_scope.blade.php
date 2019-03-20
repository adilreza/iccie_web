@extends('layout.master')
@section('page_title',' Scope - ICCIE 2019')

@section('scope_page')
<div >
        <div id="content">
            <div class="content_item">
                <h3>SCOPE</h3> 
                <hr>
                <p style="margin-right:10px;">ICCIE 2019 invites papers from all of the Computer and Information Engineering areas. The scope of the conference include but not limited to:</p>   				  
            
                <ul>
                    @foreach($all_scope as $scope)
                        <li>{{$scope->scope_name}}</li>
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
