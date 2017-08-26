$(document).ready( function() {
	
$("#form1").validate({

//#################################################--Define as regras--########################################################
        rules:{

            empresa:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true, minlength: 3

            },
			
//=======================================================================================================================================================

            CNPJ:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                 required: true, minlength: 18

            },
			
			
			//=======================================================================================================================================================
			
			
			
            CEP:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true, minlength: 10

            },
			
			
//=======================================================================================================================================================
			
			
			
            Telefone:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true, minlength: 14

            },
			
			
			
//=======================================================================================================================================================
			
			
			
            Preposto:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true, minlength: 3

            },
			
			
			
//=======================================================================================================================================================
			
			
			
            Razao_Social:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true, minlength: 3

            },
			
			
			
//=======================================================================================================================================================
			
			
			
            cod_cidades:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true

            },
			
			
			
			//=======================================================================================================================================================
			
			
			
            Endereco:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true, minlength: 3

            },
			
			
			
//=======================================================================================================================================================

            cod_estados:{

                // O campo unidade será  obrigatório

                required: true, minlength: 10
				

            }

        },

//-------------------------------------------------------Fim das Regras---------------------------------------------------

//######################################--Define as mensagens de erro para cada regra--#######################################
        

        messages:{

            empresa:{

                required: "Entre com o nome da empresa!",
				minlength: "Entre com um nome Válido!"


            },
			

//-----------------------------------------------------------------------------------------------------------------------------	



       

            CNPJ:{

                required: "Entre com o CNPJ!",
				 minlength: "Digite apenas números, 18 caracteres"


            },
			
			
//-----------------------------------------------------------------------------------------------------------------------------	



       

            CEP:{

                required: "Entre com o CEP!",
				minlength: "Digite apenas números, 10 caracteres"


            },
			
			
//-----------------------------------------------------------------------------------------------------------------------------	



       

            Telefone:{

                required: "Entre com o Telefone!",
				 minlength: "Digite apenas números, 10 caracteres"


            },
			
			
//-----------------------------------------------------------------------------------------------------------------------------	



       

            Preposto:{

                required: "Entre com o nome do Preposto!",
				minlength: "Entre com um nome Válido!"


            },
			
//-----------------------------------------------------------------------------------------------------------------------------	



       

            Razao_Social:{

                required: "Entre com a Razao Social!",
				minlength: "Entre com um nome Válido!"


            },
			
//-----------------------------------------------------------------------------------------------------------------------------	

            cod_cidades:{

                required: "Escolha a Cidade!"


            },
			
			
//-----------------------------------------------------------------------------------------------------------------------------	

            Endereco:{

                required: "Entre com o enderço!",
				minlength: "Digite um enderço válido"


            },																			
			
			
//-----------------------------------------------------------------------------------------------------------------------------				
			

            cod_estados:{

                required: "Escolha o estado",

                minlength: "deve conter, no mínimo, 10 caracteres"

             

            }
			
//-----------------------------------------------------------------------------------------------------------------------------		
			
			
			
			
			

        }

    });

});