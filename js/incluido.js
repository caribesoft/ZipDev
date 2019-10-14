////////////////////////////////
//  CARACTERISTICA     	     //
// Autor: Miguel Tzab       //
// Fecha : 17/04/2019      //
////////////////////////////

   $.ajaxSetup ({
		cache: false
	});

	$(".log_err").hide();
	$(".espera").hide();

 function confirmDel(regis){

		var agree=confirm("¿Quieres eliminar este incluido ?");
		if (agree){
			//return true ;
			    $.ajax({
					url: "delete_incluido.php",
					 data: "regis=" + regis + "",
			 		 dataType: 'json',
					 type: "POST",
					 cache: false,
						success: function(data){
              console.log(data);
              if (data == "ok") {
                window.location.href = 'rentinclude.php';
              }else {
                  alert("Error al eliminar, porfavor intentelo mas tarde");
              }
					  }
				});
		}else{
			return false ;
		}
	}
