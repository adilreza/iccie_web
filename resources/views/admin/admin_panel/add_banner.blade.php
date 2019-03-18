@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Add Committee| ICCIE Admin')

@section('admin_index_page')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/add_banner_title')}}" method="post" class="m-t-40" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div>
                                <h3>Add Tittle Banner </h3>
                                <hr>
                                <section>
                                    <br>
                                    <label>title Banner Image(<i style="color:red;"> 980 x 100 must be png</i> )</label>
                                    <input type="file" required name="title_banner" class="form-control">
                                    
                                    <br>
                                    <input type="submit" value="Replace Title Banner" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
            </div>

            @if(!empty($success1))
                <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Your itle banner is uploaded successfully
                </div>
                <script type="text/javascript">
                    function autoRefreshPage()
                    {
                      //console.log("hello adil");
                        window.location.replace("{{URL::to('/admin/add_banner')}}");
                    }
                    setTimeout("autoRefreshPage()", 2000);
                </script>
      
            @endif
            @if(!empty($failed1))
                <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Sorry!</strong> file uploadig failed check internet
            @endif


        </div>

        <div class="col-md-6">
                <div class="card">
                        <div class="card-body wizard-content">
                            
                            <h6 class="card-subtitle"></h6>
                            <form id="example-form" action="{{URL::to('/admin/add_banner_home')}}" method="post" class="m-t-40" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                   <div>
                                       <h3>Add Home Banner </h3>
                                       <hr>
                                       <section>
                                           <br>
                                           <label>Home Banner Image(<i style="color:red;"> 940 x 300 </i> )</label>
                                           <input type="file" required name="home_banner" class="form-control">
                                           
                                           <br>
                                           <input type="submit" value="Replace Home Banner" class="form-control btn btn-primary" >
                                       </section>
                                   </div>
                               </form>
                        </div>
                </div>


                @if(!empty($success2))
                    <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Your home banner is uploaded successfully
                    </div>
                    <script type="text/javascript">
                        function autoRefreshPage()
                        {
                        //console.log("hello adil");
                            window.location.replace("{{URL::to('/admin/add_banner')}}");
                        }
                        setTimeout("autoRefreshPage()", 2000);
                    </script>
                @endif
                
            @if(!empty($failed2))
                <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Sorry!</strong> File uploadig failed check internet
            @endif


                
        </div>

    </div>
</div>

    
@endsection