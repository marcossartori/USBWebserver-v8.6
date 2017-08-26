<?php
include('..\..\..\sistema\validacao\dbconexao.php');
// Informaes da query
$campos_query = "*";


$final_query  = "FROM funcionarios WHERE Ativo='Nao'";
 
// Maximo de registros por pagina
$maximo = 12;
 
// Declarao da pagina inicial
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
// INICIO DO CONTEDO
 
// Realizamos a query
$sql = mysql_query("SELECT $campos_query $final_query LIMIT $inicio,$maximo");
 
// Exibimos os nomes dos produtos e seus repectivos valores

?>

    <table  align="center" cellspacing="1" style="width:800; text-align:center; border:0; font-size:12px; background-color:#FFF">
    
    

<tr>
        
        <td align="center" colspan="2"  style="font-size:13px; color:#333; text-align:center; vertical-align:middle;  font-weight:bold;
    		
            			width:800; height:20px;">

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
		echo " <a href=".$_SERVER['PHP_SELF']."?pagina=$mais>proxima</a>";
	}
}
?>

       <b><?php include('..\..\..\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
</td>

		</tr>
</table>

        <table align="center" cellspacing="1" style="width:800; text-align:center; border:0; font-size:13px; background-color:#FFF">
  				
               	<tr style="background-color:#666; color:#FFF;">

                
    				<td>Nome</td>
    				<td>Telefone</td>
    				<td>Unidade</td>
                    <td>Data de Nascimento</td>
                    <td>Escolaridade</td>
                    <td>Ativar</td>


  				</tr> 

<?php  $cor= 'c0c0c0'; 

while ($linha = mysql_fetch_object($sql)) {
	


					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
 				echo "<td style=\" text-align:center; width:0;\">";
	
			echo "<a href='"; 
			echo "../../../sistema/Contratos/visualizar_edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $linha->id;
			echo "'>";
			echo $linha->nome_funcionario; echo "</a>";
			
		echo "</td>";
				

		

 				
					echo "<td style=\" text-align:center; width:100;\">$linha->telefone</td>";
					
					
					
																	$linhaid=$linha->unidade;
			$linha_adm7 = "SELECT * FROM tab_unidade where id_unidade='$linhaid'";
			
			 			include('..\..\..\sistema\validacao\dbconexao.php');

 			$resultado7 = mysql_query($linha_adm7,$conexao);
			while ( $dado_adm7 = mysql_fetch_array($resultado7)){

		echo '<td style="text-align:center; width:50;">';
		echo $dado_adm7['unidade'];
		echo '</td>';
		
}
					
					
					
					echo "<td style=\" text-align:center; width:80;\">$linha->data_nasc</td>";
					
					
					
					
					
					
					
																					$linhaid=$linha->escolaridade;
			$linha_adm7 = "SELECT * FROM tab_escolaridade where id_esc='$linhaid'";
			
			 			include('..\..\..\sistema\validacao\dbconexao.php');

 			$resultado7 = mysql_query($linha_adm7,$conexao);
			while ( $dado_adm7 = mysql_fetch_array($resultado7)){

		echo '<td style="text-align:center; width:50;">';
		echo $dado_adm7['escolaridade'];
		echo '</td>';
		
}	

			 				echo "<td style=\" text-align:center; width:0;\">";
	
			echo "<a href='"; 
			echo "../../../sistema/Contratos/lista_fun_inativaos/cadastrar_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $linha->id;
			echo "'>";
			$linha->nome_funcionario;
			echo "<b> Ativar </b></a>";
			
		echo "</td>";		
					

					
					

					
					
 					
 					}
			
?>
 <?php
// FIM DO CONTEUDO
###################################################################################


?>
</table>
