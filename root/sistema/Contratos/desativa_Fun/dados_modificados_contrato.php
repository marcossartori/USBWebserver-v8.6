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
		$sql = "select * from contratos WHERE id=$idGet";

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

    
    	<td colspan="2" style="font-size:15px; color:#060;">
          <p>&nbsp;</p>
        <p style=" margin:15px; text-align:justify; "> 
        <b>Dados modificados: </b>


                                                                   
              </td>
    
 
	</tr>  
 
 
 
 
 
  
  
  
      		    <tr>
    
    
    	<td colspan="2" style="font-size:15px; color:#060;">
      
        <p style=" margin:15px; text-align:justify; "> 
        Contrato: <b>
		<?php echo $dado_adm['n_contrato'];?><b>
       <?php $n_contrato=$_SESSION['n_contrato'] = $dado_adm['n_contrato'];?>
                                                                   
              </td>
    
 
	</tr>   
  
  
  
  
  
  		<tr>
      
    
    		<td>
									
<p>&nbsp;</p>
<?php


			
			$dado_adm['id'];
			
			$linha_adm3 = "SELECT * FROM contrato_n_processo WHERE id_contrato='{$dado_adm['id']}'";
		
 					include('..\..\validacao\dbconexao_log.php');

 					$resultado3 = mysql_query($linha_adm3);
					
					
					$linha_adm33 = "SELECT * FROM contrato_n_processo2 WHERE id_contrato='{$dado_adm['id']}'";
		
 					include('..\..\validacao\dbconexao_log.php');

 					$resultado33 = mysql_query($linha_adm33);
					
					
					

					
				
	
				while ( $dado_adm3 = mysql_fetch_array($resultado3)){
				while ( $dado_adm33 = mysql_fetch_array($resultado33)){	
									

				 
// array contendo valores antigos
$arr_old = array(
$dado_adm3['n_processo'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm33['n_processo'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo $dado_adm33['usuario'];
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm33['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm33['Hora'];
  echo "<br />";

  

 
 echo  "<br />";
 echo "<b>";
  echo "Processo: "; echo "</b>"; echo  $arr_new[$key];"<br />";
 
 

  
  echo "<hr>";
  }
	}
	  }
	
  

  
//2--------------------------------------------------------


$dado_adm['id'];
			
$linha_adm4 = "SELECT * FROM contrato_descricao WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado4 = mysql_query($linha_adm4);
 
 

			
$linha_adm44 = "SELECT * FROM contrato_descricao2 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado44 = mysql_query($linha_adm44);
 
 
 

	while ( $dado_adm4 = mysql_fetch_array($resultado4)){
	while ( $dado_adm44 = mysql_fetch_array($resultado44)){	



// array contendo valores antigos
$arr_old = array(
$dado_adm4['descricao'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm44['descricao'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo $dado_adm44['usuario'];
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm44['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm44['Hora'];
  echo "<br />";

  
  
 echo  "<br />";
 echo "<b>";
  echo "Descricao: "; echo "</b>"; echo  $arr_new[$key];"<br />";
  
  echo "<hr>";
  } 
	}  
		}
//3--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm5 = "SELECT * FROM contrato_valor_contrato WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado5 = mysql_query($linha_adm5);
 
 
 $linha_adm55 = "SELECT * FROM contrato_valor_contrato2 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado55 = mysql_query($linha_adm55);
 
 
 
 
 

	while ( $dado_adm5 = mysql_fetch_array($resultado5)){
	while ( $dado_adm55 = mysql_fetch_array($resultado55)){


// array contendo valores antigos
$arr_old = array(
$dado_adm5['valor_contrato'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm55['valor_contrato'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){

  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo $dado_adm55['usuario'];
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm55['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm55['Hora'];
  echo "<br />";

  
  
 echo  "<br />";
 echo "<b>";
  echo "Valor do contrato: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}
  
 
 //4--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm6 = "SELECT * FROM contrato_valor_mensal WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado6 = mysql_query($linha_adm6);
 
 
 $linha_adm66 = "SELECT * FROM contrato_valor_mensal2 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado66 = mysql_query($linha_adm66);
 
 
 
 

	while ( $dado_adm6 = mysql_fetch_array($resultado6)){
	while ( $dado_adm66 = mysql_fetch_array($resultado66)){


// array contendo valores antigos
$arr_old = array(
$dado_adm6['valor_mensal'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm66['valor_mensal'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){


  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo $dado_adm66['usuario'];
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm66['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm66['Hora'];
  echo "<br />";

  
 echo  "<br />";
 echo "<b>";
  echo "Valor mensal: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}
  
 //5--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm7 = "SELECT * FROM contrato_vigencia WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado7 = mysql_query($linha_adm7);
 
 
 $linha_adm77 = "SELECT * FROM contrato_vigencia2 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado77 = mysql_query($linha_adm77);
 

	while ( $dado_adm7 = mysql_fetch_array($resultado7)){
	while ( $dado_adm77 = mysql_fetch_array($resultado77)){


// array contendo valores antigos
$arr_old = array(
$dado_adm7['vigencia'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm77['vigencia'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo $dado_adm77['usuario'];
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm77['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm77['Hora'];
  echo "<br />";

  
  
 echo  "<br />";
 echo "<b>";
  echo "Vigência: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}
  
 
  //6--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm8 = "SELECT * FROM contrato_ativo WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado8 = mysql_query($linha_adm8);
 
 
 $linha_adm88 = "SELECT * FROM contrato_ativo2 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado88 = mysql_query($linha_adm88);

	while ( $dado_adm8 = mysql_fetch_array($resultado8)){
	while ( $dado_adm88 = mysql_fetch_array($resultado88)){		



// array contendo valores antigos
$arr_old = array(
$dado_adm8['Ativo'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm88['Ativo'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo $dado_adm88['usuario'];
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm88['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm88['Hora'];
  echo "<br />";

  
 echo  "<br />";
 echo "<b>";
  echo "Ativo: "; echo "</b>"; echo  $arr_new[$key];"<br />";

  echo "<hr>";
  } 
	} 
		}
  
  //7--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm9 = "SELECT * FROM contrato_empresa WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado9 = mysql_query($linha_adm9);
 
 
 $linha_adm99 = "SELECT * FROM contrato_empresa2 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado99 = mysql_query($linha_adm99);
 

	while ( $dado_adm9 = mysql_fetch_array($resultado9)){
	while ( $dado_adm99 = mysql_fetch_array($resultado99)){


// array contendo valores antigos
$arr_old = array(
$dado_adm9['empresa'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm99['empresa'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo $dado_adm99['usuario'];
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm99['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm99['Hora'];
  
  echo "<br />";
  echo "<br />";
  echo "<b>";
  echo "Empresa: "; echo "</b>"; 

  			$linhaid=$arr_new[$key];
			$linha_adm3 = "SELECT * FROM tab_empresa where id='$linhaid'";
			
			 			include('..\..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			echo $dado_adm3['empresa'];		
}

"<br />";

  echo "<hr>";
  } 
	}
		}
  



  //8--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm10 = "SELECT * FROM contrato_fiscal_sub_1 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado10 = mysql_query($linha_adm10);
 
 
 
 $linha_adm101 = "SELECT * FROM contrato_fiscal_sub_1_2 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado101 = mysql_query($linha_adm101);
 
 

	while ( $dado_adm10 = mysql_fetch_array($resultado10)){
	while ( $dado_adm101 = mysql_fetch_array($resultado101)){		



// array contendo valores antigos
$arr_old = array(
$dado_adm10['fiscal_sub_1'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm101['fiscal_sub_1'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo $dado_adm101['usuario'];
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm101['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm101['Hora'];

  echo "<br />";
  echo "<br />";
  echo "<b>";
  echo "Fiscal Substituto: "; echo "</b>"; 

  			$linhaid=$arr_new[$key];
			$linha_adm3 = "SELECT * FROM Admin where id='$linhaid'";
			
			 			include('..\..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			echo $dado_adm3['Nome'];		
}

"<br />";




  echo "<hr>";
  } 
	}
		}
    
 
 
 
   //9--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm11 = "SELECT * FROM contrato_fiscal_sub_2 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado11 = mysql_query($linha_adm11);
 
 
 
 
 $linha_adm111 = "SELECT * FROM contrato_fiscal_sub_2_2 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado111 = mysql_query($linha_adm111);
 
 

	while ( $dado_adm11 = mysql_fetch_array($resultado11)){
	while ( $dado_adm111 = mysql_fetch_array($resultado111)){	



// array contendo valores antigos
$arr_old = array(
$dado_adm11['fiscal_sub_2'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm111['fiscal_sub_2'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo $dado_adm111['usuario'];
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm111['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm111['Hora'];

  echo "<br />";
  echo "<br />";
  echo "<b>";
  echo "Apoio 1: "; echo "</b>"; 

  			$linhaid=$arr_new[$key];
			$linha_adm3 = "SELECT * FROM Admin where id='$linhaid'";
			
			 			include('..\..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			echo $dado_adm3['Nome'];		
}

"<br />";


  echo "<hr>";
  } 
	} 
		}
	
	
	
   //10--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm12 = "SELECT * FROM contrato_fiscal_sub_3 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado12 = mysql_query($linha_adm12);
 
 
 
 
 $linha_adm122 = "SELECT * FROM contrato_fiscal_sub_3_2 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado122 = mysql_query($linha_adm122);
 

	while ( $dado_adm12 = mysql_fetch_array($resultado12)){
	while ( $dado_adm122 = mysql_fetch_array($resultado122)){		



// array contendo valores antigos
$arr_old = array(
$dado_adm12['fiscal_sub_3'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm122['fiscal_sub_3'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo $dado_adm122['usuario'];
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm122['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm122['Hora'];

  echo "<br />";
  echo "<br />";
  echo "<b>";
  echo "Apoio 2: "; echo "</b>"; 

  			$linhaid=$arr_new[$key];
			$linha_adm3 = "SELECT * FROM Admin where id='$linhaid'";
			
			 			include('..\..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			echo $dado_adm3['Nome'];		
}

"<br />";

  echo "<hr>";
  } 
	} 
		}
	
	
   //11--------------------------------------------------------  
 $dado_adm['id'];
			
$linha_adm13 = "SELECT * FROM contrato_fiscal_sub_4 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado13 = mysql_query($linha_adm13);
 
 
 
 
 $linha_adm133 = "SELECT * FROM contrato_fiscal_sub_4_2 WHERE id_contrato='{$dado_adm['id']}'";
		
 include('..\..\validacao\dbconexao_log.php');

 $resultado133 = mysql_query($linha_adm133);
 
 

	while ( $dado_adm13 = mysql_fetch_array($resultado13)){
	while ( $dado_adm133 = mysql_fetch_array($resultado133)){


// array contendo valores antigos
$arr_old = array(
$dado_adm13['fiscal_sub_4'],



);
// array contendo valores novos
$arr_new = array(
$dado_adm133['fiscal_sub_4'],


);
 
// verifica o que está diferente
$arr_dif = array_diff_assoc($arr_old, $arr_new);
 
foreach($arr_dif as $key => $value){
	
  echo "<b>";
  echo "<hr>";
  echo "Usuario: ";  echo "</b>"; echo $dado_adm133['usuario'];
  echo "<br />";
  
  echo "<b>";
  echo "Data: ";  echo "</b>"; echo $dado_adm133['Data'];
  echo "<br />";

  
  echo "<b>";
  echo "Hora: ";  echo "</b>"; echo $dado_adm133['Hora'];

  echo "<br />";
  echo "<br />";
  echo "<b>";
  echo "Apoio 3: "; echo "</b>"; 

  			$linhaid=$arr_new[$key];
			$linha_adm3 = "SELECT * FROM Admin where id='$linhaid'";
			
			 			include('..\..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			echo $dado_adm3['Nome'];		
}

"<br />";

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
