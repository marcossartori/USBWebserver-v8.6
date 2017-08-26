<?php

	include('C:\wamp\www\sistema\validacao\testa_adm_master.php'); //Include de teste do administrador

	$nome = $_SESSION["nome"];
	
	

?>

<center>

<?php 

$id_adm = $_GET['id_adm'];

include('C:\wamp\www\sistema\validacao\dbconexao.php');

$busca_filme = "SELECT * FROM admin WHERE Id = $id_adm";

$resultado = mysql_query($busca_filme, $conexao);

$dado = mysql_fetch_array($resultado);

?>
 
 <form action="salva_adm.php" method="post">
 
	<table cellspacing="0" style="	width:750;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:30px;">
                                    
  		<tr>
        
    		<td style="	width:750px;
            			text-align:center;">
                        
          
            
            </td>
      		<td style="	text-align:right;
            			background-color:#FFF;
            			width:750;
            			height:20;"><?php echo "Olá $nome, <a href=http://localhost/sistema/tela_login.php>( Sair ) </a>";?>
   		    <p>&nbsp;</p></td>
           
            
	  </tr>
        
		<tr>
        
            <td colspan="3" align="center" style="text-align:center;
            background:url(imagens/painel_controle.jpg);
            color:#FFF;
            width:750;
            height:30;">
            
              <p><b>                                   	
              <a href="http://localhost/sistema/Admin/Administrador.php?pagina=1" style="text-decoration:none">  Listar Usuarios   </a>
            <a href="http://localhost/sistema/Admin/novo_adm.php" style="text-decoration:none"> | Novo Usuario</a></b></p>
            <p>&nbsp;</p></td>
        
</tr>

  		<tr>
        <input name="Id" type="hidden" value="<?php echo $_SESSION['id_fiscal'] = $dado['Id']; ?>" >
        	<td style="text-align:right;"><b>ID : </b></td>
    		<td style="text-align:left;"><?php echo $dado['Id']; ?> </td>
        
        </tr>  
  
  		<tr>
    
    		<td style="text-align:right;"><b>Nome Completo : </b></td>
    		<td style="text-align:left;"><input name="Nome_Adm" value="<?php echo $_SESSION['Nome_fiscal'] = $dado['Nome']; ?>" type="text" size="30" maxlength="30"></td>
 
 		</tr>
        
        
          		<tr>
    
    		<td style="text-align:right;"><b>Email : </b></td>
    		<td style="text-align:left;"><input name="email" value="<?php echo $dado['email']; ?>" type="text" size="30"></td>
 
 		</tr>
        
  
        <tr>
		
        	<td style="text-align:right;"><b>Login :</b></td>
        	<td style="text-align:left;"><input name="Login" value="<?php echo $dado['Login']; ?>" type="text" size="30" maxlength="30"></td>
  
  		</tr>
  		
        <tr>
    		
            <td style="text-align:right;"><b>Senha :</b></td>
    		<td style="text-align:left;"><input name="Senha" value="<?php echo $dado['Senha']; ?>" type="password" size="30" maxlength="30"></td>
  		
        </tr>

		<tr>
    		<td style="text-align:right;"><b>Master :</b></td>
    		<td style="text-align:left;"><select name="Master">
  <option value="s" <?php if ($dado['Master'] == 's') { echo "selected"; } ?>>Sim</option>
  <option value="n" <?php if ($dado['Master'] == 'n') { echo "selected"; } ?>>Não</option>
</select>
    
    		</td>
            
  		</tr>
        
        
</td>
        
        
        
        
        
        
                               <tr>
     <td style="text-align:right;"><b> Grupo :</b></td>

			  <td style="text-align:left;"><select id="Acesso" name="Acesso">
			  <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Acesso FROM tab_acessos  WHERE Acesso <> 'null' ORDER BY Acesso ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Acesso"];
					?>
<option value="<?php echo $reg["Acesso"];?>" <?php if ($reg["Acesso"] == $dado['Acesso']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["Acesso"];?></option>
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
						$sql = "SELECT Acesso2 FROM tab_acessos  WHERE Acesso2 <> 'null' ORDER BY Acesso2 ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Acesso2"];
					?>
<option value="<?php echo $reg["Acesso2"];?>" <?php if ($reg["Acesso2"] == $dado['Acesso2']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["Acesso2"];?></option>
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
						$sql = "SELECT Acesso3 FROM tab_acessos  WHERE Acesso3 <> 'null' ORDER BY Acesso3 ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Acesso3"];
					?>
<option value="<?php echo $reg["Acesso3"];?>" <?php if ($reg["Acesso3"] == $dado['Acesso3']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["Acesso3"];?></option>
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
						$sql = "SELECT Acesso4 FROM tab_acessos  WHERE Acesso4 <> 'null' ORDER BY Acesso4 ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Acesso4"];
					?>
<option value="<?php echo $reg["Acesso4"];?>" <?php if ($reg["Acesso4"] == $dado['Acesso4']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["Acesso4"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr> 
  
  
 		<tr>
        
    		<td colspan="2" style=" height:20; text-align:center;"><input name="atualizar" type="submit" id="atualizar" value=" atualizar "></td>
    
    	</tr>
  
  		<tr>
    
    		<td colspan="2" style=" height:30;
    								background:url(imagens/painel_rodape.jpg);">&nbsp;</td>
  
  		</tr>
    
    </table>

</form>

</center>
 
