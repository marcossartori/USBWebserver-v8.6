<?php
include('C:\wamp\www\sistema\validacao\dbconexao.php');
// Informaes da query
$campos_query = "*";


$final_query  = "FROM admin";
 
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

    <table align=""cellspacing="1" style="width:800; text-align:center; border:0; font-size:13px; background-color:#FFF">

<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle;  font-weight:bold;
    		
            			width:750; height:2px;">
           <blockquote>
             <p>
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



          <a href="http://localhost/sistema/Admin/Administrador.php?pagina=1" style="text-decoration:none">  Listar Usuarios   </a>
           	<a href="http://localhost/sistema/Admin/novo_adm.php" style="text-decoration:none"> | Novo Usuario   </a>
               
               
             </p>
        </blockquote></td>

		</tr>
        
        
         <tr style=" background-image:url(http://localhost/sistema/imagens/painel_pesquisa.jpg);
        			color:#FFF;
                    font-size:9px;">
    
    		<td colspan="2" style=" height:50;">
            
            <form action="http://localhost/sistema/Admin/pesquisa.php?pagina=0" method="GET">
  			<label>
    			Pesquisar por Nome:  			</label>
                 
            <input name="pesquisa" type="text" size="18" maxlength="30" value= ""/>
            
            <input name="submit" type="submit" value=" Pesquisar ">
			</form>
            </td>
 
  		</tr>
        
        <tr>
        
          		  	<td colspan="2">
          
          	<?php 	$linha_adm = "SELECT * FROM admin";

					if(!empty($_GET['pesquisa'])){
						$pes = $_GET['pesquisa'];
    					$linha_adm .= " WHERE Nome LIKE '%$pes%'";
 					}

 					include('C:\wamp\www\sistema\validacao\dbconexao.php');

 					$resultado = mysql_query($linha_adm,$conexao);
 
 			?> 
        
</tr>

        <table cellspacing="1" style="width:800; text-align:center; border:0; font-size:11px; background-color:#FFF" align="center">
  				
               	<tr style="background-color:#666; color:#FFF;">

                
    				<td>NOME</td>
    				<td>MASTER</td>
                    <td>Grupo</td>
                    <td>Acesso 1</td>
                    <td>Acesso 2</td>
                    <td>Acesso 3</td>
    				<td>AÇÕES</td>


  				</tr> 

<?php  $cor= 'c0c0c0'; 

while ($linha = mysql_fetch_object($sql)) {

	
					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
					{
					
 					switch ($linha->Master) {
	 						case 's' : $linha->Master = "Sim"; $cormas = "#00F";break;
	 						case 'n' : $linha->Master = "Não"; $cormas = "#F00";break;
 					}
					
					 					switch ($linha->Acesso) {
	 						case 'Terceirizados' : $linha->Acesso = "Terceirizados"; $cormas1 = "#00F";break;
	 						case 'Bolsistas' : $linha->Acesso = "Bolsistas"; $cormas1 = "#00F";break;
							case 'Mapa' : $linha->Acesso = "Mapa"; $cormas1 = "#00F";break;
							case 'Consulta' : $linha->Acesso = "Consulta"; $cormas1 = "#00F";break;
							
							case(!empty($linha->Acesso)) : $linha->Acesso = "Negado"; $cormas1 = "#F00";break;
				
 					}
					
					
										 					switch ($linha->Acesso2) {
	 						case 'Terceirizados' : $linha->Acesso2 = "Terceirizados"; $cormas2 = "#00F";break;
	 						case 'Bolsistas' : $linha->Acesso2 = "Bolsistas"; $cormas2 = "#00F";break;
							case 'Mapa' : $linha->Acesso2 = "Mapa"; $cormas2 = "#00F";break;
							
							case(!empty($linha->Acesso2)) : $linha->Acesso2 = "Negado"; $cormas2 = "#F00";break;
				
 					}
					
					
					
									switch ($linha->Acesso3) {
	 						case 'Terceirizados' : $linha->Acesso3 = "Terceirizados"; $cormas3 = "#00F";break;
	 						case 'Bolsistas' : $linha->Acesso3 = "Bolsistas"; $cormas3 = "#00F";break;
							case 'Mapa' : $linha->Acesso3 = "Mapa"; $cormas3 = "#00F";break;
							
							case(!empty($linha->Acesso3)) : $linha->Acesso3 = "Negado"; $cormas3 = "#F00";break;
				
 					}
					
					
					
					
										switch ($linha->Acesso4) {
	 						case 'Terceirizados' : $linha->Acesso4 = "Terceirizados"; $cormas4 = "#00F";break;
	 						case 'Bolsistas' : $linha->Acesso4 = "Bolsistas"; $cormas4 = "#00F";break;
							case 'Mapa' : $linha->Acesso4 = "Mapa"; $cormas4 = "#00F";break;
							
							case(!empty($linha->Acesso4)) : $linha->Acesso4 = "Negado"; $cormas4 = "#F00";break;
				
 					}
						}
	
	 				echo "<td style=\" text-align:center; width:450;\">&nbsp;$linha->Nome</td>";
					echo "<td style=\" color:$cormas; width:100;\">&nbsp;$linha->Master</td>";
					echo "<td style=\" color:$cormas1; width:100;\">&nbsp;$linha->Acesso</td>";
					echo "<td style=\" color:$cormas2; width:100;\">&nbsp;$linha->Acesso2</td>";
					echo "<td style=\" color:$cormas3; width:100;\">&nbsp;$linha->Acesso3</td>";
					echo "<td style=\" color:$cormas4; width:100;\">&nbsp;$linha->Acesso4</td>";
	


					
					

					
			echo "<td style=\" text-align:center; width:150;\">";
			echo "<a href='"; 
			echo "http://localhost/sistema/Admin/editar_adm.php?id_adm=";
			echo $linha->Id;
			echo "'  style=\"text-decoration:none\">";
			echo "Editar"; echo "</a>";
			
			
			echo "<a href='"; 
			echo "http://localhost/sistema/Admin/remover_adm.php?id_adm="; 
			echo $linha->Id;
			
			 
			echo "' onClick=\"return confirm('Deseja EXCLUIR esse Usuário do Banco de Dados?')\"  style=\"text-decoration:none\">";
			
			echo " | Deletar"; echo  "</a>";
			
		echo "</td>";

 					}
			
?>
 <?php
// FIM DO CONTEUDO
###################################################################################


?>
</table>
