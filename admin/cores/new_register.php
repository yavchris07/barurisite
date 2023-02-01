     <?php
//  $noms=null,$residence_ab=null,$adress_phy=null,$commune=null,$quartier=null,$avenue=null,$plaque_maison=null,$profession=null,$universite=null,$ecole=null,$mail=null,$fb_name=null,$insta_name=null,$telephone=null,$pref1=null,$pref2=null,$pref3=null,$pref4=null,$pref5=null
    
    //  $index=0;
    //  function abonnement($require_arr = array()){   
    //  require "Views/admin/mydash/cores/returnedNotifications.php";
    //  require "Views/admin/mydash/cores/db.php";
    //  $db->exec("INSERT into abonnements (up_index)
    //             values ('byfonction')"); 

    //  $id=$db->query("SELECT id from abonnements ORDER BY id DESC limit 1"); 
    //  $index=$id->fetch();

    //  $myid=$index['id'];
    //  $action_code;
    //   foreach($require_arr as $key => $assoc_tab){
          
    //       // echo $key . " : " . $value . "<br>";
    //       if (isset($_POST["$key"])) {
    //         $valeur= htmlspecialchars($_POST["$key"]);
            
    //         if(empty($key) or empty($valeur)  ) {
    //            $action_code="err";
    //         }
    //         elseif (!empty($key) AND !empty($assoc_tab)) {
              
    //             $db->exec("UPDATE  abonnements SET $assoc_tab='".$valeur."' WHERE id=$myid");   
                
    //             $action_val="ok";
    //           // echo "$assoc_tab : $valeur";     
              
              

    //           echo "<br>";
    //         }
    //       }
    //       else{
    //          notification('danger','verifiez les champs');
    //       }
    //   }
    //   if($action_val) {
    //    notification('success','super');
    //    }
    //    else
    //    notification('danger','erreur inconu');
       
       
     //}
     if(isset($_POST['new_member'])){

        if(isset($_POST['noms']) AND isset($_POST['email']) AND isset($_POST['telephone']))
          $noms= htmlspecialchars($_POST['noms']);
          $email= htmlspecialchars($_POST['email']);
          $telephone= htmlspecialchars($_POST['telephone']);

         // $prefference= $_POST['prefrnce'];
         

         if(!empty($noms) AND !empty($email) AND !empty($telephone) AND isset($_POST['prefrnce'])){  

           if (isset($_POST['prefrnce'])!=null) {
              $prefference= $_POST['prefrnce'];
              //quelques verifications
              $telephone_counting_chars = strlen($telephone);
              $contact_without_space=trim($telephone);
              $telephone_first_chars= $contact_without_space[0];
              

              if(is_numeric($contact_without_space)){

                if($telephone_counting_chars >= 10 AND $telephone_counting_chars < 15 ) {              

                 //start of textlocal
                 // Authorisation details.
	                  $username = "eliezermubalama@gmail.com";
	                  $hash = "9f41bcf61df0e89bfaf2f9905cb5455e84fa647ab63344ec74198f98f15470be";

	                  // Config variables. Consult http://api.txtlocal.com/docs for more info.
	                  $test = "0";


                    $otp = mt_rand(100000,999999);
                    setcookie("otp",$otp);
                  
	                  // Data for text message. This is the text message data.
	                  $sender = "API TEST"; // This is who the message appears to be from.
	                  $numbers = $contact_without_space; // A single number or a comma-seperated list of numbers
	                  $message = "bonjour ".$noms."votre code de validation OTP est le : ".$otp;
	                  // 612 chars or less
	                  // A single number or a comma-seperated list of numbers

	                  $message = urlencode($message);
	                  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	                  $ch = curl_init('https://api.txtlocal.com/send/?');

	                  curl_setopt($ch, CURLOPT_POST, true);
	                  curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
	                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	                //  $result = curl_exec($ch); // This is the result from the API
	                     //echo("OTP SEND SUCCEEFULLY");
                       //echo $otp;
                    $response = curl_exec ( $ch );
                    curl_close($ch);

                       echo $response;

                    if (isset($_POST['ver'])) {
                        $verotp=$_POST['otp'];
                        if($verotp==$_COOKIE['otp']){
                          echo "enregistrement reussi";
                          

                        }
                        else{
                           echo "votre otp est incompatible avec l'otp envoyé";
                        }
                    }




                     echo "votre numero  est les : ";  echo $contact_without_space;


                 // end of textlocal 

                }
                else 
                echo"erreur inconu";
                


              }
              else{
                echo "votre numero est invalide";
              }
              // if($telephone_first_chars = 0){
              //   echo "votre numero commence par $telephone_first_chars";
              // }
              // elseif($telephone_first_chars!= 0){
              //   echo "votre contact commence par un $telephone_first_chars";
              // }
              

               
              
            
/*
 debut de l' action sacrée
  */
              //  echo "$noms <br>";
              //  echo "$email <br>";
              //  echo "$telephone <br>";  
              //  foreach ($prefference as $value) {
              //  echo $value; echo "<br>";
              //  }          
              //   unset($_POST);
             
/*
 fin de l' action sacrée 
 */
          }
         }
         elseif(empty($noms) or empty($email) or empty($telephone) or empty($prefference)){  

             
            if (empty($prefference)) {
              echo "rassurer vous d'avoir completé toutes les informations necessaires";
            }
                 
            elseif ($prefference==null) {
              echo "vous devez choisoir au moins une preference";
            }
         }  
     }
    



