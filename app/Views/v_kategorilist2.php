<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Kategori</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-text mx-3">E-KLIPING</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-3">

<!-- Heading -->
<div class="sidebar-heading">
  Navigation
</div>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url();?>">
    <i class="fas fa-fw fa-home"></i>
    <span>Dashboard</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="<?= base_url('berita');?>">
    <i class="fas fa-fw fa-newspaper"></i>
    <span>Berita</span></a>
</li>

<!-- <li class="nav-item">
  <a class="nav-link" href="<?= base_url('users');?>">
    <i class="fas fa-fw fa-users"></i>
    <span>Users</span></a>
</li> -->

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="<?= base_url('media');?>">
    <i class="fas fa-fw fa-image"></i>
    <span>Media</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url('kategori');?>">
  <i class="fas fa-fw fa-table"></i>
    <span>Kategori</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="<?= base_url('profile');?>">
    <i class="fas fa-fw fa-user"></i>
    <span>Profile</span></a>
</li>


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


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="img-profile rounded-circle" src="<?php echo base_url() ?>/assets/img/profile/user.png"> 
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('login/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>

  </nav>
  <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4"></a></p>
          <a href="/kategori/form" class="btn btn-primary"  onclick="return confirm('Apakah Anda yakin ?')"><span class="fa fa-plus"></span> Input Data Kategori</a>
          <hr>
            <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('berhasil');?>
                </div>
            <?php } ?>
            
            <?php 
                $errors = $validation->getErrors();
                if(!empty($errors))
                {
                    echo $validation->listErrors();
                }
            ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kategori</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php foreach($kategori as $row):?>
                <tr>
                    <td><?=$row['id_kategori'];?></td>
                    <td><?=$row['nama_kategori'];?></td>
                    
                    
                    <td><a href="kategori/form_edit/<?=$row['id_kategori'];?>" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengedit kategori <?php echo $row['nama_kategori']; ?> ini?')">Edit</a> | <a href="kategori/hapus/<?=$row['id_kategori'];?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori <?php echo $row['nama_kategori']; ?> ini?')">Hapus</a> </td>
                </tr>
                <?php endforeach;?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda yakin ingin logout ?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>" >Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!--End Modal Logout-->
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>/assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>/assets/js/demo/datatables-demo.js"></script>

</body>

</html>
