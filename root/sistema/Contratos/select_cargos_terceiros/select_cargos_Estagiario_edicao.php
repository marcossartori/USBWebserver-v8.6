            <tr>
<th width="226" align="right" scope="row" >Cargo: </th>

				<td><select id="cargo" name="cargo">
					
					
					<?php
						$sql = "SELECT cargo,id FROM tab_cargo WHERE cargo <> 'null' and vinculo <> 'Mapa' and vinculo <> 'Terceirizados' and vinculo <> 'Bolsistas'  and n_contrato = '{$_SESSION['n_contrato']}' ORDER BY cargo ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg['cargo'];
					?>
<option value="<?php echo $reg["id"];?>" <?php if ($reg["id"] == $dado_adm['cargo']) { echo "SELECTED"; } else { echo ""; }; ?>><?php 

//echo $id = utf8_decode($reg['cargo']);
echo $id = $reg['cargo'];


?></option>
					<?php
					}
					?>
				</select> </td>
    </tr>
    
    
    
    