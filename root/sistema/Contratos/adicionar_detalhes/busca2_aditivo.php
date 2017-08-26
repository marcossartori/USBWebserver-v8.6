<?php
require '..\..\..\sistema\validacao\class_conexao2.php';

$objetoConexao = new conexao();

$objetoConexao->defineServidor("localhost");
$objetoConexao->defineUsuario("root");
$objetoConexao->defineSenha("root");

$objetoConexao->abrirConexao();

if ($objetoConexao->estaConectado() == false){
	//echo "conexao nao realizada com sucesso!";
} else {
	//echo "conexao realizada com sucesso";
	$objetoConexao->defineNomedobanco("lanagro_rs");
	$objetoConexao->selecionaBanco();
	if ($objetoConexao->estaComBancoSelecionado()==false) {
		echo "nao consegui selecionar o banco de ";
	} else {
		
			$idGet = $_GET['id'];
		$sql = "select * from contratos where id=$idGet";

		//echo "sql:"; //echo $sql;
		$resultado = $objetoConexao->consulta($sql);
		if ($resultado == false){
			echo "nenhum resultado valido!";
		} else {
			$dado_adm = mysql_fetch_array($resultado);
		}
	}
}
?>





<body link="##063" vlink="##063" alink="##063">


 	<table cellspacing="0" cellpading="0" style="	width:750;
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
                        
                         <b><?php include('..\..\..\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
</td>

		</tr>
        
        
        
 	<tr>
   
<td colspan="2" align="center" style="font-size:15px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;">Atualizações 

		    <tr>
    
    
    	<td colspan="2" style="font-size:15px; color:#060;">
      
        <p style=" margin:15px; text-align:justify; "> 
        Contrato: <b>
		<?php echo $dado_adm['n_contrato'];?><b>
       <?php $n_contrato=$_SESSION['n_contrato'] = $dado_adm['n_contrato'];?>
                                                                   
              </td>
    
 
	</tr>

</td>
        
	</tr>

                                        <tr>
                        <td colspan="2" align="center" style="font-size:13px; color:#333; text-align:center;   font-weight: bold;"><p>
                        
                        
                        
                        <?php
                        			echo "<a href='"; 
			echo "../../Contratos/desativa_Fun/dados_modificados_contrato.php?id=";
			echo $dado_adm["id"];
			echo "'>";
			
			echo " Dados modificados  ";  echo "</a>";
			
			?>
</p>
      </td></tr>
  		
  		<tr>
        
  		  	<td colspan="2" align="center">
          
          	<?php 	
			
			$idGet = $_GET['id'];
			$linha_adm = "SELECT * FROM contratos, renovacao WHERE renovacao.n_contrato = contratos.n_contrato AND contratos.id = $idGet";

					if(!empty($_GET['pesquisa'])){
						$pes = $_GET['pesquisa'];
    					$linha_adm .= " WHERE usuario LIKE '%$pes%'";
					
 					}

 					include('..\..\..\sistema\validacao\dbconexao.php');

 					$resultado = mysql_query($linha_adm,$conexao);
 
 			?> 
          
          	<center>
          
          	<table cellspacing="1" style="width:750; text-align:center; border:0; font-size:12px; background-color:#FFF">
  				
               	<tr style="background-color:#063; color:#D6D6D6;">
                
    				<td>Data</td>
    				<td>Hora</td>
                    <td>Usuário</td>
                    <td>Contrato</td>
                  <td>Descrição</td>

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
				
					echo "<td style=\" text-align:center; width:300;\">";
					//echo utf8_encode($dado_adm['usuario']);  echo "</a>";
					echo $dado_adm['usuario'];  echo "</a>";
					echo "</td>";
					
					
						echo "<td style=\" text-align:center; width:100;\">";
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



 
