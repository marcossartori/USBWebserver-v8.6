<body link="##063" vlink="##063" alink="##063">
<center>


<div id=tabela Style="overflow:scroll; padding: 0px; position: absolute; height:455px; Left: 400; top: 150; width: 140%">
 
 <br />
<br />
<br />
 	<table cellspacing="0" cellpading="0" style="	width:475;
    												height:140;
                    								border:0;
                    								font-family:Arial, Helvetica, sans-serif;
                   									font-size:11;
                                    				background-color:#FFF;
                                    				text-align:center;
                                                    margin:30px;">
                                    

        
        
        
 	<tr>
   
		<td colspan="2" style="font-size:15px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;">Lista das empresas</td>
        
	</tr>


  		
  		<tr>
        
  		  	<td colspan="2">
          
          	<?php 	$linha_adm = "SELECT * FROM tab_empresa where  ('{$_SESSION['nome']}' = fiscal_sub_1 OR '{$_SESSION['nome']}' = fiscal_sub_2 OR '{$_SESSION['nome']}' = fiscal_sub_3 OR '{$_SESSION['nome']}' = fiscal_sub_4 OR '{$_SESSION['nome']}'= fiscal)";

					if(!empty($_GET['pesquisa'])){
						$pes = $_GET['pesquisa'];
    					$linha_adm .= " WHERE empresa LIKE '%$pes%'";
					
 					}

 					include('..\..\sistema\validacao\dbconexao.php');

 					$resultado = mysql_query($linha_adm,$conexao);
 
 			?> 
          
          	<center>
          
          	<table cellspacing="1" style="width:474; text-align:center; border:0; font-size:12px; background-color:#FFF">
  				
               	<tr style="background-color:#000; color:#FFF;">
                
    				<td>Empresa</td>
    				<td>CNPJ</td>
    				<td>Endereco</td>
    				<td>CEP</td>
    				<td>Telefone</td>
                    <td>Preposto</td>
                    <td>Nome_Fantasia</td>
                    
  				</tr>        
                
                <?php  $cor= 'c0c0c0'; 
				
				
				
				while ( $dado_adm = mysql_fetch_array($resultado)) {
 					
					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
 				echo "<td>";
	
			echo "<a href='"; 
			echo "http://localhost/sistema/visualizar_edit_empresa.php?id=";
			echo $dado_adm['id'];
			echo "'>";
			echo $dado_adm['empresa']; echo "</a>";
			
		echo "</td>";
				
						
					

					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['CNPJ']}</td>";
 					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['Endereco']}</td>";
					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['CEP']}</td>";
					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['Telefone']}</td>";
					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['Preposto']}</td>";
					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['Nome_Fantasia']}</td>";
					
					
 					
 					}
 					
					?>
				
                    
                <tr>
                
               		<td colspan="4">&nbsp;</td>
                
                </tr>
                
                
		</table>
        
        </center>


    	</table>
        </div>

	</center>
 
