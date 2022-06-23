<?php
function InvalidEmail($email){
    $result="";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result=true;
  } else{
      $result = false;
  }
  return $result; 
}

     


?>