<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body link="##063" vlink="##063" alink="##063">
<p>





<?php
	//echo "identificador(id):";
	//echo $_GET['id'];
?>

<?php
require '..\validacao\class_conexao2.php';

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
</p>



<form id="form2" name="form2" method="post" action="processa_edicao2_funcionario_mapa_bolsista_estagiarios.php">
   <center>
<?php $_SESSION["Ativo"]=$dado_adm['Ativo'];?> 
 

 
<table cellpadding="0" cellspacing="0" border="0" style=" background-image:url(imagens/fundo_cadastro.png); width:450px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">

	<tr>
    
    	<td colspan="2" style="background-image:url(imagens/fundo_cadastro_topo.png); height:25;">&nbsp;        </td>
	</tr>
    
    
    <tr>
    	<td colspan="2">
        <hr style=" width:477px; text-align:center;">
        <p style=" margin:15px; text-align:justify; "> Funcionário (a): <b><?php echo $dado_adm['nome_funcionario'];?></b>
        <span style=" margin:15px; text-align:justify; ">Contrato: <b><?php echo $n_contrato = $dado_adm['n_contrato'];?></b></span>        
        <p style=" margin:15px; text-align:justify; ">   Empresa: <b>

        <?php
		
						 if(empty($dado_adm['formacao'])){
							 
	$dado_adm['formacao']= "Indefinida";
	}
	


	
							 if($dado_adm['Ativo'] == 'Nao' ){
	echo "Indefinida";
	}
	
								 if(empty($dado_adm['cargo_chefia'])){
	$dado_adm['cargo_chefia']= "Indefinido";
	}
	
	
	
							 if($dado_adm['Ativo'] == 'Sim' ){
	$linhaid=$dado_adm['Ativo'];
	

			
			
			
			$linha_adm3 = "SELECT * FROM tab_empresa where id='{$dado_adm['ID_empresa']}'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			 {
	
			echo "<a href='"; 
			echo "../Empresas/visualizar_edit_empresa.php?id=";
			echo $dado_adm3['id'];
			echo "'>";
			echo $dado_adm3['empresa']; echo "</a>";
			echo "</td>";
			
						 }
			 
								}	
								
							 			}

		
		?>
        
        
        
        </b>       
      <hr style=" width:477px; text-align:center;"></p></td>
        <td colspan="2">
        <p style=" margin:15px; text-align:justify; "><b><b>
       </td>   
