<body link="##063" vlink="##063" alink="##063">

<?php


	
	include('..\..\..\sistema\validacao\cima.php');
	

?>
<br />
<center>

<table cellspacing="0" align="center" style="	width:600;
    								height:10;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:0px;">
                                    
  
  		<tr>

                                    </table>

	<table cellspacing="0" style="	width:600;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:right;
                                    margin:0px;">
									
<?php include('..\..\..\sistema\validacao\saudacao.php'); ?>
                                    
  
  		<tr>
    
    		<td colspan="3" style="	text-align:center;
            						background-color:#FFF;
            						width:600;
            						height:20;">
                                    
                                    
									<br />
                                    <br />
									
									 <?php include("editar_eventual.php"); ?>
                                    
			</td>
  		
        </tr>
  <?php 
  
  	$_SESSION["data_entrada_ev"];
 	$_SESSION["data_saida_ev"];
 ?>
  		

	</table>

</center>

<?php include('..\..\..\sistema\validacao\baixo.php'); ?>
