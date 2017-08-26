<body link="##063" vlink="##063" alink="##063">

<?php

	include('C:\wamp\www\sistema\validacao\testa_adm.php');

	$nome = $_SESSION["nome"];
	
	include('C:\wamp\www\sistema\validacao\cima.php');
	

?>
<br />
<center>

<table cellspacing="0" align="center" style="	width:800;
    								height:10;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:5px;">

    
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
    
    
    	<td colspan="2" style="font-size:20px; color:#060;">
        
        <p style=" margin:5px; text-align:center; "> 
       <b> Inserir Empresas</b>                                                
               </td>
 
	</tr>      
           
           
                                    
  
  		<tr>
    
    		<td colspan="3" style="	text-align:center;
            						background-color:#FFF;
            						width:750;
            						">

									 <?php include("inserir_empresa.php"); ?>
                                    
			</td>
  		
        </tr>
  
  		

	</table>

</center>

<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>
