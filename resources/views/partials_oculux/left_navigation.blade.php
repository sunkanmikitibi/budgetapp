<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/icon.svg')}} " alt="Kobonet" class="img-fluid logo"><span>KOBO.net</span></a>
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
                    <li><a href="{{ route('welcome')}}"><i class="icon-envelope-open"></i>Main Site</a></li>
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
                <li><a href="{{route('member.index')}}"><i class="icon-users"></i><span>Members</span></a></li>


            </ul>
        </nav>
    </div>
</div>
