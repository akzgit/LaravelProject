



<div id="layout-wrapper">


    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="{{ url('/') }}" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22">
                </span>
            </a>
            <a href="{{ url('/') }}" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="22">
                </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">
                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="bx bx-check-shield"></i> <span data-key="t-dashboards">Approvals</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" class="nav-link" data-key="t-analytics">Employer Approvals</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" class="nav-link" data-key="t-crm">Jobpost Approvals</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link collapsed" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                            <i class="bx bx-user"></i> <span data-key="t-layouts">User Details</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLayouts">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" target="_blank" class="nav-link" data-key="t-horizontal">Employee Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" target="_blank" class="nav-link" data-key="t-detached">Employer Details</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#sidebarEcommerce" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                            <i class="bx bx-cog"></i> <span data-key="t-ecommerce">Job Management</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarEcommerce">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" class="nav-link" data-key="t-products">Post Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" class="nav-link" data-key="t-products-grid">Post Status</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" class="nav-link" data-key="t-product-Details">Candidates</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#sidebarTickets" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets">
                            <i class="bx bx-cog"></i> <span data-key="t-support-tickets">Job Management</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarTickets">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" class="nav-link" data-key="t-list-view">Apply Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" class="nav-link" data-key="t-overview">Application Status</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->


