<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body link="##063" vlink="##063" alink="##063">
<p>


<?php include('C:\wamp\www\sistema\validacao\somar_data.php');?>


<?php
	//echo "identificador(id):";
	//echo $_GET['id'];
?>

<?php
require 'C:\wamp\www\sistema\validacao\class_conexao2.php';

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
		$sql = "select * from contratos where id=$idGet";

		//echo "sql:"; //echo $sql;
		$resultado = $objetoConexao->consulta($sql);
		if ($resultado == false){
			echo "nenhum resultado valido!";
		} else {
			$dado_adm = mysql_fetch_array($resultado);
		}
	}
}

$_SESSION["fiscal"]  = $dado_adm['fiscal'];
$_SESSION["fiscal_sub_1"] = $dado_adm['fiscal_sub_1'];
$_SESSION["fiscal_sub_2"] = $dado_adm['fiscal_sub_2'];
$_SESSION["fiscal_sub_3"] = $dado_adm['fiscal_sub_3'];
$_SESSION["fiscal_sub_4"] = $dado_adm['fiscal_sub_4'];




?>
</p>







<form id="form2" name="form2" method="post" action="processa_edicao2_contrato.php">
  
 <center>
<table width="866" border="0" align="center" cellpadding="0" cellspacing="0" style="width:750px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">

	<tr>
    
    	<td colspan="2" style="height:25;">&nbsp;        </td>
	</tr>
    
    
    <tr>
    
    
    	<td colspan="2" style="font-size:15px; color:#060;">
        <hr style=" width:750px; text-align:center;">
        <p style=" margin:10px; text-align:justify; "> 
        Contrato: <b>
		<?php echo $dado_adm['n_contrato'];?><b>
       <?php $n_contrato=$_SESSION['n_contrato'] = $dado_adm['n_contrato'];?>
                                                                   
        <hr style=" width:750px; text-align:center;"></p>        </td>
        
 
 
 	<tr>
    
    	<td colspan="2" style="height:25;"><blockquote>
    	  <p><b>Número do Processo:</b>  <?php echo $dado_adm['n_processo'];?></p>
  	  </blockquote></td>
	</tr>

    
    
    
	<tr>
    
    	<td colspan="2" style="height:25;"> <blockquote>
    	  <p><b>Descrição:  </b><br />
    	    <br />		
    	    <?php 

$texto = $dado_adm['descricao'];
$novo_texto = wordwrap( $texto, 50, "\n", 1);
echo "$novo_texto\n";

?>
    	    <br />	
  	    </p>
  	  </blockquote></td>
  </tr>
		
		
		
	


        
        </p></td>
 	</tr>
    <tr>
  
  
  
  
   	<tr>
    
    	<td colspan="2" style="height:25;"><blockquote>
    	  <p><b>Empresa: </b>
    	    <?php
	
			echo "<a href='"; 
			echo "http://localhost/sistema/Empresas/visualizar_edit_empresa.php?id=";
			echo $dado_adm['id'];
			echo "'>";
			echo $dado_adm['empresa']; echo "</a>";
			echo "</td>"; ?>
    	    
    	    <?php $empresa=$_SESSION['empresa'] = $dado_adm['empresa'];?>
  	    </p>
  	  </blockquote></td>
	</tr>
  



 	<tr>
    
    	<td colspan="2" style="height:25;"><blockquote>
    	  <p><b>Vínculo</b>:  <?php echo $dado_adm['tipo_contrato'];?>
    	    <?php $tipo_contrato=$_SESSION['tipo_contrato'] = $dado_adm['tipo_contrato'];?>
  	    </p>
  	  </blockquote></td>
	</tr>

  
  
   	<tr>
    
 		<td colspan="2" style="height:25;"><blockquote>
 		  <p><b>Valor do Contrato:</b>
 		    <?php echo $dado_adm['valor_contrato'];?></p>
	    </blockquote></td>
 	</tr>


   	<tr>
    
 		<td colspan="2" style="height:25;"><blockquote>
 		  <p><b>Valor mensal:</b>
 		    <?php echo $dado_adm['valor_mensal'];?></p>
	    </blockquote></td>
 	</tr>
    
    
    <tr>
  
  
  
