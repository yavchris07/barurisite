<!DOCTYPE html>
<html lang="en">

<?php

         if (isset($_GET['page'])) {
        $page =$_GET['page'];
       }
       else{
        $page =1;
       }
       $number_per_page=03;
       $start_from=($page-1)*03;
   

require "./includes/head.php" ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->

   <?php require "./includes/sidebar.php" ?>

    <!-- fin nav bar partial -->





   <?php require "./includes/header.php" ;

     $recup_d= $db->query("SELECT * FROM livres ORDER BY id DESC limit $start_from,$number_per_page");
     while ($all_data= $recup_d->fetch()){
     $noslivres[]=$all_data;
     } 
  $recup_lib= $db->query("SELECT * FROM livres ORDER BY id DESC ");
     while ($all_libs= $recup_lib->fetch()){
     $livres_for_pagination_front_office[]=$all_libs;     
  }
    
   ?>



<div class="card" >
                  <div class="card-body">
                    <h4 class="card-title">nos livres</h4>
                  
                    </p>
                    <form class="search" method="get" action="" autocomplete="off">
                      <div class="form-group">
                      <div class="input-group">
                      <input type="text" name="keyword" <?php if(isset($_GET['keyword'])){ $myvalue=$_GET['keyword'];?>value="<?php echo $myvalue ;} else echo "value=''";?>" class="form-control" placeholder="Rechercher..." style="border-radius:4px 0px 0px 4px;">									
                      <div class="input-group-btn">
                      <button class="btn btn-primary" style=" height:100%; width:300px;border-radius:0px 4px 4px 0px;"><i class="ion-search" ></i> <span style="font-size:15px;">Rechercher</span> </button>
                      </div>										
									</div>
                  </form>
							  
								
								</div>
                    <div class="table-responsive" style="margin-right:-10px;">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>couveture</th>
                            <th class="margin-left:20px;">Auteur</th>
                            <th>titre</th>
                            <th>categorie</th>
                            <th>nombre d'exemplaires</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>

                        
  
                          <tr>
                            <td>
      <?php   
      $bykeys=null;              
    if(isset($_GET['keyword'])) {
   
    $key = $_GET['keyword'];
	  $keywords= explode(" ",trim($key));
	  for ($i=0; $i < count($keywords) ; $i++) 
	
    $kw[$i]= "titre like '%".$keywords[$i]."%'";

      
  	$posts= $db->query("SELECT * FROM livres WHERE ".implode(" or ",$kw) ); 
    while ($all_post =  $posts->fetch()){
       $bykeys[]=$all_post;    
     }  

  
     ?>  
       
     <?php 

     if(!empty($bykeys!=null )){
      foreach ($bykeys as $livre):  
      ?>   
         <tr>
                            <td>    <img src="Views/uploads-images/nos_livres/<?php echo $livre['couverture'];?>" class=" " alt="image" /> 
                        </td>
                            <td ><?php 
                              
                              $aut_len=strlen($livre['auteur']);
                            
                            if($aut_len >= 20 ){
                                         echo  substr($livre['auteur'],0,20); echo" ...";                                    
                                        }
                                        else
                                        echo $livre['auteur'];
                                        
                                        ?></td>
                            <td><?php echo substr($livre['titre'],0,60); echo" ...";?></td>
                            <td><?php 
                            $id=$livre['categorie'];
                            $categorie= $db->query("SELECT designation  FROM categorie WHERE id='".$id."'");  
                            $mycategorie_designation= $categorie->fetch();
                            if(empty( $mycategorie_designation)){
                              echo "non classé";
                            }
                            else{
echo  $mycategorie_designation['designation'];
                            }
                            
                              ?></td>
                            <td><?php $exemplaires=$livre['exemplaires']; 
                            
                            if(empty($exemplaires)){                              
                              echo " à signaler";                              
                            }
                            if(!empty($exemplaires)){  
                                
                                if($exemplaires ==1 ){                              
                                 echo "<label class='badge badge-danger'>$exemplaires</label>"; 
                                }
                                elseif($exemplaires >= 1){
                                 echo "<label class='badge badge-success'>$exemplaires</label>";
                                }

                                                          
                            }  ?></td>
                            <td>
                             <div class="dropdown">
                              <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuOutlineButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Gérer </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton3">
                          
                              
                              
                              
                              
                              <a class="dropdown-item"                         
                               
                               
                              
                               href="new-lib?livre=<?=$livre['id'];?>"> 
                               
                               
                               
                               modifier</a>                      
                        
                              </div>
                             </div>
                            </td>
                          </tr>

    <?php 
    endforeach;
     }
     elseif(empty($bykeys=null )){
      echo "
          <tr>
                        <td>    
                            <h4>aucun resultat n'est disponile</h4>
                        </td>
      ";

     }
      
    
             
  }
  else{

   foreach ($noslivres as $livre):                              

 


  
 
                          
                           
                            ?>


 </td>
</tr>                           

                           <tr>
                            
                            <td>     <img src="Views/uploads-images/nos_livres/<?php echo $livre['couverture'];?>" class=""  alt="image" /> 
                        </td>
                            <td ><?php 
                              
                              $aut_len=strlen($livre['auteur']);
                            
                            if($aut_len >= 20 ){
                                         echo  substr($livre['auteur'],0,20); echo" ...";                                    
                                        }
                                        else
                                        echo $livre['auteur'];
                                        
                                        ?> </td>
                            <td><?php echo substr($livre['titre'],0,60); echo" ...";?></td>
                            <td><?php 
                            $id=$livre['categorie'];
                            $categorie= $db->query("SELECT designation  FROM categorie WHERE id='".$id."'");  
                            $mycategorie_designation= $categorie->fetch();
                            if(empty( $mycategorie_designation)){
                              echo "non classé";
                            }
                            else{
echo  $mycategorie_designation['designation'];
                            }
                            
                              ?></td>
                            <td> <?php $exemplaires=$livre['exemplaires']; 
                            
                            if(empty($exemplaires)){                              
                              echo " à signaler";                              
                            }
                            if(!empty($exemplaires)){  
                                
                                if($exemplaires ==1 ){                              
                                 echo "<label class='badge badge-danger'>$exemplaires</label>"; 
                                }
                                elseif($exemplaires >= 1){
                                 echo "<label class='badge badge-success'>$exemplaires</label>";
                                }

                                                          
                            }  ?></td>
                            <td>
                             <div class="dropdown">
                              <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuOutlineButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Gérer </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton3">
                          
                              <a class="dropdown-item" href="new-lib?livre=<?=$livre['id'];?>"> modifier</a>                   
                        
                              </div>
                             </div>
                            </td>
                          </tr> 





  <?php
 
endforeach;

 } ?>
                          <tr>
                          
                          
                         
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>




























<nav aria-label="..." class="mt-3">
  <ul class="pagination">
  


<!-- 
 <li class='page-item'><a class='page-link' style='padding-top:11px;' href='admin-librairie?page=".($page-1)."'><i
                                            class='fas fa-long-arrow-alt-left'></i></a></li> -->

 <?php $total_records=count($livres_for_pagination_front_office);
                                       $total_per_page=ceil($total_records/$number_per_page);

                                       
                                        if($page >1){
                                            echo "
                                            
                                            
                                              <li class='page-item'>
      <a class='page-link' href='admin-librairie?page=".($page-1)."'' tabindex='-1'>&laquo;</a>
    </li>

                                           
                                            
                                            
                                            
                                            "; 
                                        }
                                    
                                    for ($i=1; $i < $total_per_page ; $i++) { 
                                       
                                        
                                         
           if($page==$i){
echo "<li class='page-item active'><a class='page-link' href='admin-librairie?page=".$i."'>".($i)."</a></li>";
 
		   }else{
echo "<li><a class='page-link' href='admin-librairie?page=".$i."'>".($i)."</a></li>";
                                          
		   }   
                                       
                                    }
                                    if($i >$page){
                                            echo " <li class='page-item'>
      <a class='page-link' href='admin-librairie?page=".($page+1)."'>&raquo;</a>
    </li>"; 
                                        }
                                  ?>

      


<!--    
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li> -->
  </ul>
</nav>




















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
<?php require "Views/admin/mydash/includes/js.php" ?>
</body>

</html>