         <tr>
       <th align="right" scope="row"><span class="style4"><div class="style4" >Estado:<span class="style2">*</span></div></th>
      <td >
		<label for="cod_estados"></label>
		<select name="cod_estados" id="cod_estados">
			<option value="">Selecione</option>
			<?php
				$sql = "SELECT cod_estados, sigla
						FROM estados
						ORDER BY sigla";
				$res = mysql_query( $sql );
				while ( $row = mysql_fetch_assoc( $res ) ) {
					echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
				}
			?>
		</select>
         </td>
    </tr>
        
        
       <th align="right" scope="row"><span class="style4"><div class="style4" >Cidade:<span class="style2">*</span></div></th>
      <td 

		<label for="cod_cidades"></label>
		<span class="carregando">Aguarde, carregando...</span>
		<select name="cod_cidades" id="cod_cidades">
			<option value="">-- Escolha um estado --</option>
		</select>

		

		<script type="text/javascript">
		$(function(){
			$('#cod_estados').change(function(){
				if( $(this).val() ) {
					$('#cod_cidades').hide();
					$('.carregando').show();
					$.getJSON('cidades.ajax.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value=""></option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].cod_cidades + '">' + j[i].nome + '</option>';
						}	
						$('#cod_cidades').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#cod_cidades').html('<option value="">– Escolha um estado –</option>');
				}
			});
		});
		</script>
    
          </td>
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
						$sql = "SELECT escolaridade,id_esc FROM tab_escolaridade WHERE escolaridade <> 'null' ORDER BY escolaridade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg['escolaridade'];
							$id2 = $reg['id_esc'];
					?>
					<option value= "<?php print("$id2");?>"><?php print("$id");?>
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
						$sql = "SELECT formacao,id_form FROM tab_formacao WHERE formacao <> 'null' ORDER BY formacao ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg['formacao'];
							$id2 = $reg['id_form'];
					?>
					<option value= "<?php print("$id2");?>"><?php print("$id");?>
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
      <th width="226" align="right" scope="row" >Unidades</th>

				<td><select id="unidade" name="unidade">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT unidade,id_unidade FROM tab_unidade WHERE unidade <> 'null' ORDER BY unidade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg['unidade'];
							$id2 = $reg['id_unidade'];
					?>
					<option value= "<?php print("$id2");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr>

