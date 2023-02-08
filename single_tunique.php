<?php require './header.php'?>


    <section class=" section_gap">

  <?php
    require './admin/cores/db.php';
    
    if(isset($_GET['tunique_choisi'])){
      $id = ($_GET['tunique_choisi']);
      //var_dump($id);
      if (is_numeric($id)) {
        //require './admin/cores/db.php';
        $query = $db->query("SELECT * FROM tunique WHERE id='".$id."'");
        $choisi= $query->fetch();
        //var_dump($choisi);
        //echo $choisi;
        if ($choisi ) { 
        //var_dump($choisi);
        $titre=$choisi['nom'];
        $prix=$choisi['prix'];
        $img=$choisi['img'];
        $type=$choisi['types'];
  ?>

    <h2 style="margin-left:20%"> 
      NOTRE SERVICE CLIENT
    </h2>
    <div class="product_image_area">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-6">
            <div class="s_product_img">    
                <img
                  class="d-block w-100"
                  src="./images/<?php echo $img; ?>"
                  />
            </div>
          </div>

          <div class="col-lg-5 offset-lg-1">
          <h5>Le service client +243 990 411 745</h5>
              <h5>client@baruvi.net</h5>
            <div class="s_product_text">
              <h3><?php echo $titre; ?></h3>
              <h2>$<?php echo $prix; ?></h2>
              
              <ul class="list">
                <li>
                  <a class="active" href="#">
                    Tunique pour: <span><?php echo $type; ?></span>
                  </a>
                </li>
              </ul>

              <div class="card_area">
                <a 
                  class="main_btn" 
                  href="https://wa.me/+243990411745?text=Bonjour Baruvi Business(Service client) !, je suis  interressé(e) par cet habit (Tunique): <?php echo  "« $titre »"; echo "Prix :« $prix » "; echo "Numéro « $id » "; echo "Pour : « $type » "; ?>"
                  target="_blank"
                  style="
                    background:green;
                    border:1px solid white"
                  >
                  <i class="lnr lnr lnr-diamondss"></i>
                  Contactez le service Client
                </a>
                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-diamond"></i>
                </a>
                <br>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div> 
    <?php }}}?>
  </section>
    <!--================End Product Description Area =================-->

  
<?php require './footer.php' ?>

