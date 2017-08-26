<body link="##063" vlink="##063" alink="##063">

<?php

	include('C:\wamp\www\sistema\validacao\testa_adm.php');

	$nome = $_SESSION["nome"];
	
	include('C:\wamp\www\sistema\validacao\cima.php');
	

?>
<br />
<center>

<table cellspacing="0" align="center" style="	width:750;
    								
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    ">

    
    		<td align="center" colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:700;
            						">

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
                     
  
  		<td align="center">
    
    		<td align="center"><td colspan="2" style="text-align:center;
            						background-color:#FFF;
                                    font-size:20px; color:#060;
            						width:750;
            						">
                                    
                                   <b> Contratos </b>

  <?php include("busca2_contrato.php"); ?>

  
  		

  </table>

<td align="center">

<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>
