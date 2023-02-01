<!DOCTYPE html>
<html lang="en">

<?php require "Views/admin/mydash/includes/head.php"; ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->

   <?php require "Views/admin/mydash/includes/sidebar.php";
   

   
   ?>


    <!-- fin nav bar partial -->





   <?php require "Views/admin/mydash/includes/header.php";
 
       $recup_categorie= $db->query("SELECT * FROM categorie ORDER BY id DESC limit 9 ");
      while ($all_catg=  $recup_categorie->fetch()){
    $categories[]=$all_catg;
 }
   
   
   ?>

  <div class="row justify-content-center br-40 mt-5">

 <?php       
                 require 'cores/add_catg.php';
                      if(isset($_POST['add_onlibrairie'])){
                               add_categorie(); 
                      }        
                  
                    
                    ?>
             
 </div>
<div class="row justify-content-center br-40 mt-5">
     
              <div class="col-md-5 grid-margin    mt-2">
             
                <div class="card">
                  <div class="card-body">
                    <h3 class="">Categorie</h3>
                    <p class="card-description">Ajouter une categorie</p>
                    <form class="forms-sample"  method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="categorie_title">Désignation</label>
                        <input name="designation" <?php if(isset($_POST['designation'])){ $nom=$_POST['designation'];?>value="<?php echo $nom ;} ?>" type="text"  class="form-control" id="categorie_title" placeholder="catégorie">
                      </div>
                      <div class="form-group">
                        <label for="categorie_descript">Description du categorie</label>
                        <textarea name="description_categorie" type="text" style="height:120px;" class="form-control" id="categorie_descript" placeholder="descrption du categorie"><?php if(isset($_POST['description_categorie'])){ $nom=$_POST['description_categorie']; echo $nom ;} ?></textarea>
                      </div>
                     
                      
                     
                      <button type="submit" name="add_onlibrairie" class="btn btn-primary mr-2"> Enregistrer </button>
                    
                    </form>
                  </div>
                </div>
              </div>   
               <div class="col-md-3 grid-margin    mt-2">   
               
               








            <div id="getlist" class="card">
              
            </div>










               
               </div>
            </div>

      


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->


        <!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
              2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from
              Bootstrapdash.com</span>
          </div>

          <div>
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> Distributed By: <a
                href="https://themewagon.com/" target="_blank">Themewagon</a></span>
          </div>
        </footer> -->


        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
 <?php require "Views/admin/mydash/includes/js.php" ?>
</body>

</html>