$(document).ready( function() {
	
$("#form1").validate({

//#################################################--Define as regras--########################################################
        rules:{

            contrato:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true

            },
			
//----------------------------------------------------------------------------------------------------------------------------------------			
			
			            ano:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true

            },
			
//----------------------------------------------------------------------------------------------------------------------------------------			
			
					  status:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true

            },
			
//----------------------------------------------------------------------------------------------------------------------------------------		
			
			       incompleto:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true

            },


//----------------------------------------------------------------------------------------------------------------------------------------

			empresa:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true

            },
			
//----------------------------------------------------------------------------------------------------------------------------------------
			 
			 tipo:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true

            },
			
			
//----------------------------------------------------------------------------------------------------------------------------------------
			
				fileanexo:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true

            },
			
			
//----------------------------------------------------------------------------------------------------------------------------------------


            mes:{

                // O campo unidade será  obrigatório

                required: true
				

            }

        },

//-------------------------------------------------------Fim das Regras---------------------------------------------------

//######################################--Define as mensagens de erro para cada regra--#######################################
        

        messages:{

            contrato:{

                required: "Entre com o contrato"
				


            },
			
//----------------------------------------------------------------------------------------------------------------------------------------
			
			            ano:{

                required: "Entre com o ano"



            },
			
			
			
//----------------------------------------------------------------------------------------------------------------------------------------
			
			            status:{

                required: "Entre com o status"
			


            },
			
//----------------------------------------------------------------------------------------------------------------------------------------
			
			            incompleto:{

                required: "Entre com a observação"
				


            },
			
			
//----------------------------------------------------------------------------------------------------------------------------------------
			
			            empresa:{

                required: "Entre com a empresa"
				


            },
			
			
//----------------------------------------------------------------------------------------------------------------------------------------
			
			            tipo:{

                required: "Entre com o tipo de documento"
			


            },
			
			
//----------------------------------------------------------------------------------------------------------------------------------------
			
			            fileanexo:{

                required: "Entre com o anexo"
				


            },
			
			
			

            mes:{

                required: "Escolha um mês"

                

             

            }
			
//-----------------------------------------------------------------------------------------------------------------------------		
			
			
			
			
			

        }

    });

});