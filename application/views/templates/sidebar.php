<!-- templates/sidebar.php -->
<div id="wrapper">
    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
            <!--begin::Brand Link-->
            <a href="./index.html" class="brand-link">
                <!--begin::Brand Image-->
                <img src="<?= base_url('dist/assets/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo"
                    class="brand-image opacity-75 shadow" />
                <!--end::Brand Image-->
                <!--begin::Brand Text-->
                <span class="brand-text fw-light">Academic System</span>
                <!--end::Brand Text-->
            </a>
            <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <!--begin::Sidebar Menu-->
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-header">Main Navigation</li>
                    <li class="nav-item">
                        <a href="./docs/introduction.html" class="nav-link">
                            <i class="nav-icon bi bi-speedometer2"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./docs/introduction.html" class="nav-link">
                            <i class="nav-icon bi bi-mortarboard"></i>
                            <p>Students</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./docs/layout.html" class="nav-link">
                            <i class="nav-icon bi bi-person-badge"></i>
                            <p>Lecturers</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./docs/layout.html" class="nav-link">
                            <i class="nav-icon bi bi-calendar-week"></i>
                            <p>Lecture Schedule</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./docs/layout.html" class="nav-link">
                            <i class="nav-icon bi bi-building"></i>
                            <p>Departments</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./docs/layout.html" class="nav-link">
                            <i class="nav-icon bi bi-shield-lock"></i>
                            <p>Change Password</p>
                        </a>
                    </li>
                </ul>
                <!--end::Sidebar Menu-->
            </nav>
        </div>
        <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->
    
    <!-- Awal Content Wrapper (mulai di luar aside) -->
    <div id="content-wrapper" class="d-flex flex-column flex-grow-1">
        <div id="content" class="p-4">
