<?php 

if(isset($_GET['myName'])){
  
  $myName= $_GET['myName'];
  
  
  if($myName=="Livrze"){     
    echo "................bonjour ".$myName;
   }
  elseif($myName!="Livraze"){
      
     // header("500 internal server",true,500);
    echo "<span style='color:#FF0000;'>nom ivalideggggg $myName</span>" ;  


  }
  
 }

 
 ?>


