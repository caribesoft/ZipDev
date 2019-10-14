<?php
session_start(); 
$usrlevel = $_SESSION["nivel"];
$usrgrp   = $_SESSION["grupo"];
		include_once dirname(__FILE__)."../../class/MYSQL.php";
        $db = new MYSQL();
		$usuario = $_SESSION["usuario"];

		$db->Consultar("Select * from ope_usuarios WHERE user = '$usuario'") ;
        while($row = $db->ObtenerArray()) {
             $user_nombre  = $row['nombre'];
             $usrlevel  = $row['nivel'];
             
          }
  //echo json_encode($usrlevel);     
  //print "DATOS : $usuario - $user_nombre - $usrlevel ";   
          
?>          
