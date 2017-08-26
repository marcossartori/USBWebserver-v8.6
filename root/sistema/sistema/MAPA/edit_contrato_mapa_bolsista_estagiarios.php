<body link="##063" vlink="##063" alink="##063">
<?php

	include('C:\wamp\www\sistema\validacao\testa_adm.php');

	$nome = $_SESSION["nome"];
	
	include('C:\wamp\www\sistema\validacao\cima.php');

?>


<center>
 
	<table cellspacing="0" style="	width:477;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:30px;">
									
									
									
			<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:477;
            						height:30;">
									
									
									<?php echo "Olá $nome, <a href=http://localhost/sistema/tela_login.php>( Sair ) </a>";?>
						<br>
						<br>
						<br>						
  		
        
			</td>

        </tr>
						
	<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;
    		
            			height:20px;">
                        
<b><a href="http://localhost/sistema/MAPA/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1" style="text-decoration:none">Home  |</a></b>
 <a href="http://localhost/sistema/altera_senha.php" style="text-decoration:none">  Alterar Senha  |</a>
 <!-- <a href="cadastrar_mapa_bolsista_estagiarios.php"> | Cadastrar Contratos</a> -->
 <b><a href="http://localhost/sistema/MAPA/cadastrar_funcionario_mapa_bolsista_estagiarios.php" style="text-decoration:none"> Adicionar Funcionario   </a></b>
            
        </td>

		</tr>
  
  		<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:477;
            						height:20;">
									
									
									 <?php include("edicao_contrato_mapa_bolsista_estagiarios.php"); ?>
                                    
			</td>
  		
        </tr>
  
  		
	</table>

</center>

<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>
