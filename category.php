<?php 
  require './header.php'
?>

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Notre Magazin (VESTE)</h2>
              <p>Besoin d'habillement, passez chez Baruvi Business</p>
            </div>
            <div class="page_link">
              <a href="./index.php">Accueil</a>
              <a href="#">Magazin</a>
              <a href="#">Nos Veste</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Man=================-->
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-12">
            <div class="product_top_bar">
              <div class="left_dorp">
                <h4>Pour Hommes</h4>
              </div>
            </div>
            
            <div class="latest_product_inner">
              <div class="row">

              <?php
                require './admin/cores/db.php';
                  $veste = $db->query("SELECT * FROM veste where types='homme' ORDER BY id DESC ");
                  while($All = $veste->fetch()){
                    echo "

                    <div class='col-lg-3 col-md-6'>
                      <div class='single-product'>
                        <div class='product-img'>
                        <img class='img-fluid w-100' src='./images/".$All['img']."' alt='' />
                        </div>
                        <div class='product-btm'>
                          <a href='#' class='d-block'>
                          <h4>".$All['nom']."</h4>
                          </a>
                        <div class='mt-3'>
                          <span class='mr-4'>$".$All['prix']."</span>
                          <a href='./detail.php?habit_choisi=".$All['id']."' class='main_btn'>Acheter</a>
                        </div>
                        </div>
                      </div>
                    </div>
                    ";
                  }
                ?> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Category Product Man =================-->

      <!--================Category Product Women=================-->
      <section class="cat_product_area section_gap">
          <div class="container">
            <div class="row flex-row-reverse">
              <div class="col-lg-12">
                <div class="product_top_bar">
                  <div class="left_dorp">
                    <h4>Pour Femmes</h4>
                  </div>
                </div>
                
                <div class="latest_product_inner">
                  <div class="row">
                  <?php
                require './admin/cores/db.php';
                  $veste = $db->query("SELECT * FROM veste where types='femme' ORDER BY id DESC ");
                  while($All = $veste->fetch()){
                    echo "

                    <div class='col-lg-3 col-md-6'>
                      <div class='single-product'>
                        <div class='product-img'>
                        <img class='img-fluid w-100' src='./images/".$All['img']."' alt='' />
                        </div>
                        <div class='product-btm'>
                          <a href='#' class='d-block'>
                          <h4>".$All['nom']."</h4>
                          </a>
                        <div class='mt-3'>
                          <span class='mr-4'>$".$All['prix']."</span>
                          <a href='./detail.php?habit_choisi=".$All['id']."' class='main_btn'>Acheter</a>
                        </div>
                        </div>
                      </div>
                    </div>
                    ";
                  }
                ?> 
                     
                     
            </div>
          </div>
      </section>
      <!--================End Category Product Women =============-->

    <!--================Category Product childreen=================-->
      <section class="cat_product_area section_gap">
          <div class="container">
            <div class="row flex-row-reverse">
              <div class="col-lg-12">
                <div class="product_top_bar">
                  <div class="left_dorp">
                    <h4>Pour Enfants</h4>
                  </div>
                </div>
                
                <div class="latest_product_inner">
                  <div class="row">
    
                  <?php
                require './admin/cores/db.php';
                  $veste = $db->query("SELECT * FROM veste where types='enfant' ORDER BY id DESC ");
                  while($All = $veste->fetch()){
                    echo "

                    <div class='col-lg-3 col-md-6'>
                      <div class='single-product'>
                        <div class='product-img'>
                        <img class='img-fluid w-100' src='./images/".$All['img']."' alt='' />
                        </div>
                        <div class='product-btm'>
                          <a href='#' class='d-block'>
                          <h4>".$All['nom']."</h4>
                          </a>
                        <div class='mt-3'>
                          <span class='mr-4'>$".$All['prix']."</span>
                          <a href='./detail.php?habit_choisi=".$All['id']."' class='main_btn'>Acheter</a>
                        </div>
                        </div>
                      </div>
                    </div>
                    ";
                  }
                ?> 
            </div>
          </div>
      </section>
    <!--================End Category Product children =================-->
<?php require './footer.php'?>
