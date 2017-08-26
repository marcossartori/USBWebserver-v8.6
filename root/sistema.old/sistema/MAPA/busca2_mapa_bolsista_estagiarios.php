<?php
include('C:\wamp\www\sistema\validacao\dbconexao.php');
// Informações da query
$campos_query = "*";
$final_query  = "FROM contratos where 

(tipo_contrato = 'Mapa' and '{$_SESSION['Acesso2']}' = 'Mapa') 

or (tipo_contrato = 'Terceirizados' and '{$_SESSION['Acesso2']}' = 'Terceirizados')
or (tipo_contrato = 'Bolsistas' and '{$_SESSION['Acesso2']}' = 'Bolsistas')
or (tipo_contrato = 'Estagiarios' and '{$_SESSION['Acesso2']}' = 'Mapa')

or (tipo_contrato = 'Bolsistas' and '{$_SESSION['Acesso3']}' = 'Bolsistas')
or (tipo_contrato = 'Terceirizados' and '{$_SESSION['Acesso3']}' = 'Terceirizados')
or (tipo_contrato = 'Estagiarios' and '{$_SESSION['Acesso3']}' = 'Mapa')
or (tipo_contrato = 'Mapa' and '{$_SESSION['Acesso3']}' = 'Mapa') 

or (tipo_contrato = 'Bolsistas' and '{$_SESSION['Acesso4']}' = 'Bolsistas')
or (tipo_contrato = 'Terceirizados' and '{$_SESSION['Acesso4']}' = 'Terceirizados')
or (tipo_contrato = 'Estagiarios' and '{$_SESSION['Acesso4']}' = 'Mapa')
or (tipo_contrato = 'Mapa' and '{$_SESSION['Acesso4']}' = 'Mapa') 

and Ativo = 'Sim' ORDER BY n_contrato ASC";
 
// Maximo de registros por pagina
$maximo = 7;
 
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
<table align="center"cellspacing="1" style="width:750; text-align:center; border:0; font-size:13px; background-color:#FFF">



<tr>
        
        <td colspan="2" align="center" style="font-size:13px; color:#333; text-align:center; vertical-align:middle;  font-weight:bold;
    		
            			width:700; ">
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
 
 <b><?php include('C:\wamp\www\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
            
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
			echo "http://localhost/sistema/MAPA/visualizar_edit_mapa_bolsista_estagiarios.php?id=";
			echo $linha->id;
			echo "'>";
			echo $linha->n_contrato; echo "</a>";
			
		echo "</td>";
				
						
					
 					
					echo "<td style=\" text-align:center; width:0;\">";
	
			echo "<a href='"; 
			echo "http://localhost/sistema/Empresas/visualizar_edit_empresa.php?id=";
			echo $linha->id;
			echo "'>";
			echo $linha->empresa; echo "</a>";
			
		echo "</td>";
		

 					echo "<td style=\" text-align:center; width:100;\">&nbsp;$linha->vigencia</td>";
					echo "<td style=\" text-align:center; width:100;\">&nbsp;$linha->valor_contrato</td>";
					echo "<td style=\" text-align:center; width:100;\">&nbsp;$linha->valor_mensal</td>";
					

					
					
 					
 					}
			
?>
 <?php
// FIM DO CONTEUDO
###################################################################################


?>
</table>
