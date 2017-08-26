<body link="##063" vlink="##063" alink="##063">

<?php

	
	include('..\..\..\sistema\validacao\cima.php');
	

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
                                   ">

<?php include('..\..\..\sistema\validacao\saudacao.php'); ?>
           
           
           
           
              <tr>
    
    
    	<td colspan="2" style="font-size:20px; color:#060;
        width:800;
 		 
        text-align:center; "> 
       <b> Funcionários Inativos</b>                                                
               </td>
 
	</tr>      
           
           
                                    
  
  		<tr>
    
    		<td align="center" colspan="3" style="	text-align:center;
            						background-color:#FFF;
            						width:800;
            						">

									 <?php include("lista_func.php"); ?>
                                    
			</td>
  		
        </tr>
  
  		

	</table>

</center>

<?php include('..\..\..\sistema\validacao\baixo.php'); ?>
