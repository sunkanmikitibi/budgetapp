<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="index.html"><img src="../assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"><span>Oculux</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{ asset('assets/images/user.png')}}" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown">
                    <strong>{{Auth::user()->name}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class="icon-power">
                                          </i>Logout</a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Main</li>

                <li><a href="{{ route('home')}}"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                <li><a href="#"><i class="icon-diamond"></i><span>Transactions</span></a></li>
                <li><a href="{{ route('income.index') }}"><i class="icon-diamond"></i><span>Savings</span></a></li>
                <li><a href="#"><i class="icon-rocket"></i><span>Expenses</span></a></li>
                <li><a href="#"><i class="icon-wallet"></i><span>Accounts</span></a></li>
                <li><a href="#"><i class="icon-wallet"></i><span>Budget</span></a></li>
                <li><a href="#"><i class="icon-users"></i><span>Members</span></a></li>
               {{--  <li class="active open">
                    <a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>Pages</span></a>
                    <ul>
                        <li class="active"><a href="page-blank.html">Blank Page</a></li>
                        <li><a href="page-profile.html">User Profile</a></li>
                        <li><a href="page-user-list.html">User List</a></li>
                        <li><a href="page-testimonials.html">Testimonials</a></li>
                        <li><a href="page-invoices.html">Invoices</a></li>
                        <li><a href="page-timeline.html">Timeline</a></li>
                        <li><a href="page-search-results.html">Search Results</a></li>
                        <li><a href="page-gallery.html">Image Gallery</a></li>
                        <li><a href="page-pricing.html">Pricing</a></li>
                        <li><a href="page-coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>--}}

            </ul>
        </nav>
    </div>
</div>
