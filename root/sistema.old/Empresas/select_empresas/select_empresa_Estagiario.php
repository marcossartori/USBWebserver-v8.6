<tr>
     <th width="226" align="right" scope="row" >Empresa</th>

				<td><select onchange="document.getElementById('empresa').value=this.value">
                 <option value="">Selecione
					
					
					<?php
						$sql = "SELECT empresa FROM tab_empresa WHERE empresa <> 'null' and vinculo <> 'Terceirizado' and vinculo <> 'Mapa' and vinculo <> 'Bolsistas' ORDER BY empresa ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["empresa"];
							$id2 = $reg["id"];
					?>
		  <option value= "<?php print ("$id2");?>"><?php print("$id");?> 
		  </option>
					<?php
					}	
					?>
		</select>	

 <input name="empresa" type="hidden" class="input-p"  id="empresa" size="10" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly" />
	      		  <?php
		  
		   echo "<script type=\"text/javascript\">				
           function abrir(URL) {  var width = 600;  var height = 650;  var left = 400;  var top = 100;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } 
          </script>";
		  
		echo "<a href=javascript:abrir('"; 
		echo "../../sistema/Empresas/cadastrar_empresa.php";

		echo "')>";
		echo '<span data-tooltip class="has-tip" title="Inseri cagos a esse contrato">Nova</span>';
		echo "</a>";	echo "   ";                  
?></td>
                    
                    

</td>
    </tr>