<td colspan="2" style="font-size:15px; color:#000;"><b></td>
	</tr>

         	<tr>
			
			
			
				<?php
		

			
				 if($dado_adm['tipo_contrato'] == 'Terceirizados' and $dado_adm['data_saida_ev'] <> '0000-00-00'){
			 
			 echo "<tr>";
			 echo "<td style=\" text-align:right; width:150;\">";
			 
			 
			 
			 
			 
			 
			 
			 echo "<script type=\"text/javascript\">				
function abrir(URL) {  var width = 800;  var height = 320;  var left = 200;  var top = 200;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>";
		
		
		   // HTML <a href="javascript:abrir('http://codigofonte.net/');">Clique Aqui</a>
		
					  if( $_SESSION['id'] == $dado_adm["fiscal"]
		   
		or($_SESSION['id'] == $dado_adm["fiscal_sub_1"]) 
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_2"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_3"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_4"])){		 
			
		
		echo "<a href=javascript:abrir('"; 
		echo "../../sistema/Contratos/eventual/editar_eventual.php?id=";
		echo $dado_adm['id'];
		echo "')>";
		echo " ALTERAR  ";  echo "</a>";	echo "   "; }

			 echo "</td>";
			 
			$cormas = "#F00";
			
			
			echo "<td style=\" color:$cormas; width:180;\">&nbsp;FUNCIONÁRIO EVENTUAL</td>";
			
		    echo "</tr>";

	}
	


				 if($dado_adm['tipo_contrato'] == 'Bolsistas' and $dado_adm['data_saida_ev'] <> '0000-00-00'){
			 
			 echo "<tr>";
			 echo "<td style=\" text-align:right; width:150;\">";

			 
			 echo "<script type=\"text/javascript\">				
function abrir(URL) {  var width = 800;  var height = 320;  var left = 200;  var top = 200;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>";
		
		
		   // HTML <a href="javascript:abrir('http://codigofonte.net/');">Clique Aqui</a>
		
			 
			
		
		if($_SESSION["Acesso"] == 'Bolsistas'
		
		and ($_SESSION['Acesso2'] == $dado_adm["tipo_contrato"] 
		
		    or $_SESSION['Acesso3'] == $dado_adm["tipo_contrato"] 
		    or $_SESSION['Acesso4'] == $dado_adm["tipo_contrato"] 

		
		
		)){	 
			
		
		echo "<a href=javascript:abrir('"; 
		echo "../../sistema/Contratos/eventual/editar_eventual.php?id=";
		echo $dado_adm['id'];
		echo "')>";
		echo " ALTERAR  ";  echo "</a>";	echo "   ";} 

			 
			 
			 
			 
			 echo "</td>";
			 
			$cormas = "#F00";
			
			
			echo "<td style=\" color:$cormas; width:180;\">&nbsp;FUNCIONÁRIO EVENTUAL</td>";
			
		    echo "</tr>";

	}	
	
	
				 if($dado_adm['tipo_contrato'] == 'Mapa' and $dado_adm['data_saida_ev'] <> '0000-00-00'){
			 
			 echo "<tr>";
			 echo "<td style=\" text-align:right; width:150;\">";
			
			
			
			echo "<script type=\"text/javascript\">				
function abrir(URL) {  var width = 800;  var height = 320;  var left = 200;  var top = 200;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>";
		
		
		   // HTML <a href="javascript:abrir('http://codigofonte.net/');">Clique Aqui</a>
		
			 
			
		if($_SESSION["Acesso"] == 'Mapa'
		

		
		and ($_SESSION['Acesso2'] == $dado_adm["tipo_contrato"] 
		
		    or $_SESSION['Acesso3'] == $dado_adm["tipo_contrato"] 
		    or $_SESSION['Acesso4'] == $dado_adm["tipo_contrato"] 
			or $dado_adm["tipo_contrato"] == 'Estagiarios')){	 
			
		
		echo "<a href=javascript:abrir('"; 
		echo "../../sistema/Contratos/eventual/editar_eventual.php?id=";
		echo $dado_adm['id'];
		echo "')>";
		echo " ALTERAR  ";  echo "</a>";	echo "   "; }

			
			
			 echo "</td>";
			 
			$cormas = "#F00";
			
			
			echo "<td style=\" color:$cormas; width:180;\">&nbsp;FUNCIONÁRIO EVENTUAL</td>";
			
		    echo "</tr>";

	}	
		
	
	
				 if($dado_adm['tipo_contrato'] == 'Estagiarios' and $dado_adm['data_saida_ev'] <> '0000-00-00'){
			 
			 echo "<tr>";
			 echo "<td style=\" text-align:right; width:150;\">";
			
			
			
			echo "<script type=\"text/javascript\">				
function abrir(URL) {  var width = 800;  var height = 320;  var left = 200;  var top = 200;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>";
		
		
		   // HTML <a href="javascript:abrir('http://codigofonte.net/');">Clique Aqui</a>
		
			 
			
		if($_SESSION["Acesso"] == 'Mapa'
		

		
		and ($_SESSION['Acesso2'] == $dado_adm["tipo_contrato"] 
		
		    or $_SESSION['Acesso3'] == $dado_adm["tipo_contrato"] 
		    or $_SESSION['Acesso4'] == $dado_adm["tipo_contrato"] 
			or $dado_adm["tipo_contrato"] == 'Estagiarios')){	 
			
		
		echo "<a href=javascript:abrir('"; 
		echo "../../sistema/Contratos/eventual/editar_eventual.php?id=";
		echo $dado_adm['id'];
		echo "')>";
		echo " ALTERAR  ";  echo "</a>";	echo "   "; }

			
			
			 echo "</td>";
			 
			$cormas = "#F00";
			
			
			echo "<td style=\" color:$cormas; width:180;\">&nbsp;FUNCIONÁRIO EVENTUAL</td>";
			
		    echo "</tr>";

	}	
	
	
//===============================================================================================	
	

	
					 if($dado_adm['tipo_contrato'] == 'Bolsistas' and $dado_adm['data_saida_ev'] == '0000-00-00'){
			 
			 echo "<tr>";
			 echo "<td style=\" text-align:right; width:150;\">";
			
			
			
			echo "<script type=\"text/javascript\">				
function abrir(URL) {  var width = 800;  var height = 320;  var left = 200;  var top = 200;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>";
		
		
		   // HTML <a href="javascript:abrir('http://codigofonte.net/');">Clique Aqui</a>
		
			 
			
		if($_SESSION["Acesso"] == 'Bolsistas'
		
		and ($_SESSION['Acesso2'] == $dado_adm["tipo_contrato"] 
		
		    or $_SESSION['Acesso3'] == $dado_adm["tipo_contrato"] 
		    or $_SESSION['Acesso4'] == $dado_adm["tipo_contrato"] 

		
		
		)){	 
			
		
		echo "<a href=javascript:abrir('"; 
		echo "../../sistema/Contratos/eventual/editar_eventual.php?id=";
		echo $dado_adm['id'];
		echo "')>";
		echo " ALTERAR  ";  echo "</a>";	echo "   "; }

			
			
			 echo "</td>";
			 
			$cormas = "#00F";
			
			
			echo "<td style=\" color:$cormas; width:180;\">&nbsp;FUNCIONÁRIO BOLSISTA</td>";
			
		    echo "</tr>";

	}
	

					 if($dado_adm['tipo_contrato'] == 'Terceirizados' and $dado_adm['data_saida_ev'] == '0000-00-00'){
			 
			 echo "<tr>";
			 echo "<td style=\" text-align:right; width:150;\">";
			
			
			
			echo "<script type=\"text/javascript\">				
function abrir(URL) {  var width = 800;  var height = 320;  var left = 200;  var top = 200;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>";
		
		
		   // HTML <a href="javascript:abrir('http://codigofonte.net/');">Clique Aqui</a>
		
			 
			
					  if( $_SESSION['id'] == $dado_adm["fiscal"]
		   
		or($_SESSION['id'] == $dado_adm["fiscal_sub_1"]) 
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_2"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_3"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_4"])){		 
			
		
		echo "<a href=javascript:abrir('"; 
		echo "../../sistema/Contratos/eventual/editar_eventual.php?id=";
		echo $dado_adm['id'];
		echo "')>";
		echo " ALTERAR  ";  echo "</a>";	echo "   "; }

			
			 
			 echo "</td>";
			 
			$cormas = "#00F";
			
			
			echo "<td style=\" color:$cormas; width:180;\">&nbsp;FUNCIONÁRIO EFETIVO</td>";
			
		    echo "</tr>";

	}


										 		if(($dado_adm["n_contrato"] == 'Mapa')
		
		or ($dado_adm["n_contrato"] == 'Mapa')
		or ($dado_adm["n_contrato"] == 'Mapa') 
		or ($dado_adm["n_contrato"] == 'Mapa') and $dado_adm['data_saida_ev'] == '0000-00-00'){	
			 
			 echo "<tr>";
			 echo "<td style=\" text-align:right; width:150;\">";
			
			
			echo "<script type=\"text/javascript\">				
function abrir(URL) {  var width = 800;  var height = 320;  var left = 200;  var top = 200;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>";
		
		
		   // HTML <a href="javascript:abrir('http://codigofonte.net/');">Clique Aqui</a>
		
			 
			
		if($_SESSION["Acesso"] == 'Mapa'
		

		
		and ($_SESSION['Acesso2'] == $dado_adm["tipo_contrato"] 
		
		    or $_SESSION['Acesso3'] == $dado_adm["tipo_contrato"] 
		    or $_SESSION['Acesso4'] == $dado_adm["tipo_contrato"] 
			or $dado_adm["tipo_contrato"] == 'Estagiarios')){
			
		
		echo "<a href=javascript:abrir('"; 
		echo "../../sistema/Contratos/eventual/editar_eventual.php?id=";
		echo $dado_adm['id'];
		echo "')>";
		echo " ALTERAR  ";  echo "</a>";	echo "   ";} 

			
			
			 echo "</td>";
			 
			$cormas = "#00F";
			
			
			echo "<td style=\" color:$cormas; width:180;\">&nbsp;SERVIDOR DO MAPA</td>";
			
		    echo "</tr>";

	}
										 		
												
												if(($dado_adm["n_contrato"] == 'Estagiarios')
		
		or ($dado_adm["n_contrato"] == 'Estagiarios')
		or ($dado_adm["n_contrato"] == 'Estagiarios') 
		or ($dado_adm["n_contrato"] == 'Estagiarios') and $dado_adm['data_saida_ev'] == '0000-00-00'){	

			 
			 echo "<tr>";
			 echo "<td style=\" text-align:right; width:150;\">";
			 
			 
			 echo "<script type=\"text/javascript\">				
function abrir(URL) {  var width = 800;  var height = 320;  var left = 200;  var top = 200;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>";
		
		
		   // HTML <a href="javascript:abrir('http://codigofonte.net/');">Clique Aqui</a>
		
			 
			
		if($_SESSION["Acesso"] == 'Mapa'
		

		
		and ($_SESSION['Acesso2'] == $dado_adm["tipo_contrato"] 
		
		    or $_SESSION['Acesso3'] == $dado_adm["tipo_contrato"] 
		    or $_SESSION['Acesso4'] == $dado_adm["tipo_contrato"] 
			or $dado_adm["tipo_contrato"] == 'Estagiarios')){	 
			
		
		echo "<a href=javascript:abrir('"; 
		echo "../../sistema/Contratos/eventual/editar_eventual.php?id=";
		echo $dado_adm['id'];
		echo "')>";
		echo " ALTERAR  ";  echo "</a>";	echo "   "; }

			 
			 
			 echo "</td>";
			 
			$cormas = "#00F";
			
			
			echo "<td style=\" color:$cormas; width:180;\">&nbsp;FUNCIONÁRIO ESTÁGIARIO</td>";
			
		    echo "</tr>";

	}



		


	
	
	
		?>
			
    
 		<td style=" text-align:right; width:150px;">Telefone: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['telefone'];?></td>
		
		
		
		
		
		
		
 	</tr>
    <tr>
    
    
             	<tr>
    
 		<td style=" text-align:right; width:150px;">Celular: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['celular'];?></td>
 	</tr>
    <tr>
    
    
    
    
            	<tr>
    
 		<td style=" text-align:right; width:150px;">Data de Nascimento: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['data_nasc'];?></td>
 	</tr>
    <tr>
	
	
	
	            	<tr>
    
 		<td style=" text-align:right; width:150px;">Inicio no LANAGRO: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['ini_lanagro'];?></td>
 	</tr>
    <tr>
  
  
  
  	            	<tr>
    
 		<td style=" text-align:right; width:150px;">Data de admissão: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['data_adm'];?></td>
 	</tr>
    <tr>
  
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Email: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['email'];?></td>
 	</tr>
    <tr>
  
  
  
  
  <tr>
       <td style=" text-align:right; width:150px;">Estado:</td>
       <td style=" text-align:left; width:250px;">

			<?php
				$sql = "SELECT cod_estados, sigla
						FROM estados
						ORDER BY sigla";
						
				$res = mysql_query( $sql );
				while ( $row = mysql_fetch_assoc( $res ) )
 if ($row ["cod_estados"] == $dado_adm['Estado']){
	 
	   
echo $row ["sigla"]; }
 ?>
         </td>
    </tr>
  





<tr>
       <td style=" text-align:right; width:150px;">Cidade:</td>
       <td style=" text-align:left; width:250px;">
              
                   <?php
				   
				  
				  
				$sql = "SELECT cod_cidades, nome
						FROM cidades
						ORDER BY nome";
						
				$res = mysql_query( $sql );
				while ( $row = mysql_fetch_assoc( $res ) )
					

 if ($row ["cod_cidades"] == $dado_adm['Cidade']){  
echo utf8_encode($row['nome']); }
 ?>
          </td>	
              </tr> 
  
  
  
  
  
  
         	<tr>
    
 		<td style=" text-align:right; width:150px;">Naturalidade: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['natura'];?></td>
 	</tr>
    <tr>
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Endereco: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['endereco'];?></td>
 	</tr>
    <tr>
  
  
         	<tr>
    
 		<td style=" text-align:right; width:150px;">Número: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Numero'];?></td>
 	</tr>
    <tr>
    
    
             	<tr>
    
 		<td style=" text-align:right; width:150px;">Complemento: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Complemento'];?></td>
 	</tr>
    <tr>
    
    
    
                 	<tr>
    
 		<td style=" text-align:right; width:150px;">Bairro: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Bairro'];?></td>
 	</tr>
    <tr>
  
  

  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Cargo: </td>
        <td style=" text-align:left; width:250px;"><?php 
		
				$linhaid=$dado_adm['cargo']; 
			$linha_adm4 = "SELECT * FROM tab_cargo where id='$linhaid'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado4 = mysql_query($linha_adm4,$conexao);
			while ( $dado_adm4 = mysql_fetch_array($resultado4)){

		
			 
		
			echo $dado_adm4['cargo'];
		
}
		
		?></td>
 	</tr>
    
    
    
    
    
    
    
  <tr>
    
 		<td style=" text-align:right; width:150px;">Custo para o LANAGRO: </td>
        <td style=" text-align:left; width:250px;"><?php 
		
				$linhaid=$dado_adm['cargo']; 
			$linha_adm4 = "SELECT * FROM tab_cargo where id='$linhaid'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado4 = mysql_query($linha_adm4,$conexao);
			while ( $dado_adm4 = mysql_fetch_array($resultado4)){

		
			 
		
			echo $dado_adm4['valor_cargo'];
		
}
		
		?></td>
 	</tr>  
    
    
    
    
    
    
    
    <tr>
    
    
           	<tr>
    
 		<td style=" text-align:right; width:150px;">Salario Base: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['sal_base'];?></td>
 	</tr>
    <tr>
  
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Vínculo: </td>
        <td style=" text-align:left; width:250px;"><?php echo $_SESSION["tipo_contrato"]=$dado_adm['tipo_contrato'];?></td>
       
 	</tr>
    <tr>
  

       	<tr>
    
 		<td style=" text-align:right; width:150px;">Sexo: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['sexo'];?></td>
 	</tr>
    <tr>
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Escolaridade: </td>
        <td style=" text-align:left; width:250px;"><?php 
		
		
		
		
		
						$linhaid=$dado_adm['escolaridade']; 
			$linha_adm5 = "SELECT * FROM tab_escolaridade where id_esc='$linhaid'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado5 = mysql_query($linha_adm5,$conexao);
			while ( $dado_adm5 = mysql_fetch_array($resultado5)){

		
			 
			
			echo $dado_adm5['escolaridade'];
		
}
		

		
		?></td>
 	</tr>
    <tr>
    
    
    
           	<tr>
    
 		<td style=" text-align:right; width:150px;">Formação: </td>
        <td style=" text-align:left; width:250px;"><?php 
		
		
						$linhaid=$dado_adm['formacao']; 
			$linha_adm6 = "SELECT * FROM tab_formacao where id_form='$linhaid'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado6 = mysql_query($linha_adm6,$conexao);
			while ( $dado_adm6 = mysql_fetch_array($resultado6)){

		
			 
		
			echo $dado_adm6['formacao'];
		
}
		
		
		?></td>
 	</tr>
    <tr>
  
  
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Filhos: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['filhos'];?></td>
 	</tr>
    <tr>

  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Unidade: </td>
        <td style=" text-align:left; width:250px;"><?php  $_SESSION["unidade"] = $dado_adm['unidade'];
		
		
		
		
		
						$linhaid=$dado_adm['unidade']; 
			$linha_adm7 = "SELECT * FROM tab_unidade where id_unidade='$linhaid'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado7 = mysql_query($linha_adm7,$conexao);
			while ( $dado_adm7 = mysql_fetch_array($resultado7)){

		
		
			echo $dado_adm7['unidade'];
			
}


		
		?></td>
         
 	</tr>









    <tr>
<?php  
  
$_SESSION["Ativo"] = $dado_adm['Ativo'];

 ?>   

		<?php

	 if($_SESSION["tipo_contrato"] == 'Mapa' ){
		 
		echo "<tr>";
		echo '<td style=" text-align:right; width:150px;">'; echo "Cargo Chefia:"; echo "</td>";
        echo '<td style=" text-align:left; width:250px;">'; 

		
				$linhaid=$dado_adm['cargo_chefia'];
			$linha_adm4 = "SELECT * FROM tab_cargo_chefia where id_chefia='$linhaid'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado4 = mysql_query($linha_adm4,$conexao);
			while ( $dado_adm4 = mysql_fetch_array($resultado4)){

		
			 
		
			echo $dado_adm4['cargo_chefia'];
		
}
		

		
		echo "</td>";
    	echo "</tr>"; 
		
		}
		
		

		
		
		
		?>


        		<?php

	 if($_SESSION["tipo_contrato"] == 'Bolsistas' ){
		 
		echo "<tr>";
		echo '<td style=" text-align:right; width:150px;">'; echo "Tipo de Bolsa:"; echo "</td>";
        echo '<td style=" text-align:left; width:250px;">'; 

		
		
		
		
		
						$linhaid=$dado_adm['bolsista'];
			$linha_adm4 = "SELECT * FROM tab_bolsista where id_bolsa='$linhaid'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado4 = mysql_query($linha_adm4,$conexao);
			while ( $dado_adm4 = mysql_fetch_array($resultado4)){

		
			 
		
			echo $dado_adm4['bolsista'];
		
}

		
		
		
		
		
		
		echo "</td>";
    	echo "</tr>";
		
		}?>

    </tr>





	<tr>
    
    	<td colspan="2" style="height:25;"> <blockquote>
    	  <p>&nbsp;</p>
    	  <p><b>Observações:  </b><br />
    	    <br />		
    	    <?php 

$texto = $dado_adm['obs'];
$novo_texto = wordwrap( $texto, 50, "\n", 1);
echo "$novo_texto\n";

?>
    	    <br />	
  	    </p>
  	    </blockquote></td>
  </tr>



       <?php
	   
	   
$_SESSION["fiscal"]  		= $dado_adm['fiscal'];
$_SESSION["fiscal_sub_1"]	= $dado_adm['fiscal_sub_1'];
$_SESSION["fiscal_sub_2"] 	= $dado_adm['fiscal_sub_2'];
$_SESSION["fiscal_sub_3"] 	= $dado_adm['fiscal_sub_3'];
$_SESSION["fiscal_sub_4"] 	= $dado_adm['fiscal_sub_4'];	   
	   
 $_SESSION['id_fun'] = $dado_adm['id'];	
 $_SESSION['n_contrato_Fun'] = $dado_adm['n_contrato'];
 $_SESSION["n_contrato"] = $dado_adm['n_contrato'];
 $_SESSION['nome_funcionario'] = $dado_adm['nome_funcionario'];
 $_SESSION['Cidade'] = $dado_adm['Cidade'];
 $_SESSION['celular'] = $dado_adm['celular'];		
 $_SESSION['Estado'] = $dado_adm['Estado'];		   
 $_SESSION['formacao'] = $dado_adm['formacao'];
 $_SESSION["telefone"] = $dado_adm['telefone'];
 $_SESSION["data_nasc"] = $dado_adm['data_nasc'];
 $_SESSION["ini_lanagro"] = $dado_adm['ini_lanagro'];
 $_SESSION["email"] = $dado_adm['email'];
 $_SESSION["nome"];
 $_SESSION["natura"] = $dado_adm['natura'];
 $_SESSION["endereco"] = $dado_adm['endereco'];
 $_SESSION["Numero"] = $dado_adm['Numero'];
 $_SESSION["Complemento"] = $dado_adm['Complemento'];
 $_SESSION["Bairro"] = $dado_adm['Bairro'];
 $_SESSION["cargo"] = $dado_adm['cargo'];
 $_SESSION["tipo_contrato"] = $dado_adm['tipo_contrato'];
 $_SESSION["sexo"] = $dado_adm['sexo'];
 $_SESSION["escolaridade"] = $dado_adm['escolaridade'];
 $_SESSION["filhos"] = $dado_adm['filhos'];
 $_SESSION["unidade"] = $dado_adm['unidade'];
 $_SESSION["tipo_contrato"] = $dado_adm['tipo_contrato'];
 $_SESSION["obs"] = $dado_adm['obs'];
 
 $_SESSION["data_entrada_ev"] = $dado_adm['data_entrada_ev'];
 $_SESSION["data_saida_ev"] = $dado_adm['data_saida_ev'];
 

?>  





          <b><?php include('..\validacao\menu\funcionarios\menu_visualiza_fun_rodape.php');?></b>

  </table>
</form>
</body>
</html>
