<!DOCTYPE html>
<html lang="en">

<?php require "./includes/head.php" ?>

<body>

  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
   <?php require "./includes/sidebar.php" ?>

    <!-- fin nav bar partial -->

   <?php require "./includes/header.php" ?>

   <?php
   require './cores/db.php';
   //veste homme
   $veste_homme = $db->query("select count(*) from veste where types='homme'")->fetchColumn(); 
   echo $veste_homme;
   //veste femme
   $veste_femme = $db->query("select count(*) from veste where types='femme'")->fetchColumn(); 
   echo $veste_femme;
   //veste enfant
   $veste_enfant = $db->query("select count(*) from veste where types='enfant'")->fetchColumn(); 
   echo $veste_enfant;
   
   //Tunique Homme
   $tunique_homme  = $db->query("select count(*) from tunique where types='homme'")->fetchColumn(); 
   echo $tunique_homme;
   //tunique femme
   $tunique_femme  = $db->query("select count(*) from tunique where types='femme'")->fetchColumn(); 
   echo $tunique_femme;
   //tunique enfant
   $tunique_enfant  = $db->query("select count(*) from tunique where types='enfant'")->fetchColumn(); 
   echo $tunique_enfant;

  //  $total_veste;
  $total_veste  = $db->query("select count(*) from veste")->fetchColumn();
  echo $total_veste;
  //  $total_tunique;
  $total_tunique  = $db->query("select count(*) from tunique")->fetchColumn(); 
  echo $total_tunique;
   
   ?>

   <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Baruvi Business</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Tableau de bord </li>
                </ol>
              </nav>
            </div>
    
              <div class="row">
                
                <div class="col-sm-2 stretch-card grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="card-title">  Veste Pour Homme <small class="d-block text-muted"> En stock</small>
                        </div>
                        <i class="mdi mdi-printer mouse-pointer"></i>
                        <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                      </div>
                      <h3 class="font-weight-bold mb-0">
                        <span class="text-success h5">=></span>  
                        <?php echo $veste_homme ?></h3>
                    </div>
                  </div>
                </div>

                <div class="col-sm-2 stretch-card grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="card-title">  Veste Pour Femme <small class="d-block text-muted">En stock</small>
                        </div>
                        <div class="d-flex text-muted font-20">
                          <i class="mdi mdi-printer mouse-pointer"></i>
                          <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                        </div>
                      </div>
                      <h3 class="font-weight-bold mb-0"> 
                        <span class="text-success h5">=></span>
                        <?php echo $veste_femme ?></span>
                      </h3>
                    </div>
                  </div>
                </div>

                <div class="col-sm-2 stretch-card grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="card-title"> Veste Pour Enfant <small class="d-block text-muted">En stock</small>
                        </div>
                        <div class="d-flex text-muted font-20">
                          <i class="mdi mdi-printer mouse-pointer"></i>
                          <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                        </div>
                      </div>
                      <h3 class="font-weight-bold mb-0">
                        <span class="text-success h5">=></span>
                        <?php echo $veste_enfant?>
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 stretch-card grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="card-title"> Tunique Pour Homme <small class="d-block text-muted">En stock</small>
                        </div>
                        <div class="d-flex text-muted font-20">
                          <i class="mdi mdi-printer mouse-pointer"></i>
                          <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                        </div>
                      </div>
                      <h3 class="font-weight-bold mb-0">
                        <span class="text-success h5">=></span>
                        <?php echo $tunique_homme ?>
                      </h3>
                       
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 stretch-card grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="card-title"> Tunique Pour Femme <small class="d-block text-muted">En stock</small>
                        </div>
                        <div class="d-flex text-muted font-20">
                          <i class="mdi mdi-printer mouse-pointer"></i>
                          <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                        </div>
                      </div>
                      <h3 class="font-weight-bold mb-0">
                        <span class="text-success h5">=></span>
                        <?php echo $tunique_femme ?>
                      </h3>
                       
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 stretch-card grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="card-title"> Tunique Pour Enfant <small class="d-block text-muted">En stock</small>
                        </div>
                        <div class="d-flex text-muted font-20">
                          <i class="mdi mdi-printer mouse-pointer"></i>
                          <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                        </div>
                      </div>
                      <h3 class="font-weight-bold mb-0">
                        <span class="text-success h5">=></span>
                        <?php echo $tunique_enfant ?>
                      </h3>
                       
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 stretch-card grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="card-title"> Total Veste <small class="d-block text-muted">En stock </small>
                        </div>
                        <div class="d-flex text-muted font-20">
                          <i class="mdi mdi-printer mouse-pointer"></i>
                          <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                        </div>
                      </div>
                      <h3 class="font-weight-bold mb-0">
                        <span class="text-success h5">=></span>
                        <?php echo $total_veste ?>
                        <i class="mdi mdi-arrow-up"></i>
                      </h3>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 stretch-card grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="card-title"> Total Tunique <small class="d-block text-muted"> En Stock</small>
                        </div>
                        <div class="d-flex text-muted font-20">
                          <i class="mdi mdi-printer mouse-pointer"></i>
                          <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                        </div>
                      </div>
                        <h3 class="font-weight-bold mb-0">
                          <span class="text-success h5">=></span>
                          <?php echo $total_tunique ?>
                          <i class="mdi mdi-arrow-up"></i>
                      </h3>
                    </div>
                  </div>
                </div>

               
              </div>

            </div>
  
 <?php //require "./includes/js.php" ?> 
</body>
</html>