@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Admin Home | ICCIE Admin')

@section('admin_index_page')

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/home')}}">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                    <h6 class="text-white">Dashboard</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="{{URL::to('/admin/home/add_scope')}}">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                    <h6 class="text-white">Add Scope</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                     <!-- Column -->
                     <div class="col-md-6 col-lg-2 col-xlg-3">
                            <a href="{{URL::to('/admin/home/add_committee')}}">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><i class="fas fa-users"></i></h1>
                                    <h6 class="text-white">Add Committee </h6>
                                </div>
                            </div>
                            </a>
                        </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('#')}}">
                                <div class="card card-hover">
                                    <div class="box bg-danger text-center">
                                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                        <h6 class="text-white">RFQ From Clients</h6>
                                    </div>
                                </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                                <h6 class="text-white">Full Width</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="{{URL::to('/admin/article_send_to_client')}}">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><i class=" far fa-paper-plane"></i></h1>
                                    <h6 class="text-white">Blast article to multiple mail</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/home_page_article')}}">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="far fa-edit"></i></h1>
                                <h6 class="text-white">Home page article</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                     <!-- Column -->
                
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                            <a href="{{URL::to('/admin/import_page')}}">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                <h6 class="text-white">Insert Mail</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/home/add_committee')}}">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="fas fa-users"></i></h1>
                                <h6 class="text-white">Add Committee Member</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                                <h6 class="text-white">Errors</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                

                <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex align-items-center">
                                        <div>
                                            <h4 class="card-title">Site Analysis</h4>
                                            <h5 class="card-subtitle">Overview of Latest Month</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-12">
                                            <div class="flot-chart">
                                                <div class="flot-chart-content" id="flot-line-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             

                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                    </div>
                      
                     

                    <div class="col-lg-6">
                        <!-- Card -->
                        
                        
                      
                        <!-- Tabs -->
               
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>



@endsection
