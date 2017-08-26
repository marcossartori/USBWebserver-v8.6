<table align=""cellspacing="1" style="width:750; text-align:center; border:0; font-size:13px; background-color:#FFF">



<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight:bold;
    		
            			width:750; height:20px;">
    		
            			
          <a href="http:../../sistema/Admin/Administrador.php?pagina=1" style="text-decoration:none">  Listar Usuarios   </a>
           	<a href="http:../../sistema/Admin/novo_adm.php" style="text-decoration:none"> | Novo Usuario   </a>
            
        </td>

		</tr>
        
        
        
        
        
        <tr style=" background-image:url(http:../../sistema/imagens/painel_pesquisa.jpg);
        			color:#FFF;
                    font-size:9px;">
    
    		<td colspan="2" style=" height:50;">

    			Resultados encontrados
            
            </td>
 
  		</tr>
        
  		<tr>
        
  		  	<td colspan="2">
          
          	<?php 	$linha_adm = "SELECT * FROM admin";

					if(!empty($_GET['pesquisa'])){
						$pes = $_GET['pesquisa'];
    					$linha_adm .= " WHERE Nome LIKE '%$pes%'";
 					}

 					include('..\..\sistema\validacao\dbconexao.php');

 					$resultado = mysql_query($linha_adm,$conexao);
 
 			?> 
        
        


        <table cellspacing="1" style="width:750; text-align:center; border:0; font-size:11px; background-color:#FFF">
  				
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
				
				while ( $dado_adm = mysql_fetch_array($resultado)) {
	


					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
					{
					
 					switch ($dado_adm['Master']) {
	 						case 's' : $dado_adm['Master'] = "Sim"; $cormas = "#00F";break;
	 						case 'n' : $dado_adm['Master'] = "Não"; $cormas = "#F00";break;
 					}
					
					 					switch ($dado_adm['Acesso']) {
	 						case 'terceirizado' : $dado_adm['Acesso'] = "Terceirizado"; $cormas1 = "#00F";break;
	 						case 'Bolsistas' : $dado_adm['Acesso'] = "Bolsistas"; $cormas1 = "#00F";break;
							case 'Mapa' : $dado_adm['Acesso'] = "Mapa"; $cormas1 = "#00F";break;
							case 'Consulta' : $dado_adm['Acesso'] = "Consulta"; $cormas1 = "#00F";break;
							
							case(!empty($dado_adm['Acesso'])) : $dado_adm['Acesso'] = "Negado"; $cormas1 = "#F00";break;
				
 					}
					
					
										 					switch ($dado_adm['Acesso2']) {
	 						case 'Terceirizados' : $dado_adm['Acesso2'] = "Terceirizados"; $cormas2 = "#00F";break;
	 						case 'Bolsistas' : $dado_adm['Acesso2'] = "Bolsistas"; $cormas2 = "#00F";break;
							case 'Mapa' : $dado_adm['Acesso2'] = "Mapa"; $cormas2 = "#00F";break;
							
							case(!empty($dado_adm['Acesso2'])) : $dado_adm['Acesso2'] = "Negado"; $cormas2 = "#F00";break;
				
 					}
					
					
					
									switch ($dado_adm['Acesso3']) {
	 						case 'Terceirizados' : $dado_adm['Acesso3'] = "Terceirizados"; $cormas3 = "#00F";break;
	 						case 'Bolsistas' : $dado_adm['Acesso3'] = "Bolsistas"; $cormas3 = "#00F";break;
							case 'Mapa' : $dado_adm['Acesso3'] = "Mapa"; $cormas3 = "#00F";break;
							
							case(!empty($dado_adm['Acesso3'])) : $dado_adm['Acesso3'] = "Negado"; $cormas3 = "#F00";break;
				
 					}
					
					
					
					
										switch ($dado_adm['Acesso4']) {
	 						case 'Terceirizados' : $dado_adm['Acesso4'] = "Terceirizados"; $cormas4 = "#00F";break;
	 						case 'Bolsistas' : $dado_adm['Acesso4'] = "Bolsistas"; $cormas4 = "#00F";break;
							case 'Mapa' : $dado_adm['Acesso4'] = "Mapa"; $cormas4 = "#00F";break;
							
							case(!empty($dado_adm['Acesso4'])) : $dado_adm['Acesso4'] = "Negado"; $cormas4 = "#F00";break;
				
 					}
					
					
					}



 					echo "<td style=\" text-align:center; width:450;\">&nbsp;{$dado_adm['Nome']}</td>";
					echo "<td style=\" color:$cormas; width:100;\">&nbsp;{$dado_adm['Master']}</td>";
					echo "<td style=\" color:$cormas1; width:100;\">&nbsp;{$dado_adm['Acesso']}</td>";
					echo "<td style=\" color:$cormas2; width:100;\">&nbsp;{$dado_adm['Acesso2']}</td>";
					echo "<td style=\" color:$cormas3; width:100;\">&nbsp;{$dado_adm['Acesso3']}</td>";
					echo "<td style=\" color:$cormas4; width:100;\">&nbsp;{$dado_adm['Acesso4']}</td>";

		
					
			echo "<td style=\" text-align:center; width:150;\">";
			echo "<a href='"; 
			echo "http:../../sistema/Admin/editar_adm.php?id_adm=";
			echo $dado_adm['Id'];
			echo "'  style=\"text-decoration:none\">";
			echo "Editar"; echo "</a>";
			
			
			echo "<a href='"; 
			echo "http:../../sistema/Admin/remover_adm.php?id_adm="; 
			echo $dado_adm['Id'];
			
			 
			echo "' onClick=\"return confirm('Deseja EXCLUIR esse Usuário do Banco de Dados?')\"  style=\"text-decoration:none\">";
			
			echo " | Deletar"; echo  "</a>";
			
		echo "</td>";	

					
					
 					
 					}
			
?>


</table>
