<?php       
require "returnedNotifications.php";
require "upload_file.php";
  
 



function add_categorie(){    
require 'db.php';
if(isset($_POST['designation'],$_POST['description_categorie'])){       
        
        $designation= htmlspecialchars($_POST['designation']);
        $description_categorie= htmlspecialchars($_POST['description_categorie']);
       
        if(!empty($designation) AND !empty($description_categorie)){
 
                      $db->exec("INSERT into categorie (designation,description_catgr) values ('$designation',' $description_categorie')");                 
                        
                         notification("success","Ajouté avec succes");                        
                           unset($_POST); 
                           $_POST = Null;
                           
        }
        elseif(empty($designation) or empty($description_categorie)) {    
          notification("danger","Vous essayez d'envoyer un formulaire incomplet,!");
        }
   }
  else{
    notification("danger","Erreur inconu !");
  }   
 }

function update_categorie(){  
$id_to_edit=2;  
require 'db.php';
if(isset($_POST['designation'],$_POST['description_categorie'])){       
        
        $designation= htmlspecialchars($_POST['designation']);
        $description_categorie= htmlspecialchars($_POST['description_categorie']);
       
        if(!empty($designation) AND !empty($description_categorie)){
 
                      $db->exec("UPDATE categorie set designation='".$designation."' , description_catgr='".$description_categorie."' ");                 
                        
                         notification("success","Ajout effectuée avec succes");                        
                           unset($_POST); 
                           $_POST = Null;
        }
        elseif(empty($designation) or empty($description_categorie)) {    
          notification("danger","Vous essayez d'envoyer un formulaire incomplet,!");
        }
   }
  else{
    notification("danger","Erreur inconu !");
  }   
 }
?> 