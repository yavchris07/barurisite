

  <?php       
require "returnedNotifications.php";
require "upload_file.php";
  
 
function add_on_libr(){
    
require 'db.php';
if(isset($_POST['titre'],$_POST['auteur'],$_POST['Collection'],$_POST['synthese'],$_POST['categorie'],$_FILES['cover_img'],$_POST['maison_d_edition'],$_POST['exemplaires'])){
        
        
        $maison_d_edition= htmlspecialchars($_POST['maison_d_edition']);
        $exemplaires= htmlspecialchars($_POST['exemplaires']);

        $titre= htmlspecialchars($_POST['titre']);
        $auteur= htmlspecialchars($_POST['auteur']);
        $collection= htmlspecialchars($_POST['Collection']);

        $synthese= htmlspecialchars($_POST['synthese']);
        $categorie= htmlspecialchars($_POST['categorie']);
     
        $img= $_FILES['cover_img'];  
        $img_name= $_FILES['cover_img']['name'];
        $img_control= $_FILES['cover_img']['tmp_name']; 
        
       
        if(!empty($titre) AND !empty($auteur) AND !empty($auteur) AND !empty($synthese) AND !empty($collection) AND !empty($categorie) AND !empty($img_control) AND !empty($maison_d_edition) AND !empty($exemplaires)) {
                            
                  $imagemisenavant= new upload_file();
                  upload_file::upload($img);
                  $uplaod_status=upload_file::$upload_cod;
                  $uplaod_name = upload_file::$name_to_up;
                
                    if($uplaod_status==1) {

/******/
        $db->exec("INSERT into livres (titre,collections,categorie,synthese,auteur,couverture,maison_d_edition,exemplaires) values ('$titre','$collection','$categorie','$synthese','$auteur','$img_name','$maison_d_edition','$exemplaires')");                                      
/*****/     


                  notification("success"," livre ajouté avec  avec succes");                        
                           unset($_POST); 
                           $_POST = Null;
                    } 
                    elseif($uplaod_status==0) {
                      notification("danger","Il y'a un probleme avec le fichier choisi, rassurez-vous d'avoir choisi une image en PNG/png, JPG/jpg ou GIF/gif  , merci !");                    }              
        }
        elseif( empty($titre) or empty($auteur) or empty($synthese) or empty($collection) or empty($categorie) or empty($img_control) or empty($img_control) or empty($maison_d_edition )  or empty($exemplaires)){    
          notification("danger","Vous essayez d'envoyer un formulaire incomplet,!");
        }
   }
  else{
    notification("danger","Erreur inconu !");
  } 
  
 }

// update

function update_on_libr(){
    
require 'db.php';
if(isset($_POST['titre'],$_POST['auteur'],$_POST['synthese'],$_POST['categorie'],$_FILES['cover_img'],$_GET['livre'],$_POST['maison_d_edition'],$_POST['exemplaires'])){
        
        $id=$_GET['livre'];
   $maison_d_edition= htmlspecialchars($_POST['maison_d_edition']);
        $exemplaires= htmlspecialchars($_POST['exemplaires']);

        $titre= htmlspecialchars($_POST['titre']);
        $auteur= htmlspecialchars($_POST['auteur']);

        $synthese= htmlspecialchars($_POST['synthese']);
        $categorie= htmlspecialchars($_POST['categorie']);
     
        $img= $_FILES['cover_img'];  
        $img_name= $_FILES['cover_img']['name'];
        $img_control= $_FILES['cover_img']['tmp_name']; 
      
          if (!empty($img_control)) {
                  
                 if(!empty($titre) AND !empty($auteur) AND !empty($auteur) AND !empty($synthese) AND !empty($categorie) AND !empty($img_control) AND !empty($maison_d_edition) AND !empty($exemplaires) ) {
                            
                  $imagemisenavant= new upload_file();
                  upload_file::upload($img);
                  $uplaod_status=upload_file::$upload_cod;
                  $uplaod_name = upload_file::$name_to_up;
                
                    if($uplaod_status==1) {

/******/
        $db->exec("UPDATE livres set titre='$titre', categorie='$categorie', maison_d_edition='$maison_d_edition',exemplaires='$exemplaires',  synthese='$synthese', auteur='$auteur', couverture='$uplaod_name' WHERE id='$id' ");                                      
/*****/     


                  notification("success"," livre Modifié avec success width img!");                        
                           unset($_POST); 
                           $_POST = Null;
                          
                    } 
                    elseif($uplaod_status==0) {
                      notification("danger","Il y'a un probleme avec le fichier choisi, rassurez-vous d'avoir choisi une photo");                    }              
        }
        elseif( empty($titre) or empty($auteur) or empty($synthese) or empty($categorie) or empty($img_control) ){    
          notification("danger","Vous essayez d'envoyer un formulaire incomplet,!");
        }
  }
          
          elseif(empty($img_control)){
                   if(isset($_POST['titre'],$_POST['auteur'],$_POST['synthese'],$_POST['categorie'],$_FILES['cover_img'],$_GET['livre'])){
        
        $id=$_GET['livre'];
        $titre= htmlspecialchars($_POST['titre']);
        $auteur= htmlspecialchars($_POST['auteur']);

        $synthese= htmlspecialchars($_POST['synthese']);
        $categorie= htmlspecialchars($_POST['categorie']);
 
        $img_control= $_FILES['cover_img']['tmp_name']; 
        
       
        if(!empty($titre) AND !empty($auteur) AND !empty($auteur) AND !empty($synthese) AND !empty($categorie)) {
              
/******/
        $db->exec("UPDATE livres set titre='$titre', categorie='$categorie', maison_d_edition='$maison_d_edition',exemplaires='$exemplaires', synthese='$synthese', auteur='$auteur' WHERE id='$id' ");                                      
/*****/  
                  notification("success"," livre Modifié avec success widthout img!");                        
                           unset($_POST); 
                           $_POST = Null;
        }                  
        elseif( empty($titre) or empty($auteur) or empty($synthese) or empty($categorie)){    
          notification("danger","Vous essayez d'envoyer un formulaire incomplet,!");
        }
  }

 
          }
    
}
 }





?> 