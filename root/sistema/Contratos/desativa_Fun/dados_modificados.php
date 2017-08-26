<?php

	
	include('..\..\validacao\cima.php');

	//echo "identificador(id):";
	//echo $_GET['id'];

require '..\..\validacao\class_conexao2.php';

$objetoConexao = new conexao();

$objetoConexao->defineServidor("localhost");
$objetoConexao->defineUsuario("root");
$objetoConexao->defineSenha("root");

$objetoConexao->abrirConexao();

if ($objetoConexao->estaConectado() == false){
	//echo "conexao nao realizada com sucesso!";
} else {
	//echo "conexao realizada com sucesso";
	$objetoConexao->defineNomedobanco("lanagro_rs");
	$objetoConexao->selecionaBanco();
	if ($objetoConexao->estaComBancoSelecionado()==false) {
		echo "nao consegui selecionar o banco de ";
	} else {
		
			
		
				$idGet = $_GET['id'];
		$sql = "select * from funcionarios WHERE id=$idGet";

		//echo "sql:"; //echo $sql;
		$resultado = $objetoConexao->consulta($sql);
		if ($resultado == false){
			echo "nenhum resultado valido!";
		} else {
			$dado_adm = mysql_fetch_array($resultado);
		}
	}
}
?>

<body link="##063" vlink="##063" alink="##063">
<center>
 
	<table cellspacing="0" style="	width:750;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:30px;">
									
<?php include('..\..\validacao\saudacao.php'); ?>
						
		<tr>
    		<td style="	width:700px;
            			height:20px;
            			text-align:center;">
                        
            <b><?php include('..\..\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
			
            
        </td>
		</tr>
		
		
		<tr>
				    		<td style="	width:700px;
            			height:20px;
            			text-align:center;">
                        
			<b><?php include('..\..\validacao\menu\funcionarios\menu_visualiza_fun_rodape.php');?></b>
            
        </td>
		
		
		</tr>
  
      <tr>
	  
	      		 <td colspan="2" style="text-align:center;
            						background-color:#FFF;
                                    font-size:20px; color:#060;
            						width:750;
            						">
                                    <p>&nbsp;</p>
                                   <b> Histórico de dados modificados </b>
								    <p>&nbsp;</p>
    	 </td>
		 </tr> 
		
		 <tr>

	      		 <td colspan="2" style="text-align:left;
            						background-color:#FFF;
                                    font-size:15px; color:#063;
            						width:750;
            						">
                                    
                                   <b> Funcionário (a): <b><?php 
			echo "<a href='"; 
			echo "../../Contratos/visualizar_edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"];
			echo "'>";
			echo $_SESSION['nome_funcionario']; echo "</a>"; ?> </b>
    	 </td>
   </tr>
  
  		<tr>
    
    		<td>
									
