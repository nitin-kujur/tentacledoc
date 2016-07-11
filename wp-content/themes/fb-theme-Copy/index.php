<?php

  ////Production Settings

  // $role = $GLOBALS["role"]; //$check = $GLOBALS["check"];
	global $role, $check; 


  if($check == 'pass' && ( $role == 'Admin' || $role == 'Manager' || $role == 'TeleCaller' ) )
    include 'zindex.php';
  else{
  	header("Location: http://tentacle.sunoray.com", true, 303);
		exit(0);  
  }
    //include 'error.php'; 

////-----------------------------------------
  //// Deployment Settings

    // include 'zindex.php';

?>