<script>
function limpa() {
var elemento= document.getElementById('fiscal').checked	
 if(elemento==true	) {

     //document.getElementById('fiscal').value="sim";

 document.getElementById("port").disabled = false;
  document.getElementById("file").disabled = false;
document.getElementById('port').value= document.getElementById('numero').value;
}

else {
	document.getElementById('port').value="";
 document.getElementById("port").disabled = true;
  document.getElementById("file").disabled = true;
//document.getElementById('port').style.visibility='hidden';
}

}
</script>

<script>
function desabilita() {
	var elemento= document.getElementById('fiscal').checked;
	 if(elemento==true	) {
// document.getElementById('fiscal').value="sim";		 
 document.getElementById("port").disabled=false;
 document.getElementById("file").disabled=false;
 }else{
//document.getElementById('fiscal').value="nao";		
 document.getElementById("port").disabled=true;
 document.getElementById("file").disabled=true;}

//document.getElementById("file").disabled = true;	
 

    
 

}
</script>

<?php

	include('..\..\sistema\validacao\testa_adm_master.php'); //Include de teste do administrador

	$nome = $_SESSION["nome"];
	
	include('..\..\sistema\validacao\cima.php');

?>

<center>
<?php 

$id_adm = $_GET['id_adm'];

include('..\..\sistema\validacao\dbconexao.php');

$busca_filme = "SELECT * FROM admin WHERE Id = $id_adm";

$resultado = mysql_query($busca_filme, $conexao);

$dado = mysql_fetch_array($resultado);

?>
<body onLoad="desabilita();">
<center>
  <form name="editar" action="salva_adm.php" method="post" enctype="multipart/form-data" >
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
        <td colspan="3" align="center" style="text-align:center;
            background:url(file:///C|/Users/marcos.sartori/Desktop/imagens/painel_controle.jpg);
            color:#FFF;
            width:750;
            height:30;"><p><b> <a href="http:../../sistema/Admin/Administrador.php?pagina=1" style="text-decoration:none"> Listar Usuarios </a> <a href="http:../../sistema/Admin/novo_adm.php" style="text-decoration:none"> | Novo Usuario</a></b></p>
          <p>&nbsp;</p></td>
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
        <input name="Id" type="hidden" value="<?php echo $_SESSION['id_fiscal'] = $dado['Id']; ?>" >
        <td style="text-align:right;">&nbsp;</td>
        <td style="text-align:left;"><?php  $dado['Id']; ?></td>
      </tr>
      <tr>
        <td width="287" style="text-align:right;"><div align="right"><b>Nome Completo : </b></div></td>
        <td width="457" style="text-align:left;"><div align="left">
            <input id="Nome_Adm" name="Nome_Adm" value="<?php echo $_SESSION['Nome_fiscal'] =  $dado['Nome']; ?>" type="text" size="30" maxlength="30" />
          </div></td>
      </tr>
      <tr>
        <td style="text-align:right;"><div align="right"><b>Email : </b></div></td>
        <td style="text-align:left;"><div align="left">
            <input name="email" value="<?php echo $dado['email']; ?>" type="text" size="30" />
          </div></td>
      </tr>
      <tr>
        <td style="text-align:right;"><div align="right"><b>Login :</b></div></td>
        <td style="text-align:left;"><div align="left">
            <input name="Login" value="<?php echo $dado['Login']; ?>" type="text" size="30" maxlength="30" />
          </div></td>
      </tr>
      <tr>
        <td style="text-align:right;"><div align="right"><b>Senha :</b></div></td>
        <td style="text-align:left;"><div align="left">
            <input name="Senha" value="<?php echo $dado['Senha']; ?>" type="password" size="30" maxlength="30" />
          </div></td>
      </tr>
      <tr>
        <td style="text-align:right;"><div align="right"><b>Master :</b></div></td>
        <td style="text-align:left;"><div align="left">
            <select name="Master">
              <option value="s" <?php if ($dado['Master'] == 's') { echo "selected"; } ?>>Sim</option>
              <option value="n" <?php if ($dado['Master'] == 'n') { echo "selected"; } ?>>Não</option>
            </select>
          </div></td>
      </tr>
      <tr> </tr>
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
          </select></td>
      </tr>
      <tr>
        <td style="text-align:right;"><b> Acesso 1 :</b></td>
        <td style="text-align:left;"><select id="Acesso2" name="Acesso2">
            <option value="">Selecione
            <?php
						$sql = "SELECT Acesso2 FROM tab_acessos  WHERE Acesso <> 'null' ORDER BY Acesso ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Acesso2"];
					?>
            <option value="<?php echo $reg["Acesso2"];?>" <?php if ($reg["Acesso2"] == $dado['Acesso2']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["Acesso2"];?></option>
            <?php
					}
					?>
          </select></td>
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
          </select></td>
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
          </select></td>
      </tr>
      <tr>
        <td style="text-align:right;"><b>Fiscal</b></td>
        <td width="70" style="text-align:left;"><div align="left">
          <?php
		                 $sql = "SELECT * FROM admin where Id= '$id_adm' ";
						$executar = mysql_query($sql) or die(mysql_error());
						$reg = mysql_fetch_array($executar);
					     $port=$reg['n_port'];
						  $name=$reg['name_port'];
					        $reg['name_port'];
					 
						if ($reg['Fiscal']== "sim"){
								  
		   
		 echo '<input type="checkbox" checked="checked" name="fiscal" id="fiscal" value="sim"   onclick=" limpa();"/>'; 
			
		}
	
		   
		      else { 	    echo ' <input type="checkbox"  name="fiscal" id="fiscal" value="sim"   onclick=" limpa();"/>'; }		
   
		
           
        
        if ($reg['Fiscal']== "sim"  or $reg['Fiscal']== "nao")  {   
        
        
       echo "</div></td>
        </tr>
        
        	<tr id='teste'>
          <td  width='123' style='text-align:right;'><b> <div id='n_port' style='display:non'>Nº Da portaria: </div> </b></div></td>
        	<td width='223' style='text-align:left;'> <div id='imput' align='left' style='display:non'>
        	  <input name='n_port' id='port' type='text' size='30' maxlength='30'   echo value= '$port' </div>
			   <input  id='numero' type='hidden' name='guard_port' value='$port' />
			    <input  id='' type='hidden' name='guard_port' value='$port' />
      	  </div></td>
      </tr>
      <tr id=''>
        
    		<td style='text-align:right;'> <div id='lablefile'  style='display:non'><b> Portaria :</b></div></td>
     
    		<td style=' height:20; text-align:center;'><label for='file'></label>
   		      <div align='left' id=''>
   		        <input type='file' name='file' id='file'  'value= '' style='display:non' />
   		        <input type='hidden' name='MAX_FILE_SIZE' value='19264666666' />
            </div></td>
    
    	</tr >";
		 }  
     ?>
          
            <tr>
              <td style="text-align:right;"><div align="center"></div></td>
              <td width="457" colspan="2" style="text-align:left;"><div align="left">
                  <input type="submit" name="atualizar" id="atualizar" value="atualizar"  />
                </div></td>
            </tr>
    </table>
  </form>
</center>
</body>
<?php include('..\..\sistema\validacao\baixo.php'); ?>
