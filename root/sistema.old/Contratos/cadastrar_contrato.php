<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/ico" href="../imagens/LOGO_novo_vazio.ico">

<title>Cadastro de Contratos</title>
</head>
<body link="##063" vlink="##063" alink="##063">

<?php

	
	include('C:\wamp\www\sistema\validacao\cima.php');
	

?>
<br />

<table cellspacing="0" align="center" style="	width:750;
    								height:10;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:5px;">

									
<?php include('C:\wamp\www\sistema\validacao\saudacao.php'); ?>
									


          <tr align="center">
    
    
    	<td colspan="2" style="font-size:15px; color:#060;">
        <hr style=" width:750px; text-align:center;">
        <p style=" margin:15px; text-align:justify; "> 
        <b>   Cadastro de contratos<b>

                                                                   
        <hr style=" width:750px; text-align:center;"></p>        </td>
        
 
	</tr>

									
									
	<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;
    		
            			height:20px;">
                        
                         <b><?php include('C:\wamp\www\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
</td>

		</tr>
                                    
  
  		<tr>
    
    		<td colspan="3" style="	text-align:left;
            						background-color:#FFF;
            						width:750;
            						height:1;">
                                    
                                    
									<br />
                                    <br />
									
									 <?php include("inserir_contrato.php"); ?>
                                    
			</td>
  		
        </tr>
  
  		

	</table>

</center>
<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>