<tr>
    
 		<td colspan="2" style="height:25;"><blockquote>
 		  <p><b>Possivel Vigência:</b>
 		    
 		    <?php echo $dado_adm['vigencia'];?> à <b><?php echo  $fim = somar_data($dado_adm['vigencia'], 0, 0, 5); ?></b>
 		    </p>
	    </blockquote></td>
</tr>




		</br>
        
        
        
        
        
        <?php 	
			
			$idGet3 = $_GET['id'];
			$linha_adm3 = "SELECT * FROM contratos WHERE id = $idGet3";



 					include('C:\wamp\www\sistema\validacao\dbconexao.php');

 					$resultado3 = mysql_query($linha_adm3,$conexao);
 
 			?> 
			
		
			
			  <?php

				while ( $dado_adm3 = mysql_fetch_array($resultado3))
				
				 


				{
 					
					if (!empty($dado_adm3['fiscal_sub_1'])) {
						
   				 		echo "<tr style=\" font-size:11;\">";
 						echo "<td style=\" height:25;\">"; echo "<blockquote>";
						echo "<b> Fiscal Substituto 1 - </b>"; echo $dado_adm3['fiscal_sub_1'];
						echo "</blockquote>"; 
						echo "</td>";
					}		
					
				
					if (!empty($dado_adm3['fiscal_sub_2'])) {
   				 		echo "<tr style=\" font-size:11;\">";
 						echo "<td style=\" height:25;\">"; echo "<blockquote>";
						echo "<b> Fiscal Substituto 2 - </b>"; echo $dado_adm3['fiscal_sub_2'];
						echo "</blockquote>"; 
						echo "</td>";
				}
				
					if (!empty($dado_adm3['fiscal_sub_3'])) {
   				 		echo "<tr style=\" font-size:11;\">";
 						echo "<td style=\" height:25;\">"; echo "<blockquote>";
						echo "<b> Fiscal Substituto 3 - </b>"; echo $dado_adm3['fiscal_sub_3'];
						echo "</blockquote>"; 
						echo "</td>";
					}
					if (!empty($dado_adm3['fiscal_sub_4'])) {
   				 		echo "<tr style=\" font-size:11;\">";
 						echo "<td style=\" height:25;\">"; echo "<blockquote>";
						echo "<b> Fiscal Substituto 4 - </b>"; echo $dado_adm3['fiscal_sub_4'];
						echo "</blockquote>"; 
						echo "</td>";

 					}
				}
 					
					?>	
        
        
        
        
        
<tr>
 		<td colspan="2" style="height:25; color:#060; font-size:13px;"><blockquote>
 		  <p><b>Possíveis Renovações:</b></p>
	    </blockquote></td>
</tr>        
        
        
        
        
<tr>
        <?php 	
			$linha_adm4 = "SELECT * FROM  contratos,renovacao_01 WHERE renovacao_01.n_contrato = contratos.n_contrato AND renovacao_01.n_contrato = '{$_SESSION['n_contrato']}'";


 					include('C:\wamp\www\sistema\validacao\dbconexao.php');

 					$resultado4 = mysql_query($linha_adm4,$conexao);
 			?>

			  <?php

				while ( $dado_adm4 = mysql_fetch_array($resultado4))

				{

		 $_SESSION['renovacao_01'] =$dado_adm4['renovacao_01']; 
		 $data = date("Y-m-d");
		 
		 

		  if($dado_adm4['renovacao_01'] < $data ){
			
			$cormas5 = "#F00";
			$vencido = " Vencido";
			
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas5;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 01 - ";
		  			echo "<b>"; echo $dado_adm4['renovacao_01'] ;
		  			echo $vencido;
		  }
		  

			  if($dado_adm4['renovacao_01']  >= $data ){

			
					$cormas4 = "#00F";
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 01 - ";
		  			echo "<b>"; echo $dado_adm4['renovacao_01'];
		  }
		  
		  
		  
		  
		  		  		  		  			  if($dado_adm4['confirmacao_01']  == 'Nao'and ($_SESSION['nome'] == $_SESSION["fiscal_sub_1"] 
		
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_2"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_3"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_4"]
		or $_SESSION['nome'] == $_SESSION["fiscal"])){

			
					$cormas6 = "#996600"; 
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas6;\">"; echo "<blockquote>"; echo "<b>";
					
					
					
					echo "<a href='"; 
					echo "http://localhost/sistema/Contratos/confirma_renovacao/cadastrar_aditivo.php?id=";
					echo $dado_adm['id'];
					echo "'>";
					echo "<b>"; echo " [ Não confirmada ] "; echo "</a>";		
		  }
		  
		  
		  
		  
		  		  		  		  		  			  if($dado_adm4['confirmacao_01']  == 'Sim' ){

			
					$cormas6 = "#996600"; 
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas6;\">"; echo "<blockquote>"; echo "<b>";

					echo "<b>"; echo " [ Confirmada ] ";	
		  }
		  	
		  
				}
				
				

		  ?>
              		    </p>
	    </blockquote></td>
