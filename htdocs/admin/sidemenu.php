<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
    <li class="nav-item nav-category">Main</li>
    <li class="nav-item">
        <a class="nav-link" href="index">
        <span class="icon-bg"><i class="fa-solid fa-table-columns"></i></span>
        <span class="menu-title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="create_trip">
        <span class="icon-bg"><i class="fa-solid fa-plus"></i></span>
        <span class="menu-title">Create Trip</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ti-basic" aria-expanded="false" aria-controls="ti-basic">
        <span class="icon-bg"><i class="fa-solid fa-car-side"></i></span>
        <span class="menu-title">Trips</span>
        <i class="fa-solid fa-chevron-right menu-arrow"></i>
        </a>
        <div class="collapse" id="ti-basic">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="requested_trips">Requested</a></li>
            <li class="nav-item"> <a class="nav-link" href="completed_trips">Completed</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="icon-bg"><i class="fa-solid fa-users"></i></span>
        <span class="menu-title">Driver</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="create_customer">Create Driver</a></li>
            <li class="nav-item"> <a class="nav-link" href="manage_customer">Manage Driver</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ri-basic" aria-expanded="false" aria-controls="ri-basic">
        <span class="icon-bg"><i class="fa-solid fa-person-walking-luggage"></i></span>
        <span class="menu-title">Rider</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ri-basic">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="create_rider">Create Rider</a></li>
            <li class="nav-item"> <a class="nav-link" href="manage_rider">Manage Rider</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#rp-basic" aria-expanded="false" aria-controls="rp-basic">
        <span class="icon-bg"><i class="fa-regular fa-flag"></i></span>
        <span class="menu-title">Reports</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="rp-basic">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="newsletter">Newsletters</a></li>
            <li class="nav-item"> <a class="nav-link" href="contact_queries">Contact Queries</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item documentation-link">
        <a class="nav-link" href="#" target="_blank">
        <span class="icon-bg">
            <i class="mdi mdi-file-document-box menu-icon"></i>
        </span>
        <span class="menu-title">Documentation</span>
        </a>
    </li>
    <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
        <a href="../logout" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
            <span class="menu-title">Log Out</span></a>
        </div>
    </li>
    </ul>
</nav>