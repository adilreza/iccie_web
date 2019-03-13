@extends('/admin/admin_panel/admin_master')

@section('page_title', 'RFQ From Client | Frontier Semiconductor')

@section('rfq_from_client')
           
            <div class="container-fluid">
               
                <div class="container">
                    @foreach ($all_unseen_rfq as $rfq)
                        <a style="text-decoration:underline;" href="{{URL::asset('/fsm_all_web_file/rfq_file/'.$rfq->rfq_file_name)}}">{{$rfq->rfq_from}}  has sent a rfq  <a href="{{URL::to('/admin/rfq_replay_admin/'.$rfq->rfq_from)}}" class="btn btn-sm bg-warning" style="color:white;border-radius:3px; margin:3px;">Replay</a></a>
                        <br>
                    @endforeach
                </div>
                

            </div>

@endsection