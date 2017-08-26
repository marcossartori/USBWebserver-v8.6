$(document).ready( function() {
	
$("#form1").validate({

//#################################################--Define as regras--########################################################
        rules:{

            n_contrato:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true, minlength: 3

            },
			
//=======================================================================================================================================================

            Data:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true, minlength: 3

            },
			
			
			//=======================================================================================================================================================
			
			
			
            Hora:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true, minlength: 3

            },
			
			
			
			
			
			//=======================================================================================================================================================
			
			
			
            descricao2:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true, minlength: 5

            },
			
			
//=======================================================================================================================================================

            usuario:{

                // O campo unidade será  obrigatório

                required: true, minlength: 3
				

            }

        },

//-------------------------------------------------------Fim das Regras---------------------------------------------------

//######################################--Define as mensagens de erro para cada regra--#######################################
        

        messages:{

            n_contrato:{

                required: "Contrato invalido!",
				minlength: "Contrato invalido"


            },
			

//-----------------------------------------------------------------------------------------------------------------------------	



       

            Data:{

                required: "Data invalida",
				 minlength: "Data invalida"


            },
			
			
//-----------------------------------------------------------------------------------------------------------------------------	



       

            Hora:{

                required: "Hora invalida!",
				minlength: "Hora invalida"


            },
			
			
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	



       

            descricao2:{

                required: "Entre com a descrição!",
				minlength: "no mínimo 05 caracteres"


            },
			
			
			
//-----------------------------------------------------------------------------------------------------------------------------	
		
			

            usuario:{

                required: "Usuario invalido",

                minlength: "Usuario invalido"

             

            }
			
//-----------------------------------------------------------------------------------------------------------------------------		
			
			
			
			
			

        }

    });

});