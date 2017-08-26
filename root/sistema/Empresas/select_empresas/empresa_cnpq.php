    <tr>
      <th width="226" align="right" scope="row" >Empresa</th>

				<td><select name="empresa" id="empresa">
					
					
						<?php
						$sql = "SELECT empresa,id FROM tab_empresa WHERE empresa <> 'null' and vinculo <> 'Terceirizados' and vinculo <> 'Estagiarios' and vinculo <> 'Mapa'  ORDER BY empresa ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["empresa"];
							$id2 = $reg["id"];
					?>
<option value="<?php print ("$id2");?>" <?php if ($reg["id"] == $dado_adm['empresa']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["empresa"];?></option>
					<?php
					}
					?>
		</select>


		</td>
    </tr>