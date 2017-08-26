<?php
require '..\..\..\..\validacao\class_conexao2.php';

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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="shortcut icon" type="image/ico" href="../../../../imagens/LOGO_novo_vazio.ico">
		
		<title>Relatorio de Funcionarios LANAGRO/RS</title>
		<style type="text/css" title="currentStyle">
			@import "../../media/css/demo_page.css";
			@import "../../media/css/demo_table_jui.css";
			@import "../../examples/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css";
			@import "media/css/TableTools_JUI.css";
		</style>
		<script type="text/javascript" charset="utf-8" src="../../media/js/jquery.js"></script>
		<script type="text/javascript" charset="utf-8" src="../../media/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8" src="media/js/ZeroClipboard.js"></script>
		<script type="text/javascript" charset="utf-8" src="media/js/TableTools.js"></script>
		<script type="text/javascript" charset="utf-8">

			$(document).ready(function() {

				 
				/* Initialise the DataTable */
				var oTable = $('#example').dataTable( {
					"sDom": 'T<"clear">lfrtip',
					"bJQueryUI": true,
					"oLanguage": {
						"sSearch": "Pesquisar:"
						
					}
					  
				} );
				
				
				
							function fnCreateSelect( aData )
			{
				var r='<select><option value=""></option>', i, iLen=aData.length;
				for ( i=0 ; i<iLen ; i++ )
				{
					r += '<option value="'+aData[i]+'">'+aData[i]+'</option>';
				}
				return r+'</select>';
			}
				
				/* Add a select menu for each TH element in the table footer */
				$("tfoot th").each( function ( i ) {
					this.innerHTML = fnCreateSelect( oTable.fnGetColumnData(i) );
					$('select', this).change( function () {
						oTable.fnFilter( $(this).val(), i );
					} );
				} );
			} );
						
		(function($) {
			/*
			 * Function: fnGetColumnData
			 * Purpose:  Return an array of table values from a particular column.
			 * Returns:  array string: 1d data array 
			 * Inputs:   object:oSettings - dataTable settings object. This is always the last argument past to the function
			 *           int:iColumn - the id of the column to extract the data from
			 *           bool:bUnique - optional - if set to false duplicated values are not filtered out
			 *           bool:bFiltered - optional - if set to false all the table data is used (not only the filtered)
			 *           bool:bIgnoreEmpty - optional - if set to false empty values are not filtered from the result array
			 * Author:   Benedikt Forchhammer <b.forchhammer /AT\ mind2.de>
			 */
			$.fn.dataTableExt.oApi.fnGetColumnData = function ( oSettings, iColumn, bUnique, bFiltered, bIgnoreEmpty ) {
				// check that we have a column id
				if ( typeof iColumn == "undefined" ) return new Array();
				
				// by default we only want unique data
				if ( typeof bUnique == "undefined" ) bUnique = true;
				
				// by default we do want to only look at filtered data
				if ( typeof bFiltered == "undefined" ) bFiltered = true;
				
				// by default we do not want to include empty values
				if ( typeof bIgnoreEmpty == "undefined" ) bIgnoreEmpty = true;
				 
				
				
				// list of rows which we're going to loop through
				var aiRows;
				
				// use only filtered rows
				if (bFiltered == true) aiRows = oSettings.aiDisplay; 
				// use all rows
				else aiRows = oSettings.aiDisplayMaster; // all row numbers
			
				// set up data array	
				var asResultData = new Array();
				
				for (var i=0,c=aiRows.length; i<c; i++) {
					iRow = aiRows[i];
					var aData = this.fnGetData(iRow);
					var sValue = aData[iColumn];
					
					// ignore empty values?
					if (bIgnoreEmpty == true && sValue.length == 0) continue;
			
					// ignore unique values?
					else if (bUnique == true && jQuery.inArray(sValue, asResultData) > -1) continue;
					
					// else push the value onto the result data array
					else asResultData.push(sValue);
				}
				
				return asResultData;
			}}(jQuery));

		</script>
	</head>
	<body id="dt_example">
	<div id="container">
  <div class="full_width big"><img src="../../../../imagens/logo_personalizado.png" width="397" height="154" alt="Lanagro/RS"></div>
			
