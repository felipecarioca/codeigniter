<?php 

    if(!$this->session->userdata("usuario_logado"))
      die;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lista de Produtos</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url("vendor/fontawesome-free/css/all.min.css")?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url("css/sb-admin-2.min.css")?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Code Igniter</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('usuarios/');?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Usuários</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider" style="margin: 0 1rem 0rem !important;">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('produtos/');?>">
          <i class="fas fa-fw fa-box"></i>
          <span>Produtos</span></a>
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

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Felipe Pereira</span>
                <img class="img-profile rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS0aaitnN8uBJHkBj_XiuKJVc45xsi7Aok4BZCrlwYFKqVKZ4sx">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url("usuarios/novo");?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Novo Usuário
                </a>
                <a class="dropdown-item" href="<?= base_url("produtos/novo");?>">
                  <i class="fas fa-box fa-sm fa-fw mr-2 text-gray-400"></i>
                  Novo Produto
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('login/logout');?>">
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Usuários</h1>
          </div>
          
          <?php echo form_open("usuarios/editar");?>

          <!-- Content Row -->
          <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Senha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario) :?>
                    <tr>
                        <td>
                          <input name="id" id="id_<?=$usuario['id']?>" type="radio" value="<?=$usuario['id']?>">
                        </td>
                        <td><?=$usuario['nome']?></td>
                        <td><?=$usuario['email']?></td>
                        <td><?=$usuario['senha']?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
          </div>

          <div class="row">

            <div style="margin: 0 auto;">
            <?php 
              echo form_button(array(
                  "content" => "Excluir",
                  "type" => "submit",
                  "class" => "btn btn-primary"
              ));
            ?>
            </div>
          </div>

          <?php echo form_close();?>

        </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url("vendor/jquery/jquery.min.js")?>"></script>
  <script src="<?= base_url("vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url("vendor/jquery-easing/jquery.easing.min.js")?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url("js/sb-admin-2.min.js")?>"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url("vendor/chart.js/Chart.min.js")?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url("js/demo/chart-area-demo.js")?>"></script>
  <script src="<?= base_url("js/demo/chart-pie-demo.js")?>"></script>

</body>

</html>
