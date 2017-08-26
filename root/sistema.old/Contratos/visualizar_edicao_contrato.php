<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


        <script>

                        function verificaEmpr(emp){
								
                                var div = document.getElementById('div'+ emp.id);

                                if (emp.checked == true)                
                                        div.style.display = 'block';
                                else
                                        div.style.display = 'none';
                        }

 function mostrar(){
	 document.getElementById('nova_obs').checked="true";
	 
 }

                </script>


</head>
<body link="#063" vlink="#063" alink="#063">
<p>


<?php include('..\validacao\somar_data.php');?>


<?php
	//echo "identificador(id):";
	//echo $_GET['id'];
	
	
$_SESSION["Acesso"];
$_SESSION["Acesso2"];
$_SESSION["Acesso3"];
$_SESSION["Acesso4"];
	
	
?>

<?php
require '..\validacao\class_conexao2.php';

$objetoConexao = new conexao();

$objetoConexao->defineServidor("localhost");
$objetoConexao->defineUsuario("root");
$objetoConexao->defineSenha("usbw");

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




?>
</p>




<?php




$_SESSION['id_contrato']	= $dado_adm['id'];
$_SESSION["n_processo"]  	= $dado_adm['n_processo'];
$_SESSION["fim_contrato"]  	= $dado_adm['fim_contrato'];
$_SESSION["n_contrato"] 	= $dado_adm['n_contrato'];
$_SESSION["descricao"] 		= $dado_adm['descricao'];
$_SESSION['empresa']	  	= $dado_adm['empresa'];
$_SESSION["valor_contrato"] = $dado_adm['valor_contrato'];
$_SESSION["valor_mensal"] 	= $dado_adm['valor_mensal'];
$_SESSION['vigencia']	  	= $dado_adm['vigencia'];
$_SESSION["fiscal"]  		= $dado_adm['fiscal'];
$_SESSION["fiscal_sub_1"]	= $dado_adm['fiscal_sub_1'];
$_SESSION["fiscal_sub_2"] 	= $dado_adm['fiscal_sub_2'];
$_SESSION["fiscal_sub_3"] 	= $dado_adm['fiscal_sub_3'];
$_SESSION["fiscal_sub_4"] 	= $dado_adm['fiscal_sub_4'];
$_SESSION["Ativo"] 			= $dado_adm['Ativo'];
$_SESSION["id"];
$_SESSION["nome"];

?>


<form id="form2" name="form2" method="post" runat="server" action="processa_edicao2_contrato.php">
  
 <center>
