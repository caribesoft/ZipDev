<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';


//print "<div style='color:#fff;margin-top:20px'> SQL:  $prodid </div>";

    $rows = array();
    $db->Consultar("Select * from phonebook order by name");
        while($row = $db->ObtenerArray()) {                           
              $contactId = $row['recid']; 
              $name      = $row['name']; 
              $surname    = $row['surname']; 

              $prop_data = array('contactid' => $contactId, 'name' => $name,
             'surname' => $surname);

              array_push($rows, $prop_data);
        
      
        $db->Consultar2("SELECT * FROM phones WHERE contactid = '$contactId'");  
        while($row = $db->ObtenerArray2()) {
            $phone   = $row['phone'];  

             $phone_data = array('phone' => $phone);
             array_push($rows, $phone_data);
        }

        $db->Consultar2("SELECT * FROM emails WHERE contactid = '$contactId'");  
        while($row = $db->ObtenerArray2()) {
            $email   = $row['email'];  

            $email_data = array('email' => $email);
             array_push($rows, $email_data);
        }


        
   }     
          
	 


    


	var_dump($rows);

	
	echo json_encode($rows);

	//session_regenerate_id(true);

	
?>	
	 


	
