     <?php
    //  require './db.php';
    //  require './upload_file.php'
     ini_set('display_errors','1');
     error_reporting(E_ALL);
 
  function new_veste(){
  require './db.php';

  if(isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['types']) AND isset($_FILES['img'])){
    var_dump($_POST);

    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $types = $_POST['types'];
    $img= $_FILES['img']['name'];
    
    // $img_name= $_FILES['img']['name'];
    // $img_control= $_FILES['img']['tmp_name'];

    if(!empty($nom) AND !empty($prix) AND !empty($types) AND !empty($img)){
      //AND !empty($img_control
      $target = "../../images/".basename($_FILES['img']['name']);

      $res = $db->exec("INSERT into veste (nom,prix,img,types) values ('".$nom."','".$prix."','".$img."','".$types."')");
      if($res){
        echo 'Reussi ajout avec succes!';
        if(move_uploaded_file($_FILES['img']['tmp_name'],$target)){
          echo "Image enregistrez avec Raha sana";
          header('location: ../ajoute_veste.php');
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

function delete_veste(){
  require './db.php';
  if(isset($_GET['delete'])){
    $id = ($_GET['delete']);
    //var_dump($id);
    if (is_numeric($id)) {
      //require './admin/cores/db.php';
      $query = $db->query("DELETE FROM veste WHERE id='".$id."'");
      //$val= $query->exec();
      if($query){
        header('location: ../ajoute_veste.php');
        exit(); 
      }else{
        echo "Erreur due a la suppression !";
      }
    }
  }
}

if(isset($_POST['save'])){
  new_veste();
}
if(isset($_GET['delete'])){
  delete_veste();
}
// echo "hello ";

