<body link="##063" vlink="##063" alink="##063">
<?php

	include('C:\wamp\www\sistema\validacao\testa_adm.php');

	$nome = $_SESSION["nome"];
	
	include('C:\wamp\www\sistema\validacao\cima.php');
	

?>
<br />

<table border = "2" cellspacing="0" align="center" style="	width:590;
    								height:10;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:5px;">
                                    
  
  		<tr>


                                    </table>

	<table  border = "0"  cellspacing="0" style="	width:477;
    								height:140;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:30px;">
									
		<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:477;
            						height:30;">
									
									
									<?php echo "Olá $nome, <a href=http://localhost/sistema/tela_login.php>( Sair ) </a>";?>
						<br>
						<br>
						<br>						
  		
        
			</td>

        </tr>
									
									
									
	<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle; height:40px; font-weight: bold;
    		
            			height:20px;">
                    
            
            
        </td>

		</tr>
                                    
  
  		<tr>
    
    		<td colspan="3" style="	text-align:left;
            						background-color:#FFF;
            						width:200;
            						height:30;
                                    font-size:15px;">
<form id="form1" name="form1" method="post" action="relatorio_bolsistas.php">
                                            
<input name="data_nasc" type="checkbox" value="data_nasc">Data de Nascimento<br>
<input name="nome_funcionario" type="checkbox" value="nome_funcionario">Nome<br>
<input name="telefone" type="checkbox" value="telefone">Telefone<br>
<input name="unidade" type="checkbox" value="unidade">Unidade<br>
<input name="email" type="checkbox" value="email">Email<br>
<input name="empresa" type="checkbox" value="empresa">Empresa<br>
<input name="Cidade" type="checkbox" value="Cidade">Cidade<br>
<input name="Estado" type="checkbox" value="Estado">Estado<br>
<input name="cargo" type="checkbox" value="cargo">Cargo<br>
<input name="bolsista" type="checkbox" value="bolsista">Tipo de Bolsa<br>
<input name="sexo" type="checkbox" value="sexo">Sexo<br>
<input name="escolaridade" type="checkbox" value="escolaridade">Escolaridade<br>
<input name="formacao" type="checkbox" value="formacao">Formacao<br>
<input name="filhos" type="checkbox" value="filhos">Filhos<br>
<input name="Ativo" type="checkbox" value="Ativo">Ativo<br>

  <p class="style1" align="center">
    <input type="submit" name="consulta" id="consulta" value="Consultar"/> <input type="button" name="cancelar"  value="cancelar"  onclick="window.history.go(-1)">
  </p>
  <br />
</form>
</td>
  		
        </tr>
  
  		

	</table>

</center>
<?php include('C:\wamp\www\sistema\validacao\baixo.php'); ?>
