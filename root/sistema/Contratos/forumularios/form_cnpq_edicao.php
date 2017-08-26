  <tr>
      <th align="right" scope="row"><span class="style4"><div class="style4" >Estado<span class="style2">*</span></div></th>

		  <td>
          <label for="cod_estados"></label>
          <select id="cod_estados" name="cod_estados">
			
			<?php
			
			
			
				$sql = "SELECT cod_estados, sigla
						FROM estados
						ORDER BY sigla";
				$res = mysql_query( $sql );
			
	while ( $row = mysql_fetch_assoc( $res ) )
				
						{
							$row ["cod_estados"];
							$row ["sigla"];
					?>
<option value="<?php echo $row ["cod_estados"];?>" <?php if ($row ["cod_estados"] == $dado_adm['Estado']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $row ["sigla"]?></option>
					<?php
					}
					?>
				</select>
         </td>
    </tr>

   <tr>

       <th align="right" scope="row"><span class="style4"><div class="style4" >Cidade:<span class="style2">*</span></div></th>
   <td ><span class="carregando">Aguarde, carregando...</span>
	  <select name="cod_cidades" onchange="test(this)" id="cod_cidades">
<?php
			

			
				$sql = "SELECT cod_cidades, nome
						FROM cidades
						ORDER BY nome";
				$res = mysql_query( $sql );
				while ( $row = mysql_fetch_assoc( $res ) )
					
	{
							$row ["cod_cidades"];
							$row ["nome"];
					?>
<option value="<?php echo $row ["cod_cidades"];?>" <?php if ($row ["cod_cidades"] == $dado_adm['Cidade']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $row['nome'];?></option>
					<?php
					}
					?>
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
						$sql = "SELECT escolaridade,id_esc FROM tab_escolaridade WHERE escolaridade <> 'null' ORDER BY escolaridade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg['escolaridade'];
							
					?>
<option value="<?php echo $reg["id_esc"];?>" <?php if ($reg["id_esc"] == $dado_adm['escolaridade']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["escolaridade"];?></option>
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
							$id = utf8_encode($reg['formacao']);
					?>
<option value="<?php echo $reg["id_form"];?>" <?php if ($reg["id_form"] == $dado_adm['formacao']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["formacao"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                   
                                               <tr>
       <th width="226" align="right" scope="row" >Filho</th>

				<td><select id="filhos" name="filhos">
                 <option value="">Selecione
					
					
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
      <th width="226" align="right" scope="row" >Unidade</th>

				<td><select id="unidade" name="unidade">
                 <option value="">Selecione
					
					
					<?php
						$sql = "SELECT unidade,id_unidade FROM tab_unidade WHERE unidade <> 'null' ORDER BY unidade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = utf8_encode($reg['unidade']);
					?>
<option value="<?php echo $reg["id_unidade"];?>" <?php if ($reg["id_unidade"] == $dado_adm['unidade']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["unidade"];?></option>>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                   
                           <tr>
       <th width="226" align="right" scope="row" >Bolsa</th>

				<td><select id="bolsista" name="bolsista">
                 <option value="">Selecione
					
					
					<?php
						$sql = "SELECT bolsista,id_bolsa FROM tab_bolsista WHERE bolsista <> 'null' ORDER BY bolsista ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg['bolsista'];
					?>
<option value="<?php echo $reg["id_bolsa"];?>" <?php if ($reg["id_bolsa"] == $dado_adm['bolsista']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["bolsista"];?></option>>
					<?php
					}
					?>
				</select> </td>
    </tr>
