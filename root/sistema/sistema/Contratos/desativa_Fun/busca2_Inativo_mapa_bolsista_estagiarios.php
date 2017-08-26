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
                        
 <b><?php include('C:\wamp\www\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
            
        </td>

		</tr>
        
        
        
 	<tr>
   
<td colspan="2" align="center" style="font-size:15px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;">Histórico do Funcionário</td>
        
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
          
          	<table cellspacing="1" style="width:800; text-align:center; border:0; font-size:12px; background-color:#FFF">
  				
               	<tr style="background-color:#063; color:#D6D6D6;">
                <td>Ação</td>
                <td>Funcionário</td>
                <td>usuário</td>
    				<td>Modificado</td>
    				<td>Hora</td>
                    <td> Saída/Entrada</td>
                    <td>Unidade</td>
                    <td>Contrato</td>
                  <td>Motivo</td>
                  

  				</tr>        
                
                <?php  $cor= 'c0c0c0'; 
				
				
				
				while ( $dado_adm = mysql_fetch_array($resultado)) {
 					
					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
					
					
					
							switch ($dado_adm['acao']) {
	 						case 'Ativado' : $dado_adm['acao'] = "Ativado"; $cormas2 = "#00F";break;
	 						case 'Desativado' : $dado_adm['acao'] = "Desativado"; $cormas2 = "#F00";break;

 					}
					
					
				echo "<td style=\" color:$cormas2; text-align:center; width:150;\">";
				echo $dado_adm['acao']; echo "</a>";
				echo "</td>";
					
					
					
					echo "<td style=\" text-align:center; width:100;\">";
					echo $dado_adm['nome_funcionario']; echo "</a>";
					echo "</td>";
					
					
					echo "<td style=\" text-align:center; width:100;\">";
					echo $dado_adm['usuario']; echo "</a>";
					echo "</td>";
					
					
 				echo "<td style=\" text-align:center; width:350;\">";
				echo $dado_adm['Data']; echo "</a>";
				echo "</td>";
				
				
					echo "<td style=\" text-align:center; width:100;\">";
					echo $dado_adm['Hora']; echo "</a>";
					echo "</td>";
					
				echo "<td style=\" text-align:center; width:380;\">";
				echo $dado_adm['data_saida']; echo "</a>";
				echo "</td>";
				
				
				echo "<td style=\" text-align:center; width:150;\">";
				echo $dado_adm['unidade']; echo "</a>";
				echo "</td>";
				

				echo "<td style=\" text-align:center; width:150;\">";
				echo $dado_adm['n_contrato']; echo "</a>";
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



 
