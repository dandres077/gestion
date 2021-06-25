<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

    <!-- begin:: Header Menu -->
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
    
    </div>

    <!-- end:: Header Menu -->

    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">

        <!--begin: Language bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--langs">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon">
                    <img class="" src="{{ asset('assets/media/flags/177-colombia.svg')}}" alt="" />                    
                </span>
            </div>
        </div>

        <!--end: Language bar -->

        <!--begin: User Bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                <div class="kt-header__topbar-user">
                    <span class="kt-header__topbar-welcome kt-hidden-mobile">Hola,</span>
                    <span class="kt-header__topbar-username kt-hidden-mobile">{{ Auth::user()->name }}</span>
                    <img class="kt-hidden" alt="Pic" src="{{ asset('assets/media/users/300_25.jpg')}}" />
                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">T</span>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                <!--begin: Head -->
                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({{ asset('assets/media/misc/bg-1.jpg')}})">
                    <div class="kt-user-card__avatar">
                        <img class="kt-hidden" alt="Pic" src="{{ asset('assets/media/users/300_25.jpg')}}" />
                    </div>
                    <div class="kt-user-card__name">
                        {{ Auth::user()->name }}
                    </div>
                    <!--<div class="kt-user-card__badge">
                        <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
                    </div>-->
                </div>

                <!--end: Head -->

                <!--begin: Navigation -->
                <div class="kt-notification">
                    @can ('usuarios.editarperfil')
                    <a href="{{ url('admin/perfil')}}" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                Perfil - {{ $usuarios[0]->name }}
                            </div>
                        </div>
                    </a>
                    @endcan
                    <div class="kt-notification__custom kt-space-between">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-label btn-label-brand btn-sm btn-bold">Salir</a>
                            <span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </span>
                    </div>
                </div>

                <!--end: Navigation -->
            </div>
        </div>

        <!--end: User Bar -->
    </div>

    <!-- end:: Header Topbar -->
</div>