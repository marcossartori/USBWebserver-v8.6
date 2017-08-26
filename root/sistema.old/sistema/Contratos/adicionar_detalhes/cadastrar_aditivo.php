<body link="##063" vlink="##063" alink="##063">
<?php

	include('C:\wamp\www\sistema\validacao\testa_adm.php');

	$nome = $_SESSION["nome"];
	
	include('C:\wamp\www\sistema\validacao\cima.php');
	

?>
<br />

<table cellspacing="0" style="	width:800;
    								
                    				border:0;
                    				
                   					font-size:13;">
                                    
  
  		<tr>


                                    

									
		<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:750;
            						height:30;">

					<?php 
					
					$data = date("d/m/Y");
					
					echo "Porto Alegre, $data.";?><br>
														 <br>
					<?php echo "Olá $nome, <a href=http://localhost/sistema/tela_login.php>( Sair ) </a>";?>
                    
						<br>
						<br>
						<br>						
			</td>

        </tr>
									
									
									
	<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;
    		
            			height:20px;">
                      
                       <b><?php include('C:\wamp\www\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>  
</td>

		</tr>
                                    
  
  		<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:476;
            						height:20;">
                                    
                                    
									<br />
                                    <br />
									
									 <?php include("inserir_aditivo.php"); ?>
                                    
			</td>
  		
        </tr>
  
  		

	</table>


<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>
