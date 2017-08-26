<?php     
        if($_SESSION["Acesso"] == 'Consulta' ){

		echo "<a href='"; 
		echo "http://localhost/sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo " Voltar para Consultas  ";  echo "</a>";
		
	}
	
	 if($_SESSION["Acesso"] == 'Terceirizados' ){
		 
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/link2_contrato.php?pagina=1";
		echo "'>";
		echo " Home  |";  echo "</a>";
	
		echo "<a href='"; 
		echo "http://localhost/sistema/altera_senha.php";
		echo "'>";
		echo " Alterar Senha  |";  echo "</a>";
		
		
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/cadastrar_contrato.php";
		echo "'>";
		echo " Cadastrar Contratos  |";  echo "</a>";
		
		echo "<a href='"; 
		echo "http://localhost/sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo " Consultas  |";  echo "</a>";
		
		
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/lista_fun_inativaos/visualizar_edit_lista_func2.php?pagina=1";
		echo "'>";
		echo " Funcionários Inativos |";  echo "</a>";
		
		
		
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/cadastrar_funcionario.php";
		echo "'>";
		echo " Cadastrar Funcionários ";  echo "</a>";
		
		
		
	
	}
	
		 if($_SESSION["Acesso"] == 'Mapa' ){
			 
			 
		echo "<a href='"; 
		echo "http://localhost/sistema/MAPA/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1";
		echo "'>";
		echo " Home |";  echo "</a>";
			 

		echo "<a href='"; 
		echo "http://localhost/sistema/altera_senha.php";
		echo "'>";
		echo " Alterar Senha  |";  echo "</a>";

		
		echo "<a href='"; 
		echo "http://localhost/sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo " Consultas  |";  echo "</a>";
		
		
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/lista_fun_inativaos/visualizar_edit_lista_func2.php?pagina=1";
		echo "'>";
		echo " Funcionários Inativos  |";  echo "</a>";
		
		
		
		
				echo "<a href='"; 
		echo "http://localhost/sistema/MAPA/cadastrar_funcionario_mapa_bolsista_estagiarios.php";
		echo "'>";
		echo " Cadastrar Funcionários ";  echo "</a>";
		
	}

	
				 if($_SESSION["Master"] == 's' ){
					 
		echo "<a href='"; 
		echo "http://localhost/sistema/Admin/Administrador.php?pagina=1";
		echo "'>";
		echo " Home  |";  echo "</a>";
					 
		echo "<a href='"; 
		echo "http://localhost/sistema/altera_senha.php";
		echo "'>";
		echo " Alterar Senha  |";  echo "</a>";
		
		
		echo "<a href='"; 
		echo "cadastrar_contrato.php";
		echo "'>";
		echo " Cadastrar Contratos  |";  echo "</a>";
		
		echo "<a href='"; 
		echo "http://localhost/sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo " Consultas  |";  echo "</a>";
		
		
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/lista_fun_inativaos/visualizar_edit_lista_func2.php?pagina=1";
		echo "'>";
		echo " Funcionários Inativos  ";  echo "</a>";
	
	}
	
	
					 if($_SESSION["Acesso"] == 'Bolsistas' ){
						 
						 
		echo "<a href='"; 
		echo "http://localhost/sistema/Bolsistas/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1";
		echo "'>";
		echo " Home |";  echo "</a>";
						 
		echo "<a href='"; 
		echo "http://localhost/sistema/altera_senha.php";
		echo "'>";
		echo " Alterar Senha |";  echo "</a>";

		
		echo "<a href='"; 
		echo "http://localhost/sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo " Consultas |";  echo "</a>";
		
		
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/lista_fun_inativaos/visualizar_edit_lista_func2.php?pagina=1";
		echo "'>";
		echo " Funcionários Inativos |";  echo "</a>";
		
		
		
				echo "<a href='"; 
		echo "http://localhost/sistema/Bolsistas/cadastrar_funcionario_mapa_bolsista_estagiarios.php";
		echo "'>";
		echo " Cadastrar Funcionários ";  echo "</a>";
	
	}
	
?>