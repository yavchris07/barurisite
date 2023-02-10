<?php 
try {
  //code...

  $db= new PDO('mysql:host=localhost;dbname=baruvine_baruvi_database','baruvine_baruvine','R#QcXq5?TiDH');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //switch(){}
  // $db= new PDO('mysql:host=localhost;dbname=baruvi','root','');
  // $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  } catch (\Exceptions $e) {
  echo $e->getMessage();
}

?>