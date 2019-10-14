<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';
include 'header.php';
?>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">ZipDev Test Crud PHP </a></h1>
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
						<a href="configura.html">
							<i class="glyphicon glyphicon-phone"></i></a>
							PHONE BOOK
					</div>
					<div style="float: right;">
						<a href="add_contact.php" class="btn btn-info">+ NEW CONTACT</a>
					</div>	
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-responsive table-hover" id="example">
						<thead>
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>SURNAME</th>
								<th>PHONE NUMBER(s)</th>
								<th>EMAIL</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody>
				<?php
				$db->Consultar("Select * from phonebook ");
	  			while($row = $db->ObtenerArray()) {
			   		$recid     = $row['recid'];
			   		$name      = $row['name'];
			   		$surname   = $row['surname'];

			   		print "<tr>";
			   		print "<td>$recid</td>";
			   		print "<td>$name</td>";
				    print "<td>$surname</td>";
				     print "<td>";

			   		/// GET CONTACT PHONE NUMBERS
			   		$db->Consultar2("Select * from phones WHERE contactid = '$recid' ");
	  			    while($row = $db->ObtenerArray2()) {
			   		   $phone      = $row['phone'];

			   		   print $phone.'<br>';
			   		}   
			   		  print "</td>";
			   		/// GET CONTACT EMAIL
			   		  print "<td>";  
			   		$db->Consultar2("Select * from emails WHERE contactid = '$recid' ");
	  			    while($row = $db->ObtenerArray2()) {
			   		   $email = $row['email'];

			   		   print $email.'<br>';
			   		}   
			   		  print "</td>";	  


					print "<td style='font-size:1.5em'><a href='edt_contact.php?regis=$recid' title='Edit Contact'><span class='glyphicon glyphicon-edit'></span></a>";
					
					print " <a href='#' onclick='confirmDelContact($recid)' title='Delete Contact'><span class='glyphicon glyphicon-trash'></span></a></td>";
					print "</tr>";
				}		
				?>
				</tbody>
				</table>	
										
				</div>
							
  				</div>
  			</div>



		  </div>
		</div>
    </div>

    <footer>
         <?php include ('footer.php'); ?>
      </footer>

       <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>

    <script src="js/mycontroller.js"></script>
  </body>
</html>