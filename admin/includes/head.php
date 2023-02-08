<!DOCTYPE html>
<html lang="en">  
  <?php
  session_start();
  if(!isset($_SESSION['authified'])) {

  if (!headers_sent()) {
   header('Location: login.php');
    exit; 
      
    }
  }
   elseif(isset($_POST['deconnexion'])){
     session_destroy();
     header('Location: login.php');
   } 
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Baruvi.com | Admin</title>
  <!-- plugins:css -->
  <link rel="icon" type="image/x-icon" href="../img/log.png"/>
  <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="./assets/vendors/jquery-bar-rating/css-stars.css" />
  <link rel="stylesheet" href="./assets/vendors/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->

  <link rel="stylesheet" href="./assets/css/demo_1/style.css" />

</head>