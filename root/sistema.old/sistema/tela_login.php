<?php include('C:\wamp\www\sistema\validacao\cima.php'); ?>
 
 <center>
 
<form action="login_adm.php" method="post" >
 
	<table cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; margin:30px; font-size:12px; border:0; width:450; height:120">
    
    	<tr>
    
    		<td colspan="2" style="	background:url(imagens/login_topo.jpg);
            						height:30px;
                                    text-align:center;
                                    vertical-align:middle;
                                    color:#FFF;" >
                                    
			Entre com seu login e senha nos campos abaixo:
            
            </td>
 
        </tr>
  
  		<tr>
    		
            <td style="	width:200;
            			height:30;
                        text-align:right;
                        background:url(imagens/login_fundo.jpg);">
                        
			Login :
            
            </td>
    
    		<td style="	width:238;
           				background:url(imagens/login_fundo.jpg);">
                        
            <input name="login" type="text" style="width:100px;">
            
            </td>
  
  		</tr>
    
  		<tr>    
    
    		<td style="	width:200;
            			height:30;
           				text-align:right;
            			background:url(imagens/login_fundo.jpg);">
                        
			Senha :
            
            </td>
            
    		<td style="	width:238;
            			background:url(imagens/login_fundo.jpg);">
                        
			<input name="senha" type="password" style="width:100px;">
            
            </td>
            
  		</tr>
  
  		<tr>

			<td colspan="2" style="	background:url(imagens/login_rodape.jpg);
        							height:30px;
                                    text-align:center;
                                    vertical-align:middle;">
             <input name="envia" type="submit" value=" LOGAR ">
             
             </td>
             
   		</tr>
		
	</table>

</form>

</center>
   
<?php include('C:\wamp\www\sistema\validacao\baixo.php') ?>
