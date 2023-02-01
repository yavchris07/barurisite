  <div class="col-12 row" >
      <div class="col-6">
                 <a style="color:#00000F" href="https://wa.me/+243974242040?text=Bonjour livraze, je suis  interressé(s) par le livre : <?php echo  "« $titre »";?>, Est-il disponible ?" class=''> J'aimerais lire ce livre</a>
      </div>
      <div class="col-6 lire_plus <?php
             
            if($none==true){ echo "d-none";} ?>">
              <a href="details-livre?livreaconsulter=<?php echo $livre['id'] ?>" class="" style="font-weight:bold; ">En savoir plus</a>
      
            </div>
  </div>