<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<title>RH lanagrors</title>
<head>
<?php include ("dados.php");?>
<script>
function show(){

	document.getElementById('conteudo').style="display:none";
	
	if(document.getElementById('mestre').onclick){
	document.getElementById('conteudo').style="display:block"; }
	
	
		
	}
</script>


<!--<script>
function Exibir() {
var oculta= document.getElementById('ch').checked 
 if(oculta==true	)
 { document.getElementById('1').style="display:block";}
 else {document.getElementById('1').style="display:none";}
 }
 
 function Exibe() {
var oculta= document.getElementById('ch1').checked 
 if(oculta==true	)
 { document.getElementById('2').style="display:block";}
 else {document.getElementById('2').style="display:none";}
 }
 
</script>-->
</head>
<script type="text/javascript" src="lytebox.js"></script>

<link href="lytebox.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http:../../sistema/Documentos/css/botoes.css">
<link href="sanfona.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript" src="expandcollapse.js"></script>
<script type="text/javascript" src="select.js"></script>
<script language="javascript" src="ajax.js"></script>  
<script language="javascript" src="instrucao.js"></script> 
<script language="javascript" src="load.js"></script> 
<link rel="stylesheet" type="text/css" href="http://localhost/banco/css/ch.franke.css.header.css">
<link rel="stylesheet" type="text/css" href="http://localhost/banco/css/ch.franke.css.main.css">
<link rel="stylesheet" type="text/css" href="http://localhost/sistema/validacao/css/menu.css">
<link rel="stylesheet" type="text/css" href="http://localhost/sistema/validacao/css/corpo.css">
<link rel="stylesheet" type="text/css" href="http://localhost/sistema/validacao/css/botoes.css">
<link rel="stylesheet" type="text/css" href="http://localhost/banco/css/ch.franke.css.header.css">
<link rel="stylesheet" type="text/css" href="http://localhost/banco/css/ch.franke.css.main.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">



<body class="xspView tundra" style="margin:0"  onload="abrirPag('todos.php');">

<div class="header">
<table>
<tr>
<td style="width: 220px;">
<div style="float:right;width: 180px;"></div>
</td>
<td><img src="/css/cssweb.nsf/xFranke_logo.png" alt="" class="logo"></td>
<td style="padding-left:40px;"><span class="title">Gerenciador de Documentos</span></td>
<td style="width:100px;vertical-align:top;text-align:right;padding-top:10px;"></td>
<td style="width:200px;vertical-align:top;text-align:right;padding-top:10px;"></td>
</tr>
</table>
</div>
<br style="clear:both;">
<div class="main">
<div class="left"> 

<li class="button green"> <a href='../../sistema/Documentos/popup.php' class='lytebox' data-lyte-options='width:300 height:500'> ANEXAR </a></li>
<p>&nbsp;</p>
<div class="button"> <?php include "menu.html"?> </div>
</div>
 </div>
<div class="content" id="conteudo" >

<p></br>
<p></br>
<div class="titulo" style="display:none"> teste </div>
<div id="conteudo" style="display:none">

</div>

</div>

</body>

</html>
