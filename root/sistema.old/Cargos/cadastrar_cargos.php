<body link="##063" vlink="##063" alink="##063">
<?php

	include('..\..\sistema\validacao\testa_adm.php');

	$nome = $_SESSION["nome"];
	

	

?>
<br />

<table cellspacing="0"  style="	
    								
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                     ">

									
									
									
	<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle;  font-weight: bold;
    		
            			height:20px;">

            
        </td>

		</tr>
                                    
  
  		<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            					
            						">
                                    
                                    
									<br />
                                    <br />
									
									 <?php include("inserir_cargos.php"); ?>
                                    
			</td>
  		
        </tr>
  
  		

	</table>

</center>

