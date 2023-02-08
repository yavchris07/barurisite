<?php require './header.php'?>

  <!--================Home Banner Area =================-->

  <section class="offer_area" style="height:500px">
    <div class="container">
      <div class="row justify-content-center">
        <div class="offset-lg-8 col-lg-1 text-right">
          <div class="offer_content">
            <h2 class="text-uppercase">Baruvi Business</h2>
            <p style="color:grey">
              " L'habillement classe sur mesures,habillement classe sur mesures " 
            </p>
            <!-- <a href="#" class="main_btn mb-20 mt-5">Decouvrez Maintenant</a> -->
            <!-- <p style="color: white;">Limitez le temps de Solde</p> -->
          </div>
        </div>
        <h3 
          class="text-uppercase mb-40" 
          style="
            maring-right:5px;
            color:orange;
            bottom: 5px"
          > 
          " L'habillement classe sur mesures " 
        </h3>
      </div>
    </div>
  </section>

  <br>
  <br>
  <div class="main_title">
    <h2><span>Baruvi Business pour vous</span></h2>
    <p>" L'habillement classe sur mesures "</p>
  </div>
  
  <section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content row">
          <div class="col-lg-12 box1">
            <!-- <p class="sub text-uppercase">Collection des Hommes</p> -->
            <h3 style="color: orange;">
              Nous produisons  de <span>vestes,</span>  de <span>tuniques,</span> et des <span>chemises,</span> 
              pour hommes, femmes et enfants: selon vos choix, du tissus, de la couleur, du modèle et sur vos propres mesures <br>
              <span>Baruvi Business</span>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!-- Start feature Area -->
  <!-- <section class="feature-area section_gap_bottom_custom">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-money"></i>
              <h3>Garantie de remboursement</h3>
            </a>
            <p>Doit ouvrir un .....</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-truck"></i>
              <h3>Livraison Graduit</h3>
            </a>
            <p>Doit ouvrir un .....</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-support"></i>
              <h3>Soutien toujours</h3>
            </a>
            <p>Doit ouvrir un .....</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-blockchain"></i>
              <h3>Payment Securise</h3>
            </a>
            <p>Doit ouvrir un .....</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End feature Area -->

  <!--================ Feature Product Area =================-->
  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Produit en vedette</span></h2>
            <p>L'habillement classe sur mesures</p>
          </div>
        </div>
      </div>

      <div class="row">
      <!-- Veste -->
      <?php
         require './admin/cores/db.php';
          $veste = $db->query("SELECT * FROM veste where types='homme' ORDER BY id DESC limit 1");
          while($All = $veste->fetch()){
            echo "

            <div class='col-lg-3 col-md-6'>
              <div class='single-product'>
                <div class='product-img'>
                <img class='img-fluid w-100' src='./images/".$All['img']."' alt='' />
                </div>
                <div class='product-btm'>
                  <a href='#' class='d-block'>
                  <h4>".$All['img']."</h4>
                  </a>
                <div class='mt-3'>
                  <span class='mr-4'>$".$All['prix']."</span>
                </div>
                </div>
              </div>
            </div>
            ";
          }
        ?> 

        <?php
         require './admin/cores/db.php';
          $veste = $db->query("SELECT * FROM veste where types='femme' ORDER BY id DESC limit 1");
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
                </div>
                </div>
              </div>
            </div>
            ";
          }
        ?> 
         <?php
         require './admin/cores/db.php';
          $veste = $db->query("SELECT * FROM veste where types='enfant' ORDER BY id DESC limit 1");
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
                </div>
                </div>
              </div>
            </div>
            ";
          }
        ?> 
        <!-- Tunique -->
        <?php
         require './admin/cores/db.php';
          $veste = $db->query("SELECT * FROM tunique where types='homme' ORDER BY id DESC limit 1");
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
                </div>
                </div>
              </div>
            </div>
            ";
          }
        ?> 

        <?php
         require './admin/cores/db.php';
          $veste = $db->query("SELECT * FROM tunique where types='femme' ORDER BY id DESC limit 1");
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
                </div>
                </div>
              </div>
            </div>
            ";
          }
        ?> 
         <?php
         require './admin/cores/db.php';
          $veste = $db->query("SELECT * FROM tunique where types='enfant' ORDER BY id DESC limit 1");
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
  <!--================ End Feature Product Area =================-->

  <!--================ Offer Area =================-->
  <!-- <section class="offer_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="offset-lg-4 col-lg-6 text-center">
          <div class="offer_content">
            <h3 class="text-uppercase mb-40">Toute la </h3>
            <h2 class="text-uppercase">50% de reduction</h2>
            <a href="#" class="main_btn mb-20 mt-5">Decouvrez Maintenant</a>
            <p style="color: white;">Limitez le temps de Solde</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--================ End Offer Area =================-->

  <!--================ New Product Area =================-->
  <section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Nouveau Produits pour Hommes</span></h2>
            <p> L'habillement classe sur mesures</p>
            <!-- <section class="offer_area">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="offset-lg-4 col-lg-8 text-center">
                    <div class="offer_content">
                       <h3 class="text-uppercase mb-40">Toute la </h3>
                      <h3 class="text-uppercase">L'habillement classe sur mesures</h3>
                       <a href="#" class="main_btn mb-20 mt-5">Decouvrez Maintenant</a>
                      <p style="color: white;">Limitez le temps de Solde</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>  -->
          </div>
        </div>
      </div>

      <div class="row">

        <?php
         require './admin/cores/db.php';
          $veste = $db->query("SELECT * FROM veste where types='homme' ORDER BY id DESC limit 4");
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
         <?php
           require './admin/cores/db.php';
         //Pour le veste homme
          $veste = $db->query("SELECT * FROM  tunique where types='homme' ORDER BY id DESC limit 4");
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
                  <span class='mr-4'>$".$All['prix']." $</span>
                  <a href='./single_tunique.php?tunique_choisi=".$All['id']."' class='main_btn'>Acheter</a>
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
  <!--================ End New Product Area =================-->

  <!--================ Product for women =================-->
  <section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Nouveau Produits pour femmes</span></h2>
            <p>L'habillement classe sur mesures</p>
          </div>
        </div>
      </div>

      <div class="row">
  
        <?php
         require './admin/cores/db.php';
          $veste_ = $db->query("SELECT * FROM veste where types='femme' ORDER BY id DESC limit 4");
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
                  <span class='mr-4'>$".$All['prix']." $</span>
                  <a href='./detail.php?habit_choisi=".$All['id']."' class='main_btn'>Acheter</a>
                </div>
                </div>
              </div>
            </div>
            ";
          }
        ?>
         <?php
           require './admin/cores/db.php';
         //Pour le veste femme
          $veste = $db->query("SELECT * FROM  tunique where types='femme' ORDER BY id DESC limit 4");
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
                    <a href='./single_tunique.php?tunique_choisi=".$All['id']."' class='main_btn'>Acheter</a>
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
  <!--================ End Product Women =================-->

  <!-- =====================  children  ================= -->
  <section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Nouveau Produits pour Enfants </span></h2>
            <p>L'habillement classe sur mesures</p>
          </div>
        </div>
      </div>

      <div class="row">
         
      <?php
         require './admin/cores/db.php';
         //Pour le veste enfant
          $veste = $db->query("SELECT * FROM veste where types='enfant' ORDER BY id DESC limit 4");
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
        <?php
           require './admin/cores/db.php';
         //Pour le veste enfant
          $veste = $db->query("SELECT * FROM  tunique where types='enfant' ORDER BY id DESC limit 4");
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
                    <a href='./single_tunique.php?tunique_choisi=".$All['id']."' class='main_btn'>Acheter</a>
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
  <!-- ================================================== -->

  <!--================ Start Blog Area =================-->
  <section class="blog-area section-gap">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>L'habillement classe sur mesures. lisez un peu</span></h2>
            <p>Chez Baruvi Businness</p>
          </div>
        </div>
      </div>

      <!-- <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/our/1.jpg" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#">Par Admin</a>
                <a href="#"><i class="ti-comments-smiley"></i>2 Commentaire</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4>Le lit intelligent Ford empêche votre partenaire de dormir de monopoliser le tout</h4>
              </a>
              <div class="text-wrap">
                <p>
                  Qu'un cinquième j'apporte la mouche à la face divisée pour porter la division à la semence ailée de la lumière divisée en avant.
                </p>
              </div>
              <a href="#" class="blog_btn">Lire plus <span class="ml-2 ti-arrow-right"></span></a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/our/12.jpeg" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#">Par Admin</a>
                <a href="#"><i class="ti-comments-smiley"></i>2 Commentaire</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4>Le lit intelligent Ford empêche votre partenaire de dormir de monopoliser le tout</h4>
              </a>
              <div class="text-wrap">
                <p>
                  Qu'un cinquième j'apporte la mouche à la face divisée pour porter la division à la semence ailée de la lumière divisée en avant.
                </p>
              </div>
              <a href="#" class="blog_btn">Lire plus <span class="ml-2 ti-arrow-right"></span></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/our/11.jpeg" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#">Par Admin</a>
                <a href="#"><i class="ti-comments-smiley"></i>2 Commentaire</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4> Le lit intelligent Ford empêche votre partenaire de dormir de monopoliser le tout</h4>
              </a>
              <div class="text-wrap">
                <p>
                  Qu'un cinquième j'apporte la mouche à la face divisée pour porter la division à la semence ailée de la lumière divisée en avant.
                </p>
              </div>
              <a href="#" class="blog_btn">Lire plus <span class="ml-2 ti-arrow-right"></span></a>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </section>
  <!--================ End Blog Area =================-->
<?php require './footer.php'?>