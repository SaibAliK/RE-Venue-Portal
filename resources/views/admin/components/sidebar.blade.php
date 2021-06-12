<div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Vuexy</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <!-- Horizontal menu content-->
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <!-- include ../../../includes/mixins-->
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}"><i class="feather icon-home"></i><span data-i18n="Dashboard">Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.locations')}}"><i class="feather icon-home"></i><span data-i18n="Dashboard">Location</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.eventType')}}"><i class="feather icon-home"></i><span data-i18n="Dashboard">Event Type</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.veneues')}}"><i class="feather icon-home"></i><span data-i18n="Dashboard">Veneue</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.poly.index')}}"><span data-i18n="Dashboard">Polymorphic Practice</span></a>
            </li>
        </ul>
    </div>
</div>