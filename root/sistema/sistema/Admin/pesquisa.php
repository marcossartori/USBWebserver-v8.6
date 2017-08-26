<?php

	include('C:\wamp\www\sistema\validacao\testa_adm_master.php'); //Include de teste do administrador

	$nome = $_SESSION["nome"];
	
	include('C:\wamp\www\sistema\validacao\cima.php');

?>
<body link="##063" vlink="##063" alink="##063">




<br />
<center>

<table cellspacing="0" align="center" style="	width:750;
    								height:10;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:5px;">
                                    
                                    
                                    

  		<tr>

                                    </table>

	<table cellspacing="0" style="	width:750;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:5px;">

									
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
    
    
    	<td colspan="2" style="font-size:20px; color:#060;">
        
        <p style=" margin:5px; text-align:center; "> 
       <b> Administrador </b>                                                
               </td>
 
	</tr>      
           
           
                                    
  
  		<tr>
    
    		<td colspan="3" style="	text-align:center;
            						background-color:#FFF;
            						width:750;
            						">

									 <?php include("pesquisa2.php"); ?>
                                    
			</td>
  		
        </tr>
  
  		

	</table>

<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>