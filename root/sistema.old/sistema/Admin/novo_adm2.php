<?php

	include('C:\wamp\www\sistema\validacao\testa_adm_master.php'); //Include de teste do administrador

	$nome = $_SESSION["nome"];
	
	include('C:\wamp\www\sistema\validacao\cima.php');

?>


<center>
 
 <form action="cria_adm.php" method="post">
 
	<table cellspacing="0" style="	width:750;
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
            						width:750;
            						height:20;">&nbsp;</td>
  		
        </tr>
        
        
        
        
  		<tr>
        
    		<td style="	width:750px;
            			height:20px;
            			text-align:center;">
                        
           
            
        </td>
      		<td style="	text-align:right;
            			background-color:#FFF;
            			width:750;
            			height:20;">
									
			<?php echo "Olá $nome, <a href=http://localhost/sistema/tela_login.php>( Sair ) </a>";?>
                                    
			</td>
            
		</tr>        
        
        
        
        
             	<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;
    		
            			height:20px;">
                        
          <a href="http://localhost/sistema/Admin/Administrador.php?pagina=1" style="text-decoration:none">  Listar Usuarios   </a>
           	<a href="http://localhost/sistema/Admin/novo_adm.php" style="text-decoration:none"> | Novo Usuario   </a>
			
            </td>

		</tr>
        
        
  
  		<tr>
        
            <td colspan="3" style="text-align:center;
            background:url(http://localhost/sistema/imagens/painel_controle.jpg);
            color:#FFF;
            width:750;
            height:30;">
            
            Novo Usuário
            
            </td>
            
  		</tr>
  
  		<tr>
    
    		<td style="text-align:right;"><b>Nome Completo : </b></td>
    		<td style="text-align:left;"><input name="Nome_Adm" type="text" size="30" maxlength="30"></td>
 
 		</tr>
		
		
		  		<tr>
    
    		<td style="text-align:right;"><b>Email : </b></td>
    		<td style="text-align:left;"><input name="email" type="text" size="30" maxlength="30"></td>
 
 		</tr>
  
        <tr>
		
        	<td style="text-align:right;"><b>Login :</b></td>
        	<td style="text-align:left;"><input name="Login" type="text" size="30" maxlength="30"></td>
  
  		</tr>
  		
        <tr>
    		
            <td style="text-align:right;"><b>Senha :</b></td>
    		<td style="text-align:left;"><input name="Senha" type="password" size="30" maxlength="30"></td>
  		
        </tr>

		<tr>
    		<td style="text-align:right;"><b>Master :</b></td>
    		<td style="text-align:left;"><select name="Master">
  <option value="s" >Sim</option>
  <option value="n" selected>Não</option>
</select>
    
    		</td>
            
  		</tr>
        
        
        
  
  
  
     <tr>
     <td style="text-align:right;"><b> Grupo :</b></td>
     
     

				 <td style="text-align:left;"><select id="Acesso" name="Acesso">
					<option value="">Selecione
					
					<?php
						$sql = "SELECT Acesso FROM tab_acessos WHERE Acesso <> 'null' ORDER BY Acesso ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Acesso"];
					?>
				   <option value= "<?php print("$id");?>"><?php print("$id");?>
			      </option>
					<?php
					}
					?>
				</select> </td>
      </tr>
                   
                   
                        <tr>
     <td style="text-align:right;"><b> Acesso 1 :</b></td>
     
     

				 <td style="text-align:left;"><select id="Acesso2" name="Acesso2">
                 <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Acesso2 FROM tab_acessos WHERE Acesso2 <> 'null' ORDER BY Acesso2 ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Acesso2"];
					?>
				   <option value= "<?php print("$id");?>"><?php print("$id");?>
				   </option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                   
        <tr>
     <td style="text-align:right;"><b> Acesso 2 :</b></td>
     
     

				 <td style="text-align:left;"><select id="Acesso3" name="Acesso3">
                 <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Acesso3 FROM tab_acessos WHERE Acesso3 <> 'null' ORDER BY Acesso3 ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Acesso3"];
					?>
				   <option value= "<?php print("$id");?>"><?php print("$id");?>
				   </option>
					<?php
					}
					?>
				</select> </td>
      </tr>
                   
                   

        <tr>
     <td style="text-align:right;"><b> Acesso 3 :</b></td>
     
     

				 <td style="text-align:left;"><select id="Acesso4" name="Acesso4">
                 <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Acesso4 FROM tab_acessos WHERE Acesso4 <> 'null' ORDER BY Acesso4 ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Acesso4"];
					?>
				   <option value= "<?php print("$id");?>"><?php print("$id");?>
				   </option>
					<?php
					}
					?>
				</select> </td>
      </tr>                   
                   
                   

  <tr>
        
    		<td colspan="2" style=" height:20; text-align:center;"><input name="Enviar" type="submit" id="Enviar" value=" ENVIAR "></td>
    
    	</tr>

   		  <td colspan="2" style=" height:30;
    								background:url(http://localhost/sistema/imagens/painel_rodape.jpg);">&nbsp;</td>
  
  		</tr>

    </table>

</form>

</center>
 
<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>