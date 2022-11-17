<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand" href="{{ url('/admin-dashboard') }}">
                <span class="logo-text ps-2">
                    <img src="{{ url('admin/plugins/images/PPIDS.jpg') }}" alt="homepage" />
                </span>
            </a>
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class=" in">
                    <form role="search" class="app-search d-none d-md-block me-3">
                        <input type="text" placeholder="Search..." class="form-control mt-0">
                        <a href="" class="active">
                            <i class="fa fa-search"></i>
                        </a>
                    </form>
                </li>
                <li>
                    <a class="profile-pic" href="#">
                        <img src="{{ url('admin/plugins/images/users/varun.jpg') }}" alt="user-img" width="36"
                            class="img-circle"><span class="text-white font-medium">Steave</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/admin-dashboard') }}"
                        aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/admin-profile') }}"
                        aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/admin-divisions') }}"
                        aria-expanded="false">
                        <i class="fas fa-sitemap" aria-hidden="true"></i>
                        <span class="hide-menu">Divisions</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/admin-facilities') }}"
                        aria-expanded="false">
                        <i class="fas fa-th" aria-hidden="true"></i>
                        <span class="hide-menu">Facilities</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/admin-publications') }}"
                        aria-expanded="false">
                        <i class="far fa-edit" aria-hidden="true"></i>
                        <span class="hide-menu">Publications</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>