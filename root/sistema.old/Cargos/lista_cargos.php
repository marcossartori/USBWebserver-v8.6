<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listagem dos cargos</title>
</head>

<body>
<?php

	include('..\..\sistema\validacao\testa_adm.php');

	$nome = $_SESSION["nome"];
	



$_SESSION["n_contrato"];

?>


  <table width="750"  border="0" align="center"> 



    
 <tr style="background-color:#063; color:#D6D6D6;" align="center">
              
                <td width="420" align="center">Cargos</td>
                <td width="170" align="center">Valor</td>
                <td width="170" align="center">Valor total</td>
                 <td width="170" align="center">Quantidade</td>
                  <td width="170" align="center">Ações</td>
                
                

                  <tr>

                <?php  $cor= 'c0c0c0'; 
				include('..\..\sistema\validacao\dbconexao.php');
			
				$linha_adm3 = "SELECT * FROM tab_cargo where n_contrato='{$_SESSION['n_contrato']}'";
				
				$resultado3 = mysql_query($linha_adm3);
				while ( $dado_adm3 = mysql_fetch_array($resultado3)) {
 					
					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					
					
				echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
				echo "<td style=\" text-align:center; width:60;\">";
				//echo utf8_decode($dado_adm3['cargo']);
				echo $dado_adm3['cargo'];
				echo "</td>";
				
				
				echo "<td style=\" text-align:center; width:60;\">";
				echo $dado_adm3['valor_cargo']; 
				echo "</td>";
				
				
				echo "<td style=\" text-align:center; width:60;\" >";
				
				
				
				
				
				$chars = array(".",",");
               echo $aux=$dado_adm3['quant'] * $quant = str_replace($chars,"",$dado_adm3['valor_cargo']); 

				
			
			
			
				echo "</td>";


				echo "<td style=\" text-align:center; width:60;\">";
				echo $dado_adm3['quant'];
				echo "</td>";


					
			echo "<td style=\" text-align:center; width:150;\">";
			echo "<a href='"; 
			echo "../../sistema/Cargos/editar_cargo.php?id_cargo=";
			echo $dado_adm3['id'];
			echo "'  style=\"text-decoration:none\">";
			echo "Editar"; echo "</a>";
			
			
	/*		echo "<a href='"; 
			echo "http://localhost/sistema/Cargos/remover_cargo.php?id_cargo="; 
			echo $dado_adm3['id'];
			
			 
			echo "' onClick=\"return confirm('Deseja EXCLUIR esse cargo do Banco de Dados?')\"  style=\"text-decoration:none\">";
			
			echo " | Deletar"; echo  "</a>"; */
			
		echo "</td>"; 

			echo "</tr>";

 					}
 					
					?>
          
 
 </table>







</body>
</html>