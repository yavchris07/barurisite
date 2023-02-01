 <?php   
    try {
  //code...

  $db= new PDO('mysql:host=localhost;dbname=livraze','root','');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  } catch (\Exceptions $e) {
  echo $e->getMessage();
}
 
 $recup_categorie= $db->query("SELECT * FROM categorie ORDER BY id DESC limit 9 ");
      while ($all_catg=  $recup_categorie->fetch()){
    $categories[]=$all_catg;
 }
?>
<div class="card-body pb-0">
                <h4 class="card-title mb-4">toutes categories disponibles</h4>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table custom-table text-dark">
                    <thead>
                      <tr>
                        <th>N°</th>                   
                         <th>Categorie</th> 
                      </tr>
                      
                    </thead>
                    <tbody>
                       <?php
                       $i=1;
                         foreach ($categories as $categorie):                              
                       ?>
                       <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $categorie['designation'];  ?></td>
                       
                      </tr> 
                       <?php
                         endforeach;                           
                       ?>
                
                      
                    </tbody>
                  </table>
                </div>
               
              </div>