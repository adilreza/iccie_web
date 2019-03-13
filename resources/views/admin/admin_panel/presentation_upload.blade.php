@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Presentation Upload | Frontier Semiconductor')

@section('admin_presentation_upload')
            <div class="container-fluid">
               
               <div class="container">
                    <div class="card border-primary">
                            <div class="card-header bg-info ">
                             <h3 style="color:white;">Upload Presentation</h3>
                            </div>
                            <div class="card-body" style="background:#dfe4ea;">
                            <form action="{{URL::to('/admin/admin_presentation_upload')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="title">Presentation Title</label>
                                        <input type="text" required class="form-control" id="title" name="p_title">
                                    </div>
                                    <div class="form-group">
                                            <label for="details">Presentation descriptions</label>
                                            <textarea name="p_description"  required class="form-control" id="details" cols="40" rows="7" style="padding:10px;border:none;"></textarea>
                                        </div>
                                        <div class="form-group">
                                                <label for="file">Presentation file( <i>pptx/pdf/docx</i> )</label>
                                                <input required class="form-control" type="file" name="presentation_file" id="file" style="padding:10px;border:none;">
                                        </div>
                                        <br>
                                        @if(!empty($p_msg))
                                            <i style="color:green;">{{$p_msg}}</i>
                                        @endif
                                    <center>
                                    <input class="btn btn-success btn-lg text-center" type="submit" value="Submit Now" />
                                    </center>
                                    <br>
                                </form>
                            </div>
                            <div class="card-footer"><i>presentation can be docx, pptx, and pdf</i></div>
                    </div>
               </div>
                
            </div>
    
@endsection