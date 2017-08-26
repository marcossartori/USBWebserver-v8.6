<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/ico" href="../imagens/LOGO_novo_vazio.ico">

<title>Visualização do contrato</title>
</head>
<body link="##063" vlink="##063" alink="##063">
<?php

	
	include('C:\wamp\www\sistema\validacao\cima.php');

?>


 
	<table cellspacing="0" style="	width:800;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:10px;">
									
<?php include('C:\wamp\www\sistema\validacao\saudacao.php'); ?>
						


	<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;
    		
            			height:20px;">
                        
 <b><?php include('C:\wamp\www\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
            
        </td>

		</tr>



  
  		<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:800;
            						height:20;">
									
									
									 <?php include("visualizar_edicao_contrato.php"); ?>
                                    
			</td>
  		
        </tr>
  
  		

	</table>


<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>



