       <?php
	   
	   
	   
 $_SESSION["id_fun"];	  
 $_SESSION["nome_funcionario"];
 $_SESSION["Cidade"];
 $_SESSION["celular"];		
 $_SESSION["Estado"];		   
 $_SESSION["formacao"];
 $_SESSION["telefone"];
 $_SESSION["data_nasc"];
 $_SESSION["ini_lanagro"];
 $_SESSION["email"];
 $_SESSION["nome"];
 $_SESSION["natura"];
 $_SESSION["endereco"];
 $_SESSION["Numero"];
 $_SESSION["Complemento"];
 $_SESSION["Bairro"];
 $_SESSION["cargo"];
 $_SESSION["tipo_contrato"];
 $_SESSION["sexo"];
 $_SESSION["escolaridade"];
 $_SESSION["filhos"];
 $_SESSION["unidade"];
 $_SESSION["tipo_contrato"];
 $_SESSION["obs"];
 
 $_SESSION["data_entrada_ev"];
 $_SESSION["data_saida_ev"];
 

?> 
<body link="##063" vlink="##063" alink="##063">


 	<table width="800" cellspacing="0" style="	width:800;
    												height:140;
                    								border:0;
                    								font-family:Arial, Helvetica, sans-serif;
                   									font-size:11;
                                    				background-color:#FFF;
                                    				text-align:center;
                                                    margin:0px;" cellpading="0">
                                    
  		
        
        
        
          <tr align="center">
    
    
    	<td colspan="2" style="font-size:15px; color:#060;">
        <hr style=" width:800px; text-align:center;">
        <p style=" margin:15px; text-align:justify; "> 
        <b>   Histórico de movimentação do funcionário<b>

                                                                   
        <hr style=" width:800px; text-align:center;"></p>        </td>
        
 
	</tr>
    
        
        
        
        
        
        <tr>

        <td width="851" colspan="2" align="center" style="font-size:11px;  text-align:center; vertical-align:middle; height:40px; font-weight: bold;
    		
            			height:20px;">
                        
 <b><?php include('..\..\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
<p>&nbsp;</p>

            
        </td>

		</tr>
        
        
        
 <tr>

	      		 <td  style="text-align:left;
            						
                                    font-size:12px; color:#063;
            						">
                                     
                                  Funcionário(a):
								     


<?php 
			echo "<a href='"; 
			echo "../../Contratos/visualizar_edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"];
			echo "'>";
			echo $_SESSION['nome_funcionario']; echo "</a>"; ?>
                                    
                                 
								    
    	 </td> 
		 
		  
   </tr>


  		
  		<tr>
        
  		  	<td colspan="2" align="center">
          
          	<?php 	
			
			$idGet = $_GET['id'];
			$linha_adm = "SELECT * FROM desativa_func WHERE id_fun = $idGet or nome_funcionario='{$_SESSION['nome_funcionario']}'";


 					include('..\..\validacao\dbconexao.php');

 					$resultado = mysql_query($linha_adm,$conexao);
 
 			?> 
          
          

          
          

            
            
            
          
          	<table cellspacing="1" style="width:855; text-align:center; border:0; font-size:11px; ">

                                        <tr>
                        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center;   font-weight: bold;"><p>
                        
                        
                        
                        <?php
                        			echo "<a href='"; 
			echo "dados_modificados.php?id=";
			echo $_SESSION["id_fun"];
			echo "'>";
			
			echo " Dados modificados  ";  echo "</a>";
			
			?>
</p>
      </td>
	  
	  
	  
	  
 <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center;   font-weight: bold;"><p>
                        
                        
                        
                        <?php
						
			echo "<a href='"; 
			echo "../../Contratos/eventual/link2_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"];
			echo "'>";
		    
			
			echo "Funcionário Eventual";  echo "</a>";
			
			?>
</p>
      </td>	
      
      
      
      
      
      
     <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center;   font-weight: bold;"><p>
                        
                        
                        
                        <?php
						
			echo "<a href='"; 
			echo "../../Contratos/afastamentos/afastamento.php?id=";
			echo $_SESSION["id_fun"];
			echo "'>";
		    echo " Afastamentos  ";  echo "</a>";
			
			?>
