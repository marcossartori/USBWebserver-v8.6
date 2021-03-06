$(document).ready( function() {
	
	
	

    $("#form1").validate({

//#################################################--Define as regras--########################################################
        rules:{

            cargo:{

                // O campo cargo será obrigatório (required) e terá tamanho mínimo (minLength)

                required: true

            },
			
//-----------------------------------------------------------------------------------------------------------------------------

            nome_funcionario:{

                // O campo nome_funcionario será obrigatório e terá tamanho mínimo (minLength)

                required: true, minlength: 3

            },
			
//-----------------------------------------------------------------------------------------------------------------------------

            data_nasc:{

                // O campo data_nasc será obrigatório

                required: true

            },
			
			
//-----------------------------------------------------------------------------------------------------------------------------

            telefone:{

                // O campo telefone será obrigatório

                required: true, minlength: 14

            },
			
//-----------------------------------------------------------------------------------------------------------------------------

            email:{

                // O campo Email será obrigatório

                required: true, email: true

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------

            endereco:{

                // O campo endereco será obrigatório

                required: true

            },
			
			
			
			
//-----------------------------------------------------------------------------------------------------------------------------

            cpf:{

                // O campo endereco será obrigatório

                 required: true, minlength: 14

            },
			
			
			
		
			//-----------------------------------------------------------------------------------------------------------------------------

            Numero:{

                // O campo Numero será obrigatório

                required: true

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------

            ini_lanagro:{

                // O campo Complemento será obrigatório

                required: true

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------

            Bairro:{

                // O campo Bairro será obrigatório

                required: true

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------

            cod_cidades:{

                // O campo Cidade será obrigatório

                required: true

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------

            sexo:{

                // O campo sexo será obrigatório

                required: true

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------

            escolaridade:{

                // O campo escolaridade será obrigatório

                required: true

            },

			
			
			//-----------------------------------------------------------------------------------------------------------------------------

            filhos:{

                // O campo filhos será obrigatório

                required: true

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------

            cod_estados:{

                // O campo estado será obrigatório

                required: true

            },
			
			
						//-----------------------------------------------------------------------------------------------------------------------------

            bolsista:{

                // O campo estado será obrigatório

                required: true

            },
	
			
//-----------------------------------------------------------------------------------------------------------------------------

            unidade:{

                // O campo unidade será  obrigatório

                required: true

            }

        },

//-------------------------------------------------------Fim das Regras---------------------------------------------------

//######################################--Define as mensagens de erro para cada regra--#######################################
        

        messages:{

            cargo:{

                required: "Escolha o cargo!"


            },

//-----------------------------------------------------------------------------------------------------------------------------	

            
nome_funcionario:{

                required: "Digite o nome do Funcionário",
				
				minlength: "Entre com um nome Válido"

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
data_nasc:{

                required: "Entre com a data de Nascimento"


            },
			
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
telefone:{

                required: "Entre com o telefone",

                minlength: "Digite apenas números, 10 caracteres"

            },
			
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
email:{

                required: "Entre com o email",
                
				email: "Digite um e-mail válido"


            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
endereco:{

                required: "Digite o endereço"

               

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
Numero:{

                required: "Digite o número"

               

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
ini_lanagro:{

                required: "Digite a data de inicio no LANAGRO"

                

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
Bairro:{

                required: "Digite o Bairro"

                

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
cod_cidades:{

                required: "Escolha um estado para carregar as cidades"

                

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
sexo:{

                required: "Digite o Sexo"

                

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
escolaridade:{

                required: "Escolha a escolaridade"

               

            },

			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
filhos:{

                required: "Escolha Sim ou Não"

                

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	

            
cod_estados:{

                required: "Escolha o estado"

                

            },
			
			
			
						//-----------------------------------------------------------------------------------------------------------------------------	

            
cpf:{

                required: "Entre com o cpf",
				minlength: "Digite um cpf válido"

                

            },
			
			
			//-----------------------------------------------------------------------------------------------------------------------------	
			
			
			bolsista:{

                required: "Selesione o tipo de bolsa"

                

            },
			


			
//-----------------------------------------------------------------------------------------------------------------------------	

            unidade:{

                required: "Escolha a unidade"

             

            }
			
//-----------------------------------------------------------------------------------------------------------------------------		
			
			
			
			
			

        }

    });

});