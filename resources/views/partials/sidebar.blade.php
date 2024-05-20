

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion border rounded " id="accordionSidebar" >

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin<sup>1</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{asset('/dashborad')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="{{asset('/category')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Category</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    <li class="nav-item active">
        <a class="nav-link" href="{{asset('/products')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Products</span></a>
    </li>


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('/order')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Orders</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{asset('/users')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Utilisateurs</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

   

</ul>

