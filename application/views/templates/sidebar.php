<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome')?>">
        <div class="sidebar-brand-icon ml-3">
          <i class="fas fa-truck"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MAMI CATERING</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('welcome')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        KATEGORI MENU
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('welcome')?>" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-utensils"></i>
          <span>Pilihan Masakan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('kategori/tradisional')?>">Tradisional</a>
            <a class="collapse-item" href="<?php echo base_url('kategori/chinese')?>">Chinese</a>
            <a class="collapse-item" href="<?php echo base_url('kategori/modern')?>">Modern</a>
          </div>
        </div>
      </li>

    
      <!-- Nav Item - Minuman Segar -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/minuman')?>">
          <i class="fas fa-glass-whiskey"></i>
          <span>Minuman</span></a>
      </li>

      <!-- Nav Item - Coffee and Snack -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/coffee_and_snack')?>">
          <i class="fas fa-cookie"></i>
          <span>Coffee and Snack</span></a>
      </li>

      <!-- Nav Item -Breakfast -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-egg"></i>
          <span>Breakfast</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            
            <div class="navbar">
              <ul class="nav navbar-nav navbar-right ml-3">
                <li>
                  <?php
                  $keranjang = 'Keranjang Belanja : '.$this->cart->total_items().'items' 
                  ?>

                  <?php echo anchor('dashboard/detail_keranjang', $keranjang)  ?>
                </li>
              </ul>

              <div class="topbar-divider d-none d-sm-block"></div>

              <ul class="na navbar-nav navbar-right">
                <?php if($this->session->userdata('email')) { ?>
                  <li><div>Selamat Datang <?php echo $this->session->userdata('email') ?></div></li>
                  <li class="ml-2"><?php echo anchor('auth/logout','Logout') ?></li>
                <?php } else { ?>
                  <li><?php echo anchor('auth/login','Login'); ?></li>

                  <?php } ?>
              </ul>
            </div>

            


          </ul>

        </nav>
        <!-- End of Topbar -->