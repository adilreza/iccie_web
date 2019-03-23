@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Add Scope| ICCIE Admin')

@section('admin_index_page')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/home/add_scope')}}" method="post" class="m-t-40">
                         {{ csrf_field() }}
                            <div>
                                <h3>Add Scope Items</h3>
                                <hr>
                                <section>
                                    <label for="userName">Enter The Item  *</label>
                                    <input id="userName" name="scope_name" placeholder="Item name" type="text" required class=" form-control">
                                    <br>
                                    <input type="submit" value="Add Scope" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

            <div class="col-md-6">
                <div class="card" style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">All Scope Name(sorted by last update) </h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>serial</th>
                                                    <th>Scope Name</th>
                                                    <th>Adding Date</th>
                                                   
                                                    <th>Remove Scope</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <p style="display:none;">{{$i=1}}</p>
        
                                            @foreach ($all_scope as $scope)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$scope->scope_name}}</td>
                                                    <td>{{$scope->created_at}}</td>
                                                    <td><a href="{{URL::to('/admin/home/delete_scope/'.$scope->id)}}" style="color:orange">Delete</a></td>
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