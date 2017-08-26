<body link="##063" vlink="##063" alink="##063">


 	<table cellspacing="0" cellpading="0" style="	width:475;
    												height:140;
                    								border:0;
                    								font-family:Arial, Helvetica, sans-serif;
                   									font-size:11;
                                    				background-color:#FFF;
                                    				text-align:center;
                                                    margin:0px;">
                                    
  		<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;
    		
            			height:20px;">
                        
<b><a href="http://localhost/sistema/MAPA/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1" style="text-decoration:none">Home  |</a></b>
 <a href="http://localhost/sistema/altera_senha.php" style="text-decoration:none">  Alterar Senha  |</a>
 <!-- <a href="cadastrar_mapa_bolsista_estagiarios.php"> | Cadastrar Contratos</a> -->
 <b><a href="http://localhost/sistema/MAPA/cadastrar_funcionario_mapa_bolsista_estagiarios.php" style="text-decoration:none"> Adicionar Funcionario   </a></b>
            
        </td>

		</tr>
        
        
        
 	<tr>
   
<td colspan="2" align="center" style="font-size:15px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;">Atualizaçoes</td>
        
	</tr>


  		
  		<tr>
        
  		  	<td colspan="2" align="center">
          
          	<?php 	
			
			$idGet = $_GET['id'];
			$linha_adm = "SELECT * FROM funcionarios, desativa_func WHERE desativa_func.nome_funcionario = funcionarios.nome_funcionario AND funcionarios.id = $idGet";

					if(!empty($_GET['pesquisa'])){
						$pes = $_GET['pesquisa'];
    					$linha_adm .= " WHERE usuario LIKE '%$pes%'";
					
 					}

 					include('C:\wamp\www\sistema\validacao\dbconexao.php');

 					$resultado = mysql_query($linha_adm,$conexao);
 
 			?> 
          
          	<center>
          
          	<table cellspacing="1" style="width:580; text-align:center; border:0; font-size:12px; background-color:#FFF">
  				
               	<tr style="background-color:#063; color:#D6D6D6;">
                
    				<td>Data</td>
    				<td>Hora</td>
                    <td>Data de Saída</td>
                    <td>Desativado por:</td>
                    <td>Funcionário</td>
                  <td>Motivo</td>

  				</tr>        
                
                <?php  $cor= 'c0c0c0'; 
				
				
				
				while ( $dado_adm = mysql_fetch_array($resultado)) {
 					
					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
 				echo "<td style=\" text-align:center; width:100;\">";
				echo $dado_adm['Data']; echo "</a>";
				echo "</td>";
				
				
					echo "<td style=\" text-align:center; width:100;\">";
					echo $dado_adm['Hora']; echo "</a>";
					echo "</td>";
					
				echo "<td style=\" text-align:center; width:100;\">";
				echo $dado_adm['data_saida']; echo "</a>";
				echo "</td>";
				
					echo "<td style=\" text-align:center; width:100;\">";
					echo $dado_adm['usuario']; echo "</a>";
					echo "</td>";
					
					
						echo "<td style=\" text-align:center; width:100;\">";
					echo $dado_adm['nome_funcionario']; echo "</a>";
					echo "</td>";

					echo "<td style=\" text-align:center; width:500;\">";
					$texto = $dado_adm['descricao2'];
					$novo_texto = wordwrap( $texto, 35, "\n", 1);
					echo "$novo_texto\n"; echo "</a>";
					echo "</td>";
					
					
					
			

 					}
 					
					?>
				
                    
          <tr>
                
               		<td colspan="4">&nbsp;</td>
                
                </tr>
                
                
		</table>
        
        </center>


    </table>



 
