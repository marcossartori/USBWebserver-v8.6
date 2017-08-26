<tr>
    
 		<td colspan="2" style="height:25;"><blockquote>
 		  <p><b>Possivel Vigência:</b>
 		    
 		    <?php echo $dado_adm['vigencia'];?> à <b><?php echo  $fim = somar_data($dado_adm['vigencia'], 0, 0, 5); ?></b>
 		    </p>
	    </blockquote></td>
</tr>




		</br>
        
        
        
        
        
        <?php 	
			
			$idGet3 = $_GET['id'];
			$linha_adm3 = "SELECT * FROM contratos WHERE id = $idGet3";



 					include('..\validacao\dbconexao.php');

 					$resultado3 = mysql_query($linha_adm3,$conexao);
 
 			?> 
			
		
			
			  <?php

				while ( $dado_adm3 = mysql_fetch_array($resultado3))
				
				 


				{
 					
					if (!empty($dado_adm3['fiscal_sub_1'])) {
						
   				 		echo "<tr style=\" font-size:11;\">";
 						echo "<td style=\" height:25;\">"; echo "<blockquote>";
						echo "<b> Fiscal Substituto - </b>"; 
						
						
						
									$linha_adm4 = "SELECT * FROM Admin where Id='{$dado_adm3['fiscal_sub_1']}'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado4 = mysql_query($linha_adm4,$conexao);
			while ( $dado_adm4 = mysql_fetch_array($resultado4)){

			echo $dado_adm4['Nome'];}
			
						
						
						echo "</blockquote>"; 
						echo "</td>";
					}		
					
				
					if (!empty($dado_adm3['fiscal_sub_2'])) {
   				 		echo "<tr style=\" font-size:11;\">";
 						echo "<td style=\" height:25;\">"; echo "<blockquote>";
						echo "<b> Apoio Administrativo 1 - </b>";
						
						
															$linha_adm4 = "SELECT * FROM Admin where Id='{$dado_adm3['fiscal_sub_2']}'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado4 = mysql_query($linha_adm4,$conexao);
			while ( $dado_adm4 = mysql_fetch_array($resultado4)){

			echo $dado_adm4['Nome'];}
						
						
						echo "</blockquote>"; 
						echo "</td>";
				}
				
					if (!empty($dado_adm3['fiscal_sub_3'])) {
   				 		echo "<tr style=\" font-size:11;\">";
 						echo "<td style=\" height:25;\">"; echo "<blockquote>";
						echo "<b> Apoio Administrativo 2 - </b>";
						
						
															$linha_adm4 = "SELECT * FROM Admin where Id='{$dado_adm3['fiscal_sub_3']}'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado4 = mysql_query($linha_adm4,$conexao);
			while ( $dado_adm4 = mysql_fetch_array($resultado4)){

			echo $dado_adm4['Nome'];}
						
						echo "</blockquote>"; 
						echo "</td>";
					}
					if (!empty($dado_adm3['fiscal_sub_4'])) {
   				 		echo "<tr style=\" font-size:11;\">";
 						echo "<td style=\" height:25;\">"; echo "<blockquote>";
						echo "<b> Apoio Administrativo 3 - </b>"; 
						
						
															$linha_adm4 = "SELECT * FROM Admin where Id='{$dado_adm3['fiscal_sub_4']}'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado4 = mysql_query($linha_adm4,$conexao);
			while ( $dado_adm4 = mysql_fetch_array($resultado4)){

			echo $dado_adm4['Nome'];}
						
						echo "</blockquote>"; 
						echo "</td>";

 					}
				}
 					
					?>	
        
        
        
        
        
<tr>
 		<td colspan="2" style="height:25; color:#060; font-size:13px;"><blockquote>
 		  <p><b>Possíveis Renovações:</b></p>
	    </blockquote></td>
</tr>        
        

   
        
        
<tr>
    
 		<td colspan="2" style="height:10;"><blockquote>
 		  
          
 		    
 		    <b><?php $_SESSION['renovacao_01'] = somar_data($dado_adm['vigencia'], 0, 0, 1);
			
							$data = date("Y-m-d");
			
			 			  if($_SESSION['renovacao_01']  >= $data ){

			
					$cormas4 = "#00F";
					
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 01 - ";
		  			echo "<b>"; echo $_SESSION['renovacao_01'] ;
		  			
		  }
		  
		  
		  
		  
		  			 			  if($_SESSION['renovacao_01']  < $data ){

			
					$cormas4 = "#F00";
					
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 01 - Vencido - ";
		  			echo "<b>"; echo $_SESSION['renovacao_01'] ;
		  			
		  }
			
			
						$linha_adm4 = "SELECT * FROM  contratos WHERE n_contrato ='{$_SESSION['n_contrato']}'";


 					include('..\validacao\dbconexao.php');

 					$resultado4 = mysql_query($linha_adm4,$conexao);
			
							while ( $dado_adm4 = mysql_fetch_array($resultado4))

				{
					
					
					
					
    if($dado_adm4['renovacao_01']  == '0000-00-00' and ($_SESSION['id'] == $_SESSION["fiscal_sub_1"] 
		
		or $_SESSION['id'] == $_SESSION["fiscal_sub_2"]
		or $_SESSION['id'] == $_SESSION["fiscal_sub_3"]
		or $_SESSION['id'] == $_SESSION["fiscal_sub_4"]
		or $_SESSION['id'] == $_SESSION["fiscal"])){
						
					echo "<a href='"; 
					echo "../Contratos/confirma_renovacao/cadastrar_aditivo.php?id=";
					echo $dado_adm['id'];
					echo "'>";
					
					echo "<b>"; echo '<span data-tooltip class="has-tip" title="Click aqui para confirmar essa renovação">[ Não confirmada ]</span>'; echo "</a>";
					
					 }
					 
					 
					 if($dado_adm4['renovacao_01']  <> '0000-00-00' ){
						 
						 
						echo "<b>"; echo '<span data-tooltip class="has-tip" title="Renovação confirmada">[ Confirmada ]</span>'; echo "</a>";
						 
					 }
					 
					 
					 
							}
			
			?></b>
 		    </p>
	    </blockquote></td>
