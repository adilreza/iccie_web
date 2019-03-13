@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Libray-Text-Editor-admin | Frontier Semiconductor')

@section('library_text_editor_page')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card">
                    @if (!empty($msg_status))
                        <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>successfull inserted your article
                        </div>
                    @endif

                    <div class="card-body wizard-content">
                        <h2 class="card-title text-center">Basic library editing section...</h2>
                        <hr>
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" class="m-t-40" enctype="multipart/form-data" method="post" action="{{ URL::to('admin/library_text_editor') }}">
                            <div>
                                    {{ csrf_field() }}

                                    {{-- which generate a html lin --}}
                                <section>
                                    <label for="post_title">Article Title</label>
                                    <input id="post_title" name="post_title" type="text" class="required form-control">
                                    <br>
                                    <select class="form-control" required name="application_type">
                                            <option value="Film Stress">Film Stress</option>
                                            <option value="Film Adhension">Film Adhension</option>
                                            <option value="Laser Scanning">Laser Scanning</option>
                                            <option value="Thin Wafer Metrology">Thin Wafer Metrology</option>
                                            <option value="Electrical Characterization">Electrical Characterization</option>
                                            <option value="Raman Spectroscopy">Raman Spectroscopy</option>
                                            <option value="3DIC TSV Process Control">3DIC TSV Process Control</option>
                                            <option value="Low Coherence Interferometry">Low Coherence Interferometry</option>
                                    </select>
                                    <br>
                                    <div class=row>
                                        <div class="col-md-6">
                                            <label for="display_image">Display_image</label>
                                            <input required onchange="readURL(this);" id="display_image" name="display_image" type="file" class="required  form-control">
                                        </div>
                                        <div class="col-md-6">
                                                <img id="blah" src="#" alt="image" style="height:130px;width:220px;" />
                                        </div>
                                    </div>
                                    <br>
                                    <label for="content">Main Content..</label>
                                    <textarea required id="content" name="main_content" type="text" class="required form-control">
                                   </textarea>
                                </section>
                            </div>
                            <br>
                            <br>
                            <input type="submit" class="form-control btn btn-primary btn-block btn-lg">
                        </form>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

        <script type="text/javascript">
                 function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#blah').attr('src', e.target.result);
                            }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
                

   

@endsection

@section('custome_js_file')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
        CKEDITOR.replace( 'content' );
</script>
@endsection