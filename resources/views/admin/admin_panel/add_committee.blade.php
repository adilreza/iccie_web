@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Add Committee| ICCIE Admin')

@section('admin_index_page')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/home/add_committee')}}" method="post" class="m-t-40" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div>
                                <h3>Add Committee Members</h3>
                                <hr>
                                <section>
                                    <label for="userName">Member Name</label>
                                    <input id="userName" name="member_name" placeholder="pro. Dr. md. Xyz" type="text" required class=" form-control">
                                    <br>
                                    <label for="member_university">Member University</label>
                                    <input id="member_university" name="member_university" placeholder="Hirosima University, japan" type="text" required class=" form-control">
                                    <br>
                                    <label for="member_department">Member Department</label>
                                    <input id="member_department" name="member_department" placeholder="Faculty of Computer Science & Information Technology " type="text" required class=" form-control">
                                    <br>
                                    <label for="mc">Member Category</label>
                                    <select class="form-control" required name="member_category" id="mc">
                                        <option value=""></option>
                                        <option value="CHIEF PATRON">CHIEF PATRON</option>
                                        <option value="TECHNICAL PATRON">TECHNICAL PATRON</option>
                                        <option value="INTERNATIONAL ADVISORY COMMITTEE">INTERNATIONAL ADVISORY COMMITTEE</option>
                                        <option value="ORGANIZING COMMITTEE">OGANIZING COMMITTEE</option>
                                    </select>
                                    <br>
                                    <label>Member Image</label>
                                    <input type="file" required name="member_image" class="form-control">
                                    
                                    <br>
                                    <input type="submit" value="Add Committee Member" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

            <div class="col-md-6">
                <div class="card" style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">All Member Name(sorted by last updata) </h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>serial</th>
                                                    <th>Image</th>
                                                    <th>Member Name</th>
                                                   
                                                    <th>Varsity</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <p style="display:none;">{{$i=1}}</p>
                                            @foreach ($all_member as $member)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                <td><img style="height:40px; width:40px;" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$member->member_image)}}"/></td>
                                                    <td>{{$member->member_name}}</td>
                                                    <td><p style="font-size:10px;">{{$member->member_university}}</p></td>
                                                    <td><a href="{{URL::to('/admin/delete_commitee_member/'.$member->id)}}" style="color:red;">Remove</a></td>
                                                   
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