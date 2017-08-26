
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php header("Content-Type: text/html;  charset=ISO-8859-1",true);?>


<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/funcao_Fun.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/MascaraValidacao.js"></script> 


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


<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/imput.css" 
/> 

<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/validacao/mensagens.css" 
/> 

</head>
<body link="##063" vlink="##063" alink="##063">
<p>





<?php
	//echo "identificador(id):";
	//echo $_GET['id'];
?>

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
   <b><?php include('C:\wamp\www\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
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
      <th align="right" scope="row">ID</th>
      <td><input name="id" type="text" style="color: #999; background: #CCC;" id="id" value="<?php echo $dado_adm['id'];?>" readonly="true" /></td>
    </tr> 
   
    <tr>
      <th align="right" scope="row">Empresa</th>
      <td><input name="empresa" type="text"  style="color: #999; background: #CCC;" id="empresa" value="<?php echo $dado_adm['empresa'];?>" readonly="readonly" />
      </td>
    </tr>
    
    
    
      <tr>
      <th align="right" scope="row">Razao Social</th>
   <td><input name="Razao_Social" type="text" style="color: #999; background: #CCC;" id="Razao_Social" value="<?php echo $dado_adm['Razao_Social'];?>" readonly="readonly" />
      </td>
    </tr>
    
    
    <tr>
      <th align="right" scope="row">CNPJ</th>
      <td><input name="CNPJ" type="text" id="CNPJ" onKeyPress="MascaraCNPJ(form1.CNPJ);" 
maxlength="18" onBlur="ValidaCNPJ(form1.CNPJ);" value="<?php echo $dado_adm['CNPJ'];?>" /></td>
    </tr>
    
    <tr>
      <th align="right" scope="row">Telefone</th>
      <td><input name="Telefone" type="text" id="Telefone" onKeyPress="MascaraTelefone(form1.Telefone);" 
maxlength="14"  onBlur="ValidaTelefone(form1.Telefone);" value="<?php echo $dado_adm['Telefone'];?>" /></td>
    </tr>
    

    
        <tr>
      <th align="right" scope="row">Endereco</th>
      <td><input name="Endereco" type="text" id="Endereco" value="<?php echo $dado_adm['Endereco'];?>" /></td>
    </tr>
    
    
            <tr>
      <th align="right" scope="row">CEP</th>
      <td><input name="CEP" type="text" id="CEP" onKeyPress="MascaraCep(form1.CEP);"
 maxlength="10" onBlur="ValidaCep(form1.CEP)" value="<?php echo $dado_adm['CEP'];?>" /></td>
    </tr>
    
    
    
                <tr>
      <th align="right" scope="row">Preposto</th>
      <td><input name="Preposto" type="text" id="Preposto" value="<?php echo $dado_adm['Preposto'];?>" /></td>
    </tr>
    
    
    

    
    
    
<tr>
       <th align="right" scope="row"><span class="style4"><div class="style4" >Estado:<span class="style2">*</span></div></th>
      <td ><select name="cod_estados" id="cod_estados">
	    <option value="">-- Escolha um estado --</option>
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
<option value="<?php echo $row ["cod_estados"];?>"><?php echo $row ["sigla"]?></option>
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
			<option value="">-- Escolha uma cidade --</option>
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
    
    
    
    
  
                   
         <tr>
     <th align="right" scope="row"><span class="style4">
     <div class="style4" >
       <p>&nbsp;</p>
       <p>Estado Atual:<span class="style2">*</span></p>
     </div></th>
              <td>

			<p>&nbsp;</p>
<?php echo	$_SESSION['estado'] ?>
         </td>
    </tr>
  





     <tr>
     <th align="right" scope="row"><span class="style4">
     <div class="style4" >Cidade Atual:<span class="style2">*</span></div></th>
              <td>
                   <?php echo	$_SESSION['cidade'] ?>
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
