          <tr>
          
<th width="226" align="right" scope="row" ><label for="n_contrato">Empresa</label></th> 
      <td align="left"> 
<select onchange="document.getElementById('n_contrato').value=this.value">
      <option value="">Selecione
					<?php
						$sql = "SELECT n_contrato, empresa FROM contratos WHERE n_contrato <> 'null' and tipo_contrato = 'Terceirizados' and empresa='{$_SESSION['empresa']}' ORDER BY n_contrato ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id2 = $reg["n_contrato"];
							
					?>
                    
                    
		  <option value= "<?php print ("$id2");?>">
		  
		  
		  
		  <?php 

			$linha_adm3 = "SELECT * FROM tab_empresa where id='{$_SESSION['empresa']}'";
			
			 			include('..\..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			 {

			echo $dado_adm3['empresa'];
			
		

			
						 }
			 
								}

		  
		  ?> 
          
         
          
		  </option>
					<?php
					}	
					?>
		</select>
Contrato

 <input name="n_contrato" type="Text" class="input-p"  id="n_contrato" size="10" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly" />
 
	      <span class="style4"></span></td>
          
          
          
          
          
    </tr>