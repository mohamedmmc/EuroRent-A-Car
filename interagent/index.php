<?php
    include("functions.php");
include('db.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" />  

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
  <title> Agent</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Agent </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Accueil</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface Agent
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Les Gestions</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Les Gestions:</h6>
             <a class="collapse-item " href="gestionreservation.php">Gestion des commandes</a>
            <a class="collapse-item " href="gestionreservation_effectue.php">Les commandes effectués</a>
            <a class="collapse-item" href="gestionfacture.php">Gestion des  factures</a>
            <a class="collapse-item " href="crudnewsletter.php">Consulter les abonnés</a>
            <a class="collapse-item" href="crudchauffeur.php">Gestion des chauffeurs</a>
            <a class="collapse-item" href="client.php">Gestion des clients</a>
            <a class="collapse-item" href="gestionconge.php">Gestion des congés</a>
            <a class="collapse-item" href="voiture.php">Gestion des voitures</a>
            <a class="collapse-item" href="gestionpromotion.php">Gestion des promotions </a>
            <a class="collapse-item " href="gestioncoupon.php">Gestion des coupons</a>

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

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <?php
                $query = "SELECT * from `notifications` where `status` = 'unread' order by `date` DESC";
                if(count(fetchAll($query))>0){
                ?>
              <?php
                }
                    ?>
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"><?php if(count(fetchAll($query))>0){echo count(fetchAll($query));} ?></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
              <?php
                $query = "SELECT * from `notifications` order by `date` DESC";
                 if(count(fetchAll($query))>0){
                     foreach(fetchAll($query) as $i){
                ?>
              <a style ="
                         <?php
                            if($i['status']=='unread'){
                                echo "font-weight:bold;";
                            }
                         ?>
                         " class="dropdown-item" href="view.php?id=<?php echo $i['id'] ?>">
                <small><i><?php echo date('F j, Y, g:i a',strtotime($i['date'])) ?></i></small><br/>
                  <?php 
                  
                if($i['type']=='voiture'){
                    echo "Nouvelle reservation !";
                }
                  
                  ?>
                </a>
              <div class="dropdown-divider"></div>
                <?php
                     }
                 }else{
                     echo "No Records yet.";
                 }
                     ?>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

  
            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Agent</span>
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Accueil</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Revenue Total</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
//index.php
$query_total = "
   SELECT   SUM(prix) as total FROM commande   ";
$result_total = mysqli_query($conn, $query_total);
while($row = mysqli_fetch_assoc($result_total)) { 
 echo $row['total'].' DT'; 
}
?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Paiement avec Paypal</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
//index.php
$query_paypal = "SELECT   SUM(prix) as total_paypal FROM commande where paiement = 'paypal'   ";
$result_paypal = mysqli_query($conn, $query_paypal);
while($row = mysqli_fetch_assoc($result_paypal)) { 
 echo $row['total_paypal'].' DT'; 
}
?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fab fa-cc-paypal fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Paiement sur place</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php 
//index.php
$query_agence = "SELECT   SUM(prix) as total_agence FROM commande where paiement = 'agence'   ";
$result_agence = mysqli_query($conn, $query_agence);
while($row = mysqli_fetch_assoc($result_agence)) { 
 echo $row['total_agence'].' DT'; 
}
?></div>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-building fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Paiement avec carte</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
//index.php
$query_carte = "SELECT   SUM(prix) as total_carte FROM commande where paiement = 'carte'   ";
$result_carte = mysqli_query($conn, $query_carte);
while($row = mysqli_fetch_assoc($result_carte)) { 
 echo $row['total_carte'].' DT'; 
}
?></div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-credit-card fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
<?php 
$connect = mysqli_connect("localhost", "root", "", "crud");
$query = "SELECT * FROM commande";
$result4 = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result4))
{
 $chart_data .= "{ id:'".$row["id"]."', Prix:".$row["prix"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Nombres de jours pour les réservations récentes</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
       <?php 
$connect = mysqli_connect("localhost", "root", "", "crud");
$query = "SELECT id,TIMESTAMPDIFF(DAY,depart,retour) as jour FROM `commande`  ORDER BY `id` asc ";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ id:'".$row["id"]."', jour:".$row["jour"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>

                <div class="card-body">
                  <div class="container" >
   <div id="chart"></div>
  </div>
                </div>
              </div>
            </div>
                   
        <script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'id',
 ykeys:['jour'],
 labels:['Nombres de jours'],
 hideHover:'auto',
 stacked:true
});
</script>

            <!-- Pie Chart -->
            <?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "crud");
