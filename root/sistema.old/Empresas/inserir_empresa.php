<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


		<style type="text/css">
			*, html {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				margin: 0px;
				padding: 0px;
				font-size: 12px;
			}

			a {
				color: #064;
			}

			body {
				margin: 10px;
			}
			.carregando{
				color:#666;
				display:none;
			}
		</style>

<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/Empresa.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/MascaraValidacao.js"></script> 





<link rel="stylesheet" 
type="text/css"href="../../sistema/forme.css" 
/> 


<link rel="stylesheet" 
type="text/css"href="../../sistema/validacao/mensagens.css" 
/>


<?php
$nome = $_SESSION["nome"];

?>

</head>
<?php
require '..\..\sistema\validacao\class_conexao2.php';

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
		//echo "Nao conseguiu selecionar o banco de dados";
	} else {
	      //echo "Banco selecionado"; 
		
		}
	}

?>
</p>
<body link="##063" vlink="##063" alink="##063">





<form id="form1" name="form1" method="post" action="processa_edicao2_empresa.php">


  <br>

  <p class="style3">&nbsp;</p>

<table  align="left" cellspacing="0" style="	width:500;
    								height:10;
                    				border:0;
                    				font-family:Arial, Helvetica, sans-serif;
                   					font-size:11;
                                    background-color:#FFF;
                                    text-align:center;
                                    margin:5px;">
  

  
    <tr>
      <th align="right" scope="row"><span class="style4"><div class="style4">Empresa<span class="style2">*</span></div></th>
      <td align="left" ><label>
        <input name="empresa" type="text" class="input-p" id="empresa"/>
      </label></td>
    </tr>
    
    
    <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">CNPJ<span class="style2">*</span></div></th>
      <td align="left" ><label>
        <input name="CNPJ" type="text" class="input-p" id="CNPJ" onKeyPress="MascaraCNPJ(form1.CNPJ);" 
maxlength="20" onBlur="ValidarCNPJ(form1.CNPJ);"/>
      </label></td>
    </tr>
    

            <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">Telefone<span class="style2">*</span></div></th>
      <td align="left" ><label>
        <input name="Telefone" type="text" class="input-p" id="Telefone" onKeyPress="MascaraTelefone(form1.Telefone);" 
maxlength="14"  />
      </label></td>
    </tr>
    
    
    
                   <tr>
<th width="223" align="right" scope="row" ><label for="email">Email:*</label></th>
      <td align="left" ><input name="email" type="text" class="input-p" id="email" /></td>
    </tr>

        
            <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">Preposto<span class="style2">*</span></div></th>
      <td align="left" ><label>
        <input name="Preposto" type="text" class="input-p" id="Preposto"/>
      </label></td>
    </tr>
    

    
    
        <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">Razao Social<span class="style2">*</span></div></th>
      <td align="left" ><label>
        <input name="Razao_Social" type="text" class="input-p" id="Razao_Social"/>
      </label></td>
    </tr>
    
    
    
    
            <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">Endereco<span class="style2">*</span></div></th>
      <td align="left" ><label>
        <input name="Endereco" type="text" class="input-p" id="Endereco"/>
      </label></td>
    </tr>
    
    
    
     <tr>
<th width="223" align="right" scope="row" ><label for="Numero">Número:*</label></th>
      <td align="left" ><input name="Numero" type="text" class="input-p" id="Numero" onkeypress="mascaraInteiro(form1.Numero);" /></td>
    </tr>
    
    
    
                   <tr>
<th width="223" align="right" scope="row" ><label for="Bairro">Bairro:*</label></th>
      <td align="left" ><input name="Bairro" type="text" class="input-p" id="Bairro" /></td>
    </tr>
    
    
            <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">CEP<span class="style2">*</span></div></th>
      <td align="left" ><label>
        <input name="CEP" type="text" class="input-p" id="CEP" onKeyPress="MascaraCep(form1.CEP);"
 maxlength="10" />
      </label></td>
    </tr>
    
    

         <tr>
       <th align="right" scope="row"><span class="style4"><div class="style4" >Estado:<span class="style2">*</span></div></th>
      <td align="left" >
		<label for="cod_estados"></label>
		<select name="cod_estados" id="cod_estados">
			<option value="">Selecione</option>
			<?php
				$sql = "SELECT cod_estados, sigla
						FROM estados
						ORDER BY sigla";
				$res = mysql_query( $sql );
				while ( $row = mysql_fetch_assoc( $res ) ) {
					echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
				}
			?>
		</select>
         </td>
    </tr>
        
        
       <th align="right" scope="row"><span class="style4"><div class="style4" >Cidade:<span class="style2">*</span></div></th>
      <td align="left">

		<label for="cod_cidades"></label>
		<span class="carregando">Aguarde, carregando...</span>
		<select name="cod_cidades" id="cod_cidades">
			<option value="">-- Escolha um estado --</option>
		</select>

		

		<script type="text/javascript">
		$(function(){
			$('#cod_estados').change(function(){
				if( $(this).val() ) {
					$('#cod_cidades').hide();
					$('.carregando').show();
					$.getJSON('cidades.ajax.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value=""></option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].cod_cidades + '">' + j[i].nome + '</option>';
						}	
						$('#cod_cidades').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#cod_cidades').html('<option value="">– Escolha um estado –</option>');
				}
			});
		});
		</script>
    
          <td width="6">&nbsp;</td>
    </tr>
    

       
       
      <th align="right" scope="row"><span class="style4"><div class="style4" >Vínculo<span class="style2">*</span></div></th>
      <td align="left" ><input name="vinculo" type="text" class="input-p" id="vinculo" style="color: #999; background: #CCC;" value="<?php 
	  
	  
	  {
	  
	   if($_SESSION["Acesso"] == 'Terceirizados' ){
	echo "Terceirizados";
	}
	
		 if($_SESSION["Acesso"] == 'Mapa' ){
	echo "Mapa";
	}

					 if($_SESSION["Acesso"] == 'Bolsistas' ){
	echo "Bolsistas";
	}
	  
	  
	  }

	  ?>" readonly="readonly" />
      </td>
    </tr>

      <td align="right">&nbsp;</td>
      
      <td width="263">
  <p align="center">&nbsp;</p>
  <p align="center">
    <label>
      <input type="submit" name="inserir" id="inserir" value="Salvar">


    <input type="button" name="cancelar"  value="cancelar"  onclick="window.close()">
    </label>
  </p>
      </td>
      
    </tr>
  </table>
  

  
</form>


   
</body>
</html>
