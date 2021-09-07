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
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td>22 Jun 1972</td>
                    <td><span class="label label-success">Active</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /content area -->


    <!-- Footer -->
    @include('backend.partials.footer')
    <!-- /footer -->

</div>
@endsection
