<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script language="JavaScript" type="text/javascript" src="../../validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="../../validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="../../validacao/funcao_Fun.js"></script>
<script language="JavaScript" type="text/javascript" src="../../validacao/MascaraValidacao.js"></script> 






		<style type="text/css">
			*, html {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				margin: 0px;
				padding: 0px;
				font-size: 12px;
			}

			a {
				color: #064;
			}

			body {
				margin: 10px;
			}
			.carregando{
				color:#666;
				display:none;
			}
		</style>
        
        
        <script>

                        function verificaEmpr(emp){

                                var div = document.getElementById('div'+ emp.id);

                                if (emp.checked == true)                
                                        div.style.display = 'block';
                                else
                                        div.style.display = 'none';
                        }

                </script>


<link rel="stylesheet" 
type="text/css"href="../../forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="../../imput.css" 
/> 

<link rel="stylesheet" 
type="text/css"href="../../validacao/mensagens.css" 
/> 

</head>
<body link="##063" vlink="##063" alink="##063" >
<p>




<?php
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
		$sql = "select * from funcionarios where id=$idGet";

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

  <table width="800" height="100"  border="0" align="center">




      <tr align="center">
    
    
    	<td colspan="2" style="font-size:15px; color:#060;">
        
        <p style=" margin:15px; text-align:center; "> 
     
 <b><?php include('..\..\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b> 
                                                                    
        </p>        </td>
        

	</tr>


        <tr>
        <td colspan="2" style="font-size:15px; color:#060;">
         <hr style=" width:800px; text-align:center;">
         <b>   Histórico de afastamentos do funcionário<b> 
         <hr style=" width:800px; text-align:center;">
         </td>
         </tr>
         
        

<tr align="center">

<?php



 $_SESSION['id_fun'] = $dado_adm['id'];	
 $_SESSION['nome_funcionario'] = $dado_adm['nome_funcionario'];
 $_SESSION['Cidade'] = $dado_adm['Cidade'];	
 $_SESSION['n_contrato'] = $dado_adm['n_contrato'];	
 $_SESSION['Estado'] = $dado_adm['Estado'];
 $_SESSION['celular'] = $dado_adm['celular'];		 
 $_SESSION['formacao'] = $dado_adm['formacao'];
 $_SESSION["telefone"] = $dado_adm['telefone'];
 $_SESSION["data_nasc"] = $dado_adm['data_nasc'];
 $_SESSION["ini_lanagro"] = $dado_adm['ini_lanagro'];
 $_SESSION["email"] = $dado_adm['email'];

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
		
//------------------------------------------------------Inclui Férias---------------------------------------------------------------		

/*echo "<tr>";
			 echo "<td style=\" text-align:left; font-size:15px; width:500;\">";
			 echo "</a>";
			 

		
		echo "<script type=\"text/javascript\">				
		function abrir(URL) {  var width = 800;  var height = 530;  var left = 200;  var top = 99;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>";
		
		
		   // HTML <a href="javascript:abrir('http://codigofonte.net/');">Clique Aqui</a>
		
			 
			
		echo "<a href=javascript:abrir('"; 
		echo "http://localhost/sistema/Contratos/afastamentos/exclui_fun_eventual.php?id=";
	    echo $_SESSION['id_fun']=$dado_adm['id'];
		echo "')>";
		echo " Incluir ";  echo "</a>";	
		 		 
			 
			 echo "</td>"; */




		?>
 
      
    <table width="800" height="20"  border="0" align="center"> 
       <p style=" margin:15px; text-align:center; "> Funcionário (a): <b><?php 
			echo "<a href='"; 
			echo "../../Contratos/visualizar_edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"];
			echo "'>";
			echo $_SESSION['nome_funcionario']; echo "</a>"; ?></b>
       <p>&nbsp;</p>
       
     
     
     
                           	<tr>

  
            <td colspan="2" align="center" style="font-size:13px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;">
              <p>&nbsp;</p>
    			<?php

				if($_SESSION['id'] == $dado_adm["fiscal"]
		   
		or($_SESSION['id'] ==  $dado_adm["fiscal_sub_1"]) 
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_2"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_3"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_1"])
				
				){
		
			 

		
		echo "<script type=\"text/javascript\">				
		function abrir(URL) {  var width = 800;  var height = 530;  var left = 200;  var top = 99;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, id=iii resizable=no, fullscreen=no'); } 
          </script>";
		
		
		   // HTML <a href="javascript:abrir('http://codigofonte.net/');">Clique Aqui</a>
		

		echo "<a href=javascript:abrir('"; 
		echo "exclui_fun_eventual.php?id=";
	    echo $_SESSION['id_fun']=$dado_adm['id'];
		echo "')>";
		echo " INCLUIR ";  echo "</a>";	
				}
		

			?>       

  <p>&nbsp;</p></td>
        
	</tr>   
     
     
     
     
     
       
     	
        
                
     
 <tr style="background-color:#063; color:#D6D6D6;">
              
                <td width="97" align="center">Início</td>
   				  <td width="97"  align="center">Fim</td>
                  <td width="152" align="center">Usuário</td>
                   <td width="77" align="center">Data</td>
                    <td width="76" align="center">Hora</td>
                   <td width="243" align="center">Descrição</td>
                  <tr>
                   
                  

                  

     
                
                <?php  $cor= 'c0c0c0'; 
				
				
				$linha_adm3 = "SELECT * FROM afastamento WHERE id_fun='{$dado_adm['id']}'";
				
				$resultado3 = mysql_query($linha_adm3);
				while ( $dado_adm3 = mysql_fetch_array($resultado3)) {
 					
					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					
					
				echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
				echo "<td style=\" text-align:center; width:80;\">";
				echo $dado_adm3['data_entrada_ev']; echo "</a>";
				echo "</td>";
				
				
				echo "<td style=\" text-align:center; width:80;\">";
				echo $dado_adm3['data_saida_ev']; echo "</a>";
				echo "</td>";
				
				
				
				
								
				
				
					echo "<td style=\" text-align:center; width:200;\">";
					echo $dado_adm3['usuario']; echo "</a>";
					echo "</td>";
				
				
				echo "<td style=\" text-align:center; width:100;\">";
				echo $dado_adm3['Data']; echo "</a>";
				echo "</td>";
					

				
					echo "<td style=\" text-align:center; width:100;\">";
					echo $dado_adm3['Hora']; echo "</a>";
					echo "</td>";
					

			


					echo "<td style=\" text-align:center; width:400;\">";
					$texto = $dado_adm3['descricao2'];
					$novo_texto = wordwrap( $texto, 35, "\n", 1);
					echo "$novo_texto\n"; echo "</a>";
					echo "</td>";

			echo "</tr>";

 					}
 					
					?>
 
 </table>



</body>
</html>
