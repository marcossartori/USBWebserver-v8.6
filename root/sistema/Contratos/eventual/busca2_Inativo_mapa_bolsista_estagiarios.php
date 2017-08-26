<body link="##063" vlink="##063" alink="##063">


 	<table width="855" cellspacing="0" style="	width:800;
    												height:140;
                    								border:0;
                    								font-family:Arial, Helvetica, sans-serif;
                   									font-size:11;
                                    				background-color:#FFF;
                                    				text-align:center;
                                                    margin:0px;" cellpading="0">
                                    
  		<tr>
        
        
        
    <tr>
    	<td colspan="2">
        <hr style=" width:800px; text-align:center;">
        <p style=" margin:15px; text-align:justify; "> Funcionário(a) Eventual: <b><?php 
			echo "<a href='"; 
			echo "../../Contratos/visualizar_edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"];
			echo "'>";
			echo $_SESSION['nome_funcionario']; echo "</a>"; ?></b>
        <span style=" margin:15px; text-align:justify; ">Contrato: <b><?php echo $_SESSION['n_contrato_Fun'];?></b></span>        


                </b>       
      <hr style=" width:800px; text-align:center;"></p></td>
        <td colspan="2">
        <p style=" margin:15px; text-align:justify; "><b><b>
       </td>   
<td colspan="2" style="font-size:15px; color:#000;"><b></td>
	</tr>
        
        
        
        <td width="851" colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;
    		
            			height:20px;">
                        
 <b><?php include('..\..\validacao\menu\contratos\menu_contratos_cabecalho.php');
 
$_SESSION['id'];
$_SESSION["fiscal"];
$_SESSION["fiscal_sub_1"];
$_SESSION["fiscal_sub_2"];
$_SESSION["fiscal_sub_3"];
$_SESSION["fiscal_sub_4"];
 
 ?></b>
            
        </td>

		</tr>

  		<tr>
        
  		  	<td colspan="2" align="center">
          
          	<?php 	

			$linha_adm = "SELECT * FROM log_eventual WHERE nome_funcionario = '{$_SESSION['nome_funcionario']}' and id_fun = '{$_SESSION['id_fun']}'";


 					include('..\..\validacao\dbconexao.php');

 					$resultado = mysql_query($linha_adm);
					
					
					
					
 
 			?> 
          
          

          
          
          	<center>
          
          	<table cellspacing="1" style="width:800; text-align:center; border:0; font-size:12px; background-color:#FFF">

            
            
  				
               	<tr style="background-color:#063; color:#D6D6D6;" align="center">
              
                <td width="123" align="center">Entrada</td>
   				  <td width="122" align="center">Previsão de Saída</td>
   				  <td width="51" align="center">Usuário</td>
                  <td width="102" align="center">Log Data</td>
                  <td width="71" align="center">Log Hora</td>
                  <td width="48" align="center">Unidade</td>
                    <td width="67" align="center">Contrato</td>
                  <td width="189" align="center">Descrição</td>
                  

  				</tr>        
                
                <?php  $cor= 'c0c0c0'; 
				
				
				
				while ( $dado_adm = mysql_fetch_array($resultado)) {
 					
									
					
					echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					

					
				echo "<td style=\" text-align:center; width:80;\">";
				echo $dado_adm['data_entrada_ev']; echo "</a>";
				echo "</td>";
				
				
				$cormas="#00F";
				echo "<td style=\" color:$cormas; text-align:center; width:80;\">";
				
				if( $_SESSION["data_saida_ev"]=$dado_adm['data_saida_ev'] == '0000-00-00'){
					
				echo "Efetivo"; echo "</a>";
				}
				
								if($dado_adm['data_saida_ev'] <> '0000-00-00'){
				echo $_SESSION["data_saida_ev"]=$dado_adm['data_saida_ev']; echo "</a>";
				}
				
				echo "</td>";
				
				
				
					echo "<td style=\" text-align:center; width:380;\">";
					echo $dado_adm['usuario']; echo "</a>";
					echo "</td>";
				
				
				echo "<td style=\" text-align:center; width:150;\">";
				echo $dado_adm['Data']; echo "</a>";
				echo "</td>";
					

				
					echo "<td style=\" text-align:center; width:100;\">";
					echo $dado_adm['Hora']; echo "</a>";
					echo "</td>";
					

				echo "<td style=\" text-align:center; width:60;\">";
				echo $dado_adm['unidade']; echo "</a>";
				echo "</td>";
				

				echo "<td style=\" text-align:center; width:60;\">";
				echo $dado_adm['n_contrato']; echo "</a>";
				echo "</td>";



					echo "<td style=\" text-align:center; width:600;\">";
					$texto = $dado_adm['descricao2'];
					$novo_texto = wordwrap( $texto, 35, "\n", 1);
					echo "$novo_texto\n"; echo "</a>";
					echo "</td>";

			

 					}
 					
					?>

          <tr>
          
          
            <?php 
 $_SESSION["tipo_contrato"];
 $_SESSION["data_entrada_ev"];

 ?>
          
               		<td colspan="4">&nbsp;</td>
                
                </tr>
                
                
                
                
                  
            
            
                       	<tr>

  
            <td colspan="2" align="center" style="font-size:13px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;"><p>&nbsp;</p>
    			<?php

				if($_SESSION['data_saida_ev'] <> '0000-00-00'
				and $_SESSION['id'] == $_SESSION["fiscal"]
		   
		or($_SESSION['id'] ==  $_SESSION["fiscal_sub_1"]) 
		or ($_SESSION['id'] == $_SESSION["fiscal_sub_2"])
		or ($_SESSION['id'] == $_SESSION["fiscal_sub_3"])
		or ($_SESSION['id'] == $_SESSION["fiscal_sub_1"])
				
				){
            echo "<a href='"; 
			echo "cadastrar_Inativo_mapa_bolsista_estagiarios.php";
			echo "'>";
		    echo " Novo periodo  ";  echo "</a>";
				}
		

			?>       

  <p>&nbsp;</p></td>
        
	</tr>          
                
                
                
                
                
                
                
                
		</table>
        
        </center>


    </table>