<?php
function new_team(){
  require './db.php';
  if(isset($_POST['noms']) AND isset($_POST['titre']) AND isset($_FILES['img'])){
    var_dump($_POST);
    $nom = $_POST['noms'];
    $titre = $_POST['titre']; 
    $img= $_FILES['img']['name'];

    if(!empty($nom) AND !empty($titre) AND !empty($img)){
      //AND !empty($img_control
      $target = "../../images/".basename($_FILES['img']['name']);

      $res = $db->exec("INSERT into  team (noms,titre,img)
                values ('".$nom."','".$titre."','".$img."')");
      if($res){
        echo 'Reussi ajout avec succes!';
        if(move_uploaded_file($_FILES['img']['tmp_name'],$target)){
          echo "Image enregistrez avec Raha sana";
          header('location: ../team.php');
          exit();
        }
        else{
          echo "Erreur de placement de l'image dans le fichier";
        }
      }
      else{ echo 'error du on insert';}
    }
    else{ echo 'Vous devez remplir tous les champs !';}
  }
  else{
    echo "error les variales n'existent pas !";
  }
}


if(isset($_POST['ajout'])){
    new_team();
  }