</tr>



<tr>
    
 		<td colspan="2" style="height:10;"><blockquote>
 		  
          
 		    
 		    <b><?php  $_SESSION['renovacao_02'] = somar_data($dado_adm['vigencia'], 0, 0, 2);




							$data = date("Y-m-d");
			
			 			  if($_SESSION['renovacao_02']  >= $data and $dado_adm4['renovacao_01'] <> '0000-00-00'){

			
					$cormas4 = "#00F";
					
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 02 - ";
		  			echo "<b>"; echo $_SESSION['renovacao_02'] ;
		  			
		  }			
			
			
			
			
					  			 			  if($_SESSION['renovacao_02']  < $data and $dado_adm4['renovacao_01'] <> '0000-00-00'){

			
					$cormas4 = "#F00";
					
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 02 - Vencido - ";
		  			echo "<b>"; echo $_SESSION['renovacao_02'] ;
		  			
		  }
			
			
			
						$linha_adm4 = "SELECT * FROM  contratos WHERE n_contrato ='{$_SESSION['n_contrato']}'";


 					include('..\validacao\dbconexao.php');

 					$resultado4 = mysql_query($linha_adm4,$conexao);
			
							while ( $dado_adm4 = mysql_fetch_array($resultado4))

				{

						    if($dado_adm4['renovacao_02']  == '0000-00-00' and (
							
		$_SESSION['id'] == $_SESSION["fiscal_sub_1"] and $dado_adm4['renovacao_01'] <> '0000-00-00' 
		or $_SESSION['id'] == $_SESSION["fiscal_sub_2"] and $dado_adm4['renovacao_01'] <> '0000-00-00'
		or $_SESSION['id'] == $_SESSION["fiscal_sub_3"] and $dado_adm4['renovacao_01'] <> '0000-00-00'
		or $_SESSION['id'] == $_SESSION["fiscal_sub_4"] and $dado_adm4['renovacao_01'] <> '0000-00-00'
		or $_SESSION['id'] == $_SESSION["fiscal"] and $dado_adm4['renovacao_01'] <> '0000-00-00')){
						
					echo "<a href='"; 
					echo "../Contratos/confirma_renovacao/cadastrar_aditivo2.php?id=";
					echo $dado_adm['id'];
					echo "'>";
					echo "<b>"; echo '<span data-tooltip class="has-tip" title="Click aqui para confirmar essa renovação">[ Não confirmada ]</span>'; echo "</a>";
					
					 }
					 
					 
					 					 if($dado_adm4['renovacao_02']  <> '0000-00-00' and $dado_adm4['renovacao_01'] <> '0000-00-00'){
						 
						 
						echo "<b>"; echo '<span data-tooltip class="has-tip" title="Renovação confirmada">[ Confirmada ]</span>'; echo "</a>";
						 
					 }
					 
							}
			
			?></b>
 		    </p>
	    </blockquote></td>
</tr>



