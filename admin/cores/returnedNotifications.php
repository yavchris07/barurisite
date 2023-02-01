<?php 
//messages d'erreurs debut
function notification($error_type,$message){
    
    if ($error_type == "success") {
     echo "<div class='col-7 badge badge-success' style='position:relative;;z-index:30000;display:block;transition:2s;'>
              <h4>".$message."</h4> 
          </div>";
    }
    elseif($error_type == "danger") {
     echo "<div class='col-7 badge badge-danger' role='alert' style='position:relative;z-index:30000;display:block;transition:2s;'>
              <h4>".$message."</h4> 
          </div>";
    }
    
}