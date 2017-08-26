 <tr>
<th width="226" align="right" scope="row" >Cargo*</th>

				<td><select id="cargo" name="cargo">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT cargo,id FROM tab_cargo WHERE cargo <> 'null' and n_contrato = '{$_SESSION['n_contrato']}'  ORDER BY cargo ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							
							$id = $reg['cargo'];
							$id2 = $reg['id'];
					?>
					<option value= "<?php print("$id2");?>"><?php 
					//echo $id = utf8_decode($reg['cargo']);
					echo $id = $reg['cargo'];
					?>
					</option>
					<?php
					}
					?>
				</select></td>
    </tr>