<table width="866" border="0" cellpadding="0" cellspacing="0" style="width:750px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">

	<tr>
    
    	<td colspan="2" style="height:25;">&nbsp;        </td>
	</tr>
    
    
    <tr>
    
    
    	<td colspan="2" style="font-size:15px; color:#060;">
        <hr style=" width:750px; text-align:center;">
        <p style=" margin:10px; text-align:justify; "> 
        Contrato: <b>
	<?php 
	$contrato= $dado_adm['n_contrato'];
	$id= $dado_adm['id'];
	 echo "<a  href='../validacao/anexo_contrato.php?id=".$id."')'>"; echo ".$contrato."; echo"</a>";?>
       <?php $n_contrato=$_SESSION['n_contrato'] = $dado_adm['n_contrato'];?>
                                                                   
      
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        
        
         <?php  
		 
		 		 			
					if($_SESSION["Acesso"] == 'Terceirizados' 
					


					   
					   and ($_SESSION['id'] == $_SESSION["fiscal_sub_1"] 
		
		or $_SESSION['id'] == $_SESSION["fiscal_sub_2"]
		or $_SESSION['id'] == $_SESSION["fiscal_sub_3"]
		or $_SESSION['id'] == $_SESSION["fiscal_sub_4"]
		or $_SESSION['id'] == $_SESSION["fiscal"])) {		
							

		 echo "<script type=\"text/javascript\">				
function abrir(URL) {  var width = 430;  var height = 480;  var left = 400;  var top = 200;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>";
		  
		   
		  
			 echo "<script type=\"text/javascript\">				
function abrir2(URL) {  var width = 800;  var height = 500;  var left = 300;  var top = 100;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>"; 	  
		  
		  
		  
		echo "<a href=javascript:abrir('"; 
		echo "../Cargos/cadastrar_cargos.php";

		echo "')>";
		echo '<span data-tooltip class="has-tip" title="Inseri cagos a esse contrato">Cadastrar cargos</span>';
		echo "</a>";	echo "   ";   
		
		
		
		
		
		
		
		echo "   ";  echo "   ";  
		echo "<a href=javascript:abrir2('"; 
		echo "../Cargos/lista_cargos.php";

		echo "')>";
		echo '<span data-tooltip class="has-tip" title="Mostra todos os cargos vinculados ao contrato">Ver cargos</span>';
		echo "</a>";	echo "   ";   	}
		

		  
		  ?>

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
			
			
			$linhaid=$dado_adm['empresa'];
			$linha_adm3 = "SELECT * FROM tab_empresa where id='$linhaid'";
			
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
								 ?>
    	    
    	    
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
 		  <p><b>Valor do Contrato R$:</b>
 		    <?php echo $dado_adm['valor_contrato'];?></p>
	    </blockquote></td>
 	</tr>


   	<tr>
    
 		<td colspan="2" style="height:25;"><blockquote>
 		  <p><b>Valor Total mensal  R$:</b>
 		    <?php echo $dado_adm['valor_mensal'];?></p>
	    </blockquote></td>
 	</tr>
    
    
    <tr>
  
  
  

       <?php  
 		 				if($_SESSION["Acesso"] == 'Terceirizados' and $dado_adm["tipo_contrato"] <> 'Bolsistas' and $dado_adm["tipo_contrato"] <> 'Mapa' and $dado_adm["tipo_contrato"] <> 'Estagiarios'){       
        

include('..\Contratos\inclui_renovacao.php');

		}
		
		
 		 				if($_SESSION["Acesso"] == 'Bolsistas'  and $dado_adm["tipo_contrato"] <> 'Bolsistas' and $dado_adm["tipo_contrato"] <> 'Mapa' and $dado_adm["tipo_contrato"] <> 'Estagiarios'){       
        

include('..\Contratos\inclui_renovacao.php');

		}
			
		
		
		
				
 		 				if($_SESSION["Acesso"] == 'Consulta' and $dado_adm["tipo_contrato"] <> 'Bolsistas' and $dado_adm["tipo_contrato"] <> 'Mapa' and $dado_adm["tipo_contrato"] <> 'Estagiarios'){       
        

include('..\Contratos\inclui_renovacao.php');

		}		

?>









  </table>

</center>
  </p>

</form>
<hr style=" width:820px; text-align:center;">


 <?php
 
//--------------------------------------------------------------------------------------------------------------------- 
 
 
 		 						  if( $_SESSION['id'] == $dado_adm["fiscal"]
		   
		or($_SESSION['id'] == $dado_adm["fiscal_sub_1"]) 
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_2"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_3"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_4"])
		
		  
		 and( $dado_adm["tipo_contrato"] == 'Terceirizados')
		 
		 
		 
		 
		 
		 
		 ){      
        

echo '<tr>';
echo '<th  align="left" scope="row" ><label for="nova_obs">Iserir nova Observação: </label>';
      
       echo '<!--<input name="nova_obs" type="checkbox" value="nova_obs" id="nova_obs" onclick="verificaEmpr(this);" />--> </th>';
    echo '<tr>';
      echo '<td align="left">';

     

       include('forum.php'); 
         

        
         echo '</td>';
           echo '</tr>';
               echo '</tr>';

		}


echo '<tr>';

echo '<td align="left">';

//---------------Conecta no banco---------------------------
date_default_timezone_set('America/Sao_Paulo');
$recado = @$_POST['recado'];
$nome = $_SESSION["nome"];
$n_contrato = $_SESSION["n_contrato"];
$hora = date("H:j:s");
$data = date("Y-m-d");
$data = $data." ".$hora;
$con = mysql_connect("localhost","root","usbw");
mysql_select_db("lanagro_rs");


//---------------------Iseri--------------------------------
if (isset($recado)) {
$incluir = "INSERT INTO recados
            (nome,recado,data_postagem,n_contrato)
			 VALUES
			 ('$nome','$recado','$data','$n_contrato')";
$result = mysql_query($incluir);}




//--------------------Consulta-----------------------------

$consulta = "SELECT nome,recado,data_postagem
             FROM recados where n_contrato='{$_SESSION['n_contrato']}' ORDER BY data_postagem DESC";
$result = mysql_query($consulta);


//-------------- Imprimi resultados-------------------------

while($linha=mysql_fetch_assoc($result)){


	
echo "Nome: ";   echo ($linha['nome']); echo "<br>";
$texto = $linha['recado'];
$novo_texto = wordwrap( $texto, 20, "\n", 1);
echo "Observações: "; echo "$novo_texto\n";
echo "<br>";
echo "Data da Postagem: ";echo ($linha['data_postagem']);
echo '<hr style=" width:820px; text-align:center;">';
}

         echo '</td>';
           echo '</tr>';
		   
		   
		   
		   
		   
		   
		   

?>


      <tr align="center"><td width="750" valign="bottom" style=" text-align:center;">

          <p><b>
            <?php include('..\validacao\menu\contratos\menu_contratos_rodape.php');?>
          </b></p></td>
    </tr>


</body>
</html>

