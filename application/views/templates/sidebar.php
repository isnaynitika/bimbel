<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
                <a href="<?= base_url() ?>admin">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('murid') ?>">
                    <i class="fa fa-university"></i> <span>Data Murid</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('guru') ?>">
                    <i class="fa fa-user"></i> <span>Data Guru</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('materi') ?>">
                    <i class="fa fa-book"></i> <span>Materi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('kelas') ?>">
                    <i class="fa fa-table"></i> <span>Kelas</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('pembelian') ?>">
                    <i class="fa fa-money"></i> <span>Pembelian</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('beranda') ?>">
                    <i class="fa fa-sign-out"></i> <span>Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>