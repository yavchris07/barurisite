<?php require './header.php'?>

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Contactez Nous</h2>
              <p>Pour toute information nous oncernant</p>
            </div>
            <div class="page_link">
              <a href="index.html">Accueil</a>
              <a href="contact.html">Contactez Nous</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!-- ================ contact section start ================= -->
  <section class="section_gap">

    <div class="container">
      <div class="d-none d-sm-block mb-2 pb-4">
        <div id="map" style="height: 480px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15952.482794919673!2d29.219143426718723!3d-1.6714635804986304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x19dd0f5ff03ccf71%3A0x8702d152f9f905e7!2sGoma!3m2!1d-1.658501!2d29.2204548!4m5!1s0x19dd05b4c1344af1%3A0x6a0b34b1f569792f!2sGare%20routi%C3%A8re%20de%20GOMA%2C%20869P%2B533%2C%20Goma!3m2!1d-1.6811722!2d29.234669099999998!5e0!3m2!1sfr!2scd!4v1674549888382!5m2!1sfr!2scd" 
                width="1000" 
                height="500" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="mp"
                >
        </iframe>
        </div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>


        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15952.482794919673!2d29.219143426718723!3d-1.6714635804986304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x19dd0f5ff03ccf71%3A0x8702d152f9f905e7!2sGoma!3m2!1d-1.658501!2d29.2204548!4m5!1s0x19dd05b4c1344af1%3A0x6a0b34b1f569792f!2sGare%20routi%C3%A8re%20de%20GOMA%2C%20869P%2B533%2C%20Goma!3m2!1d-1.6811722!2d29.234669099999998!5e0!3m2!1sfr!2scd!4v1674549888382!5m2!1sfr!2scd" 
                width="1000" 
                height="600" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="mp"
                >
        </iframe> -->
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script> -->
        <!-- <script src="https://www.google.com/maps/dir/Goma/Gare+routi%C3%A8re+de+GOMA,+869P%2B533,+Goma/@-1.6714636,29.2191434,15z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x19dd0f5ff03ccf71:0x8702d152f9f905e7!2m2!1d29.2204548!2d-1.658501!1m5!1m1!1s0x19dd05b4c1344af1:0x6a0b34b1f569792f!2m2!1d29.2346691!2d-1.6811722!3e0"></script> -->
      </div>


      <!-- <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
         <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-lg-3">
              <button type="submit" class="main_btn">Send Message</button>
            </div>
          </form>


        </div> -->

        <div class="col-md-12">

          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Boulevard kanyamuhanga, Q. Les Volcans  N° 009</h3>
              <p>Dans la gare routière, entrrée principale, 1er bloc à gauche</p>
            </div>
          </div>

          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="#">Direction +243 993 016 511</a></h3>
              <p>victoirebakunzi@baruvi.com</p>
            </div>
          </div>

          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="#">Service client +243 990 411 745</a></h3>
              <p>client@baruvi.com</p>
            </div>
          </div>

          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">victoirebakunzi@baruvi.com</a></h3>
              <p>client@baruvi.com</p>
            </div>
          </div>

        </div>

        <!-- ============ team ==================== -->
        <h3>EQUIPE MANAGERIALE</h3>
        <div class="col-lg-12 team">

          <div class="kart">
            <img 
              src="./img/our/2.jpg" 
              alt=""
              >
              <h4>Noms sdksjakdj</h4>
              <p>Titre </p>
          </div>

          <div class="kart">
            <img 
              src="./img/our/2.jpg" 
              alt=""
              >
              <h4>Noms sdksjakdj</h4>
              <p>Titre </p>
          </div>

          <div class="kart">
            <img 
              src="./img/our/2.jpg" 
              alt=""
              >
              <h4>Noms sdksjakdj</h4>
              <p>Titre </p>
          </div>
          <div class="kart">
            <img 
              src="./img/our/2.jpg" 
              alt=""
              >
              <h4>Noms sdksjakdj</h4>
              <p>Titre </p>
          </div>

          <div class="kart">
            <img 
              src="./img/our/2.jpg" 
              alt=""
              >
              <h4>Noms sdksjakdj</h4>
              <p>Titre </p>
          </div>

           
        </div>

      </div>

      
    </div>

  </section>
	<!-- ================ contact section end ================= -->

<?php require './footer.php'?>