$sub_query = "
   SELECT etat, count(*) as etat_commande FROM commande 
   GROUP BY etat ";
$result = mysqli_query($connect, $sub_query);
$data = array();
while($row = mysqli_fetch_array($result))
{
 $data[] = array(
  'label'  => $row["etat"],
  'value'  => $row["etat_commande"]
 );
}
$data = json_encode($data);
?>
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Etat des réservations</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div id="chart2"></div>

                </div>
              </div>
            </div>
          </div>

<script>

$(document).ready(function(){
 
 var donut_chart = Morris.Donut({
     element: 'chart2',
     colors:['#1cc88a'],
     data: <?php echo $data; ?>
    });
  
});

</script>


<script type="text/javascript" src="js/loader.js"></script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['paiement', 'type_paiement'],
         <?php
         $sql =   "SELECT paiement, count(*) as type_paiement FROM commande 
   GROUP BY paiement ";
         $fire = mysqli_query($conn,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['paiement']."',".$result['type_paiement']."],";
          }

         ?>
        ]);

        var options = {
          title: ''

        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
     <div class="row">

            <!-- Content Column -->
            <div class="col-xl-8 col-lg-7">

         <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Pourcentage des réservations avec et sans chauffeur</h6>
                 
                </div>
 <div class="card-body">
                  <div >
        <div id="piechart2"  style="width: 650px; height: 500px;"></div>
  </div>
                </div>
              </div>

</div>

<div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4" style=" height: 595px;">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Rechercher les réservations</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
<form  method="GET">
          <div class="form-group">
 
            <input name="date1" type="date" class="form-control "  aria-label="Search" aria-describedby="basic-addon2"/>  </div>

                      <div class="form-group">

            <input name="date2" type="date" class="form-control " aria-label="Search" aria-describedby="basic-addon2"/>  </div>
          
          <div class="form-group">
             <input type="submit" name="tridate" class="btn btn-primary"  value="Rechercher">

            </div>
          </form>
         <?php 
    if (isset($_GET['tridate'])) 
  {   if (!empty($_GET['date1']and $_GET['date2'] ))
{
   $date1= $_GET['date1'];
      $date2= $_GET['date2'];?>
      <br><br>

        <?php

          $query_recherche = "SELECT  count(id) as nb_commande FROM commande  where (depart between '$date1' and '$date2') and  (retour between '$date1' and '$date2') and etat='en cours'";
          $res = mysqli_query($conn,$query_recherche);             
  while  ($rows =mysqli_fetch_array($res)): ?>
          <a style="font-weight: bold;font-size: 15px; color:#004FE4;"><?php echo 'Du '.$date1.' Au '.$date2;?>
          <br><br> </a> <a style="font-weight: bold;font-size: 25px; color:#1D345F; ">
          <?php  echo "Vous avez ".$rows['nb_commande'].' réservations';?> </a>
                <?php   endwhile;

        }
       else{ ?> <a style="font-weight: bold;font-size: 25px; color:#8194B8; "> <?php echo "Faites une recherche ";?> </a>  <?php
}}


          ?>
                </div>
              </div>
            </div>
          </div>

              </div>


              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Pourcentage de l'utilisation de chaque mode de paiement</h6>
                 
                </div>
 <div class="card-body">
                  <div >
        <center><div id="piechart"  style="width: 900px; height: 500px;"></div></center>
  </div>
                </div>
              </div>

            <!-- Content Column -->
           
            <script type="text/javascript" src="js/loader.js"></script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['paiement', 'type_paiement'],
         <?php
         $sql =   "SELECT chauffeur, count(*) as type_reservation FROM commande 
   GROUP BY chauffeur ";
         $fire = mysqli_query($conn,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['chauffeur']."',".$result['type_reservation']."],";
          }

         ?>
        ]);

        var options = {
          title: ''

        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>

      
        <!-- /.container-fluid -->

      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020 by Les experts</span>
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
          <a class="btn btn-primary" href="../accueil.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
