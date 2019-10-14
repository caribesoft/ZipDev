<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';
include 'header.php';
$regis   = $_GET["regis"];
?>

  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                   <h1><a href="index.php">ZipDev Test</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">

	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">

	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  
		  <div class="col-md-12">
  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">
            <a href="index.php"><i class="glyphicon glyphicon-chevron-left"></i></a>
          CONTACT EDITION
        </div>

				</div>
  				<div class="panel-body">
            <div class="col-md-12">
             <div class="row formula">
  				  
         <?php
         $db->Consultar("SELECT * FROM phonebook WHERE recid='$regis'");
          while($row = $db->ObtenerArray()) {
            $recid      = $row['recid'];
            $name       = $row['name'];
            $surname    = $row['surname'];
         }
          print "<div class='col-md-4'>";
          print "<label>NAME</label>";
          print "<input type='text' id='name' class='form-control'
          value='$name' required>";
          print "</div>";

          
          print "<div class='col-md-4'>";
          print "<label>SURNAME</label>";
          print "<input type='text' id='surname' class='form-control'
          value='$surname' required>";
          print "</div>";
          print "<div class='col-md-4'>";
          print "<br><a href='#' contactid='$regis' class='saveContact btn btn-info'>UPDATE</a>";
          print "</div>";
          print "<div class='clearfix'></div><br>";
          //print "<div class='col-md-12'>";
          print "<div class='phtit'>PHONE NUMBER(s) <a href='#' class='btn btn-info btn-sm' data-toggle='modal' data-id='$regis' data-target='#myModal'> +Add Phone </a></div>";
          

          /// GET CONTACT PHONE NUMBERS
            $db->Consultar2("Select * from phones WHERE contactid = '$recid' ");
              while($row = $db->ObtenerArray2()) {
                $phid      = $row['recid'];
                $phone      = $row['phone'];
              
               print "<div class='col-md-3'>
               <input type='text' class='tel updt_phn' id='phn$phid' phnid='$phid' 
               value='$phone' 
               >";
              echo ' <a href="#" onclick="confirmDelPhone(\''.$regis.'\',\''.$phid.'\');" title="Delete Phone">';
              echo '<span class="glyphicon glyphicon-trash"></span></a></div>';
            } 
            print "<br><hr>";

            print "<div class='phtit'>EMAIL(s) <a href='#' class='btn btn-info btn-sm' data-toggle='modal' data-id='$regis' data-target='#myModalEmail'> +Add Email </a></div>";
            /// GET CONTACT PHONE NUMBERS
            $db->Consultar2("Select * from emails WHERE contactid = '$recid' ");
              while($row = $db->ObtenerArray2()) {
                $emid         = $row['recid'];
                $email        = $row['email'];
              
               print "<div class='col-md-3'><input type='text' class='tel updt_em' 
               id='em$emid' emid='$emid' value='$email'>";
              echo ' <a href="#" onclick="confirmDelEmail(\''.$regis.'\',\''.$emid.'\');" title="Delete Email">';
              echo '<span class="glyphicon glyphicon-trash"></span></a></div>';
            } 
           

          ?>
          
          
  			</div>
      </div>
  			</div>

      </div></div>

		  </div>
		</div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Phone Number</h4>
        </div>
        <div class="modal-body">
         <input type="text" id="number" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" contactid="<?php echo $regis ?>" class="btn btn-default addPhone" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="myModalEmail" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Email</h4>
        </div>
        <div class="modal-body">
         <input type="text" id="email" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" contactid="<?php echo $regis ?>" class="btn btn-default addEmail" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>
</div>

    <footer>
         <?php include ('footer.php'); ?>
    </footer>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/custom.js"></script>
    <script src="js/mycontroller.js"></script>
  </body>
</html>
