<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= $nama; ?> <sup><?= $role ?></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard
            <li class="nav-item ">
                <a class="nav-link" href="v_home_kasir.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>-->

            <hr class="sidebar-divider d-none d-md-block">
            

            <?php if($role == "kasir") : ?>
            <!-- Nav Item - Tables -->
            <li class="nav-item <?= $halaman == 'tabel' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_transaksi.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
            <?php endif; ?>
            <?php if($role == "owner") : ?>
            <!-- Nav Item - Tables -->
            <li class="nav-item <?= $halaman == 'laporan' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_list_baju.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>laporan</span></a>
            </li>
            <?php endif; ?>

            <?php if($role == "admin") : ?>
            <li class="nav-item <?= $halaman == 'barang' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_barang.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Baju</span>
                </a>
            </li>
            <?php endif; ?>

            <?php if($role == "admin") : ?>
            <li class="nav-item <?= $halaman == 'barang' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_transaksi.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data pelanggan</span>
                </a>
            </li>
            <?php endif; ?>

            <?php if($role == "admin") : ?>
            <li class="nav-item <?= $halaman == 'barang' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_pelanggan.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data transaksi</span>
                </a>
            </li>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
