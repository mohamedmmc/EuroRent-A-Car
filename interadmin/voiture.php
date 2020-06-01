

<?php
include("db.php");

?>

<?php include('includes/header.php'); ?>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><script src="gestionagent.js"></script>
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">



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
        <div class="sidebar-brand-text mx-3"> Admin </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Vos Gestions:</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Gestions:</h6>
            <a class="collapse-item " href="gestionagent.php">Gestion des agents</a>
            <a class="collapse-item" href="gestionreservation.php">Consulter les commandes</a>
            <a class="collapse-item " href="crudnewsletter.php">Consulter les abonnés</a>
            <a class="collapse-item" href="crudchauffeur.php">Gestion des chauffeurs</a>
            <a class="collapse-item" href="client.php">Gestion des clients</a>
            <a class="collapse-item" href="gestionconge.php">Gestion des congés</a>
            <a class="collapse-item active" href="voiture.php">Gestion des voitures</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
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

          <!-- Topbar Search -->
          

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

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1" >
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter">1+</span>

              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown" href="gestionconge.php">
                <h6 class="dropdown-header">
Notifications                </h6>
                <a class="dropdown-item d-flex align-items-center" href="gestionconge.php">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">

                      <i class="fas fa-file-alt text-white" ></i>

                    </div>
                  </div>
               
                  <div>
       
                    <span class="font-weight-bold">demandes de congé sont disponibles ! </span>

                 
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
            </li>
  
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="data:image/png;base64,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">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
          <h1 class="h3 mb-4 text-gray-800">Gestion des voitures</h1>
    
        
          <center>

          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET">
          <div class="input-group">
            <input name="acin" type="text" class="form-control bg-light border-0 small" placeholder="Recherche par immatriculation" aria-label="Search" aria-describedby="basic-addon2"/>
              <div class="input-group-append">

<button name="but8" class="btn btn-primary"  type="submit">
                  <i class="fas fa-search fa-sm"></i>

                </button>
              </div>

            </div>
          </form>
<center/>

        <!-- /.container-fluid -->

      </div>

      <main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD voiture FORM -->
      <div class="card card-body">
        <form action="save_voiture.php" method="POST">
          <div class="form-group">
            <input type="text" name="immatriculation" class="form-control" placeholder="immatriculation" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="prix" class="form-control" placeholder="prix" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="marque" class="form-control" placeholder="marque" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="modele" class="form-control" placeholder="modele" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="kilometrage" class="form-control" placeholder="kilometrage" autofocus>
          </div>
          <p>etat :</p>
          <select name="etat" class="form-control" placeholder="etat" >
            <option>disponible</option>
            <option>non disponible</option>
          </select>
          <br>
          <div class="form-group">
            <input type="file" name="pic" class="form-control" placeholder="pic" autofocus>
          </div>
          <input type="submit" name="save_voiture" class="btn btn-success btn-block" value="Enregistrer la voiture">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>immatriculation</th>
            <th>prix</th>
            <th>marque</th>
            <th>modele</th>
            <th>kilometrage</th>
            <th>etat</th>
            <th>pic</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM voiture";
          $result_voiture = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_voiture)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['immatriculation']; ?></td>
            <td><?php echo $row['prix']; ?></td>
            <td><?php echo $row['marque']; ?></td>
            <td><?php echo $row['modele']; ?></td>
            <td><?php echo $row['kilometrage']; ?></td>
            <td><?php echo $row['etat']; ?></td>
            <td><?php echo $row['pic']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_voiture.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>



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
          <a class="btn btn-primary" href="../accueil.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  </body>



<?php include('includes/footer.php'); ?>
