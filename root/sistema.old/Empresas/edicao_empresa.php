<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/Empresa.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/MascaraValidacao.js"></script> 



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
        
        
        <script>

                        function verificaEmpr(emp){

                                var div = document.getElementById('div'+ emp.id);

                                if (emp.checked == true)                
                                        div.style.display = 'block';
                                else
                                        div.style.display = 'none';
                        }

                </script>


<link rel="stylesheet" 
type="text/css"href="../../sistema/forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="../../sistema/imput.css" 
/> 

<link rel="stylesheet" 
type="text/css"href="../../sistema/validacao/mensagens.css" 
/> 

</head>
<body link="##063" vlink="##063" alink="##063">
<p>





<?php
	//echo "identificador(id):";
	//echo $_GET['id'];
?>

<?php
require '..\validacao\class_conexao2.php';

$objetoConexao = new conexao();

$objetoConexao->defineServidor("localhost");
$objetoConexao->defineUsuario("root");
$objetoConexao->defineSenha("usbw");

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
		$sql = "select * from tab_empresa where id=$idGet";

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
</p>



<form id="form1" name="form1" method="post" action="processa_edicao2_empresa.php">

  <p>&nbsp;</p>
  <table width="784" border="0" align="center">
  
   <tr style="  text-align:center;">
   <td colspan="2" style="font-size:12px; color:#333;">
   <b><?php include('..\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
   </td>
  </tr>
  
  
      <tr>
    
    
    	<td colspan="2" style="font-size:15px; color:#333;">
        <hr style=" width:700px; text-align:center;">
        <p style="margin:15px; text-align:justify;"> Empresa: <b><?php echo $dado_adm['empresa'];?><b>
        															<?php $empresa=$_SESSION['empresa'] = $dado_adm['empresa'];?>
                                                                   
        <hr style=" width:700px; text-align:center;"></p>        </td>
        
 
	</tr>
  
  
  	<tr>
      <th width="285" align="right" scope="row">ID</th>
      <td width="481"><input name="id" type="text" style="color: #999; background: #CCC;" id="id" value="<?php echo $dado_adm['id'];?>" readonly="true" /></td>
    </tr> 
   
    <tr>
      <th align="right" scope="row">Empresa</th>
      <td><input name="empresa" type="text" id="empresa" value="<?php echo $dado_adm['empresa'];?>"/>
      </td>
    </tr>

    <tr>
      <th align="right" scope="row">CNPJ</th>
      <td><input name="CNPJ" type="text" id="CNPJ" onKeyPress="MascaraCNPJ(form1.CNPJ);" 
maxlength="20" onBlur="ValidaCNPJ(form1.CNPJ);" value="<?php echo $dado_adm['CNPJ'];?>" /></td>
    </tr>
    
    <tr>
      <th align="right" scope="row">Telefone</th>
      <td><input name="Telefone" type="text" id="Telefone" onKeyPress="MascaraTelefone(form1.Telefone);" 
maxlength="14"  onBlur="ValidaTelefone(form1.Telefone);" value="<?php echo $dado_adm['Telefone'];?>" /></td>
    </tr>
    


    <tr>
<th align="right" scope="row"><label for="email">Email:*</label></th>
      <td ><input name="email" type="text" class="input-p" id="email" value="<?php echo $dado_adm['email'];?>"/></td>
    </tr>
    
 
 
                 <tr>
      <th align="right" scope="row">Preposto</th>
      <td><input name="Preposto" type="text" id="Preposto" value="<?php echo $dado_adm['Preposto'];?>" /></td>
    </tr>
    
    
    
      <tr>
      <th align="right" scope="row">Razao Social</th>
   <td><input name="Razao_Social" type="text" id="Razao_Social" value="<?php echo $dado_adm['Razao_Social'];?>"/>
      </td>
    </tr>
    
    
            <tr>
      <th align="right" scope="row">Endereco</th>
      <td><input name="Endereco" type="text" id="Endereco" value="<?php echo $dado_adm['Endereco'];?>" /></td>
    </tr>
    
    
    
                       <tr>
<th align="right" scope="row"><label for="Numero">Número:*</label></th>
      <td ><input name="Numero" type="text" class="input-p" id="Numero" value="<?php echo $dado_adm['Numero'];?>" onkeypress="mascaraInteiro(form1.Numero);" /></td>
    </tr>
    

    
                   <tr>
<th align="right" scope="row"><label for="Bairro">Bairro:*</label></th>
      <td ><input name="Bairro" type="text" class="input-p" id="Bairro" value="<?php echo $dado_adm['Bairro'];?>"/></td>
    </tr>

            <tr>
      <th align="right" scope="row">CEP</th>
      <td><input name="CEP" type="text" id="CEP" onKeyPress="MascaraCep(form1.CEP);"
 maxlength="10" onBlur="ValidaCep(form1.CEP)" value="<?php echo $dado_adm['CEP'];?>" /></td>
    </tr>
    

 
 
 
 
 
  <tr>
      <th align="right" scope="row"><span class="style4"><div class="style4" >Estado<span class="style2">*</span></div></th>

		  <td>
          <label for="cod_estados"></label>
          <select id="cod_estados" name="cod_estados">
			
			<?php
			
			
			
				$sql = "SELECT cod_estados, sigla
						FROM estados
						ORDER BY sigla";
				$res = mysql_query( $sql );
			
	while ( $row = mysql_fetch_assoc( $res ) )
				
						{
							$row ["cod_estados"];
							$row ["sigla"];
					?>
<option value="<?php echo $row ["cod_estados"];?>" <?php if ($row ["cod_estados"] == $dado_adm['estado']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $row ["sigla"]?></option>
					<?php
					}
					?>
				</select>
         </td>
    </tr>

   <tr>

       <th align="right" scope="row"><span class="style4"><div class="style4" >Cidade:<span class="style2">*</span></div></th>
   <td ><span class="carregando">Aguarde, carregando...</span>
	  <select name="cod_cidades" onchange="test(this)" id="cod_cidades">
<?php
			

			
				$sql = "SELECT cod_cidades, nome
						FROM cidades
						ORDER BY nome";
				$res = mysql_query( $sql );
				while ( $row = mysql_fetch_assoc( $res ) )
					
	{
							$row ["cod_cidades"];
							$row ["nome"];
					?>
<option value="<?php echo $row ["cod_cidades"];?>" <?php if ($row ["cod_cidades"] == $dado_adm['Cidade']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $row['nome'];?></option>
					<?php
					}
					?>
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


 
 
 
 
               

  </table>

  <p align="center">
    <label>
      <input type="submit" name="atualizar" id="atualizar" value="Salvar">

  <input type="button" name="cancelar"  value="cancelar"  onclick="window.history.go(-1)">
    </label>
  </p>

</form>

</body>
</html>