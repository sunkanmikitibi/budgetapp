@include('partials_oculux.header')
<body class="theme-cyan font-montserrat">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>

@yield('themesetting')

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    @include('partials_oculux.nav_topbar')

    @include('partials_oculux.search')

    @include('partials_oculux.megamenu')
    @include('partials_oculux.rightbar')
    @include('partials_oculux.left_navigation')

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Admin Panel</h2>
                        {{--<nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Stater Page</li>
                            </ol>
                        </nav> --}}
                    </div>
                  
                </div>
            </div>

            @yield('content')
        </div>
    </div>

</div>
@include('partials_oculux.scripts')
@yield('datajs')
</body>
</html>
