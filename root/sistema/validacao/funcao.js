// JavaScript Document
$(document).ready( function() {
	
	
	

    $("#form1").validate({

//#################################################--Define as regras--########################################################
        rules:{

            n_contrato:{

                // O campo n_contrato será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true, minlength: 7

            },
			
//-----------------------------------------------------------------------------------------------------------------------------

            empresa:{

                // O campo empresa será obrigatório

                required: true

            },
			
			
			
			//-----------------------------------------------------------------------------------------------------------------------------

            filecontrato:{

                // O campo empresa será obrigatório

                required: true

            },
			
//-----------------------------------------------------------------------------------------------------------------------------

            valor_contrato:{

                // O campo valor_contrato será obrigatório e terá tamanho mínimo (minLength)

                required: true, minlength: 2

            },
			
			
//-----------------------------------------------------------------------------------------------------------------------------

            valor_mensal:{

                // O campo valor_mensal será obrigatório e terá tamanho mínimo (minLength)

                required: true, minlength: 2

            },
			
	//-----------------------------------------------------------------------------------------------------------------------------

            vigencia:{

                // O campo vigencia será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true, minlength: 2

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------

            fiscal_sub_1:{

                // O campo fiscal_sub_1 será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true

            },
			
		
			//-----------------------------------------------------------------------------------------------------------------------------

            descricao:{

                // O campo descricao será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true, minlength: 10

            },
			
			
//-----------------------------------------------------------------------------------------------------------------------------

            n_processo:{

                // O campo será n_processo obrigatório (required) e terá tamanho mínimo (minLength)

                required: true, minlength: 20

            }

        },
		
	
//######################################--Define as mensagens de erro para cada regra--#######################################
        

        messages:{

            n_contrato:{

                required: "Digite o número do Contrato!",

                minlength: "O Contrato deve conter 06 digitos númericos!"

            },

//-----------------------------------------------------------------------------------------------------------------------------	

            
empresa:{

                required: "Digite o nome da Empresa"



            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
valor_contrato:{

                required: "Digite o valor do contrato",

                minlength: "deve conter, no mínimo, 2 caracteres"

            },
			
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
valor_mensal:{

                required: "Digite o valor mensal",

                minlength: "deve conter, no mínimo, 2 caracteres"

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	
			
			filecontrato:{

                required: "Selecione a cópia original do contrato"

            },
			
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
vigencia:{

                required: "Digite a vigencia",

                minlength: "deve conter, no mínimo, 2 caracteres"

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
n_processo:{

                required: "Digite o numero do Processo",

                minlength: "O campo deve conter 17 digitos númericos!"

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
descricao:{

                required: "Digite a descrição",

                minlength: "deve conter, no mínimo, 10 caracteres"

            },
			

			
//-----------------------------------------------------------------------------------------------------------------------------	

            fiscal_sub_1:{

                required: "Digite o fiscal Substituto 1"

             

            }
			
//-----------------------------------------------------------------------------------------------------------------------------		
			
			
			
			
			

        }

    });

});