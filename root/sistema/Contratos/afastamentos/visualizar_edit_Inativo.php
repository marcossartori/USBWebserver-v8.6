<?php

	
	include('C:\wamp\www\sistema\validacao\cima.php');

?>

<body link="##063" vlink="##063" alink="##063">
<center>
 
	<table cellspacing="0" style="	width:477;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:30px;">
									
<?php include('C:\wamp\www\sistema\validacao\saudacao.php'); ?>
						
		<tr>
    		<td style="	width:477px;
            			height:20px;
            			text-align:center;">
                        
            <a href="http://localhost/sistema/link2_contrato.php"> | Home   </a>
           	<a href="http://localhost/sistema/altera_senha.php"> | Alterar Senha    </a>
      

           	<a href="cadastrar_contrato.php"> | Cadastrar Contratos</a>
            
        </td>
		</tr>
  
  		<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:477;
            						height:20;">
									
									
									 <?php include("visualizar_edicao_Inativo.php"); ?>
                                    
			</td>
  		
        </tr>
  
  		
	</table>

</center>

<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>
