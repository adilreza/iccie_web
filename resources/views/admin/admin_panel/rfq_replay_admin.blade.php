@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Replay rfq to client | Frontier Semiconductor')

@section('rfq_replay_admin')
            <div class="container-fluid">
               
               <div class="container" style="border-radius:15px;">
                    <div class="card border-primary" style="border-radius:10px;">
                            <div class="card-header bg-info ">
                             <h3 style="color:white;">Replay a RFQ to <i>@if(!empty($user_name)) {{$user_name}} @endif</i></h3>
                            </div>
                            <div class="card-body" style="background:#dfe4ea;">
                            <form action="{{URL::to('/admin/rfq_replay_admin_client')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="title">Select The User </label>
                                        <input type="text" required class="form-control" id="title" name="to_sample" @if(!empty($user_name)) value="{{$user_name}}" @endif>
                                           
                                    </div>
                                        <div class="form-group">
                                                <label for="file">Your Report file( <i>pptx/pdf/docx</i> )</label>
                                                <input required class="form-control" type="file" name="rfq_report_file" id="file" style="padding:10px;border:none;">
                                        </div>
                                        <br>
                                        @if(!empty($success_message))
                                                <h4 style="color:green;">{!! $success_message !!}</h4>
                                                <br>
                                        @endif
                                    <center>
                                    <input class="btn btn-success btn-lg text-center" type="submit" value="Replay Rfq Now" />
                                    </center>
                                    <br>
                                </form>
                            </div>
                            <div class="card-footer"><i>Attached file can be docx, pptx, and pdf</i></div>
                    </div>

                    
               </div>
                
            </div>
    
@endsection