
 <!-- Sidebar -->
<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>

                <li class="app-sidebar__heading">Menu</li>

                <li>
                    <a href="#">
                        <i class="fa-brands fa-product-hunt metismenu-icon "></i>
                        Tasks
                        <i class="fa-solid fa-turn-down metismenu-state-icon caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('tasks.create')}}">
                                <i class="metismenu-icon"></i>
                                Create tasks
                            </a>
                        </li>
                        <li>
                            <a href="{{route('tasks.index')}}">
                                <i class="metismenu-icon">
                                </i>tasks List
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="app-sidebar__heading">UI Components</li>

            </ul>
        </div>
    </div>
</div>



