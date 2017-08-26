<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar cargos</title>


<script language="JavaScript" type="text/javascript" src="../../sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/MascaraValidacao.js"></script> 


<link rel="stylesheet" 
type="text/css"href="../../sistema/forme.css" 
/> 


<link rel="stylesheet" 
type="text/css"href="../../sistema/validacao/mensagens.css" 
/>

</head>

<body link="##063" vlink="##063" alink="##063">








<?php

	include('..\..\sistema\validacao\testa_adm.php'); //Include de teste do administrador

	$nome = $_SESSION["nome"];
	


?>

<center>

<?php 

include('..\..\sistema\validacao\dbconexao.php');

$id_cargo = $_GET['id_cargo'];
$busca_filme = "SELECT * FROM tab_cargo WHERE id = $id_cargo";

$resultado = mysql_query($busca_filme, $conexao);

$dado = mysql_fetch_array($resultado);

?>
 <center>
 <form name="editar" action="salva_cargo.php" method="post">
 
	<table cellspacing="0" style="	width:300;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:30px;">
                                    
  		   <a href="lista_cargos.php">Voltar</a>


    </table>

  		

     <table cellspacing="0" style="	width:400;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:30px;">
      
      
<tr>
        <input name="id" type="hidden" value="<?php  $_SESSION["id_cargo"]=$dado['id']; ?>" >

        
        </tr>  
  		
      
    <tr>
      <th align="right" scope="row">Cargo: </th>
      <td><label for="cargo"></label>
      <input name="cargo" type="text" id="cargo"  value="<?php 
	  
	  //echo utf8_decode($dado['cargo']);
	  echo $dado['cargo'];
	  
	  ?>" /></td>
    </tr> 
    
    
    <tr>
      <th align="right" scope="row">Quantidade: </th>
      <td><label for="cargo"></label>
      <input name="quant" type="text" id="quant"  value="<?php echo $dado['quant'];?>" /></td>
    </tr> 
     
     
     
            <tr>
      <th align="right" scope="row">Valor Cargo R$</th>
      <td><label for="valor_cargo"></label>
      <input name="valor_cargo" type="text" id="valor_cargo" value="<?php echo $dado['valor_cargo'];?>" onKeyPress="return(MascaraMoeda(this,'.',',',event))"/>
     
      </td>
    </tr>
     
      
    </table>
     

 
<label>
      <input type="submit" name="atualizar" id="atualizar" value="atualizar" />
  </label>

            <?php 
           echo "<label>";
echo '<input type="submit"   value="Fechar" onclick="window.close()" >';
//echo '<input type="submit"   value="OK" onclick="window.opener.document.forms[0].submit();">';
echo "</label>"; ?>     
  
</form>

</center>
