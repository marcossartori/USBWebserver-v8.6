<tr>
     <th width="226" align="right" scope="row" >Empresa</th>

				<td><select id="empresa" name="empresa">
					
					
					<?php
						$sql = "SELECT empresa FROM tab_empresa WHERE empresa <> 'null' and vinculo <> 'Terceirizado' and vinculo <> 'Estagiario' and vinculo <> 'Bolsista' ORDER BY empresa ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["empresa"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
                    
                    
                    
				</select> 	

                    
                    <a href="http://localhost/sistema/Empresas/cadastrar_empresa.php"> Nova</a>

</td>
    </tr>