<h1>Relatório Funcionários LANAGRO/RS</h1>
			
  <div id="demo">
  
<?php include('..\..\..\..\validacao\saudacao.php'); ?>

        
    <?php     
        if($_SESSION["Acesso"] == 'Consulta' ){
	
		echo "<a href='"; 
		echo "../../../../validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo '<img src="../../../../imagens/home.png" width="100" height="50" border="0" alt="Ir para página inicial" />';  echo "</a>";
		
		
		echo "<a href='"; 
		echo "../../../../altera_senha.php";
		echo "'>";
		echo '<img src="../../../../imagens/senha.png" width="100" height="50" border="0" alt="Alterar sua senha" />';  echo "</a>";
	
	}
	
	 if($_SESSION["Acesso"] == 'Terceirizados' ){
	
		echo "<a href='"; 
		echo "../../../../Contratos/link2_contrato.php?pagina=1";
		echo "'>";
		echo '<img src="../../../../imagens/home.png" width="100" height="50" border="0" alt="Ir para página inicial" />';  echo "</a>";
	
	}
	
		 if($_SESSION["Acesso"] == 'Mapa' ){

		echo "<a href='"; 
		echo "../../../../MAPA/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1";
		echo "'>";
		echo '<img src="../../../../imagens/home.png" width="100" height="50" border="0" alt="Ir para página inicial" />';  echo "</a>";
	}

	
				 if($_SESSION["Master"] == 's' ){
					 
		echo "<a href='"; 
		echo "../../../../Admin/Administrador.php?pagina=1";
		echo "'>";
		echo '<img src="../../../../imagens/home.png" width="100" height="50" border="0" alt="Ir para página inicial" />';  echo "</a>";
	
	}
	
	
					 if($_SESSION["Acesso"] == 'Bolsistas' ){
						 
		echo "<a href='"; 
		echo "../../../../Bolsistas/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1";
		echo "'>";
		echo '<img src="../../../../imagens/home.png" width="100" height="50" border="0" alt="Ir para página inicial" />';  echo "</a>";
	
	}
	
