<style>
    .sidebar-mini .content-wrapper,
    .sidebar-mini .main-footer,
    .sidebar-mini .main-header {
        margin-left: 4.6rem !important;
    }

</style>
<script>
    document.getElementsByTagName('body')[0].classList.add('sidebar-mini')
</script>
<aside class="main-sidebar sidebar-dark-primary sidebar-no-expand elevation-1">
    <a href="#" data-widget="pushmenu" class="brand-link py-3">
        <div style="height: 38px;" class="d-flex align-items-center">
            <div style="margin: 0 26px 0 20px;">
                <i class="fas fa-bars"></i>
            </div>
            <div class="d-flex" style="flex-grow: 1">
                <span class="my-brand">{{ env('APP_NAME') }}</span>
            </div>
        </div>
    </a>

    <div class="sidebar os-theme-dark">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('sample.form') }}" class="nav-link" id="bar_sample_form">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sample Form</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('sample.basic_table') }}" class="nav-link"
                                id="bar_sample_basic_table">
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