<p>&nbsp;</p>
<?php


			
			$dado_adm['id'];
			
			$linha_adm3 = "SELECT * FROM tab_nome_funcionario WHERE id_funcionario='{$dado_adm['id']}'";
		
 					include('..\..\validacao\dbconexao_log.php');

 					$resultado3 = mysql_query($linha_adm3);
					
					
					$linha_adm33 = "SELECT * FROM tab_nome_funcionario2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 					include('..\..\validacao\dbconexao_log.php');

 					$resultado33 = mysql_query($linha_adm33);
					
					
					

					
				
	
				while ( $dado_adm3 = mysql_fetch_array($resultado3)){
				while ( $dado_adm33 = mysql_fetch_array($resultado33)){	
									

				 
// array contendo valores antigos
$arr_old = array(
$dado_adm3['nome_funcionario'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm33['nome_funcionario'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
  echo "<b>";
  echo "<hr>";
  
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm33['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm33['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm33['Hora'];
  echo "<br />";

  

 
 echo  "<br />";
 echo "<b>";
  echo "Nome: "; echo "</b>"; echo  $arr_new[$key];"<br />";
 
 

  
  echo "<hr>";
  }
	}
	  }
	
  

  
//2--------------------------------------------------------


$dado_adm['id'];
			
$linha_adm4 = "SELECT * FROM tab_ini_lanagro WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado4 = mysql_query($linha_adm4);
 
 

			
$linha_adm44 = "SELECT * FROM tab_ini_lanagro2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado44 = mysql_query($linha_adm44);
 
 
 

	while ( $dado_adm4 = mysql_fetch_array($resultado4)){
	while ( $dado_adm44 = mysql_fetch_array($resultado44)){	



// array contendo valores antigos
$arr_old = array(
$dado_adm4['ini_lanagro'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm44['ini_lanagro'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm44['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm44['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm44['Hora'];
  echo "<br />";

  
  
 echo  "<br />";
 echo "<b>";
  echo "Início no LANAGRO: "; echo "</b>"; echo  $arr_new[$key];"<br />";
  
  echo "<hr>";
  } 
	}  
		}
//3--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm5 = "SELECT * FROM tab_telefone WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado5 = mysql_query($linha_adm5);
 
 
 $linha_adm55 = "SELECT * FROM tab_telefone2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado55 = mysql_query($linha_adm55);
 
 
 
 
 

	while ( $dado_adm5 = mysql_fetch_array($resultado5)){
	while ( $dado_adm55 = mysql_fetch_array($resultado55)){


// array contendo valores antigos
$arr_old = array(
$dado_adm5['telefone'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm55['telefone'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){

  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm55['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm55['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm55['Hora'];
  echo "<br />";

  
  
 echo  "<br />";
 echo "<b>";
  echo "Telefone: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}
  
 
 //4--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm6 = "SELECT * FROM tab_cargo WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado6 = mysql_query($linha_adm6);
 
 
 $linha_adm66 = "SELECT * FROM tab_cargo2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado66 = mysql_query($linha_adm66);
 
 
 
 

	while ( $dado_adm6 = mysql_fetch_array($resultado6)){
	while ( $dado_adm66 = mysql_fetch_array($resultado66)){


// array contendo valores antigos
$arr_old = array(
$dado_adm6['cargo'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm66['cargo'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){


  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm66['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm66['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm66['Hora'];
  echo "<br />";

  
 echo  "<br />";
 echo "<b>";
 
 
 
 
 
 			$linhaid=$arr_new[$key];
			$linha_adm4x = "SELECT * FROM tab_cargo where id='$linhaid'";
			
			 			 include('..\..\validacao\dbconexao.php');

 			$resultado4x = mysql_query($linha_adm4x,$conexao);
			while ( $dado_adm4x = mysql_fetch_array($resultado4x)){

		
			 
  echo "Cargo: "; echo "</b>"; echo  $dado_adm4x['cargo']; "<br />";

  echo "<hr>";
}
 
 
 
 
 

  } 
	} 
		}
  
 //5--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm7 = "SELECT * FROM tab_escolaridade WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado7 = mysql_query($linha_adm7);
 
 
 $linha_adm77 = "SELECT * FROM tab_escolaridade2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado77 = mysql_query($linha_adm77);
 

	while ( $dado_adm7 = mysql_fetch_array($resultado7)){
	while ( $dado_adm77 = mysql_fetch_array($resultado77)){


// array contendo valores antigos
$arr_old = array(
$dado_adm7['escolaridade'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm77['escolaridade'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm77['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm77['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm77['Hora'];
  echo "<br />";

  
  
 echo  "<br />";
 echo "<b>";
 
 
 
 
 
 
 				$linhaid= $arr_new[$key]; 
			$linha_adm5x = "SELECT * FROM tab_escolaridade where id_esc='$linhaid'";
			
						include('..\..\validacao\dbconexao.php');

 			$resultado5x = mysql_query($linha_adm5x,$conexao);
			while ( $dado_adm5x = mysql_fetch_array($resultado5x)){

			
			  echo "Escolaridade: "; echo "</b>"; echo  $dado_adm5x['escolaridade'];"<br />";

  echo "<hr>";
			
}
 
 
 

  } 
	} 
		}
  
 
  //6--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm8 = "SELECT * FROM tab_sexo WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado8 = mysql_query($linha_adm8);
 
 
 $linha_adm88 = "SELECT * FROM tab_sexo2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado88 = mysql_query($linha_adm88);

	while ( $dado_adm8 = mysql_fetch_array($resultado8)){
	while ( $dado_adm88 = mysql_fetch_array($resultado88)){		



// array contendo valores antigos
$arr_old = array(
$dado_adm8['sexo'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm88['sexo'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm88['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm88['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm88['Hora'];
  echo "<br />";

  
 echo  "<br />";
 echo "<b>";
  echo "Sexo: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}
  
  //7--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm9 = "SELECT * FROM tab_Complemento WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado9 = mysql_query($linha_adm9);
 
 
 $linha_adm99 = "SELECT * FROM tab_Complemento2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado99 = mysql_query($linha_adm99);
 

	while ( $dado_adm9 = mysql_fetch_array($resultado9)){
	while ( $dado_adm99 = mysql_fetch_array($resultado99)){


// array contendo valores antigos
$arr_old = array(
$dado_adm9['Complemento'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm99['Complemento'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm99['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm99['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm99['Hora'];
  echo "<br />";

  
 echo  "<br />";
 echo "<b>";
  echo "Complemento: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	}
		}
  



  //8--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm10 = "SELECT * FROM tab_email WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado10 = mysql_query($linha_adm10);
 
 
 
 $linha_adm101 = "SELECT * FROM tab_email2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado101 = mysql_query($linha_adm101);
 
 

	while ( $dado_adm10 = mysql_fetch_array($resultado10)){
	while ( $dado_adm101 = mysql_fetch_array($resultado101)){		



// array contendo valores antigos
$arr_old = array(
$dado_adm10['email'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm101['email'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm101['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm101['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm101['Hora'];
  echo "<br />";

  
 echo  "<br />";
 echo "<b>";
  echo "Email: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	}
		}
    
 
 
 
   //9--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm11 = "SELECT * FROM tab_Bairro WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado11 = mysql_query($linha_adm11);
 
 
 
 
 $linha_adm111 = "SELECT * FROM tab_Bairro2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado111 = mysql_query($linha_adm111);
 
 

	while ( $dado_adm11 = mysql_fetch_array($resultado11)){
	while ( $dado_adm111 = mysql_fetch_array($resultado111)){	



// array contendo valores antigos
$arr_old = array(
$dado_adm11['Bairro'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm111['Bairro'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm111['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm111['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm111['Hora'];
  echo "<br />";

  
 echo  "<br />";
 echo "<b>";
  echo "Bairro: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}
	
	
	
   //10--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm12 = "SELECT * FROM tab_Cidade WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado12 = mysql_query($linha_adm12);
 
 
 
 
 $linha_adm122 = "SELECT * FROM tab_Cidade2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado122 = mysql_query($linha_adm122);
 

	while ( $dado_adm12 = mysql_fetch_array($resultado12)){
	while ( $dado_adm122 = mysql_fetch_array($resultado122)){		



// array contendo valores antigos
$arr_old = array(
$dado_adm12['Cidade'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm122['Cidade'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm122['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm122['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm122['Hora'];
  echo "<br />";

 echo  "<br />";
 echo "<b>";
  echo "Cidade: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}
	
	
   //11--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm13 = "SELECT * FROM tab_Estado WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado13 = mysql_query($linha_adm13);
 
 
 
 
 $linha_adm133 = "SELECT * FROM tab_Estado2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado133 = mysql_query($linha_adm133);
 
 

	while ( $dado_adm13 = mysql_fetch_array($resultado13)){
	while ( $dado_adm133 = mysql_fetch_array($resultado133)){


// array contendo valores antigos
$arr_old = array(
$dado_adm13['Estado'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm133['Estado'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm133['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm133['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm133['Hora'];
  echo "<br />";

 echo  "<br />";
 echo "<b>";
  echo "Estado: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}
	
	


   //12--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm14 = "SELECT * FROM tab_formacao WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado14 = mysql_query($linha_adm14);
 
 
 
 
 $linha_adm144 = "SELECT * FROM tab_formacao2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado144 = mysql_query($linha_adm144);
 
 
	while ( $dado_adm14 = mysql_fetch_array($resultado14)){
	while ( $dado_adm144 = mysql_fetch_array($resultado144)){



// array contendo valores antigos
$arr_old = array(
$dado_adm14['formacao'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm144['formacao'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm144['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm144['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm144['Hora'];
  echo "<br />";

  				$linhaid=$arr_new[$key];
			$linha_adm6x = "SELECT * FROM tab_formacao where id_form='$linhaid'";
			
			 			 include('..\..\validacao\dbconexao.php');

 			$resultado6x = mysql_query($linha_adm6x);
			while ( $dado_adm6x = mysql_fetch_array($resultado6x)){

			
 echo  "<br />";
 echo "<b>";
 echo "Formação: "; echo "</b>"; echo  $dado_adm6x['formacao'];"<br />";
			
}
  
  

  echo "<hr>";
  } 
	} 
		}




   //13--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm15 = "SELECT * FROM tab_n_contrato WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado15 = mysql_query($linha_adm15);
 
 
 $linha_adm155 = "SELECT * FROM tab_n_contrato2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado155 = mysql_query($linha_adm155);

	while ( $dado_adm15 = mysql_fetch_array($resultado15)){
	while ( $dado_adm155 = mysql_fetch_array($resultado155)){


// array contendo valores antigos
$arr_old = array(
$dado_adm15['n_contrato'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm155['n_contrato'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm155['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm155['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm155['Hora'];
  echo "<br />";

  
 echo  "<br />";
 echo "<b>";
  echo "Contrato: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}




   //14--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm16 = "SELECT * FROM tab_data_nasc WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado16 = mysql_query($linha_adm16);
 
 
 
 
 $linha_adm1661 = "SELECT * FROM tab_data_nasc2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado1661 = mysql_query($linha_adm1661);
 
 

	while ( $dado_adm16 = mysql_fetch_array($resultado16)){
	while ( $dado_adm1661 = mysql_fetch_array($resultado1661)){


// array contendo valores antigos
$arr_old = array(
$dado_adm16['data_nasc'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm1661['data_nasc'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm1661['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm1661['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm1661['Hora'];
  echo "<br />";

 echo  "<br />";
 echo "<b>";
  echo "Data de Nascimento: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}

	


   //15--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm17 = "SELECT * FROM tab_natura WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado17 = mysql_query($linha_adm17);
 
 
 
 $linha_adm177 = "SELECT * FROM tab_natura2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado177 = mysql_query($linha_adm177);
 
 
 
 

	while ( $dado_adm17 = mysql_fetch_array($resultado17)){
	while ( $dado_adm177 = mysql_fetch_array($resultado177)){


// array contendo valores antigos
$arr_old = array(
$dado_adm17['natura'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm177['natura'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm177['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm177['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm177['Hora'];
  echo "<br />";

 echo  "<br />";
 echo "<b>";
  echo "Naturalidade: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}




   //16--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm18 = "SELECT * FROM tab_obs WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado18 = mysql_query($linha_adm18);
 
 
 
 
 $linha_adm188 = "SELECT * FROM tab_obs2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado188 = mysql_query($linha_adm188);
 
 

	while ( $dado_adm18 = mysql_fetch_array($resultado18)){
	while ( $dado_adm188 = mysql_fetch_array($resultado188)){


// array contendo valores antigos
$arr_old = array(
$dado_adm18['obs'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm188['obs'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>";echo utf8_encode($dado_adm188['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm188['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm188['Hora'];
  echo "<br />";

 echo  "<br />";
 echo "<b>";
  echo "Observações: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}


	
	
   //17--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm19 = "SELECT * FROM tab_endereco WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado19 = mysql_query($linha_adm19);
 
 
 
 
 
 $linha_adm199 = "SELECT * FROM tab_endereco2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado199 = mysql_query($linha_adm199);
 
 
 
 

	while ( $dado_adm19 = mysql_fetch_array($resultado19)){
	while ( $dado_adm199 = mysql_fetch_array($resultado199)){	



// array contendo valores antigos
$arr_old = array(
$dado_adm19['endereco'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm199['endereco'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm199['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm199['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm199['Hora'];
  echo "<br />";

 echo  "<br />";
 echo "<b>";
  echo "Endereço: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
	 	}
	
	
	
	
	
   //18--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm20 = "SELECT * FROM tab_filhos WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado20= mysql_query($linha_adm20);
 
 
 
 $linha_adm201 = "SELECT * FROM tab_filhos2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado201= mysql_query($linha_adm201);

	while ( $dado_adm20 = mysql_fetch_array($resultado20)){
	while ( $dado_adm201 = mysql_fetch_array($resultado201)){	



// array contendo valores antigos
$arr_old = array(
$dado_adm20['filhos'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm201['filhos'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm201['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm201['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm201['Hora'];
  echo "<br />";

 echo  "<br />";
 echo "<b>";
  echo "Filhos: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 	
		}


   //19--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm21 = "SELECT * FROM tab_Numero WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado21 = mysql_query($linha_adm21);
 
 
 $linha_adm211 = "SELECT * FROM tab_Numero2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado211 = mysql_query($linha_adm211);

	while ( $dado_adm21 = mysql_fetch_array($resultado21)){
	while ( $dado_adm211 = mysql_fetch_array($resultado211)){	



// array contendo valores antigos
$arr_old = array(
$dado_adm21['Numero'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm211['Numero'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm211['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm211['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm211['Hora'];
  echo "<br />";

 echo  "<br />";
 echo "<b>";
  echo "Numero: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}
	


	
   //20--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm22 = "SELECT * FROM tab_unidade WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado22 = mysql_query($linha_adm22);
 
 
 
 $linha_adm222 = "SELECT * FROM tab_unidade2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado222 = mysql_query($linha_adm222);

	while ( $dado_adm22 = mysql_fetch_array($resultado22)){
	while ( $dado_adm222 = mysql_fetch_array($resultado222)){	
		



// array contendo valores antigos
$arr_old = array(
$dado_adm22['unidade'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm222['unidade'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm222['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm222['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm222['Hora'];
  echo "<br />";

  				$linhaid=$arr_new[$key];
			$linha_adm7x = "SELECT * FROM tab_unidade where id_unidade='$linhaid'";
			
			 			
						 include('..\..\validacao\dbconexao.php');

 			$resultado7x = mysql_query($linha_adm7x);
			while ( $dado_adm7x = mysql_fetch_array($resultado7x)){

			
 echo  "<br />";
 echo "<b>";
 echo "Unidade: "; echo "</b>"; echo $dado_adm7x['unidade'];"<br />";
 
}
  
  
  

  echo "<hr>";
  } 
	}
		}




   //20--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm23 = "SELECT * FROM tab_celular WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado23 = mysql_query($linha_adm23);
 
 
 
 $linha_adm233 = "SELECT * FROM tab_celular2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado233 = mysql_query($linha_adm233);

	while ( $dado_adm23 = mysql_fetch_array($resultado23)){
	while ( $dado_adm233 = mysql_fetch_array($resultado233)){	
		



// array contendo valores antigos
$arr_old = array(
$dado_adm23['celular'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm233['celular'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm233['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm233['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm233['Hora'];
  echo "<br />";

 echo  "<br />";
 echo "<b>";
  echo "Celular: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
} 
	}
		}


   //21--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm24 = "SELECT * FROM tab_sal_base WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado24 = mysql_query($linha_adm24);
 
 
 
 $linha_adm234 = "SELECT * FROM tab_sal_base2 WHERE id_funcionario='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado234 = mysql_query($linha_adm234);

	while ( $dado_adm24 = mysql_fetch_array($resultado24)){
	while ( $dado_adm234 = mysql_fetch_array($resultado234)){	
		



// array contendo valores antigos
$arr_old = array(
$dado_adm24['sal_base'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm234['sal_base'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo utf8_encode($dado_adm234['usuario']); 
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm234['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm234['Hora'];
  echo "<br />";

 echo  "<br />";
 echo "<b>";
  echo "Salario Base: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
} 
	}
		}









	
?>
                                    
			</td>
  		
        </tr>
  
  		
	</table>

</center>

<?php include('..\..\validacao\baixo.php'); ?>