?>
        
        
        
	<p><a href="relatorios_contratos.php">IR para relatórios Contratos</a></p>
  <table  cellpadding="0" cellspacing="0" border="0" class="display" id="example">
  
	<thead>
		<tr>
        <th align="center" style="font-size:9px; color:#060;"><b> Nome </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Vínculo </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Contrato </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Empresa </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Unidade </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Nascimento </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Cargo </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Sexo </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Escolaridade </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Formação </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Filhos </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Inicio no Lanagro </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Ativo </b></th>
        <th align="center" style="font-size:9px; color:#060;"><b> Detalhes </b></th>
       
		</tr>
	</thead>

	
	<tbody>



             <?php
			 
			 
			 
			 
			 
			 
			 		$sql2 = "select * from contratos";
	        $resultado2 = $objetoConexao->consulta($sql2);
	   
	        while( $linha2=mysql_fetch_array($resultado2))
			{
			 
			 
			 
			 
			 
	  $sql = "select * from funcionarios where ID_empresa='{$linha2['empresa']}'";
	        $resultado = $objetoConexao->consulta($sql);
	   
	        while( $linha=mysql_fetch_array($resultado))
			{
				
				

				

echo "<tr>";



		echo '<th class="gradeU">'; 
		//echo utf8_encode($linha['nome_funcionario']);
		echo $linha['nome_funcionario']; 
		echo "</th>";

		
	
		echo '<th class="gradeU">'; 
		echo $linha['tipo_contrato']; 
		echo "</th>";
		
		
		


		echo '<th class="gradeU">'; 
		echo $linha['n_contrato']; 
		echo "</th>";



		
			
			
			
			
			$linhaid=$linha2['empresa'];
			$linha_adm3 = "SELECT * FROM tab_empresa where id='$linhaid'";
			
			 			include('..\..\..\..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

		
			 
			echo '<th class="gradeU">';
			echo $dado_adm3['empresa'];
			echo "</th>";
}
	


				$linhaid=$linha['unidade']; 
			$linha_adm7 = "SELECT * FROM tab_unidade where id_unidade='$linhaid'";
			
			 			include('..\..\..\..\validacao\dbconexao.php');

 			$resultado7 = mysql_query($linha_adm7,$conexao);
			while ( $dado_adm7 = mysql_fetch_array($resultado7)){

		
			 
			echo '<th class="gradeU">';
			echo $dado_adm7['unidade'];
			echo "</th>";
}




		
		echo '<th class="gradeU">'; 
		echo $linha['data_nasc']; 
		echo "</th>";


			$linhaid=$linha['cargo']; 
			$linha_adm4 = "SELECT * FROM tab_cargo where id='$linhaid'";
			
			 			include('..\..\..\..\validacao\dbconexao.php');

 			$resultado4 = mysql_query($linha_adm4,$conexao);
			while ( $dado_adm4 = mysql_fetch_array($resultado4)){

		
			 
			echo '<th class="gradeU">';
			echo $dado_adm4['cargo'];
			echo "</th>";
}






		
		echo '<th class="gradeU">'; 
		echo $linha['sexo']; 
		echo "</th>";

		
				$linhaid=$linha['escolaridade']; 
			$linha_adm5 = "SELECT * FROM tab_escolaridade where id_esc='$linhaid'";
			
			 			include('..\..\..\..\validacao\dbconexao.php');

 			$resultado5 = mysql_query($linha_adm5,$conexao);
			while ( $dado_adm5 = mysql_fetch_array($resultado5)){

		
			 
			echo '<th class="gradeU">';
			echo $dado_adm5['escolaridade'];
			echo "</th>";
}	




				$linhaid=$linha['formacao']; 
			$linha_adm6 = "SELECT * FROM tab_formacao where id_form='$linhaid'";
			
			 			include('..\..\..\..\validacao\dbconexao.php');

 			$resultado6 = mysql_query($linha_adm6,$conexao);
			while ( $dado_adm6 = mysql_fetch_array($resultado6)){

		
			 
			echo '<th class="gradeU">';
			echo $dado_adm6['formacao'];
			echo "</th>";
}	

		

		
		
		echo '<th class="gradeU">'; 
		echo $linha['filhos']; 
		echo "</th>";
		
		
		echo '<th class="gradeU">'; 
		echo $linha['ini_lanagro']; 
		echo "</th>";

		

		echo '<th class="gradeU">'; 
		echo $linha['Ativo']; 
		echo "</th>";





		echo '<th class="gradeU">';
		echo "<a href='"; 
		echo "../../../../Contratos/visualizar_edit_funcionario_mapa_bolsista_estagiarios.php?id=";
		echo $linha['id']; 
		echo "'>";
		
		//echo utf8_encode($linha['nome_funcionario']); 
		echo "Detalhes"; echo "</a>";
		echo "</th>";





		echo "</tr>";
		
		
		


}}
?>
   
 
</table> 


<table cellpadding="0" cellspacing="0" border="0" class="display">
<tr align="center" style="color:#030">

	<td>Nome</td>
    <td>Vínculo</td>
    <td>Contratos</td>
    <td>Empresa</td>
    <td>Unidade</td>
	 </tr>


    <tfoot>
	
		<tr>
			<th>&nbsp</th>
			<th>&nbsp</th>
			<th>&nbsp</th>
            <th>&nbsp</th>
           	<th>&nbsp</th>

	    </tr>
			 		<tr align="center" style="color:#030">
		<b>
	   <td>Data de Nascimento</td>
       <td>Cargo</td>
       <td>Sexo</td>
	   <td>Escolaridade</td>

	   </b>
       </tr>

      <th>&nbsp</th>
      <th>&nbsp</th>
	  <th>&nbsp</th>
	  <th>&nbsp</th>

		</tr>

<tr align="center" style="color:#030">
       <td>Formação</td>
	   <td>Filhos</td>
       <td>Inicio no Lanagro</td>
        <td>Ativo</td>
    </tr>
	  <th>&nbsp</th>
      <th>&nbsp</th>
	  <th>&nbsp</th>
      <th>&nbsp</th>
		</tr>


	</tfoot>
    </table> 

</div></div>
	</body>
</html>