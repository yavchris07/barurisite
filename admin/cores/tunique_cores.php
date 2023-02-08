<?php
function new_tunique(){
  require './db.php';
  if(isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['types']) AND isset($_FILES['img'])){
    var_dump($_POST);
    $nomt = $_POST['nom'];
    $prixt = $_POST['prix'];
    $typest = $_POST['types'];
    $imgt= $_FILES['img']['name'];

    if(!empty($nomt) AND !empty($prixt) AND !empty($typest) AND !empty($imgt)){
      //AND !empty($img_control
      $target = "../../images/".basename($_FILES['img']['name']);

      $res = $db->exec("INSERT into  tunique (nom,prix,img,types) values ('".$nomt."','".$prixt."','".$imgt."','".$typest."')");
      if($res){
        echo 'Reussi ajout avec succes!';
        if(move_uploaded_file($_FILES['img']['tmp_name'],$target)){
          echo "Image enregistrez avec Raha sana";
          header('location: ../ajoute_tunique.php');
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

function delete_tunique(){
  require './db.php';
  if(isset($_GET['delete'])){
    $id = ($_GET['delete']);
    //var_dump($id);
    if (is_numeric($id)) {
      //require './admin/cores/db.php';
      $query = $db->query("DELETE FROM tunique WHERE id='".$id."'");
      //$val= $query->exec();
      if($query){
        header('location: ../ajoute_tunique.php');
        exit(); 
      }else{
        echo "Erreur due a la suppression !";
      }
    }
  }
}

if(isset($_POST['ajout'])){
    new_tunique();
}
if(isset($_GET['delete'])){
  delete_tunique();
}