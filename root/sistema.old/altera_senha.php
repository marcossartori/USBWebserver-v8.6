<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/ico" href="imagens/LOGO_novo_vazio.ico">

<title>Alterar Senha</title>
</head>
<body link="##063" vlink="##063" alink="##063">

<?php

include('..\sistema\validacao\testa_adm.php'); //Include de teste do cliente

$id = $_SESSION["id"];
$nome = $_SESSION["nome"];


include('..\sistema\validacao\cima.php'); 

?>

<form method="post" action="mudar_senha.php">




 
 <center>
 
 <table width="763" border="0" cellpadding="0" cellspacing="0" style=" 	width:750;
															text-align:right;
															font-family:Arial, Helvetica, sans-serif;
                                                            font-size:12;
                                                            background-color:#FFF;
                                                            margin:30px;" >

   
	<tr>
   
		<td colspan="2" style=" font-size:10px; color:#F00; text-align:center; vertical-align:middle; height:40px; font-size:12;">
        <p> <b><?php include('..\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b></p>
	    <p>Digite sua senha antiga corretamente, e ao digitar a nova senha repita ela.</p></td>
        
	</tr>
    
    
    

    
    
		<td colspan="2" style="text-align:center;
        	font-size:10px;
            background:url(imagens/painel_controle.jpg);
            color:#FFF;
            width:750;
            height:30;">Troca de Senha
        </td>

	<tr>
		
		<td colspan="2" style="	width:750; 
                                height:20;"> <?php 
							
								//$nome2 = utf8_encode($nome);
								echo "Olá $nome, <a href=../sistema/logout_adm.php>( Sair ) </a>";
								
								
								
								?>
		</td>
        
	</tr>
    
  <tr style=" text-align:right; font-size:12px;">

		<td width="347" align="right"><b>Senha Atual :</b>
		</td>
        
		<td width="416" align="right" style=" text-align:left;"><input type="password" name="senha_antiga" id="textfield"></td>

  </tr>
  
    
    
    <tr style=" text-align:right; font-size:12px;">

		<td align="right"><b>Senha Nova :</b>
		</td>
        
		<td align="right" style=" text-align:left;"><input type="password" name="senha_nova" id="textfield2"></td>

	</tr>
    
    
    <tr style=" text-align:right; font-size:12px;">

		<td align="right"><b>Senha Nova :</b>
		</td>
        
		<td align="right" style=" text-align:left; font-size:9px;">
	    <input type="password" name="senha_nova_2" id="textfield3">
	    (Repita a nova senha) </td>

	</tr>
    
    
    <tr>
    
    	<td colspan="2" style=" height:30; text-align:center;">
        <input name="Enviar" type="submit" id="Enviar" value=" ENVIAR ">
        <input type="reset" name="reset" id="reset" value=" LIMPAR "></td>
        
    </tr>
    

	<tr>
    
		<td colspan="2" style="	background-image:url(imagens/painel_rodape.jpg);
        					    height:30;	">&nbsp;
        </td>
        
	</tr>
    
    
    
    
</table>

</center>

</form>
 
<?php include('..\sistema\validacao\baixo.php'); ?>
