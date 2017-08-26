<body link="##063" vlink="##063" alink="##063">
<?php

	include('C:\wamp\www\sistema\validacao\testa_adm.php');

	$nome = $_SESSION["nome"];
	
	include('C:\wamp\www\sistema\validacao\cima.php');
	

?>
<br />

<table border = "2" cellspacing="0" align="center" style="	width:590;
    								height:10;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:5px;">
                                    
  
  		<tr>


                                    </table>

	<table  border = "0"  cellspacing="0" style="	width:477;
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
                    
            
            
        </td>

		</tr>
                                    
  
  		<tr>
    
    		<td colspan="3" style="	text-align:left;
            						background-color:#FFF;
            						width:50;
            						height:30;
                                    font-size:15px;">
                                    
                                    
									<blockquote>
									  <blockquote>
									    <blockquote>
									      <blockquote>
									        <p><br />
									          <br />
                                            
									          
									          <a href="http://localhost/sistema/consulta_bolsistas.php ">Bolsistas  </a> <br />		        
											  <a href="http://localhost/sistema/link2_contrato.php?pagina=1 ">Estagiários  </a> <br />
									          <a href="http://localhost/sistema/link2_contrato.php?pagina=1 ">Servidores  </a> <br />
									          <a href="http://localhost/sistema/link2_contrato.php?pagina=1 ">Terceirizados  </a>  <br />   
									          <a href="http://localhost/sistema/link2_contrato.php?pagina=1 ">Todos </a> <br />
									          
									          
								            </p>
								          </blockquote>
								        </blockquote>
								      </blockquote>
            </blockquote></td>
  		
        </tr>
  
  		

	</table>

</center>
<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>
