<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    @section('meta')
        @include('layouts.vuexy.meta')
    @show
            
    <title>{{ config('app.name', 'Fisiocampus') }}</title>

    @section('css')
        @include('layouts.vuexy.css')
    @show

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @section('top_bar')
        @include('layouts.vuexy.top_bar')
    @show       
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @section('menu')
        @include('layouts.vuexy.menu')
    @show   
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
                @yield('header')
                @yield('content')
        </div>
    </div>    
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @section('footer')
        @include('layouts.vuexy.footer')
    @show    

    @section('scripts')
        @include('layouts.vuexy.scripts')
    @show 
    
</body>
<!-- END: Body-->

</html>