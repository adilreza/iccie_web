@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Add Scope| ICCIE Admin')

@section('admin_index_page')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/add_important_date')}}" method="post" class="m-t-40">
                         {{ csrf_field() }}
                            <div>
                                <h3>Add Important dates</h3>
                                <hr>
                                <section>
                                    <label for="date_title">Enter date Title  *</label>
                                    <input id="date_title" name="date_title" placeholder="Date Titile" type="text" required class=" form-control">
                                    <br>
                                    <label for="date">Enter date *</label>
                                    <input id="date" name="date" placeholder="12 Agust, 2019" type="text" required class=" form-control">
                                    <br>
                                    <input type="submit" value="Add Scope" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
                    @if(!empty($msg))
                    <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Your date has been added to home page
                          </div>
                    @endif
              
            </div>
        </div>

            <div class="col-md-6">
                <div class="card" style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">All Important dates </h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>serial</th>
                                                    <th>Date Title</th>
                                                    <th>Inserted Date</th>
                                                   
                                                    <th>Remove date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <p style="display:none;">{{$i=1}}</p>
        
                                            @foreach ($all_date as $date)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$date->date_title}}</td>
                                                    <td>{{$date->date}}</td>
                                                    <td><a href="{{URL::to('/admin/home/delete_date/'.$date->id)}}" style="color:orange">Delete</a></td>
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