<tr>
    
 		<td colspan="2" style="height:10;"><blockquote>
 		  
          
 		    
 		    <b><?php $_SESSION['renovacao_03'] = somar_data($dado_adm['vigencia'], 0, 0, 3); 
			
			
			
										$data = date("Y-m-d");
			
			 			  if($_SESSION['renovacao_03']  >= $data and $dado_adm4['renovacao_02'] <> '0000-00-00'){

			
					$cormas4 = "#00F";
					
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 03 - ";
		  			echo "<b>"; echo $_SESSION['renovacao_03'] ;
		  			
		  }
			
			
			
			
								  			 			  if($_SESSION['renovacao_03']  < $data and $dado_adm4['renovacao_02'] <> '0000-00-00'){

			
					$cormas4 = "#F00";
					
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 03 - Vencido - ";
		  			echo "<b>"; echo $_SESSION['renovacao_03'] ;
		  			
		  }
			
			
			
						$linha_adm4 = "SELECT * FROM  contratos WHERE n_contrato ='{$_SESSION['n_contrato']}'";


 					include('..\validacao\dbconexao.php');

 					$resultado4 = mysql_query($linha_adm4,$conexao);
			
							while ( $dado_adm4 = mysql_fetch_array($resultado4))

				{

						    if($dado_adm4['renovacao_03']  == '0000-00-00' and (
							
		   $_SESSION['id'] == $_SESSION["fiscal_sub_1"] and $dado_adm4['renovacao_02'] <> '0000-00-00' 
		or $_SESSION['id'] == $_SESSION["fiscal_sub_2"] and $dado_adm4['renovacao_02'] <> '0000-00-00'
		or $_SESSION['id'] == $_SESSION["fiscal_sub_3"] and $dado_adm4['renovacao_02'] <> '0000-00-00'
		or $_SESSION['id'] == $_SESSION["fiscal_sub_4"] and $dado_adm4['renovacao_02'] <> '0000-00-00'
		
		or $_SESSION['id'] == $_SESSION["fiscal"] and $dado_adm4['renovacao_02'] <> '0000-00-00')){
						
					echo "<a href='"; 
					echo "../Contratos/confirma_renovacao/cadastrar_aditivo3.php?id=";
					echo $dado_adm['id'];
					echo "'>";
					echo "<b>"; echo '<span data-tooltip class="has-tip" title="Click aqui para confirmar essa renovação">[ Não confirmada ]</span>'; echo "</a>";
					
					 }
					 
					 
					 					 if($dado_adm4['renovacao_03']  <> '0000-00-00' and $dado_adm4['renovacao_02'] <> '0000-00-00'){
						 
						 
						echo "<b>"; echo '<span data-tooltip class="has-tip" title="Renovação confirmada">[ Confirmada ]</span>'; echo "</a>";
						 
					 }
					 
							}
			
			?></b>
 		    </p>
	    </blockquote></td>
</tr>



<tr>
    
 		<td colspan="2" style="height:10;"><blockquote>
 		 
          
 		    
 		    <b><?php $_SESSION['renovacao_04'] = somar_data($dado_adm['vigencia'], 0, 0, 4);



							$data = date("Y-m-d");
			
			 			  if($_SESSION['renovacao_04']  >= $data and $dado_adm4['renovacao_03'] <> '0000-00-00'){

			
					$cormas4 = "#00F";
					
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 04 - ";
		  			echo "<b>"; echo $_SESSION['renovacao_04'] ;
		  			
		  }			
			
			
			
								  			 			  if($_SESSION['renovacao_04']  < $data and $dado_adm4['renovacao_03'] <> '0000-00-00'){

			
					$cormas4 = "#F00";
					
					echo "<tr style=\" text-align:left; font-size:11;\">";
					echo "<td style=\" height:25; color:$cormas4;\">"; echo "<blockquote>"; echo "<b>"; echo "Renovação 04 - Vencido - ";
		  			echo "<b>"; echo $_SESSION['renovacao_04'] ;
		  			
		  }
			
			
			
						$linha_adm4 = "SELECT * FROM  contratos WHERE n_contrato ='{$_SESSION['n_contrato']}'";


 					include('..\validacao\dbconexao.php');

 					$resultado4 = mysql_query($linha_adm4,$conexao);
			
							while ( $dado_adm4 = mysql_fetch_array($resultado4))

				{

						    if($dado_adm4['renovacao_04']  == '0000-00-00' and (
		
		   $_SESSION['id'] == $_SESSION["fiscal_sub_1"] and $dado_adm4['renovacao_03'] <> '0000-00-00' 
		or $_SESSION['id'] == $_SESSION["fiscal_sub_2"] and $dado_adm4['renovacao_03'] <> '0000-00-00'
		or $_SESSION['id'] == $_SESSION["fiscal_sub_3"] and $dado_adm4['renovacao_03'] <> '0000-00-00'
		or $_SESSION['id'] == $_SESSION["fiscal_sub_4"] and $dado_adm4['renovacao_03'] <> '0000-00-00'
		or $_SESSION['id'] == $_SESSION["fiscal"] and $dado_adm4['renovacao_03'] <> '0000-00-00')){
						
					echo "<a href='"; 
					echo "../Contratos/confirma_renovacao/cadastrar_aditivo4.php?id=";
					echo $dado_adm['id'];
					echo "'>";
					

					echo "<b>"; echo '<span data-tooltip class="has-tip" title="Click aqui para confirmar essa renovação">[ Não confirmada ]</span>'; echo "</a>";
					
					 }
					 
					 
					 
										 if($dado_adm4['renovacao_04']  <> '0000-00-00' and $dado_adm4['renovacao_03'] <> '0000-00-00'){
						 
						 
						echo "<b>"; echo '<span data-tooltip class="has-tip" title="Renovação confirmada">[ Confirmada ]</span>'; echo "</a>";
						 
					 } 
					 
							}
			
			?></b>
 		    </p>
 		  <p>&nbsp;</p>
	    </blockquote></td>
</tr>



   

