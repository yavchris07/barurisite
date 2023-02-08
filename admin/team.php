<!DOCTYPE html>
<html lang="en">

<?php require "./includes/head.php" ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
  <?php
 require "./includes/sidebar.php" ?>

    <!-- fin nav bar partial -->

   <?php require "./includes/header.php" ;?>

<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Baruvi Business</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Team </li>
                </ol>
              </nav>
            </div>
         
 
     
  <div class="col-8 grid-margin stretch-card">
              
    <div class="card">
      <div class="card-body">
        <h3 class="">Ajout de Nembre</h3>
          <p class="card-description">Baruvi Businness</p>
            <form 
              class="forms-sample"  
              method="post" 
              enctype="multipart/form-data" 
              action="./cores/team_cores.php"
              >
              <div class="form-group">
                <label for="categorie_title">Nom</label>
                <input 
                  name="noms" 
                  <?php if(isset($_POST['noms'])){ $nom=$_POST['noms'];?>
                  value="<?php echo $nom ;} ?>" 
                  type="text"  
                  class="form-control" 
                  id="categorie_title" 
                  placeholder="Nom complet">
              </div>
              <div class="form-group">
                <label for="categorie_title">Titre</label>
                <input 
                  name="titre" 
                  <?php if(isset($_POST['titre'])){ $prix=$_POST[' titre'];?>
                  value="<?php echo $prix ;} ?>" 
                  type="text"  
                  class="form-control" 
                  id="categorie_title" 
                  placeholder="Titre">
              </div>
              
              <div class="form-group">
                <label for="images_title">Image</label>
                <input 
                  name="img" 
                  <?php if(isset($_FILES['img'])){ $img=$_FILES['img'];?>
                  value="<?php echo $img ;} ?>" 
                  type="file"  
                  class="form-control" 
                  id="img_title" 
                  placeholder=" ">
              </div>
                             
              <button 
                type="submit" 
                name="ajout" 
                class="btn btn-primary mr-2"
              > 
              Enregistrer 
              </button>
                      
            </form>
          </div>
      </div>
    </div>   

   
    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Equipe Manageriale</h4>
                    <p class="card-description"> Habillement classs <code>et sur mesures</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                          <th>ID</th>
                            <th>Nom</th>
                            <th>Titre</th>
                            <th>Image</th>
                            <th>Operations</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php require './cores/db.php';

                        $response = $db->query("SELECT * from team");
                        while($all_vest = $response->fetch()){
                          // echo "<tr>";
                          
                          // echo "</tr>";
                        
                          echo "<tr> 
                                  <td>".$all_vest['id']."</td>
                                  <td>".$all_vest['noms']."</td>
                                  <td>".$all_vest['titre']."</td>
                                  <td><img src='../images/".$all_vest['img']."' /> </td>
                                  <td>
                                  <a 
                                    style=color:red; 
                                    font-size:20px
                                    href='./cores/team_cores.php?delete=".$all_vest['id']."'
                                  >
                                     <i class='fa fa-trash-o fa-lg'></i>
                                     Supp.
                                    </a>
                                  </td>
                                </tr>";
                        }        
                        ?>                         
              </tbody>
            <?php $response->closeCursor();?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

  <!-- container-scroller -->
  <!-- plugins:js -->
<?php //require "./includes/js.php" ?>
</body>

</html>