</tr>





<tr>

        <?php 	
						$linha_adm4 = "SELECT * FROM  contratos,renovacao_02 WHERE renovacao_02.n_contrato = contratos.n_contrato AND renovacao_02.n_contrato = '{$_SESSION['n_contrato']}'";



 					include('C:\wamp\www\sistema\validacao\dbconexao.php');

 					$resultado4 = mysql_query($linha_adm4,$conexao);
 			?>

			  <?php

				while ( $dado_adm4 = mysql_fetch_array($resultado4))

				{
					
		   $_SESSION['renovacao_02'] = $dado_adm4['renovacao_02']; 
		 $data = date("Y-m-d");


		  if($dado_adm4['renovacao_02'] < $data ){
			
			$cormas5 = "#F00";
			$vencido = " Vencido";
			
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas5;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 02 - ";
		  			echo "<b>"; echo $dado_adm4['renovacao_02'];
		  			echo $vencido;
		  }
		  

			  if($dado_adm4['renovacao_02']  >= $data ){

			
					$cormas4 = "#00F";
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 02 - ";
		  			echo "<b>"; echo $dado_adm4['renovacao_02'];
		  }
		  
		  
		  
		  		  		  		  			  if($dado_adm4['confirmacao_02']  == 'Nao' and ($_SESSION['nome'] == $_SESSION["fiscal_sub_1"] 
		
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_2"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_3"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_4"]
		or $_SESSION['nome'] == $_SESSION["fiscal"])){

			
					$cormas6 = "#996600"; 
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas6;\">"; echo "<blockquote>"; echo "<b>";
					
					
					
					echo "<a href='"; 
					echo "http://localhost/sistema/Contratos/confirma_renovacao/cadastrar_aditivo2.php?id=";
					echo $dado_adm['id'];
					echo "'>";
					echo "<b>"; echo " [ Não confirmada ] "; echo "</a>";		
		  }
		  
		  
		  
		  		  		  		  		  		  			  if($dado_adm4['confirmacao_02']  == 'Sim' ){

			
					$cormas6 = "#996600"; 
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas6;\">"; echo "<blockquote>"; echo "<b>";

					echo "<b>"; echo " [ Confirmada ] ";	
		  }
		  	
		  
				}

		  ?>
              		    </p>
	    </blockquote></td>
</tr>



	
    



