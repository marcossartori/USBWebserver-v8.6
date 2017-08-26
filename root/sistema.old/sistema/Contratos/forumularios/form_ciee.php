 <tr>
<th width="226" align="right" scope="row" >Cidades*</th>

	  <td><select id="Cidade" name="Cidade">
      <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Cidade FROM tab_cidade WHERE Cidade <> 'null' ORDER BY Cidade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Cidade"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> 
	      <span class="style4"></span></td>
    </tr>


                         <tr>
     <th width="226" align="right" scope="row" >Sexo</th>

				<td><select id="sexo" name="sexo">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT sexo FROM tab_sexo WHERE sexo <> 'null' ORDER BY sexo ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["sexo"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                                            <tr>
               
               <th width="226" align="right" scope="row" >Escolaridade</th>


				<td><select id="escolaridade" name="escolaridade">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT escolaridade FROM tab_escolaridade WHERE escolaridade <> 'null' ORDER BY escolaridade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["escolaridade"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                   
                                                <tr>
       <th width="226" align="right" scope="row" >Formação</th>

				<td><select id="formacao" name="formacao">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT formacao FROM tab_formacao WHERE formacao <> 'null' ORDER BY formacao ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["formacao"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                   
                                               <tr>
       <th width="226" align="right" scope="row" >Filhos</th>

				<td><select id="filhos" name="filhos">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT filhos FROM tab_filhos WHERE filhos <> 'null' ORDER BY filhos ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["filhos"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr>                   
                   
                   
                   
                   
                   
                   <tr>
       <th width="226" align="right" scope="row" >Estados</th>

				<td><select id="estado" name="estado">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT estado FROM tab_estado WHERE estado <> 'null' ORDER BY estado ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["estado"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                   
                   
                                       <tr>
      <th width="226" align="right" scope="row" >Unidades</th>

				<td><select id="unidade" name="unidade">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT unidade FROM tab_unidade WHERE unidade <> 'null' ORDER BY unidade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["unidade"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr>

