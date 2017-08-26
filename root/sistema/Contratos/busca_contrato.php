<body link="##063" vlink="##063" alink="##063">
<center>

<div id=tabela Style="overflow:scroll; padding: 0px; position: absolute; height:600px; Left: 370; top: 90; width: 150%">
 
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
        
    		<td style="	width:200px;
            			height:20px;
            			text-align:center;">
                        
            <a href="administrador.php"><img src="imagens/voltar.png" border="0" align="absbottom"></a>
            
        </td>
      		<td style="	text-align:right;
            			background-color:#FFF;
            			width:277;
            			height:20;">
									
			
                                    
			</td>
            
		</tr>
        
		<tr>
        
            <td height="30" colspan="3" style="text-align:center;
            background:url(imagens/painel_controle.jpg);
            color:#FFF;
            width:475;
            height:30;">
            
            Lista dos Funcionarios
            
            </td>
            
  		</tr>
  
  	
        
  		  	<td colspan="2">
          
          	<?php 	$linha_adm = "SELECT * FROM funcionarios";

					if(!empty($_GET['pesquisa'])){
						$pes = $_GET['pesquisa'];
    					$linha_adm .= " WHERE empresa LIKE '%$pes%'";
					
 					}

 					include('C:\wamp\www\sistema\validacao\dbconexao.php');

 					$resultado = mysql_query($linha_adm,$conexao);
 
 			?> 
          
          	<center>
          
          	<table cellspacing="1" style="width:450; text-align:center; border:0; font-size:11px; background-color:#000">
  				
               	<tr style="background-color:#000; color:#FFF;">
                
					<td>Nome do Funcionário</td>
    				<td>Empresa</td>
    				<td>Telefone</td>
    				<td>Unidade</td>
    				<td>Cargo</td>
                    <td>Bolsista</td>
    				<td>Endereço</td>
    				<td>Data de Nascimento</td>
                    <td>Escolaridade</td>
                    
  				</tr>        
                
                <?php  $cor= 'c0c0c0'; 
				
				
				
				while ( $dado_adm = mysql_fetch_array($resultado)) {
 					
					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
 					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['empresa']}</td>";
					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['telefone']}</td>";
 					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['unidade']}</td>";
					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['cargo']}</td>";
 					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['bolsista']}</td>";
					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['endereco']}</td>";
 					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['DataNasc']}</td>";
					echo "<td style=\" text-align:left; width:10;\">&nbsp;{$dado_adm['escolaridade']}</td>";
					
					
 					
 					}
 					
					?>
				
                    
                <tr>
                
               		<td colspan="4">&nbsp;</td>
                
                </tr>
                
                
		</table>
        
        </center>
          
        		</td>
	  	
        	</tr>
  		
        	<tr>
  		
        		<td colspan="2" style=" 	height:30;
    								background:url(imagens/painel_rodape.jpg);">&nbsp;</td>
	 		</tr>
    
    	</table>
        </div>

	</center>
 
