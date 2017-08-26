<?php


//--------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------Adiciona ao menu a opção HISTORICO
//-------------------------------------------------------------------------------------------------------------------------------------


 echo "<br>";

        if($_SESSION["Acesso"] == 'Consulta' ){
		
			echo "<a href='"; 
			echo "../../../sistema/Contratos/desativa_Fun/link2_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo " Historico  ";  echo "</a>";

	}
//---------------------------------------------------------------------------------------------------------------------------	
	
	
	 if($_SESSION["Acesso"] == 'Terceirizados'){
		 
			echo "<a href='"; 
			echo "../../../sistema/Contratos/desativa_Fun/link2_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo " Historico  ";  echo "</a>";

	}
	
	
	

//---------------------------------------------------------------------------------------------------------------------------	
	
	
	 if($_SESSION["Acesso"] == 'Mapa'){
		 
			echo "<a href='"; 
			echo "../../../sistema/Contratos/desativa_Fun/link2_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo " Historico  ";  echo "</a>";

	}
	
	
	
//---------------------------------------------------------------------------------------------------------------------------	
	
	
	 if($_SESSION["Acesso"] == 'Bolsistas'){
		 
			echo "<a href='"; 
			echo "../../../sistema/Contratos/desativa_Fun/link2_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo " Historico  ";  echo "</a>";

	}
	
	
//--------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------Adiciona ao menu as opçoes EDITAR DESATIVAR para quem é do grupopo MAPA e tem o acesso MAPA
//--------------------------------------------------------------------------------------------------------------------------------------			
	
		  if(($_SESSION["Acesso"]  == 'Mapa' and $dado_adm["tipo_contrato"] == 'Mapa')
		 or ( $_SESSION["Acesso2"] == 'Mapa' and $dado_adm["tipo_contrato"] == 'Mapa')
		 or ( $_SESSION["Acesso3"] == 'Mapa' and $dado_adm["tipo_contrato"] == 'Mapa'))
						
						{
			 
			echo "<a href='"; 
			echo "../../../sistema/Contratos/desativa_Fun/cadastrar_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo "| Desativar  ";  echo "</a>";
			
			
						
			/*echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/afastamentos/editar_eventual.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo "| Afastamentos  ";  echo "</a>";*/
			
			

			echo "<a href='"; 
			echo "../../../sistema/Contratos/edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
            echo "| Editar ";
			echo "</td>";
	}
	
	
	
	
	
//--------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------Adiciona ao menu as opçoes EDITAR e DESATIVAR para quem é do grupopo BOLSISTAS e tem o acesso BOLSISTAS
//--------------------------------------------------------------------------------------------------------------------------------------			
	
		  if(($_SESSION["Acesso"]  == 'Bolsistas' and $dado_adm["tipo_contrato"] == 'Bolsistas')
		 or ( $_SESSION["Acesso2"] == 'Bolsistas' and $dado_adm["tipo_contrato"] == 'Bolsistas')
		 or ( $_SESSION["Acesso3"] == 'Bolsistas' and $dado_adm["tipo_contrato"] == 'Bolsistas'))
						
						{
			 
			 
			echo "<a href='"; 
			echo "../../../sistema/Contratos/desativa_Fun/cadastrar_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo "| Desativar  ";  echo "</a>";
			
			
						
			/*echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/afastamentos/editar_eventual.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo "| Afastamentos  ";  echo "</a>";*/
			
			

			echo "<a href='"; 
			echo "../../../sistema/Contratos/edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
            echo "| Editar ";
			echo "</td>";
	}	
	


//---------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------Opçoes de Edição--------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------

				 if($_SESSION["Master"] == 's' ){
					 
			echo "<a href='"; 
			echo "../../../sistema/Contratos/desativa_Fun/link2_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo " Historico  ";  echo "</a>";
			
			
			echo "<a href='"; 
			echo "../../../sistema/Contratos/desativa_Fun/cadastrar_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo "| Desativar Funcionario  |";  echo "</a>";
			
			
			echo "<a href='"; 
			echo "../../../sistema/Contratos/edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo " Editar  ";  echo "</a>";

	
	}

	
	
	
//--------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------Adiciona ao menu as opçoes EDITAR e DESATIVAR para quem é Fiscal ou apoio do contrato
//--------------------------------------------------------------------------------------------------------------------------------------	

		 				
		  if( $_SESSION['id'] == $dado_adm["fiscal"]
		   
		or($_SESSION['id'] == $dado_adm["fiscal_sub_1"]) 
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_2"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_3"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_4"])
	
		  
		 and( $dado_adm["tipo_contrato"] == 'Terceirizados'))
						
						{
			

			echo "<a href='"; 
			echo "../../../sistema/Contratos/desativa_Fun/cadastrar_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo "| Desativar  ";  echo "</a>";
			
			
						
			/*echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/afastamentos/editar_eventual.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
		    echo "| Afastamentos  ";  echo "</a>";*/
			
			

			echo "<a href='"; 
			echo "../../../sistema/Contratos/edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"]=$dado_adm['id'];
			echo "'>";
            echo "| Editar ";
			echo "</td>";
			
		}	









	
?>