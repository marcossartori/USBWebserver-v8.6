

<?php     
        if($_SESSION["Acesso"] == 'Consulta' ){

		echo "<a href='"; 
		echo "../../../../validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo " Voltar para Consultas  ";  echo "</a>";
		
	}
	
	 if($_SESSION["Acesso"] == 'Terceirizados' ){
		 
		echo "<a href='"; 
		echo "../../../../Contratos/link2_contrato.php?pagina=1";
		echo "'>";
		echo '<img src="../../../../imagens/home.png" width="100" height="50" border="0" alt="Ir para página inicial" />';  echo "</a>";
	
		echo "<a href='"; 
		echo "../../../../altera_senha.php";
		echo "'>";
		echo '<img src="../../../../imagens/senha.png" width="100" height="50" border="0" alt="Alterar sua senha" />';  echo "</a>";
		
		
		echo "<a href='"; 
		echo "../../../../Contratos/cadastrar_contrato.php";
		echo "'>";
		echo '<img src="../../../../imagens/contratos.png" width="100" height="50" border="0" alt="Inserir contratos" />';  echo "</a>";
		
		echo "<a href='"; 
		echo "../../../../validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo '<img src="../../../../imagens/consultas.png" width="100" height="50" border="0" alt="ir para pagina de consultas" />';  echo "</a>";
		
		
		echo "<a href='"; 
		echo "../../../../Contratos/lista_fun_inativaos/visualizar_edit_lista_func2.php?pagina=1";
		echo "'>";
		echo '<img src="../../../../imagens/inativos.png" width="100" height="50" border="0" alt="Lista todos os funcionários inativos" />';  echo "</a>";
		
		
		
		echo "<a href='"; 
		echo "../../../../Contratos/cadastrar_funcionario.php";
		echo "'>";
		echo '<img src="../../../../imagens/funcionario.png" width="100" height="50" border="0" alt="Cadastrar Funcionários" />';  echo "</a>";
		
		
		
	
	}
	
		 if($_SESSION["Acesso"] == 'Mapa' ){
			 
			 
		echo "<a href='"; 
		echo "../../../../MAPA/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1";
		echo "'>";
		echo '<img src="../../../../imagens/home.png" width="100" height="50" border="0" alt="Ir para página inicial" />';  echo "</a>";
			 

		echo "<a href='"; 
		echo "../../../../altera_senha.php";
		echo "'>";
		echo '<img src="../../../../imagens/senha.png" width="100" height="50" border="0" alt="Alterar sua senha" />';  echo "</a>";

		
		echo "<a href='"; 
		echo "../../../../validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo '<img src="../../../../imagens/consultas.png" width="100" height="50" border="0" alt="ir para pagina de consultas" />';  echo "</a>";
		
		
		echo "<a href='"; 
		echo "../../../../Contratos/lista_fun_inativaos/visualizar_edit_lista_func2.php?pagina=1";
		echo "'>";
		echo '<img src="../../../../imagens/inativos.png" width="100" height="50" border="0" alt="Lista todos os funcionários inativos" />';  echo "</a>";
		
		
		
		
				echo "<a href='"; 
		echo "../../../../Contratos/cadastrar_funcionario.php";
		echo "'>";
		echo '<img src="../../../../imagens/funcionario.png" width="100" height="50" border="0" alt="Cadastrar Funcionários" />';  echo "</a>";
		
	}

	
				 if($_SESSION["Master"] == 's' ){
					 
		echo "<a href='"; 
		echo "../../../../Admin/Administrador.php?pagina=1";
		echo "'>";
		echo " Home  |";  echo "</a>";
					 
		echo "<a href='"; 
		echo "../../../../altera_senha.php";
		echo "'>";
		echo " Alterar Senha  |";  echo "</a>";
		
		
		echo "<a href='"; 
		echo "cadastrar_contrato.php";
		echo "'>";
		echo " Cadastrar Contratos  |";  echo "</a>";
		
		echo "<a href='"; 
		echo "../../../../validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo " Consultas  |";  echo "</a>";
		
		
		echo "<a href='"; 
		echo "../../../../Contratos/lista_fun_inativaos/visualizar_edit_lista_func2.php?pagina=1";
		echo "'>";
		echo " Funcionários Inativos  ";  echo "</a>";
	
	}
	
	
					 if($_SESSION["Acesso"] == 'Bolsistas' ){
						 
						 
		echo "<a href='"; 
		echo "../../../../Bolsistas/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1";
		echo "'>";
		echo '<img src="../../../../imagens/home.png" width="100" height="50" border="0" alt="Ir para página inicial" />';  echo "</a>";
						 
		echo "<a href='"; 
		echo "../../../../altera_senha.php";
		echo "'>";
		echo '<img src="../../../../imagens/senha.png" width="100" height="50" border="0" alt="Alterar sua senha" />';  echo "</a>";

		
		echo "<a href='"; 
		echo "../../../../validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo '<img src="../../../../imagens/consultas.png" width="100" height="50" border="0" alt="ir para pagina de consultas" />';  echo "</a>";
		
		
		echo "<a href='"; 
		echo "../../../../Contratos/lista_fun_inativaos/visualizar_edit_lista_func2.php?pagina=1";
		echo "'>";
		echo '<img src="../../../../imagens/inativos.png" width="100" height="50" border="0" alt="Lista todos os funcionários inativos" />';  echo "</a>";
		
		
		
		echo "<a href='"; 
		echo "../../../../Contratos/cadastrar_funcionario.php";
		echo "'>";
		echo '<img src="../../../../imagens/funcionario.png" width="100" height="50" border="0" alt="Cadastrar Funcionários" />';  echo "</a>";
	
	}
	
?>