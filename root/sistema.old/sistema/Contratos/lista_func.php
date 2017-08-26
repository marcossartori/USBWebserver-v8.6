<?php
include('C:\wamp\www\sistema\validacao\dbconexao.php');
// Informaes da query
$campos_query = "*";


$final_query  = "FROM contratos, funcionarios WHERE funcionarios.n_contrato = contratos.n_contrato AND funcionarios.Ativo='Sim' AND funcionarios.n_contrato = '{$_SESSION['n_contrato']}'";
 
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

    <table align=""cellspacing="1" style="width:800; text-align:center; border:0; font-size:12px; background-color:#FFF">
    
    

<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight:bold;
    		
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

 <b><?php include('C:\wamp\www\sistema\validacao\menu\funcionarios\menu_cabecalho_fun.php');?></b>
</td>

		</tr>
        
        
                      <tr>
    
    
    	<td colspan="2" style="font-size:15px; color:#060;">
        
        <p style=" margin:5px; text-align:left; "> 
        Contrato: <b><?php echo $_SESSION['n_contrato'];?> </b>                                                
                
        Empresa: <b><?php echo $empresa = $_SESSION['empresa'];?></b></td>
 
 
 
     	<td colspan="2" style="font-size:20px; color:#060;">
        
          <p style=" margin:5px; text-align:left; "></td>
	</tr> 
        
        
</table>

        <table cellspacing="1" style="width:800; text-align:center; border:0; font-size:11px; background-color:#FFF">
  				
               	<tr style="background-color:#666; color:#FFF;">

                
    				<td>Nome</td>
    				<td>Telefone</td>
    				<td>Unidade</td>
                    <td>Data de Nascimento</td>
                    <td>Escolaridade</td>


  				</tr> 

<?php  $cor= 'c0c0c0'; 

while ($linha = mysql_fetch_object($sql)) {
	


					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
 				echo "<td style=\" text-align:center; width:200;\">";
	
			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/visualizar_edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $linha->id;
			echo "'>";
			echo $linha->nome_funcionario; echo "</a>";
			
		echo "</td>";
				

		

 				
					echo "<td style=\" text-align:center; width:100;\">$linha->telefone</td>";
					echo "<td style=\" text-align:center; width:50;\">$linha->unidade</td>";
					echo "<td style=\" text-align:center; width:80;\">$linha->data_nasc</td>";
					echo "<td style=\" text-align:center; width:80;\">$linha->escolaridade</td>";
					

					
					
 					
 					}
			
?>
 <?php
// FIM DO CONTEUDO
###################################################################################


?>
</table>
