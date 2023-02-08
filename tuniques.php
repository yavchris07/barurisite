<?php require './header.php'?>

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
          <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
              <div class="mb-3 mb-md-0">
                <h2>Notre Magazin(Tunique)</h2>
                <p>Besoin d'habillement, passez chez Baruvi Business</p>
              </div>
              <div class="page_link">
                <a href="./index.php">Accueil</a>
                <a href="./tuniques.php">Magazin</a>
                <a href="#">Tuniques Fashion</a>
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
                  <h4>Tuniques pour Homme</h4>
                </div>
              </div>
              
              <div class="latest_product_inner">
                <div class="row">
  
                <?php
                require './admin/cores/db.php';
                  $tunique = $db->query("SELECT * FROM tunique where types='homme' ORDER BY id DESC ");
                  while($All = $tunique->fetch()){
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
                          <a href='./detail.php' class='main_btn'>Acheter</a>
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
                      <h4>Tuniques pour Femme</h4>
                    </div>
                  </div>
                  
                  <div class="latest_product_inner">
                    <div class="row">
      
                    <?php
                      require './admin/cores/db.php';
                        $tunique = $db->query("SELECT * FROM tunique where types='femme' ORDER BY id DESC ");
                        while($All = $tunique->fetch()){
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
                                <a href='./detail.php' class='main_btn'>Acheter</a>
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
  
      <!--================Category Product childree=================-->
        <section class="cat_product_area section_gap">
            <div class="container">
              <div class="row flex-row-reverse">
                <div class="col-lg-12">
                  <div class="product_top_bar">
                    <div class="left_dorp">
                      <h4>Tuniques pour Enfant</h4>
                    </div>
                  </div>
                  
                  <div class="latest_product_inner">
                    <div class="row">
                    <?php
                    require './admin/cores/db.php';
                      $tunique = $db->query("SELECT * FROM tunique where types='enfant' ORDER BY id DESC ");
                      while($All = $tunique->fetch()){
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
                              <a href='./detail.php' class='main_btn'>Acheter</a>
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
     
<?require './footer.php'?>
