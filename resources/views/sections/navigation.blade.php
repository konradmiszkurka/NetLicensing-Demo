<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('home') }}" class="site_title">
                <img src="http://netlicensing.io/img/labs64-avatar-30x30.png" alt="{{ config('app.name') }}">
                <span>{{ __('views.sections.navigation.sub_header_0') }}</span>
            </a>
        </div>

        <div class="clearfix"></div>
        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('home') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            {{ __('views.sections.navigation.menu_0') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('try_and_buy') }}">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            {{ __('views.sections.navigation.menu_1') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('subscription') }}">
                            <i class="fa fa-hourglass-half" aria-hidden="true"></i>
                            {{ __('views.sections.navigation.menu_2') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>