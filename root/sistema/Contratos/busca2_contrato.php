
<?php
$_SESSION["email2"];
include('..\validacao\dbconexao.php');
// Informações da query
$campos_query = "*";

$final_query  = "FROM contratos where Ativo = 'Sim' and ('{$_SESSION['id']}' = fiscal_sub_1 OR '{$_SESSION['id']}' = fiscal_sub_2 OR '{$_SESSION['id']}' = fiscal_sub_3 OR '{$_SESSION['id']}' = fiscal_sub_4 OR '{$_SESSION['id']}'= fiscal)
 

 
or (tipo_contrato = 'Terceirizados' and '{$_SESSION['Acesso2']}' = 'Terceirizados')
or (tipo_contrato = 'Bolsistas' and '{$_SESSION['Acesso2']}' = 'Bolsistas')
or (tipo_contrato = 'Estagiarios' and '{$_SESSION['Acesso2']}' = 'Mapa')
or (tipo_contrato = 'Mapa' and '{$_SESSION['Acesso2']}' = 'Mapa')

or (tipo_contrato = 'Terceirizados' and '{$_SESSION['Acesso3']}' = 'Terceirizados')
or (tipo_contrato = 'Bolsistas' and '{$_SESSION['Acesso3']}' = 'Bolsistas')
or (tipo_contrato = 'Estagiarios' and '{$_SESSION['Acesso3']}' = 'Mapa')
or (tipo_contrato = 'Mapa' and '{$_SESSION['Acesso3']}' = 'Mapa')

or (tipo_contrato = 'Bolsistas' and '{$_SESSION['Acesso4']}' = 'Bolsistas')
or (tipo_contrato = 'Terceirizados' and '{$_SESSION['Acesso4']}' = 'Terceirizados')
or (tipo_contrato = 'Estagiarios' and '{$_SESSION['Acesso4']}' = 'Mapa')
or (tipo_contrato = 'Mapa' and '{$_SESSION['Acesso4']}' = 'Mapa') 

ORDER BY n_contrato ASC";
 
// Maximo de registros por pagina
$maximo = 12;
 
// Declaração da pagina inicial
$pagina = $_GET["pagina"];
if($pagina == "") {
    $pagina = "1";
}
 
// Calculando o registro inicial
$inicio = $pagina - 1;
$inicio = $maximo * $inicio;
 
// Conta os resultados no total da query
$strCount = "SELECT COUNT(*) AS 'num_registros' $final_query";
$query = mysql_query($strCount);
$row = mysql_fetch_array($query);
$total = $row["num_registros"];
 
###################################################################################
// INICIO DO CONTEÚDO
 
// Realizamos a query
$sql = mysql_query("SELECT $campos_query $final_query LIMIT $inicio,$maximo");
 
// Exibimos os nomes dos produtos e seus repectivos valores

?>
<table align="center"cellspacing="1" style="width:600; text-align:center; border:0; font-size:13px; background-color:#FFF">



<tr>
        
        <td colspan="2" align="center" style="font-size:13px; color:#333; text-align:center; vertical-align:middle;  font-weight:bold;
    		
            			width:600; ">
           <?php 
$menos = $pagina - 1;
$mais = $pagina + 1;
 
$pgs = ceil($total / $maximo);
 
if($pgs > 1 ) {
 
	echo "<br />";
 
    // Mostragem de pagina
    if($menos > 0) {
		echo "<a href=".$_SERVER['PHP_SELF']."?pagina=$menos>anterior</a>&nbsp; ";
    }
 
    // Listando as paginas
	for($i=1;$i <= $pgs;$i++) {
		if($i != $pagina) {
			echo " <a href=".$_SERVER['PHP_SELF']."?pagina=".($i).">$i</a> | ";
		} else {
			echo " <strong>".$i."</strong> | ";
		}
	}
 
	if($mais <= $pgs) {
		echo " <a href=".$_SERVER['PHP_SELF']."?pagina=$mais>próxima</a>";
	}
}




?>
 
 <b><?php include('..\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
            
        </td>

		</tr>


          	<table align="center"cellspacing="1" style="width:750; text-align:center; border:0; font-size:13px; background-color:#FFF">
            
            
            

            
  				
               	<tr style="background-color:#063; color:#D6D6D6;">
                
    				<td>Contrato</td>
    				<td>Empresa</td>
    				<td>Vigência</td>
    				<td>Valor do contrato</td>
                    <td>Valor mensal</td>

  				</tr> 

<?php  $cor= 'c0c0c0'; 

while ($linha = mysql_fetch_object($sql)) {
	


					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
 				echo "<td style=\" text-align:center; width:0;\">";
	
			echo "<a href='"; 
			echo "../Contratos/visualizar_edit_contrato.php?id=";
			echo $linha->id;
			echo "'>";
			echo $linha->n_contrato; echo "</a>";
			
		echo "</td>";
		
		
		

			
			$linhaid=$linha->empresa;
			$linha_adm3 = "SELECT * FROM tab_empresa where id='$linhaid'";



 					include('..\validacao\dbconexao.php');

 					$resultado3 = mysql_query($linha_adm3,$conexao);
					while ( $dado_adm3 = mysql_fetch_array($resultado3)){
 
 		
			
			
			 {
			 
			echo "<td style=\" text-align:center; width:0;\">";
			echo "<a href='"; 
			echo "../Empresas/visualizar_edit_empresa.php?id=";
			echo $dado_adm3['id'];
			echo "'>";
				
				echo $dado_adm3['empresa']; echo "</a>";
			 }
			 
					}
			
			
			
			
		echo "</td>";

		

 					echo "<td style=\" text-align:center; width:120;\">&nbsp;$linha->vigencia</td>";
					echo "<td style=\" text-align:center; width:120;\">&nbsp;$linha->valor_contrato</td>";
					echo "<td style=\" text-align:center; width:120;\">&nbsp;$linha->valor_mensal</td>";
					

					
					
 					
 					}
			
?>
 <?php
// FIM DO CONTEUDO
###################################################################################


?>
</table>
