<?php

 include('C:\wamp\www\sistema\validacao\dbconexao.php');				// cria conexדo com o banco
 
 $query = "SELECT * FROM admin WHERE login = '{$_POST['login']}' AND senha = ('{$_POST['senha']}')"; //variבvel query recebe busca de senha e o usuבrio digitados, para logar no banco.
 
 $result = mysql_query($query,$conexao); // variבvel busca o resultado da seleחדo, retornarב 1 se existir os dados.
 
 if(mysql_num_rows($result) != 1){					// testa se foi retornado 0, se 0 cria um script de login invבlido
 	echo "<script type=\"text/javascript\">
           alert('Usuario ou senha invalidos');
           history.go(-1);
          </script>";	
    exit();											// para o script
 }
 
 $dado = mysql_fetch_array($result);					// se for 1, cria um array com os dados do banco na variבvel dado
 
 session_name('login_adm');							// abre uma sessדo de login
 session_start();
 
 $_SESSION["id"] = $dado[0];					// cria as variבveis de sessדo dado 0 = id, dado 3 = nome
 $_SESSION["nome"] = $dado[3];
 $_SESSION["Acesso"] = $dado[5];
 $_SESSION["Acesso2"] = $dado[6];
 $_SESSION["Acesso3"] = $dado[7];
 $_SESSION["Acesso4"] = $dado[8];
 $_SESSION["Master"] = $dado[4];
 $_SESSION["email"] = $dado[9];
 	
if( (!isset($_SESSION['id'])) AND (!isset($_SESSION['nome'])) ) //testa se não existem as Sessões (Elas só existirão se o login for feito com sucesso)
header("Location: login.php");  

 
 if($_SESSION["Acesso"] == 'Consulta' ){
	header('Location: http://localhost/sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php');
	}
	
	 if($_SESSION["Acesso"] == 'Terceirizados' ){
	header('Location: http://localhost/sistema/Contratos/link2_contrato.php?pagina=1');
	}
	
		 if($_SESSION["Acesso"] == 'Mapa' ){
	header('Location: http://localhost/sistema/MAPA/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1');
	}

	
				 if($_SESSION["Master"] == 's' ){
	header('Location: http://localhost/sistema/Admin/lista_adm.php?pagina=1');
	}
	
	
					 if($_SESSION["Acesso"] == 'Bolsistas' ){
	header('Location: http://localhost/sistema/Bolsistas/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1');
	}
	
?>