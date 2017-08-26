<script>
function limpa() {
var elemento= document.getElementById('fiscal').checked	
 if(elemento==true	) {

     //document.getElementById('fiscal').value="sim";

 document.getElementById("port").disabled = false;
  document.getElementById("file").disabled = false;

}

else {//document.getElementById('port').value="";
 document.getElementById("port").disabled = true;
  document.getElementById("file").disabled = true;
//document.getElementById('port').style.visibility='hidden';
}

}
</script>
<script>
function desabilita() {
	var elemento= document.getElementById('fiscal').checked;
	if(elemento == true){
 document.getElementById("port").disabled=false;
 document.getElementById("file").disabled=false;}
 else{
	 document.getElementById("port").disabled=true;
 document.getElementById("file").disabled=true;
 }
//document.getElementById("file").disabled = true;	
 

    
 

}
</script>

<?php

	include('..\..\sistema\validacao\testa_adm_master.php'); //Include de teste do administrador

	$nome = $_SESSION["nome"];
	
	include('..\..\sistema\validacao\cima.php');
	

?>

<body onLoad="desabilita()">
<center>
 
 <form action="cria_adm.php" method="post" enctype="multipart/form-data">
 
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
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;
    		
            			height:20px;">
                        
          <a href="http:../../sistema/Admin/Administrador.php?pagina=1" style="text-decoration:none">  Listar Usuarios   </a>
           	<a href="http:../../sistema/Admin/novo_adm.php" style="text-decoration:none"> | Novo Usuario   </a>
			
            </td>

		</tr>
        
        
  
  		<tr>
        
            <td colspan="3" style="text-align:center;
            background:url(http:../../sistema/imagens/painel_controle.jpg);
            color:#FFF;
            width:750;
            height:30;">
            
            Novo Usuário
            
            </td>
            
  		</tr>
</table>
        
         <fieldset>
<legend>dados pessoais</legend>
     <table cellspacing="0" style="	width:750;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:30px;">
                                    <tr>
    
    		<td width="321" style="text-align:right;"><b>Nome Completo : </b></td>
    		<td colspan="2" style="text-align:left;"><input name="Nome_Adm" type="text" size="30" maxlength="30"></td>
 
 		</tr>
		
		
		  		<tr>
    
    		<td style="text-align:right;"><b>Email : </b></td>
    		<td colspan="2" style="text-align:left;"><input name="email" type="text" size="30" maxlength="150"></td>
 
 		</tr>
  
        <tr>
		
        	<td style="text-align:right;"><b>Login :</b></td>
        	<td colspan="2" style="text-align:left;"><input name="Login" type="text" size="30" maxlength="30"></td>
  
  		</tr>
  		
        <tr>
    		
            <td style="text-align:right;"><b>Senha :</b></td>
    		<td colspan="2" style="text-align:left;"><input name="Senha" type="password" size="30" maxlength="30"></td>
  		
        </tr>

		<tr>
    		<td style="text-align:right;"><b>Master :</b></td>
    		<td colspan="2" style="text-align:left;"><select name="Master">
  <option value="s" >Sim</option>
  <option value="n" selected>Não</option>
</select>
    
    		</td>
            
  		</tr>
        
        
        
  
  
  
     <tr>
     <td style="text-align:right;"><b> Grupo :</b></td>
     
     

				 <td colspan="2" style="text-align:left;"><select id="Acesso" name="Acesso">
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
     
     

				 <td colspan="2" style="text-align:left;"><select id="Acesso2" name="Acesso2">
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
     
     

				 <td colspan="2" style="text-align:left;"><select id="Acesso3" name="Acesso3">
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
          
          
          
          <td colspan="2" style="text-align:left;"><select id="Acesso4" name="Acesso4">
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
          <td style="text-align:right;"><b>Fiscal</b></td>
          <td width="70" style="text-align:left;"><div align="center">
          <input name="fiscal" type="checkbox" id="fiscal"  onclick="limpa();" value="sim"/>
          </div></td>
          <td width="351" style="text-align:left;"><div align="justify"></div></td>
        </tr>
         <tr>
          <td width='123' style='text-align:right;'><div align='left'><b>Nº Da portaria:</b></div></td>
        	<td width='223' style='text-align:left;'><div align='left'>
        	  <input name='port' type='text' id="port" size='30' maxlength='30' >
      	  </div></td>
      </tr>
      <tr>
        
    		<td style='text-align:right;'><div align='left'><b> Portaria :</b></div></td>
     
    		<td style=' height:20; text-align:center;'><label for='file'></label>
   		      <div align='left'>
   		        <input type='file' name='file' id='file' />
   		        <input type='hidden' name='MAX_FILE_SIZE' value='19264666666' />
            </div></td>
    
    	</tr>
        <tr>
          <td width='123' style='text-align:right;'><div align='left'><b></b></div></td>
        	<td width='223' style='text-align:left;'>&nbsp;</td>
      </tr>
        <tr>
          <td style="text-align:right;">&nbsp;</td>
          <td colspan="2" style="text-align:left;"><input type="submit" name="Enviar" id="Enviar" value="Enviar" onClick="mapa();"  /></td>
          
       </tr>
         </table>

	  </fieldset>
</form>



</center>

</body>


<?php include('..\..\sistema\validacao\baixo.php'); ?>