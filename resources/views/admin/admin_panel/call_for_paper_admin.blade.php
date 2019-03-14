@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Add Call for paper | ICCIE Admin')

@section('admin_index_page')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/call_for_paper_post')}}" method="post" class="m-t-40" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div>
                                <h3>Add call for paper</h3>
                                <hr>
                                <section>
                                    <label for="userName">Upload a paper</label>
                                    <input id="userName" name="paper_name" placeholder="Item name" type="file" required class=" form-control">
                                    <br>
                                    <input type="submit" value="Add call for paper" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

            <div class="col-md-6">
                <div class="card" style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">All Scope Name(sorted by last updata) </h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>serial</th>
                                                    <th>paper name</th>
                                                    <th>uploaded at</th>
                                                   
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <p style="display:none;">{{$i=1}}</p>
        
                                            @foreach ($call_for_paper as $paper)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                <td><a href="{{URL::asset('iccie_all_web_file/call_for_paper/'.$paper->paper_name)}}">{{$paper->paper_name}}</a></td>
                                                    <td>{{$paper->created_at}}</td>
                                                    <td><a href="{{URL::to('/admin/delete_call_for_paper/'.$paper->id)}}" style="color:red">Delete</a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                
                            </div>

                </div>
        </div>

    </div>
</div>

    
@endsection