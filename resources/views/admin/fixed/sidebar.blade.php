 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Inventory Ok <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a 
            aria-expanded="true" aria-controls="collapseTwo">
            <a class="nav-link" href="{{url('/brands')}}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Brands</span>
        </a>
        
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a 
            aria-expanded="true" aria-controls="collapseUtilities">
            <a class="nav-link" href="{{url('/catagory')}}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Catagory</span>
        </a>
        
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
</li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/products')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Products</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('/orders')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Orders</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('/settings')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Settings</span></a>
    </li>

   

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
  

</ul>
<!-- End of Sidebar -->