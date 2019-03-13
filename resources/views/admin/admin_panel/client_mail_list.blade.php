@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Client-Email-admin | Frontier Semiconductor')

@section('client_mail_list_page')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title text-center">All client list </h4>
                        <br>
                        <h6 class="card-subtitle"></h6>

                        <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>serial</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Inserted Date</th>
                                            <th>Permanent_delate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <p style="display:none;">{{$i=1}}</p>

                                    @foreach ($client_emails as $email)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$email->name}}</td>
                                            <td>{{$email->email}}</td>
                                            <td>{{$email->created_at}}</td>
                                            <td><a href="{{URL::to('/admin/email_delete/'.$email->id)}}" style="color:orange">Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>





                        
                    </div>
                </div>

            </div>

@endsection