 <tr>
 <th width="226" align="right" scope="row" >Cidades</th>

	  <td><select id="Cidade" name="Cidade">
					
					
					<?php
						$sql = "SELECT Cidade FROM tab_cidade WHERE Cidade <> 'null' ORDER BY Cidade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Cidade"];
					?>
<option value="<?php echo $reg["Cidade"];?>" <?php if ($reg["Cidade"] == $dado_adm['Cidade']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["Cidade"];?></option>
					<?php
					}
					?>
				</select> 
	      <span class="style4"></span></td>
    </tr>
       
                   
                         <tr>
       <th width="226" align="right" scope="row" >Sexo</th>

				<td><select id="sexo" name="sexo">
					
					
					<?php
						$sql = "SELECT sexo FROM tab_sexo WHERE sexo <> 'null' ORDER BY sexo ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["sexo"];
					?>
<option value="<?php echo $reg["sexo"];?>" <?php if ($reg["sexo"] == $dado_adm['sexo']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["sexo"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                                            <tr>
      <th width="226" align="right" scope="row" >Escolaridade</th>

				<td><select id="escolaridade" name="escolaridade">
					
					
					<?php
						$sql = "SELECT escolaridade FROM tab_escolaridade WHERE escolaridade <> 'null' ORDER BY escolaridade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["escolaridade"];
					?>
<option value="<?php echo $reg["escolaridade"];?>" <?php if ($reg["escolaridade"] == $dado_adm['escolaridade']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["escolaridade"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                   
                                                <tr>
       <th width="226" align="right" scope="row" >Formação</th>

				<td><select id="formacao" name="formacao">
					
					
					<?php
						$sql = "SELECT formacao FROM tab_formacao WHERE formacao <> 'null' ORDER BY formacao ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["formacao"];
					?>
<option value="<?php echo $reg["formacao"];?>" <?php if ($reg["formacao"] == $dado_adm['formacao']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["formacao"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                   
                                               <tr>
       <th width="226" align="right" scope="row" >Filhos</th>

				<td><select id="filhos" name="filhos">
					
					
					<?php
						$sql = "SELECT filhos FROM tab_filhos WHERE filhos <> 'null' ORDER BY filhos ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["filhos"];
					?>
<option value="<?php echo $reg["filhos"];?>" <?php if ($reg["filhos"] == $dado_adm['filhos']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["filhos"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr>                   
                   
                   
                   
                   
                   
                   <tr>
       <th width="226" align="right" scope="row" >Estados</th>

				<td><select id="estado" name="estado">
					
					
					<?php
						$sql = "SELECT estado FROM tab_estado WHERE estado <> 'null' ORDER BY estado ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["estado"];
					?>
<option value="<?php echo $reg["estado"];?>" <?php if ($reg["estado"] == $dado_adm['Estado']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["estado"];?></option>>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                   
                   
                                       <tr>
      <th width="226" align="right" scope="row" >Unidades</th>

				<td><select id="unidade" name="unidade">
					
					
					<?php
						$sql = "SELECT unidade FROM tab_unidade WHERE unidade <> 'null' ORDER BY unidade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["unidade"];
					?>
<option value="<?php echo $reg["unidade"];?>" <?php if ($reg["unidade"] == $dado_adm['unidade']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["unidade"];?></option>>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                   
                           <tr>
       <th width="226" align="right" scope="row" >Bolsa</th>

				<td><select id="bolsista" name="bolsista">
					
					
					<?php
						$sql = "SELECT bolsista FROM tab_bolsista WHERE bolsista <> 'null' ORDER BY bolsista ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["bolsista"];
					?>
<option value="<?php echo $reg["bolsista"];?>" <?php if ($reg["bolsista"] == $dado_adm['bolsista']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["bolsista"];?></option>>
					<?php
					}
					?>
				</select> </td>
    </tr>
