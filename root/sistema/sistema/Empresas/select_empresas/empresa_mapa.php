    <tr>
      <th width="226" align="right" scope="row" >Empresa</th>
		<td><select name="empresa" id="empresa">
					
					
					<?php

							
							$id2 = "LANAGRO/RS";
							$id3 = "CIEE";
							
					?>
<option value="LANAGRO/RS" <?php if ($id2 == $dado_adm['empresa']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $id2;?></option>
<option value="CIEE" <?php if ($id3 == $dado_adm['empresa']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $id3;?></option>


		</select> </td>
    </tr>