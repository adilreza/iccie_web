@extends('/admin/admin_panel/admin_master')

@section('page_title', 'DRF details | Frontier Semiconductor')

@section('drf_details_page')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
               
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title text-center">DRF details</h4>
                        <br>
                        <h6 class="card-subtitle">all required information</h6>
                        <br>

                        @if(!empty($drf_details))
                            @foreach ($drf_details as $drf)
                                
                                <div style="margin-left:200px;">
                                    @php
                                        $details = $drf->drf_data;
                                        $l = strlen($details);
                                        for($i=0;$i<$l;)
                                        {
                                            if($details[$i]=="&")
                                            {
                                                $i++;
                                                echo "<br>";
                                                echo '<hr>';
                                            }
                                            else {
                                                echo $details[$i++];
                                            }

                                        }
                                        
                                    @endphp

                                </div>

                            @endforeach
                            
                        @endif




                        
                    </div>
                </div>

            </div>

@endsection