</p>
      </td>	  
      
      
      
      
      
        
 
	  </tr>
        
            
  				
               	<tr style="background-color:#063; color:#D6D6D6;">
                <td width="60">Ação</td>
                <td width="60">usuário</td>
    				<td width="170">Data</td>
    				<td width="60">Hora</td>
                    <td width="60"> Saída/Entrada</td>
                    <td width="60">Unidade</td>
                    <td width="60">Contrato</td>
                  <td width="60">Cargo</td>
                   <td width="200">Decrição</td>
                  

  				</tr>        
                
                <?php  $cor= 'c0c0c0'; 
				
				
				
				while ( $dado_adm = mysql_fetch_array($resultado)) {
 					
					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
				
					
					
					
					
							switch ($dado_adm['acao']) {
	 						case 'Ativado' : $dado_adm['acao'] = "Ativado"; $cormas2 = "#009900";break; 
	 						case 'Desativado' : $dado_adm['acao'] = "Desativado"; $cormas2 = "#F00";break;
							case 'Atualização' : $dado_adm['acao'] = "Atualização"; $cormas2 = "#0066FF";break;

 					}
					
					
					
						echo "<tr style=\" text-align:center; background-color:#$cor;\">";	
					
				echo "<td style=\" color:$cormas2; text-align:center; width:60;\">";
				echo $dado_adm['acao']; echo "</a>";
				echo "</td>";
				
					

					echo "<td style=\" text-align:center; width:60;\">";
					//echo utf8_encode($dado_adm['usuario']); echo "</a>";
					echo $dado_adm['usuario']; echo "</a>";
					echo "</td>";
					
					
 				echo "<td style=\" text-align:center; width:170;\">";
				echo $dado_adm['Data']; echo "</a>";
				echo "</td>";
				
				
					echo "<td style=\" text-align:center; width:60;\">";
					echo $dado_adm['Hora']; echo "</a>";
					echo "</td>";
					
				echo "<td style=\" text-align:center; width:60;\">";
				echo $dado_adm['data_adm']; echo "</a>";
				echo "</td>";
				
				
				echo "<td style=\" text-align:center; width:60;\">";


				$_SESSION["unidade"] = $dado_adm['unidade'];

						$linhaid=$dado_adm['unidade']; 
			$linha_adm7 = "SELECT * FROM tab_unidade where id_unidade='$linhaid'";
			
			 			include('..\..\validacao\dbconexao.php');

 			$resultado7 = mysql_query($linha_adm7,$conexao);
			while ( $dado_adm7 = mysql_fetch_array($resultado7)){

		
		
			echo $dado_adm7['unidade'];
			
}

				
				
				
				
				 echo "</a>";
				echo "</td>";
				

				echo "<td style=\" text-align:center; width:60;\">";
				echo $dado_adm['n_contrato']; echo "</a>";
				echo "</td>";
				
				echo "<td style=\" text-align:center; width:60;\">";
				//echo utf8_decode($dado_adm['cargo']);  echo "</a>";

				$linhaid=$dado_adm['cargo']; 
			$linha_adm4 = "SELECT * FROM tab_cargo where id='$linhaid'";
			
			 			include('..\..\validacao\dbconexao.php');

 			$resultado4 = mysql_query($linha_adm4,$conexao);
			while ( $dado_adm4 = mysql_fetch_array($resultado4)){

		
			 
		
			echo $dado_adm4['cargo'];
		
}

				 echo "</a>";
				echo "</td>";



					echo "<td style=\" text-align:center; width:200;\">";
					$texto = $dado_adm['descricao2'];
					$novo_texto = wordwrap( $texto, 35, "\n", 1);
					echo "$novo_texto\n"; echo "</a>";
					echo "</td>";

			
echo "<tr>";
 					}		
					
				
 					
					?>
				
           
            <p>&nbsp;</p>       
          <tr>
                
               		<td colspan="4">&nbsp;</td>
                
                </tr>
                
                
		</table>
        



    </table>