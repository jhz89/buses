				function boton()
				{
					$("#btnReservar").click(enviar);			
				}

				function enviar() 
				{ 
				  var cedula = $("#cedula").val();
				  var id_ruta = $("#id_ruta").val();		  
				 
				  $.ajax({ 
				  async:true, 
				  type: "POST", 
				  dataType: "html", contentType: "application/x-www-form-urlencoded", 
				  url:"reservarTicket.php",
				  data:"cedula="+cedula+"&id_ruta="+id_ruta, beforeSend:inicioEnvio, success:llegadaDatos, 
				  timeout:4000, 
				  error:problemas }); 
				  return false; 
				} 
				
				 function inicioEnvio(datos)
				{
					$("#divLoader").removeClass("nb-hidden");				
				}

				function llegadaDatos(datos) 
				{
					$("#divLoader").addClass("nb-hidden");
					$("#divWarning").addClass("nb-hidden");
					$("#divSucces").removeClass("nb-hidden");
					$("#divSucces").text(datos);
								
				}

				function problemas()
				{
					
					$("#divLoader").addClass("nb-hidden");
					$("#divSucces").addClass("nb-hidden");
					$("#divWarning").removeClass("nb-hidden");
					$("#divSucces").text('Problemas en el servidor.');
					
				}