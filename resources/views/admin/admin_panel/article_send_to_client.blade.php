@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Article-send-admin | Frontier Semiconductor')

@section('article_send_to_client_page')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title text-center" style="color:red;" >Filter All Articles and Publish it</h4>
                        <hr>
                        <div  class="container" style="background:lightcoral;border-radius:15px;padding:10px;">
                            <form method="post" action="{{URL::to('/admin/filter_by_application_type')}}">  
                                {{ csrf_field() }}
                            <div class="row" >
                            
                                    <div class="col-md-9">
                                            <select class="form-control" name="application_type">
                                                    <option vlaue="All">All type</option>
                                                    <option value="Film Stress">Film Stress</option>
                                                    <option value="Film Adhension">Film Adhension</option>
                                                    <option value="Laser Scanning">Laser Scanning</option>
                                                    <option value="Thin Wafer Metrology">Thin Wafer Metrology</option>
                                                    <option value="Electrical Characterization">Electrical Characterization</option>
                                                    <option value="Raman Spectroscopy">Raman Spectroscopy</option>
                                                    <option value="3DIC TSV Process Control">3DIC TSV Process Control</option>
                                                    <option value="Low Coherence Interferometry">Low Coherence Interferometry</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-info form-control">Filter Now</button>
                                        </div>
                               

                            </div>
                        </form>  
                        </div>
                        <br>
                        <div class="container">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">All your Post</h4>
                                        </div>
                                        <div class="comment-widgets scrollable">
                                            
                                            @foreach ($all_articles as $article)
                                                
                                           

                                            <div style="background:#ecf0f1;padding:20px;" class="d-flex flex-row comment-row m-t-0">
                                                <div class="p-2"><img src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/library_image/'.$article->display_image)}}" alt="user" style="height:160px;width:250px;">
                                                </div>
                                                    <div class="comment-text w-100">
                                                        <h2 class="font-medium">{{$article->post_title}}</h2>
                                                        <p>{!!  str_limit($article->main_content, $limit = 400, $end = '...')  !!}</p>
                                                        <br>
                                                        <br>
                                                        <div class="comment-footer">
                                                            <span class="text-muted float-right">{{$article->application_type}}</span> 
                                                            <a href="{{URL::to('/article/article_details/'.$article->id)}}">
                                                                <button type="button" class="btn btn-success btn-sm">Preview</button>
                                                            </a>
                                                            <a href="{{URL::to('/admin/publish_the_post/'.$article->id)}}">
                                                            <button type="button" class="btn btn-cyan btn-sm">{{$article->blasting}}</button>
                                                            </a>

                                                            <a href="{{URL::to('/admin/mail_blast/'.$article->id)}}">
                                                                    <button type="button" class="btn btn-info btn-sm">Blast This article</button>
                                                                </a>
                                                            <a href="{{URL::to('/admin/delete_article/'.$article->id)}}">
                                                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                            <br>
                                            

                                            @endforeach
                                            
                                        </div>
                                </div>
                        </div>
                    </div>
                </div>
            
            </div>


@endsection