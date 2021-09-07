<div class="sidebar-content">

    <!-- User menu -->
    <div class="sidebar-user-material">
        <div class="sidebar-user-material-body">
            <div class="card-body text-center">
                <a href="#">
                    <img src="{{ asset('public/assets/back_end/global_assets/images/placeholders/placeholder.jpg')}}" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                </a>
                <h6 class="mb-0 text-white text-shadow-dark">Mr. Rony</h6>
                <span class="font-size-sm text-white text-shadow-dark">Manager, IT</span>
            </div>

            <div class="sidebar-user-material-footer">
                <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
            </div>
        </div>

        <div class="collapse" id="user-nav">
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon-user-plus"></i>
                        <span>My profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon-coins"></i>
                        <span>My balance</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon-switch2"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /user menu -->


    <!-- Main navigation -->
    <div class="card card-sidebar-mobile">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

            <!-- Main -->
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                    <i class="icon-home4"></i>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>        
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Request</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <li class="nav-item"><a href="{{ route('admin.request_list') }}" class="nav-link active">Request List</a></li>
                    <li class="nav-item"><a href="{{ route('admin.approved_request') }}" class="nav-link">Approved Request</a></li>
                    <li class="nav-item"><a href="{{ route('admin.pending_request') }}" class="nav-link">Pending Request</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Withdraw</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <li class="nav-item"><a href="{{ route('admin.withdraw_list') }}" class="nav-link active">Withdraw List</a></li>
                    <li class="nav-item"><a href="{{ route('admin.approved_withdraw') }}" class="nav-link">Approved Withdraw</a></li>
                    <li class="nav-item"><a href="{{ route('admin.pending_withdraw') }}" class="nav-link">Pending Withdraw</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Payment</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <li class="nav-item"><a href="{{ route('admin.payment_list') }}" class="nav-link active">Payment List</a></li>
                    <li class="nav-item"><a href="{{ route('admin.approved_payment') }}" class="nav-link active">Approved Payment</a></li>
                    <li class="nav-item"><a href="{{ route('admin.pending_payment') }}" class="nav-link active">Pending Payment</a></li>
                </ul>
            </li>
            <!-- Forms -->
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Setting</div> <i class="icon-menu" title="Forms"></i></li>
            <li class="nav-item">
                <a href="{{ route('admin.user_list') }}" class="nav-link active">
                    <i class="icon-home4"></i>
                    <span>
                        User
                    </span>
                </a>
            </li>  
            <li class="nav-item">
                <a href="{{ route('admin.rate_set') }}" class="nav-link active">
                    <i class="icon-home4"></i>
                    <span>
                        Rate
                    </span>
                </a>
            </li>   
        </ul>
    </div>
    <!-- /main navigation -->

</div>
