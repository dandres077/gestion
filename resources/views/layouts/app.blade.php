<!DOCTYPE html>

<html lang="es">

    <!-- begin::Head -->
    <head>
        <base href="">
        <meta charset="utf-8" />
        <title>@yield('title', 'Base proyecto')</title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <meta name="description" content="Updates and statistics">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Page Vendors Styles(used by this page) -->
        <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

        <!--end::Page Vendors Styles -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="{{asset('assets/css/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />

        <!--end::Layout Skins -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/media/logos/Favicon.png')}}" />

        <!-- <link rel="manifest" href="{{asset('manifest.json')}}"> -->

        <!-- ANDROID-->
        <meta name="theme-color" content="#FDE014">

        <!-- IOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link rel="apple-touch-icon" href="{{asset('img/icons/icon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/icons/icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/icons/icon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="167x167" href="{{asset('img/icons/icon-152x152.png')}}">

        <!-- iPhone X (1125px x 2436px) -->
        <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" href="{{asset('img/icons-ios/apple-launch-1125x2436.png')}}">
        <!-- iPhone 8, 7, 6s, 6 (750px x 1334px) -->
        <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="{{asset('img/icons-ios/apple-launch-750x1334.png')}}">
        <!-- iPhone 8 Plus, 7 Plus, 6s Plus, 6 Plus (1242px x 2208px) -->
        <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3)" href="{{asset('img/icons-ios/apple-launch-1242x2208.png')}}">
        <!-- iPhone 5 (640px x 1136px) -->
        <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="{{asset('img/icons-ios/apple-launch-640x1136.png')}}">

        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

        <meta name="apple-mobile-web-app-title" content="Tech">

        @section('style')
        @show

        @livewireStyles 
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

        @livewireScripts

        <!-- begin:: Page -->

        <!-- begin:: Header Mobile -->
        @include('include.menusuperiormobile')

        <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

                <!-- begin:: Aside -->
                @include('include.menulateral')
                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                    <!-- begin:: Header -->
                    @include('include.header')
                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        @yield('content')
                    </div>

                    <!-- begin:: Footer -->
                    @include('include.footer')

                    <!-- end:: Footer -->

                </div>
            </div>
        </div>

        <!-- end:: Page -->

        <!-- begin::Quick Panel -->
        @include('include.notificaciones')

        <!-- end::Quick Panel -->

        <!-- begin::Scrolltop -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>

        <!-- end::Scrolltop -->

        <!-- begin::Sticky Toolbar -->
        <!-- @include('include.menuderecho')-->

        <!-- end::Sticky Toolbar -->

        <!-- begin::Demo Panel -->
        <!--@include('include.demo') -->

        <!-- end::Demo Panel -->

        <!--Begin:: Chat-->
        @include('include.chat')

        <!--ENd:: Chat-->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": [
                            "#c5cbe3",
                            "#a1a8c3",
                            "#3d4465",
                            "#3e4466"
                        ],
                        "shape": [
                            "#f0f3ff",
                            "#d9dffa",
                            "#afb4d4",
                            "#646c9a"
                        ]
                    }
                }
            };
        </script>

        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->


        <!-- <script src="{{asset('/js/app.js')}}"></script> -->

        <!--<script src="{{asset('/js/validate.js')}}"></script>-->

        @section('scripts')
        @show

        <!--end::Page Scripts -->
    </body>

    <!-- end::Body -->
</html>