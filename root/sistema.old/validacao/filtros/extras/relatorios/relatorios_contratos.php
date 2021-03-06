<?php
require '..\..\..\..\validacao\class_conexao2.php';

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
		
		<title>Relatório Contratos LANAGRO/RS</title>
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
			
<h1>Relatório Contratos LANAGRO/RS</h1>
			
  <div id="demo">

<?php include('..\..\..\..\validacao\saudacao.php'); ?>

        <?php     
        if($_SESSION["Acesso"] == 'Consulta' ){

		echo "<a href='"; 
		echo "../../../../validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo '<img src="../../../../imagens/home.png" width="100" height="50" border="0" alt="Ir para página inicial" />';  echo "</a>";
		
		
		echo "<a href='"; 
		echo "http://localhost/sistema/altera_senha.php";
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
	<p><a href="relatorios_funcionarios.php">IR para relatório Funcionários</a></p>
  <table  cellpadding="0" cellspacing="0" border="0" class="display" id="example">
  
	<thead>
		<tr>
				<th style="font-size:12px; color:#060;"><b> Vínculo </b></th>
             	<th style="font-size:12px; color:#060;"><b> Fiscal </b></th>
             	<th style="font-size:12px; color:#060;"><b>Fiscal Substituto</b></th>
             	<th style="font-size:12px; color:#060;"><b>Ativo</b></th>
             	<th style="font-size:12px; color:#060;"><b>     Processo     </b></th>
             	<th style="font-size:12px; color:#060;"><b>Valor do Contrato</b></th>
             	<th style="font-size:12px; color:#060;"><b>Valor Mensal</b></th>
            	<th style="font-size:12px; color:#060;"><b>  Contrato    </b></th>
            	<th style="font-size:12px; color:#060;"><b>Empresa</b></th>
		</tr>
	</thead>

	
	<tbody>



             <?php
	  $sql = "select * from contratos";
	        $resultado = $objetoConexao->consulta($sql);
	   
	        while( $linha=mysql_fetch_array($resultado))
			{

echo "<tr>";
		echo '<th class="gradeU">'; 
		echo $linha['tipo_contrato']; 
		echo "</th>";
		

								echo '<th class="gradeU">'; 

				$linhaid=$linha['fiscal'];
			$linha_adm3 = "SELECT * FROM Admin where Id='$linhaid'";
			
			 			include('..\..\..\..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			 {

			echo $dado_adm3['Nome'];
			
			
						 }
			 
								}
		echo "</th>";

		



								echo '<th class="gradeU">'; 

				$linhaid=$linha['fiscal_sub_1'];
			$linha_adm3 = "SELECT * FROM Admin where Id='$linhaid'";
			
			 			include('..\..\..\..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			 {

			echo $dado_adm3['Nome'];
			
			
						 }
			 
								}
		echo "</th>";

		
		
												echo '<th class="gradeU">'; 
		echo $linha['Ativo']; 
		echo "</th>";
		
		
						echo '<th class="gradeU">'; 
		echo $linha['n_processo']; 
		echo "</th>";
		
		
												echo '<th class="gradeU">'; 
		echo $linha['valor_contrato']; 
		echo "</th>";
		
		
												echo '<th class="gradeU">'; 
		echo $linha['valor_mensal']; 
		echo "</th>";
		
		
		
		
				echo '<th class="gradeU">';
		echo "<a href='"; 
		echo "../../../../Contratos/visualizar_edit_contrato.php?id=";
		echo $linha['id']; 
		echo "'>";
		echo $linha['n_contrato'];  echo "</a>";
		echo "</th>";

		
		
		
		
		    	    
			
			
			$linhaid=$linha['empresa'];
			$linha_adm3 = "SELECT * FROM tab_empresa where id='$linhaid'";
			
			 			include('..\..\..\..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			 {
			 
			echo '<th class="gradeU">';
			echo "<a href='"; 
			echo "../../../../Empresas/visualizar_edit_empresa.php?id=";
			echo $dado_adm3['id'];
			echo "'>";
			echo $dado_adm3['empresa']; echo "</a>";
			echo "</th>";
			
			echo "</tr>";
			
						 }
			 
								}

 
 
		echo "</tr>";

}
?>
   
 
</table> 


<table cellpadding="0" cellspacing="0" border="0" class="display">
<tr align="center" style="color:#030">
<b>
			<th>Vínculo</th>
             <th>Fiscal</th>
             <th>Fiscal Substituto</th>
             <th>Ativo</th>


 
	 </tr>

</b>

    <tfoot>
	
		<tr>
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