@extends('backend.layoutadmin')
@section('content')
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Request List</span>
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
              <h5 class="card-title">Request List</h5>
              <div class="table-responsive">
                    <table class="table datatable-basic">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Listed Id</th>
                            <th>Server</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($ruquest_point)
                            @foreach($ruquest_point as $point_request)
                            <tr>
                                <td>{{ $point_request->custom_date}}</td>
                                <td>{{ $point_request->listed_id}}</td>
                                <td>{{ $point_request->server_id}}</td>
                                <td>{{ $point_request->amount}}</td>
                                <td style="text-transform: capitalize">{{ $point_request->status}}</td>
                                <td style="display: inline-flex"> 
                                    <form class="form-inline" style="margin: 3px" action="{{ route('admin.success_request') }}" method="POST">@csrf<input type="hidden" name="id" value="{{$point_request->id}}"><input type="submit" class="btn btn-sm btn-success" value="A"></form>
                                    <form class="form-inline" style="margin: 3px" action="{{ route('admin.reject_request') }}" method="POST">@csrf<input type="hidden" name="id" value="{{$point_request->id}}"><input type="submit" class="btn btn-sm btn-warning" value="R"></form>
                                    <form class="form-inline" style="margin: 3px" action="{{ route('admin.delete_request') }}" method="POST">@csrf<input type="hidden" name="id" value="{{$point_request->id}}"><input type="submit" class="btn btn-sm btn-danger" value="D"></form>
                                </td>
        
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
