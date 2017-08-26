    <tr>
      <th width="226" align="right" scope="row" >Empresa</th>
		<td><select name="empresa" id="empresa">
					
					
					<?php

							
							$id2 = "CNPQ";
							
							
					?>
<option value="CNPQ" <?php if ($id2 == $dado_adm['empresa']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $id2;?></option>

		</select> </td>
    </tr>