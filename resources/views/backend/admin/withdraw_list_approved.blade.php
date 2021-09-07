@extends('backend.layoutadmin')
@section('content')
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Withdraw List</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Withdraw List</h5>
              <div class="table-responsive">
                    <table class="table datatable-basic">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Listed Id</th>
                            <th>Server</th>
                            <th>Amount</th>
                            <th>Status</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                        @if($withdraw_point)
                            @foreach($withdraw_point as $point_withdraw)
                            <tr>
                                <td>{{ $point_withdraw->custom_date}}</td>
                                <td>{{ $point_withdraw->listed_id}}</td>
                                <td>{{ $point_withdraw->server_id}}</td>
                                <td>{{ $point_withdraw->amount}}</td>
                                <td style="text-transform: capitalize">{{ $point_withdraw->status}}</td>
                  
        
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            </div>
          </div>

          
    </div>
    <!-- /content area -->


    <!-- Footer -->
    @include('backend.partials.footer')
    <!-- /footer -->

</div>
@endsection
