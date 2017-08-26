<body link="##063" vlink="##063" alink="##063">
<?php

include('C:\wamp\www\sistema\validacao\testa_adm.php'); //Include de teste do cliente

$id = $_SESSION["id"];
$nome = $_SESSION["nome"];


include('C:\wamp\www\sistema\validacao\cima.php'); 

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
        <p> <b><?php include('C:\wamp\www\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b></p>
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
                                height:20;"> <?php echo "Olá $nome, <a href=logout_adm.php>( Sair ) </a>";?>
		</td>
        
	</tr>
    
  <tr style=" text-align:right; font-size:12px;">

		<td width="347" align="right"><b>Senha Antiga :</b>
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
 
<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>
