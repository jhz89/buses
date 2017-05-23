				window.onload = function()
				{					
					$("#btnConsultar").click(enviar);													
				}

				function enviar() 
				{ 
				  var valor = $("#valor").val(); 
				  var buscador = $("#buscador").val(); 	
				  var cedula = $("#cedula").val();
				  var id_ruta = $("#id_ruta").val();		  
				 
				  $.ajax({ 
				  async:true, 
				  type: "POST", 
				  dataType: "html", contentType: "application/x-www-form-urlencoded", 
				  url:"https://sistemadebuses.000webhostapp.com/buses/consultarRutaEspecifica.php",
				  data:"valor="+valor+"&buscador="+buscador+"&cedula="+cedula+"&id_ruta="+id_ruta, beforeSend:inicioEnvio, success:llegadaDatos, 
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
					$("#divReservas").html(datos);			
								
				}

				function problemas()
				{
					
					$("#divSucces").addClass("nb-hidden");
					$("#divWarning").removeClass("nb-hidden");
					
				}
				function esconderDiv(){
					var div = getElementById('#divSucces')
					if (div.innerHTML == "") {
						div.style.display = none; 
					}
				}