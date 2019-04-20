<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('views') }}</title>

    <!-- Styles -->

    <link href="{{ \Yasser\LaravelDashboard\Helper\Assets::load('css','boot.css') }}" rel="stylesheet">

    <!-- script -->

    <script src="{{\Yasser\LaravelDashboard\Helper\Assets::load('js','app.js')}}" defer></script>

</head>

<body>

<div id="app">

    <div class="container-fluid">

        <div class="row">

            <!-- Main Sidebar -->

            @component("LaravelDashboard::components.sidebar")

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dashboard.settings.index') }}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                </li>

            @endcomponent

           <!-- end Main Sidebar -->

            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

                <div class="main-navbar sticky-top bg-white">

                     <!-- content -->

                     @yield("content")

                     <!-- content -->

                   </div>

               </main>

           </div>

        </div>

   <div>

    @yield('js')


</body>

</html>