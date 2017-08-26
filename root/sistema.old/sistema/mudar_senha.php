<?php

include('C:\wamp\www\sistema\validacao\testa_adm.php');


 include('C:\wamp\www\sistema\validacao\dbconexao.php');	// cria conexo com o banco
 session_name('login_adm'); //abre a sesso do login



 
 $id = $_SESSION["id"];
 $senhaantiga = $_POST['senha_antiga'];
 $senhanova = $_POST['senha_nova'];
 $senhanova2 = $_POST['senha_nova_2'];
 
 if ( $senhanova != $senhanova2 ) {
	 	echo "<script type=\"text/javascript\">
          	 alert('A Senha nova no  igual nas duas caixas');
          	 history.go(-1);
         	 </script>";
		exit();	
 }
 
 $buscar_senha = "SELECT * FROM admin WHERE Senha = '$senhaantiga' and Id = $id"; //varivel query recebe busca de senha e o usurio digitados, para logar no banco.
 
 $resultado = mysql_query($buscar_senha,$conexao); // varivel busca o resultado da seleo, retornar 1 se existir os dados.
 
 if(mysql_num_rows($resultado) != 1){					// testa se foi retornado 0, se 0 cria um script de login invlido
 	echo "<script type=\"text/javascript\">
           alert('Senha Antiga Incorreta');
           history.go(-1);
          </script>";	
    exit();											// para o script
 }
 
  $muda_senha = "UPDATE admin SET Senha = '$senhanova' WHERE Id = '$id'";
 
  $testa = mysql_query($muda_senha, $conexao);

	if ( $testa ){ 

   
   
   
   
   
    if($_SESSION["Acesso"] == 'terceirizado' ){
	header('Location: http://localhost/sistema/Contratos/link2_contrato.php?pagina=1');
	}
	
		 if($_SESSION["Acesso"] == 'mapa' ){
	header('Location: http://localhost/sistema/MAPA/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1');
	}

	
				 if($_SESSION["Master"] == 's' ){
	header('Location: http://localhost/sistema/Admin/Administrador.php?pagina=1');
	}
	
	
					 if($_SESSION["Acesso"] == 'Bolsistas' ){
	header('Location: http://localhost/sistema/Bolsistas/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1');
	}
	
	
						 if($_SESSION["Acesso"] == 'consulta' ){
	header('Location: http://localhost/sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php');
	}
	

	
    } else {
		
    echo "No foi possvel fazer a(s) alteraes!";
		
    }

 
 
?>
