            <tr>
<th width="226" align="right" scope="row" >Cargo*</th>

				<td><select id="cargo" name="cargo">
					
					
					<?php
						$sql = "SELECT cargo FROM tab_cargo WHERE cargo <> 'null' and vinculo <> 'Terceirizados' and vinculo <> 'Estagiarios' and vinculo <> 'Bolsistas' ORDER BY cargo ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["cargo"];
					?>
<option value="<?php echo $reg["cargo"];?>" <?php if ($reg["cargo"] == $dado_adm['cargo']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["cargo"];?></option>
					<?php
					}
					?>
				</select> 	<a href ="http://localhost/sistema/Cargos/cadastrar_cargos.php"> Novo</a> </td>
    </tr>