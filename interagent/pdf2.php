
<?php include("db.php"); ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eurorentacar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
    
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
   
              <i class="fa fa-globe"></i> <a><img src="../img/logo.png" alt=""></a> <center> <?php if(isset($_GET['reservation'])) {
  
  $id_reservation=$_GET['reservation'];

 $query1 = "SELECT * FROM `Facture` WHERE id_reservation=$id_reservation ";
    $result_tasks1 = mysqli_query($conn, $query1);   
    while($row = mysqli_fetch_assoc($result_tasks1)) {?> <h3>Facture n°</3><?php  echo $row['id']; }} ?> </center> 
          <small class="pull-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <br>
        De
        <address>
          <strong>Eurorentacar </strong><br>
          Sayada-Monastir<br>
          Phone: (+216) (+216) 98 242 670<br>
          Email:eurorentacar6@gmail.com

        </address>
        <br><br>
        <?php if(isset($_GET['reservation'])) {
  
  $id_reservation=$_GET['reservation'];

 $query1 = "SELECT * FROM `Facture` WHERE id_reservation=$id_reservation ";
    $result_tasks1 = mysqli_query($conn, $query1);   
    while($row = mysqli_fetch_assoc($result_tasks1)) {?> <a style="font-size: 20px" >Facture au nom de : </a><?php  echo $row['nom_client'];?> <br> <a style="font-size: 20px" >Agent en charge : </a> <?php  echo $row['agent'];}} ?>

        <br><br><br><br>
      </div>
       <div class="container" center>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID Réservation</th>
      <th>ID Client</th>
      <th>ID Voiture</th>
      <th>Date départ</th>
      <th>Date retour</th>
      <th>Livraison</th>
      <th>Chauffeur</th>
      <th>Etat</th>
      <th>Prix</th>
      <th>Date d'achat</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
    if(isset($_GET['reservation'])) {
  
  $id_reservation=$_GET['reservation'];


    $query = "SELECT * FROM `commande` WHERE id=$id_reservation ";
    $result_tasks = mysqli_query($conn, $query);    

    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['client']; ?></td>
      <td><?php echo $row['voiture']; ?></td>
      <td><?php echo $row['depart']; ?></td>
      <td><?php echo $row['retour']; ?></td>
      <td><?php echo $row['livraison']; ?></td>
      <td><?php echo $row['chauffeur']; ?></td>
      <td><?php echo $row['etat']; ?></td>
      <td><?php echo $row['prix']; ?></td> 
      <td><?php echo $row['date_achat']; ?></td> 
    </td>
     
    </tr>
    <?php }} ?>
        </tbody>
      </table>

    <!-- /.row -->

   
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div> 
<br><br><br>
<?php if(isset($_GET['reservation'])) {
  
  $id_reservation=$_GET['reservation'];

 $query1 = "SELECT * FROM `Facture` WHERE id_reservation=$id_reservation ";
    $result_tasks1 = mysqli_query($conn, $query1);   

    while($row = mysqli_fetch_assoc($result_tasks1)) {?> <a style="padding-left: 500px;font-size: 20px;"> <?php  echo 'Fait le '.$row['date_facture'];?></a>  <br> <a style="padding-left: 500px;font-size: 20px;">  <?php echo 'A '.$row['lieu'];?> </a><?php }} ?>
    <br><br> <a style="padding-left: 500px;font-size: 20px; font-weight: bold">  Signature : </a>

<!-- ./wrapper -->

</body>
</html>
