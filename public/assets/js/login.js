jQuery(document).ready(function($) 
{
					 
					$("#login").submit(function(e) {
						e.preventDefault();
					});

					$("#entrar").click(function(event) 
						{
								if ($("#usuario").val()=="" || $("#password").val()=="" ) 
										{
											//$("#login-modal").hide();
												swal("Heeeeeey!", "Ingresa bien los datos requeridos!", "error")

										}
								else
										{
											var usuarios={usuario:$("#usuario").val(), password:$("#password").val()}
											$.ajax({
														url: '/logear',
														type: 'post',								
														data: {usuarios}
													})
											.done(function(e) 
											{                                                        
												if (e=="success")
													{
														swal("Bien!", "Te has logeado correctamente!", "success")
														$("#login-modal").hide();
														window.location.href="/menu";
													}
												else
													{
														//$("#login-modal").hide();
														swal("Error", "Tus datos son incorrectos!", "error")
														
													}
													console.log(e);
											})
											.fail(function(e)
							 				{
												swal("Heeeeeey!", "Algo salio mal!", "error")
												console.log(e);
											})
											.always(function() 
											{
												console.log("complete");
											});
								
										}
					});

});