<tr>

        <?php 	
						$linha_adm4 = "SELECT * FROM  contratos,renovacao_03 WHERE renovacao_03.n_contrato = contratos.n_contrato AND renovacao_03.n_contrato = '{$_SESSION['n_contrato']}'";



 					include('C:\wamp\www\sistema\validacao\dbconexao.php');

 					$resultado4 = mysql_query($linha_adm4,$conexao);
 			?>

          
			  <?php

				while ( $dado_adm4 = mysql_fetch_array($resultado4))

				{
		  $_SESSION['renovacao_03'] =$dado_adm4['renovacao_03']; 
		 $data = date("Y-m-d");



		  if($dado_adm4['renovacao_03'] < $data ){
			
			$cormas5 = "#F00";
			$vencido = " Vencido";
			
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas5;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 03 - ";
		  			echo "<b>"; echo $dado_adm4['renovacao_03'];
		  			echo $vencido;
		  }
		  

			  if($dado_adm4['renovacao_03'] >= $data ){

			
					$cormas4 = "#00F";
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 03 - ";
		  			echo "<b>"; echo $dado_adm4['renovacao_03'] ;
		  }
		  
		  
		  
		  
		  		  		  		  			  if($dado_adm4['confirmacao_03']  == 'Nao' and ($_SESSION['nome'] == $_SESSION["fiscal_sub_1"] 
		
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_2"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_3"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_4"]
		or $_SESSION['nome'] == $_SESSION["fiscal"])){

			
					$cormas6 = "#996600"; 
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas6;\">"; echo "<blockquote>"; echo "<b>";
					
					
					
					echo "<a href='"; 
					echo "http://localhost/sistema/Contratos/confirma_renovacao/cadastrar_aditivo3.php?id=";
					echo $dado_adm['id'];
					echo "'>";
					echo "<b>"; echo " [ Não confirmada ] "; echo "</a>";		
		  }
		  
		  
		  
		  		  		  		  		  		  			  if($dado_adm4['confirmacao_03']  == 'Sim' ){

			
					$cormas6 = "#996600"; 
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas6;\">"; echo "<blockquote>"; echo "<b>";

					echo "<b>"; echo " [ Confirmada ] ";	
		  }	
		  
				}
		  				

		  ?>
              		    </p>
	    </blockquote></td>
</tr>





<tr>

        <?php 	
						$linha_adm4 = "SELECT * FROM  contratos,renovacao_04 WHERE renovacao_04.n_contrato = contratos.n_contrato AND renovacao_04.n_contrato = '{$_SESSION['n_contrato']}'";



 					include('C:\wamp\www\sistema\validacao\dbconexao.php');

 					$resultado4 = mysql_query($linha_adm4,$conexao);
 			?>
          
          			  <?php

				while ( $dado_adm4 = mysql_fetch_array($resultado4))
				
				 


				{
		 $_SESSION['renovacao_04'] =$dado_adm4['renovacao_04'];  
		 $data = date("Y-m-d");



		  if($dado_adm4['renovacao_04'] < $data ){
			
			$cormas5 = "#F00";
			$vencido = " Vencido";
			
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas5;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 04 - ";
		  			echo "<b>"; echo $dado_adm4['renovacao_04'];
		  			echo $vencido;
		  }
		  

			  if($dado_adm4['renovacao_04'] >= $data ){

			
					$cormas4 = "#00F";
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 04 - ";
		  			echo "<b>"; echo $dado_adm4['renovacao_04'];
		  }
		  
		  
		  
		  		  		  		  			  if($dado_adm4['confirmacao_04']  == 'Nao' and ($_SESSION['nome'] == $_SESSION["fiscal_sub_1"] 
		
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_2"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_3"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_4"]
		or $_SESSION['nome'] == $_SESSION["fiscal"])){

			
					$cormas6 = "#996600"; 
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas6;\">"; echo "<blockquote>"; echo "<b>";
					
					
					
					echo "<a href='"; 
					echo "http://localhost/sistema/Contratos/confirma_renovacao/cadastrar_aditivo4.php?id=";
					echo $dado_adm['id'];
					echo "'>";
					echo "<b>"; echo " [ Não confirmada ] "; echo "</a>";		
		  }
		  
		  
		  
		  		  		  		  		  		  			  if($dado_adm4['confirmacao_04']  == 'Sim' ){

			
					$cormas6 = "#996600"; 
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas6;\">"; echo "<blockquote>"; echo "<b>";

					echo "<b>"; echo " [ Confirmada ] ";	
		  }
		  	
		  
				}
		  
		  				

		  ?>
              		    </p>
	    </blockquote></td> 
</tr> 


   


      <tr align="center"><td width="750" valign="bottom" style=" text-align:center;">

          <b><?php include('C:\wamp\www\sistema\validacao\menu\contratos\menu_contratos_rodape.php');?></b>

       </td>
    </tr>

  </table>

</center>
  </p>
  
  <p>&nbsp;</p>
</form>
</body>
</html>

