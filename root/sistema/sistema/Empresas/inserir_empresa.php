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

<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/Empresa.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/MascaraValidacao.js"></script> 





<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/forme.css" 
/> 


<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/validacao/mensagens.css" 
/>


<?php
$nome = $_SESSION["nome"];

?>

</head>
<?php
require 'C:\wamp\www\sistema\validacao\class_conexao2.php';

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
 <b><?php include('C:\wamp\www\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
   <p class="style3">&nbsp;</p>

  <table   border="0" align="center" width="373">
  

  
    <tr>
      <th align="right" scope="row"><span class="style4"><div class="style4">Empresa<span class="style2">*</span></div></th>
      <td ><label>
        <input name="empresa" type="text" class="input-p" id="empresa"/>
      </label></td>
    </tr>
    
    
    <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">CNPJ<span class="style2">*</span></div></th>
      <td ><label>
        <input name="CNPJ" type="text" class="input-p" id="CNPJ" onKeyPress="MascaraCNPJ(form1.CNPJ);" 
maxlength="18" onBlur="ValidarCNPJ(form1.CNPJ);"/>
      </label></td>
    </tr>
    
    
        <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">Endereco<span class="style2">*</span></div></th>
      <td ><label>
        <input name="Endereco" type="text" class="input-p" id="Endereco"/>
      </label></td>
    </tr>
    
    
    
            <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">CEP<span class="style2">*</span></div></th>
      <td ><label>
        <input name="CEP" type="text" class="input-p" id="CEP" onKeyPress="MascaraCep(form1.CEP);"
 maxlength="10" />
      </label></td>
    </tr>
    
    
    
            <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">Telefone<span class="style2">*</span></div></th>
      <td ><label>
        <input name="Telefone" type="text" class="input-p" id="Telefone" onKeyPress="MascaraTelefone(form1.Telefone);" 
maxlength="14"  />
      </label></td>
    </tr>
    
    
        
            <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">Preposto<span class="style2">*</span></div></th>
      <td ><label>
        <input name="Preposto" type="text" class="input-p" id="Preposto"/>
      </label></td>
    </tr>
    

    
    
        <tr>

      <th align="right" scope="row"><span class="style4"><div class="style4">Razao Social<span class="style2">*</span></div></th>
      <td ><label>
        <input name="Razao_Social" type="text" class="input-p" id="Razao_Social"/>
      </label></td>
    </tr>
    

         <tr>
       <th align="right" scope="row"><span class="style4"><div class="style4" >Estado:<span class="style2">*</span></div></th>
      <td >
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
      <td 

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
    
          </td>
    </tr>
    

       
       
      <th align="right" scope="row"><span class="style4"><div class="style4" >Vínculo<span class="style2">*</span></div></th>
      <td ><input name="vinculo" type="text" class="input-p" id="vinculo" value="<?php 
	  
	  
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

      <td>&nbsp;</td>
      
      <td>
  <p class="style1" align="right">
    <input type="submit" name="inserir" id="inserir" value="Gravar"/>
  (*) Campos OBRIGATÓRIOS</p>
  <br />
      </td>
      
    </tr>
  </table>
  

  
</form>


   
</body>
</html>
