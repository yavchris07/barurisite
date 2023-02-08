<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<?php require "./includes/head.php" ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->

   <?php require "./includes/sidebar.php" ?>

    <!-- fin nav bar partial -->

  <?php require "./includes/header.php" ?>

   <!-- <div class="row justify-content-center br-40 mt-5"> -->
       
  <div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Baruvi Business</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Accessoires </li>
          </ol>
        </nav>
      </div>
   


<div class="col-8 grid-margin stretch-card">
        
<!-- <div class="card">
<div class="card-body">
  <h3 class="">Ajout de Tunique</h3>
    <p class="card-description">Baruvi Businness</p>
      <form class="forms-sample"  method="post" enctype="multipart/form-data" action="./cores/tunique_cores.php">
        <div class="form-group">
          <label for="categorie_title">Nom</label>
          <input 
            name="nom" 
            <?php if(isset($_POST['nomt'])){ $nomt=$_POST['nomt'];?>
            value="<?php echo $nomt ;} ?>" 
            type="text"  
            class="form-control" 
            id="categorie_title" 
            placeholder="nom ou titre">
        </div>
        <div class="form-group">
          <label for="categorie_title">Prix</label>
          <input 
            name="prix" 
            <?php if(isset($_POST['prixt'])){ $prixt=$_POST[' prixt'];?>
            value="<?php echo $prixt ;} ?>" 
            type="text"  
            class="form-control" 
            id="categorie_title" 
            placeholder="prix">
        </div>
        <div class="form-group">
          <label for="categorie_title">Type</label>
          <select class="form-control" id="exampleSelectGender" name="types">
            <option value="" selected>choisir</option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="Enfant">Enfant</option>
          </select>
        </div>
        <div class="form-group">
          <label for="images_title">Image</label>
          <input 
            name="img" 
            <?php if(isset($_FILES['imgt'])){ $img=$_FILES['imgt'];?>
            value="<?php echo $img ;} ?>" 
            type="file"  
            class="form-control" 
            id="categorie_title" 
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
</div>    -->
<h4>PAS ENCORE DISPONIBLE LE SITE, MERCI</h4>
<!-- 
<div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Les tuniques en stock</h4>
              <p class="card-description"> Habillement classs <code>et sur mesures</code>
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                    <th>ID</th>
                      <th>Titre ou Nom</th>
                      <th>Prix</th>
                      <th>Image</th>
                      <th>Type</th>
                      <th>Operations</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php require './cores/db.php';

                  $response = $db->query("SELECT * from tunique");
                  while($all_vest = $response->fetch()){
                    // echo "<tr>";
                    
                    // echo "</tr>";
                  
                    echo "<tr> 
                            <td>".$all_vest['id']."</td>
                            <td>".$all_vest['nom']."</td>
                            <td>".$all_vest['prix']."</td>
                            <td><img src='../images/".$all_vest['img']."' /> </td>
                            <td>".$all_vest['types']."</td>
                            <td><a style=color:red; font-size:20px ><i class=mdi mdi-close-octagon></i></a></td>
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
</div> -->

<!-- container-scroller -->
<!-- plugins:js -->
<?php //require "./includes/js.php" ?>
</body>

</html>


