$(document).ready( function() {
	
$("#form1").validate({

//#################################################--Define as regras--########################################################
        rules:{

            cargo:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true, minlength: 3

            },
			
			
			
			            valor_cargo:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true, minlength: 2

            },


            vinculo:{

                // O campo unidade será  obrigatório

                required: true
				

            }

        },

//-------------------------------------------------------Fim das Regras---------------------------------------------------

//######################################--Define as mensagens de erro para cada regra--#######################################
        

        messages:{

            cargo:{

                required: "Entre com o cargo",
				minlength: "Entre com um nome válido!"


            },
			
			
			            valor_cargo:{

                required: "Entre com o valor do cargo",
				minlength: "Entre com um valor válido!"


            },
			
			
			

            vinculo:{

                required: "erro"

                

             

            }
			
//-----------------------------------------------------------------------------------------------------------------------------		
			
			
			
			
			

        }

    });

});