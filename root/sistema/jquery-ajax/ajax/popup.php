<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

</head>


<?php include"dados.php"; ?>



<link rel="stylesheet" type="text/css" href="http://localhost/banco/css/ch.franke.css.header.css">
<link rel="stylesheet" type="text/css" href="http://localhost/banco/css/ch.franke.css.main.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<html>
<head>

<body class="xspView tundra" style="margin:0">
<form id="form1" name="form1" method="post" action="processach.php" enctype="multipart/form-data"> 


<div id="pagina"><!--<input name="RedirectTo" value="/css/cssweb.nsf" type=hidden>
<input type="submit" value="hidden submit btn">// -->

<div id="menu" class="style1">
		<ul>
			<li><a> </a></li>
			<li><a ><td> ANO <select name="ano" id="ano">
			  <option>selecionar Ano</option>
			  <option>2013</option>
			  <option>2014</option>
            </select></td></a> </ul></li></div>



</div>
<div id="pagina"><!--<input name="RedirectTo" value="/css/cssweb.nsf" type=hidden>
<input type="submit" value="hidden submit btn">// -->

<div id="menu">
		<ul>
			<li><a> </a></li>
			<li><a ><td> MES <select name="mes" id="mes">
			  <option >Selecionar Mes</option>
			  <option >janeiro</option>
			  <option >Fevereiro</option>
			</select></td></a> </ul></li></div>



</div>
<div id="pagina"><!--<input name="RedirectTo" value="/css/cssweb.nsf" type=hidden>
<input type="submit" value="hidden submit btn">// -->

<div id="menu">
		<ul>
			<li><a> </a></li>
			<li><a ><td colspan="2" style="text-align:left;"> Empresa<select id="empresa" name="empresa">
					  <option>selecionar Empresa</option>
			  <?php
						$sql = "SELECT * FROM tab_empresa WHERE empresa  <> 'null'  ORDER BY empresa ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$empresa= $reg["empresa"];
							$id = $reg["id"];
					?>
				   <option value= "<?php print("$id");?>"><?php print("$empresa");?>
			      </option>
					<?php
					}
					?>
				</select> </td></a> </ul></li></div>



</div>
<div id="pagina"><!--<input name="RedirectTo" value="/css/cssweb.nsf" type=hidden>
<input type="submit" value="hidden submit btn">// -->

<div id="menu">
		<ul>
			
			<li><a ><td> TIPO <select name="tipo">
			  <option>selecionar TIPO</option>
			  <?php
						$sql = "SELECT * FROM tipodoc WHERE nome  <> 'null'  ORDER BY nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$nome= $reg["nome"];
							$iddoc = $reg["iddoc"];
					?>
				   <option value= "<?php print("$iddoc");?>"><?php print("$nome");?>
			      </option>
					<?php
					}
					?>
			</select></td></a> </ul></li></div>



</div>
<div id="pagina">

<div id="menu">
		<ul>
		
			<li><a ><td> Anexo <input name="fileanexo" type="file" id="filranexo" /></td>  <td> <input name="enviar"  value="Enviar" type="submit" /></td></a> </ul></li>
			
			</div>



</div>
</div>
</form>

<script type="text/javascript">

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {validateOn:["blur", "change"]});

</script>
</body>
</html>

