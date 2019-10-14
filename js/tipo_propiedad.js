////////////////////////////////
//  TIPO PROPIEDADES		     //
// Autor: Miguel Tzab       //
// Fecha : 17/04/2019      //
////////////////////////////

   $.ajaxSetup ({
		cache: false
	});

	$(".log_err").hide();
	$(".espera").hide();

 function confirmDel(regis){

		var agree=confirm("¿Quieres eliminar este tipo de propiedad ?");
		if (agree){
			//return true ;
			    $.ajax({
					url: "delete_tipo_propiedad.php",
					 data: "regis=" + regis + "",
			 		 dataType: 'json',
					 type: "POST",
					 cache: false,
						success: function(data){
              console.log(data);
              if (data == "ok") {
                window.location.href = 'property_types.php';
              }else {
                  alert("Error al eliminar, porfavor intentelo mas tarde");
              }
					  }
				});
		}else{
			return false ;
		}
	}
