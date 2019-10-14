////////////////////////////////
//  MYCONTRROLLER			///
// Autor: Victor Rodriguez  //
// Fecha : 10/10/2019      //   
////////////////////////////

   $.ajaxSetup ({
		cache: false
	});

	
	$(".log_err").hide();
	$(".espera").hide();
	//var espera = "<img src='../assets/pre-loader/fading_squares.gif'>";
 

	function confirmDelSubcate(regis){
	
		var agree=confirm("¿ Quieres Eliminar esta Sub-Categoría ?");
		if (agree){
			//return true ;
			    $.ajax({
					url: "delete_subcate.php",
					 data: "regis=" + regis + "",
			 		 dataType: 'json',   
					 type: "POST",
						cache: false,
						success: function(data){
							window.location.href = 'subcate.php';	
					   }
				});
		}else{
			return false ;
		}
		
	}

	function confirmDelPhone(registro,phoneid){
		var agree=confirm("Confirm delete phone number");
		if (agree){
			    $.ajax({
					url: "delete_phone.php",
					 data: "regis=" + registro + "&phoneid=" + phoneid + "",
			 		 dataType: 'json',   
					 type: "POST",
						cache: false,
						success: function(data){
							window.location.href = 'edt_contact.php?regis=' + registro;	
					   }
				});
		}else{
			return false ;
		}
		
	}


	
	$(".addPhone").click(function(){
		var contactid = $(this).attr("contactid");
		var number    = $("#number").val();
		$.ajax({
			url: "addphne.php",
			data: "number=" + number + "&contactid=" + contactid + "",
			dataType: 'json',   
			type: "POST",
			cache: false,
			success: function(data){
				window.location.href = 'edt_contact.php?regis=' + contactid;	
			}
		});
	});   	
	

		$(".saveContact").click(function(){
		var contactid = $(this).attr("contactid");
		var name      = $("#name").val();
		var surname   = $("#surname").val();

		$.ajax({
			url: "updt_contact.php",
			data: "name=" + name + "&contactid=" + contactid +
			"&surname=" + surname + "",
			dataType: 'json',   
			type: "POST",
			cache: false,
			success: function(data){
				window.location.href = 'index.php'
			}
		});
	});   

	function confirmDelEmail(registro,emid){
		var agree=confirm("Confirm delete email");
		if (agree){
			    $.ajax({
					url: "delete_email.php",
					 data: "regis=" + registro + "&emid=" + emid + "",
			 		 dataType: 'json',   
					 type: "POST",
						cache: false,
						success: function(data){
							window.location.href = 'edt_contact.php?regis=' + registro;	
					   }
				});
		}else{
			return false ;
		}
		
	}

	$(".addEmail").click(function(){
		var contactid = $(this).attr("contactid");
		var email    = $("#email").val();
		$.ajax({
			url: "addemail.php",
			data: "email=" + email + "&contactid=" + contactid + "",
			dataType: 'json',   
			type: "POST",
			cache: false,
			success: function(data){
				window.location.href = 'edt_contact.php?regis=' + contactid;	
			}
		});
	});   	

	
	$(".addContact").click(function(){
		var name      = $("#name").val();
		var surname   = $("#surname").val();

		$.ajax({
			url: "save_contact.php",
			data: "name=" + name + "&surname=" + surname + "",
			dataType: 'json',   
			type: "POST",
			cache: false,
			success: function(data){
				window.location.href = 'index.php'
			}
		});
	}); 

	
	function confirmDelContact(registro){
		var agree=confirm("Confirm delete contact");
		if (agree){
			    $.ajax({
					url: "delete_contact.php",
					 data: "regis=" + registro + "",
			 		 dataType: 'json',   
					 type: "POST",
						cache: false,
						success: function(data){
							window.location.href = 'index.php';	
					   }
				});
		}else{
			return false ;
		}
		
	}

	$(".updt_phn").change(function(){
		var phnid = $(this).attr("phnid");
        var phn  = $("#phn" + phnid).val();
        $.ajax({
			url: "updt_phone.php",
			data: "number=" + phn + "&phnid=" + phnid + "",
			dataType: 'json',   
			type: "POST",
			cache: false,
			success: function(data){
				var color = '#c3f285'
				$('#phn' + phnid).css({ 'background': '' + color });
			}
		});

	});   	

	$(".updt_em").change(function(){
		var emid = $(this).attr("emid");
        var em   = $("#em" + emid).val();
        $.ajax({
			url: "updt_email.php",
			data: "email=" + em + "&emid=" + emid + "",
			dataType: 'json',   
			type: "POST",
			cache: false,
			success: function(data){
				var color = '#c3f285'
				$('#em' + emid).css({ 'background': '' + color });
			}
		});

	});   	


	


