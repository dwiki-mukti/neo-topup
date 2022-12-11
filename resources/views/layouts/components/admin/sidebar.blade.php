<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="{{ asset(env('APP_ICON')) }}" alt="Nt" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Neo TopUp</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ Route('admin.dashboard') }}" class="nav-link" id="bar-dashboard">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('admin.product.index') }}" class="nav-link" id="bar-product">
                        <i class="nav-icon fas fa-gamepad"></i>
                        <p>
                            Product
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('admin.item.index') }}" class="nav-link" id="bar-item">
                        <i class="nav-icon fas fa-gem"></i>
                        <p>
                            Item
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('admin.transaction.index') }}" class="nav-link" id="bar-transaction">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Transaction
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('admin.user.index') }}" class="nav-link" id="bar-user">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>

                <!-- sample -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cat"></i>
                        <p>
                            Sample
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('sample.form') }}" class="nav-link" id="bar-__form">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sample Form</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('sample.basic_table') }}" class="nav-link" id="bar-__basicTable">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sample Table</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
