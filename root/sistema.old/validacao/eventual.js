$(document).ready( function() {
	
$("#form1").validate({

//#################################################--Define as regras--########################################################
        rules:{

            data_entrada_ev:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true, minlength: 3

            },
			
//=======================================================================================================================================================

            data_saida_ev:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true, minlength: 3

            },
			

			
			
//=======================================================================================================================================================

            descricao2:{

                // O campo unidade será  obrigatório

               required: true, minlength: 5
				

            }

        },

//-------------------------------------------------------Fim das Regras---------------------------------------------------

//######################################--Define as mensagens de erro para cada regra--#######################################
        

        messages:{

            data_entrada_ev:{

                required: "Campo Obrigatorio",
				minlength: "Data invalida"


            },
			

//-----------------------------------------------------------------------------------------------------------------------------	



       

            data_saida_ev:{

                required: "Campo Obrigatorio",
				 minlength: "Data invalida"


            },

			
			
//-----------------------------------------------------------------------------------------------------------------------------	
		
			

            descricao2:{

                required: "Digite a descição",

                minlength: "Entre no mínimo com 5 caracteres."

             

            }
			
//-----------------------------------------------------------------------------------------------------------------------------		
			
			
			
			
			

        }

    });

});