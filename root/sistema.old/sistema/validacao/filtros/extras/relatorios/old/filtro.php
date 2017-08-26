<body link="##063" vlink="##063" alink="##063">
<?php

	include('C:\wamp\www\sistema\validacao\testa_adm.php');

	$nome = $_SESSION["nome"];
	
	include('C:\wamp\www\sistema\validacao\cima.php');
	

?>
<br />

<table cellspacing="0" align="center" style="	width:590;
    								height:10;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:5px;">

									
		<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:477;
            						height:30;">

					<?php 
					
					$data = date("d/m/Y");
					
					echo "Porto Alegre, $data.";?><br>
														 <br>
					<?php echo "Olá $nome, <a href=http://localhost/sistema/tela_login.php>( Sair ) </a>";?>
						
			</td>

        </tr>
									
									
									
	<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;
    		
            			height:20px;">
                    
          <a href="http://localhost/sistema/Contratos/link2_contrato.php?pagina=1" style="text-decoration:none">  Home   </a>
           	<a href="http://localhost/sistema/altera_senha.php" style="text-decoration:none"> | Alterar Senha    </a>
           	<a href="http://localhost/sistema/Contratos/cadastrar_contrato.php" style="text-decoration:none"> | Cadastrar Contratos</a
           ></td>

		</tr>
                                    
  
  		<tr>
    
    		<td colspan="3" style="	text-align:left;
            						background-color:#FFF;
            						width:476;
            						height:1;">

									 <?php include("theme.php"); ?>
                                    
			</td>
  		
        </tr>
  
  		

	</table>

</center>
<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>
