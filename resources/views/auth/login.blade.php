<!DOCTYPE html>
<html lang="es">

    <!-- begin::Head -->
    <head>
        <base href="../../../">
        <meta charset="utf-8" />
        <title>@yield('title', 'Base Proyecto')</title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Page Custom Styles(used by this page) -->
        <link href="{{asset('assets/css/pages/login/login-1.css')}}" rel="stylesheet" type="text/css" />

        <!--end::Page Custom Styles -->

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
        <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

        <!-- begin:: Page -->
        <div class="kt-grid kt-grid--ver kt-grid--root">
            <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

                    <!--begin::Aside-->
                    <div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url({{asset('assets/media/bg/bg-4.jpg')}}">
                        <div class="kt-grid__item">
                            <a href="https://gidesco.com/" class="kt-login__logo" target="_blank">
                                <img src="{{asset('assets/media/logos/logo-5.png')}}">
                            </a>
                        </div>
                        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
                            <div class="kt-grid__item kt-grid__item--middle">
                                <h3 class="kt-login__title">Bienvenido!</h3>
                                <h4 class="kt-login__subtitle">Gestione la información de una forma rapida y sencilla.</h4>
                            </div>
                        </div>
                        <div class="kt-grid__item">
                            <div class="kt-login__info">
                                <div class="kt-login__copyright">
                                    &copy 2021
                                </div>
                                <div class="kt-login__menu">
                                    <a href="#" class="kt-link" target="_blank">Nosotros</a>
                                    <a href="mailto:#" class="kt-link" target="_blank">Soporte</a>
                                    <a href="#" class="kt-link" target="_blank">Contáctenos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--begin::Aside-->

                    <!--begin::Content-->
                    <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

                        <!--begin::Body-->
                        <div class="kt-login__body">

                            <!--begin::Signin-->
                            <div class="kt-login__form">
                                <div class="kt-login__title">
                                    <h3>Autenticarse</h3>
                                </div>

                                <!--begin::Form-->
                                <form method="POST" class="kt-form" action="{{ route('login') }}" autocomplete="off" novalidate="novalidate">
                                    @csrf
                                    @if ($errors->has('login'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('login') }}</strong>
                                        </span>
                                    @endif
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="Email" id="email" name="email" autocomplete="off" value="{{ old('email') }}" required autofocus>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="contraseña" name="password" id="password" required>
                                    </div>

                                    <!--begin::Action-->
                                    <div class="kt-login__actions">
                                        <button type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Ingresar</button>
                                    </div>

                                    <!--end::Action-->
                                </form>

                                <!--end::Form-->

                            </div>

                            <!--end::Signin-->
                        </div>

                        <!--end::Body-->
                    </div>

                    <!--end::Content-->
                </div>
            </div>
        </div>

        <!-- end:: Page -->

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

        <!--begin::Page Scripts(used by this page) -->
        <script src="{{asset('assets/js/pages/custom/login/login-1.js')}}" type="text/javascript"></script>

        <!--end::Page Scripts -->
    </body>

    <!-- end::Body -->
</html>