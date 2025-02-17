<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1725011774/mhywnsigqufbx1gtmfnf.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .7; width: 80px; margin-left: -5px;">
        <span class="brand-text font-weight-light">AdminShop Books</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/template/admin/dist/img/logo.jpg" class="img elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Shop Book</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <!-- Category Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/menus/add" class="nav-link ml-3">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/list" class="nav-link ml-3">
                                <i class="fas fa-list nav-icon"></i>
                                <p>List of categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/search" class="nav-link ml-3">
                                <i class="fas fa-search nav-icon"></i>
                                <p>Search category</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Products Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/products/add" class="nav-link ml-3">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/products/list" class="nav-link ml-3">
                                <i class="fas fa-list nav-icon"></i>
                                <p>List Of Products</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Events Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Events
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/events/add" class="nav-link ml-3">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/events/list" class="nav-link ml-3">
                                <i class="fas fa-list nav-icon"></i>
                                <p>List Of Event</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Authors Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Authors
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/authors/add" class="nav-link ml-3">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add author</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/authors/list" class="nav-link ml-3">
                                <i class="fas fa-list nav-icon"></i>
                                <p>List Of Authors</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Users Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/users/add" class="nav-link ml-3">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add user</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/users/list" class="nav-link ml-3">
                                <i class="fas fa-list nav-icon"></i>
                                <p>List Of Users</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Contacts Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Message
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/contacts/add" class="nav-link ml-3">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/contacts/list" class="nav-link ml-3">
                                <i class="fas fa-list nav-icon"></i>
                                <p>List of Contacts</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
