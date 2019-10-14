<?php
/////////////////////////////////////////////////
//  MODULO : ELIMINA TIPO caracteristica      //
//  FECHA :  17/04/2019                      //
//  AUTOR : MIGUEL Tzab				              //
//  EMAIL _ info@caribesoft.net            //
//  CLIENTE : CARIBBEAN PROPERTY FINDERS  //
////////////////////////////////////////////

error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';
$regis    = $_POST["regis"];
$emid     = $_POST["emid"];


    $db->Consultar("DELETE FROM emails WHERE recid = '$emid'");

	$qryResult = 'ok';
	echo json_encode($qryResult);

?>
