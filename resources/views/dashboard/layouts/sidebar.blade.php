<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">REQRUIT</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Non-Collapse Menu -->
    <li class="nav-item {{ Request::is('dashboard/categories*') || Request::is('dashboard/add-team*') || Request::is('dashboard/posts*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true collapsed" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-signature"></i>
            <span>Contents</span>
        </a>
        <div id="collapseTwo" class="collapse {{ Request::is('dashboard/categories*') || Request::is('dashboard/add-team*') || Request::is('dashboard/posts*') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">My Contents:</h6>
              <a class="collapse-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">Categories</a>
              <a class="collapse-item {{ Request::is('dashboard/add-team*') ? 'active' : '' }}" href="/dashboard/add-team">Teams</a>
              <a class="collapse-item {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">Blog</a>
          </div>
        </div>
    </li>

    <li class="nav-item {{ Request::is('dashboard/contact/inbox') || Request::is('dashboard/billing/inbox') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-inbox"></i>
            <span>Inboxes</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ Request::is('dashboard/contact/inbox') || Request::is('dashboard/billing/inbox') ? 'show' : '' }}" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">My Inboxes:</h6>
                <a class="collapse-item {{ Request::is('dashboard/contact/inbox') ? 'active' : '' }}" href="/dashboard/contact/inbox">Contact's Inbox</a>
                <a class="collapse-item {{ Request::is('dashboard/billing/inbox') ? 'active' : '' }}" href="/dashboard/billing/inbox">Billing's Inbox</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('dashboard/add-admin*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/add-admin">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Add Administrator</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
