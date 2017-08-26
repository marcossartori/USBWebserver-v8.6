<body link="##063" vlink="##063" alink="##063">

<?php
	

	include('..\..\sistema\validacao\testa_adm_master.php'); //Include de teste do administrador

	 $nome = $_SESSION["nome"];
     $n_port= $_SESSION["n_port"];
     $id= $_SESSION["id"];
	
include('..\..\sistema\validacao\cima.php');

?>
<br />
<center>

<table cellspacing="0" align="center" style="	width:750;
    								height:10;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:1px;">
                                    
                                    
                                    

  		<tr>

                                    </table>

	<table cellspacing="0" style="	width:750;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:1px;">

									
		<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:750;
            						height:30;">
									
					


					<?php 
					
					$data = date("d/m/Y");
					
					echo "Porto Alegre, $data.";?><br>
                    
                    
					<?php 
					include('..\..\sistema\validacao\dbconexao.php');
					$sqll="SELECT * from admin where  Id ='$id'";
                    $query=mysql_query($sqll) or die(mysql_error);
                    $result=mysql_fetch_array($query);
                     $fisc= $result["Fiscal"];
					 if($fisc=="sim"){
					
					
					 echo "Portaria Nº"; echo '  '; echo "<a  href='createimgsource.php?id=".$id."')'>"; echo ".$n_port."; echo"</a>";}
												 
					 
					  ?>	
                    
                    
                    							 <br>
					<?php echo "Olá $nome, <a href=../logout_adm.php>( Sair ) </a>";?>
                    
						<br>
						<br>
						<br>						
  		
        
			</td>

        </tr>
           
           
           
           
              <tr>
    
    
    	<td colspan="2" style="font-size:20px; color:#060;">
        
        <p style=" margin:5px; text-align:center; "> 
       <b> Painel Administrador </b>                                                
               </td>
 
	</tr>      
           
           
                                    
  
  		<tr>
    
    		<td colspan="3" style="	text-align:center;
            						background-color:#FFF;
            						width:750;
            						">

									 <?php include("lista_adm.php"); ?>
                                    
			</td>
  		
        </tr>
  
  		

	</table>
<?php include('..\..\sistema\validacao\baixo.php'); ?>
</center>


