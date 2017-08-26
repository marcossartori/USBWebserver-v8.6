    <tr>
      <th width="226" align="right" scope="row" >Empresa</th>

				<td><select name="empresa" id="empresa">
					
					
					<?php
						$sql = "SELECT empresa FROM tab_empresa WHERE empresa <> 'null' and empresa <> 'CIEE' and empresa <> 'LANAGRO/RS'  and empresa <> 'CNPQ' ORDER BY empresa ASC";
						
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["empresa"];
					?>
<option value="<?php echo $reg["empresa"];?>" <?php if ($reg["empresa"] == $dado_adm['empresa']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["empresa"];?></option>
					<?php
					}
					?>
		</select> </td>
    </tr>