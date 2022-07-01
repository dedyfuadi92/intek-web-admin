<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/" class="d-flex">
                        <i class="bi bi-bootstrap-fill me-4"></i>
                        <h2>INTEK</h2>
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ ($page === "dashboard") ? 'active': '' }} ">
                    <a href="/" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-title">Manage</li>
                <li class="sidebar-item {{ ($page === "users") ? 'active': '' }} ">
                    <a href="/users" class='sidebar-link'>
                        <i class="bi bi-person-lines-fill"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-clipboard-check"></i>
                        <span>Projects</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-box-seam"></i>
                        <span>Products</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-newspaper"></i>
                        <span>News</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-list-ul"></i>
                        <span>More</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#">Client</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Team</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Service</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Testimonial</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Galery</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Career</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-title">Account</li>
                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
