<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';
$regis    = $_POST["regis"];


    $db->Consultar("DELETE FROM phonebook WHERE recid = '$regis'");

	$qryResult = 'ok';
	echo json_encode($qryResult);

?>
