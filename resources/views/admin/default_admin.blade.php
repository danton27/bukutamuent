<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
@include('admin.partials._head')

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><span>ENT</span></a>
                </div>

                <div class="clearfix"></div>

@include('admin.partials._profile_menu')

                <br />

@include('admin.partials._sidebar')

            </div>
        </div>
@include('admin.partials._top_navigation')

        <!-- page content -->
            @yield('content')


                </div>
            </div>
        </div>
        <!-- /page content -->
@include('admin.partials._footer')

</body>
</html>
