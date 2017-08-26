<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

</head>
<link rel="stylesheet" type="text/css" href="http://localhost/banco/css/ch.franke.css.header.css">
<link rel="stylesheet" type="text/css" href="http://localhost/banco/css/ch.franke.css.main.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<!-- <script>var dbpath='/domcfg.nsf';</script>
<script language="JavaScript" type="text/javascript">
<!-- 
function initLoginForm() {
	var lastuser = ReadCookie("lastusr");
	setFormFocus();
	testCookieSupport();
}

function SetCookie() {
 if (document.forms[0].fldRM) if (!document.forms[0].fldRM.checked) { // clear existing cookie and exit
	document.cookie="lastusr=none ;expires=Tuesday, 01-Apr-1999 09:00:00 GMT;path=/;";
	return; 
 }
 cookievalue = document.forms[0].Username.value;
 if ( cookievalue != "" ) 	{
  document.cookie="lastusr=" + cookievalue +";expires=Tuesday, 01-Apr-2032 09:00:00 GMT; path=/;";		
 }
}

function ReadCookie (CookieName) {
  var CookieString = document.cookie;
  var CookieSet = CookieString.split (';');
  var SetSize = CookieSet.length;
  var CookiePieces
  var ReturnValue = "";
  for (var x = 0; ((x < SetSize) && (ReturnValue == "")); x++) {
    CookiePieces = CookieSet[x].split ('=');
    if (CookiePieces[0].substring (0,1) == ' ')       CookiePieces[0] = CookiePieces[0].substring (1, CookiePieces[0].length);
    if (CookiePieces[0] == CookieName)       ReturnValue = CookiePieces[1];
  }
 return ReturnValue;
}

function setFormFocus() {

 var lastusr = ReadCookie("lastusr");
 if (lastusr!="") document.forms[0].Username.value=lastusr;
 
 if (   document.forms[0].Username.value != "") {
	document.forms[0].Password.focus(); 
	document.forms[0].Password.select();
 } else {
	document.forms[0].Username.focus(); 
	document.forms[0].Username.select();
 }
}

function clearLogin() {
	document.cookie="lastusr=none ;expires=Tuesday, 01-Apr-1999 09:00:00 GMT;path=/;";
	if (document.forms[0].Username) {
		document.forms[0].Username.value="";
		document.forms[0].Password.value="";
	}
	document.forms[0].Username.focus(); 
	writeInfobar("User name cookie cleared.<br><br>");
}

function writeInfobar(txt) {
 document.getElementById("infobar").innerHTML=txt;
 document.getElementById("infobar").style.display="block";
}

function btnStdLogin() {
	answ = confirm("Do you really want to continue without SSL? \nYour password will be sent over the internet in plaintext! \nThat's not a good idea and should only be used when there is no way to login with SSL!"); 
	if (!answ) return;
	switchImg();
	showLoginFields();
	writeInfobar('The current server connection is not encrypted! Using SSL is highly recommended.');
	document.forms[0].fldRM.checked=false;
}

function testCookieSupport() {
var cookiesEnabled = -9;
var expire = new Date();
expire.setTime(expire.getTime() + 3600000);
document.cookie = 'TestCookieSupport=AreCookiesTurnedOn;expires=' + expire.toGMTString();

// Now check cookie
if (document.cookie.indexOf('TestCookieSupport=') == -1)   {
	cookiesEnabled = -2;  // cannot find cookie we just set
} else {
	cookiesEnabled = 2;   // found it, now delete cookie
	document.cookie = 'TestCookieSupport=;expires=Thu, 01-Jan-70 00:00:01 GMT';
}
if (cookiesEnabled <= 0)  writeInfobar('Cookies are disabled in your browser. You will not be able to log in until you enable cookies.');
}

</script>
</head>
<body text="#000000" bgcolor="#FFFFFF" onload="initLoginForm();">

<form onsubmit="SetCookie();
return true;" method="post" action="/names.nsf?Login" name="_frmCSSLogin">
<input type="hidden" name="%%ModDate" value="8B477F8800000FA0"> // --> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<style> 
.txtbold { 
font-family : Arial, Helvetica, Geneva, sans-serif; 
font-size : 12px; 
font-weight : bold; 
color : #000000; 
} 
.txtnormal { 
font-family : Arial, Helvetica, Geneva, sans-serif; 
font-size : 12px; 
font-weight : normal; 
color : #000000; 
} 
input{ 
background-color: #ffffff; 
font-family: Arial, Helvetica, Geneva, sans-serif; 
font-weight: normal; 
font-size: 12px; 
width:150px; 
} 

</style>
<title>CSS Web Login</title>
</head>
<body class="xspView tundra" style="margin:0">
<form name="form1" method="post" action="login_adm.php">
<div class="header">
<table>
<tr>
<td style="width: 220px;">
<div style="float:right;width: 180px;"></div>
</td>
<td><img src="/css/cssweb.nsf/xFranke_logo.png" alt="" class="logo"></td>
<td style="padding-left:40px;"><span class="title">Administrador </span></td>
<td style="width:100px;vertical-align:top;text-align:right;padding-top:10px;"></td>
<td style="width:200px;vertical-align:top;text-align:right;padding-top:10px;"></td>
</tr>
</table>
</div>
<br style="clear:both;">
<div class="main">
<div class="left"></div>
<div class="content">
<div style="padding-top:80px">

<?php
include('C:\wamp\www\sistema\validacao\dbconexao.php');
// Informaes da query
$campos_query = "*";


$final_query  = "FROM admin";
 
// Maximo de registros por pagina
$maximo = 12;
 
// Declarao da pagina inicial
$pagina = $_GET["pagina"];
if($pagina == "") {
    $pagina = "1";
}
 
// Calculando o registro inicial
$inicio = $pagina - 1;
$inicio = $maximo * $inicio;
 
// Conta os resultados no total da query
$strCount = "SELECT COUNT(*) AS 'num_registros' $final_query";
$query = mysql_query($strCount);
$row = mysql_fetch_array($query);
$total = $row["num_registros"];
 
###################################################################################
// INICIO DO CONTEDO
 
// Realizamos a query
$sql = mysql_query("SELECT $campos_query $final_query LIMIT $inicio,$maximo");
 
// Exibimos os nomes dos produtos e seus repectivos valores

?>

    <table align=""cellspacing="1" style="width:800; text-align:center; border:0; font-size:13px; background-color:#FFF">

<tr>
        
        <td colspan="2" align="center" style="font-size:11px; color:#333; text-align:center; vertical-align:middle;  font-weight:bold;
    		
            			width:750; height:2px;">
           <blockquote>
             <p>
               <?php 
$menos = $pagina - 1;
$mais = $pagina + 1;
 
$pgs = ceil($total / $maximo);
 
if($pgs > 1 ) {
 
	echo "<br />";
 
    // Mostragem de pagina
    if($menos > 0) {
		echo "<a href=".$_SERVER['PHP_SELF']."?pagina=$menos>anterior</a>&nbsp; ";
    }
 
    // Listando as paginas
	for($i=1;$i <= $pgs;$i++) {
		if($i != $pagina) {
			echo " <a href=".$_SERVER['PHP_SELF']."?pagina=".($i).">$i</a> | ";
		} else {
			echo " <strong>".$i."</strong> | ";
		}
	}
 
	if($mais <= $pgs) {
		echo " <a href=".$_SERVER['PHP_SELF']."?pagina=$mais>proxima</a>";
	}
}
?>



          <a href="http://localhost/sistema/Admin/Administrador.php?pagina=1" style="text-decoration:none">  Listar Usuarios   </a>
           	<a href="http://localhost/sistema/Admin/novo_adm.php" style="text-decoration:none"> | Novo Usuario   </a>
               
               
             </p>
        </blockquote></td>

		</tr>
        
        
         <tr style=" );
        			color:#FFF;
                    font-size:9px;">
    
    		<td colspan="2" style=" height:50;">
            
            <form action="http://localhost/sistema/Admin/pesquisa.php?pagina=0" method="GET">
  			<label>
    			Pesquisar por Nome:  			</label>
                 
            <input name="pesquisa" type="text" size="18" maxlength="30" value= ""/>
            
            <input name="submit" type="submit" value=" Pesquisar ">
			</form>
            </td>
 
  		</tr>
        
        <tr>
        
          		  	<td colspan="2">
          
          	<?php 	$linha_adm = "SELECT * FROM admin";

					if(!empty($_GET['pesquisa'])){
						$pes = $_GET['pesquisa'];
    					$linha_adm .= " WHERE Nome LIKE '%$pes%'";
 					}

 					include('C:\wamp\www\sistema\validacao\dbconexao.php');

 					$resultado = mysql_query($linha_adm,$conexao);
 
 			?> 
        
</tr>

        <table cellspacing="1" style="width:800; text-align:center; border:0; font-size:11px; background-color:#FFF" align="center">
  				
               	<tr style="background-color:#666; color:#FFF;">

                
    				<td>NOME</td>
    				<td>MASTER</td>
                    <td>Grupo</td>
                    <td>Acesso 1</td>
                    <td>Acesso 2</td>
                    <td>Acesso 3</td>
    				<td>AÇÕES</td>


  				</tr> 

<?php  $cor= 'c0c0c0'; 

while ($linha = mysql_fetch_object($sql)) {

	
					$cor = $cor == 'f0f0f0' ? 'c0c0c0' : 'f0f0f0';					
					
					echo "<tr style=\" text-align:center; background-color:#$cor;\">";
					
					{
					
 					switch ($linha->Master) {
	 						case 's' : $linha->Master = "Sim"; $cormas = "#00F";break;
	 						case 'n' : $linha->Master = "Não"; $cormas = "#F00";break;
 					}
					
					 					switch ($linha->Acesso) {
	 						case 'Terceirizados' : $linha->Acesso = "Terceirizados"; $cormas1 = "#00F";break;
	 						case 'Bolsistas' : $linha->Acesso = "Bolsistas"; $cormas1 = "#00F";break;
							case 'Mapa' : $linha->Acesso = "Mapa"; $cormas1 = "#00F";break;
							case 'Consulta' : $linha->Acesso = "Consulta"; $cormas1 = "#00F";break;
							
							case(!empty($linha->Acesso)) : $linha->Acesso = "Negado"; $cormas1 = "#F00";break;
				
 					}
					
					
										 					switch ($linha->Acesso2) {
	 						case 'Terceirizados' : $linha->Acesso2 = "Terceirizados"; $cormas2 = "#00F";break;
	 						case 'Bolsistas' : $linha->Acesso2 = "Bolsistas"; $cormas2 = "#00F";break;
							case 'Mapa' : $linha->Acesso2 = "Mapa"; $cormas2 = "#00F";break;
							
							case(!empty($linha->Acesso2)) : $linha->Acesso2 = "Negado"; $cormas2 = "#F00";break;
				
 					}
					
					
					
									switch ($linha->Acesso3) {
	 						case 'Terceirizados' : $linha->Acesso3 = "Terceirizados"; $cormas3 = "#00F";break;
	 						case 'Bolsistas' : $linha->Acesso3 = "Bolsistas"; $cormas3 = "#00F";break;
							case 'Mapa' : $linha->Acesso3 = "Mapa"; $cormas3 = "#00F";break;
							
							case(!empty($linha->Acesso3)) : $linha->Acesso3 = "Negado"; $cormas3 = "#F00";break;
				
 					}
					
					
					
					
										switch ($linha->Acesso4) {
	 						case 'Terceirizados' : $linha->Acesso4 = "Terceirizados"; $cormas4 = "#00F";break;
	 						case 'Bolsistas' : $linha->Acesso4 = "Bolsistas"; $cormas4 = "#00F";break;
							case 'Mapa' : $linha->Acesso4 = "Mapa"; $cormas4 = "#00F";break;
							
							case(!empty($linha->Acesso4)) : $linha->Acesso4 = "Negado"; $cormas4 = "#F00";break;
				
 					}
						}
	
	 				echo "<td style=\" text-align:center; width:450;\">&nbsp;$linha->Nome</td>";
					echo "<td style=\" color:$cormas; width:100;\">&nbsp;$linha->Master</td>";
					echo "<td style=\" color:$cormas1; width:100;\">&nbsp;$linha->Acesso</td>";
					echo "<td style=\" color:$cormas2; width:100;\">&nbsp;$linha->Acesso2</td>";
					echo "<td style=\" color:$cormas3; width:100;\">&nbsp;$linha->Acesso3</td>";
					echo "<td style=\" color:$cormas4; width:100;\">&nbsp;$linha->Acesso4</td>";
	


					
					

					
			echo "<td style=\" text-align:center; width:150;\">";
			echo "<a href='"; 
			echo "http://localhost/sistema/Admin/editar_adm.php?id_adm=";
			echo $linha->Id;
			echo "'  style=\"text-decoration:none\">";
			echo "Editar"; echo "</a>";
			
			
			echo "<a href='"; 
			echo "http://localhost/sistema/Admin/remover_adm.php?id_adm="; 
			echo $linha->Id;
			
			 
			echo "' onClick=\"return confirm('Deseja EXCLUIR esse Usuário do Banco de Dados?')\"  style=\"text-decoration:none\">";
			
			echo " | Deletar"; echo  "</a>";
			
		echo "</td>";

 					}
			
?>
 <?php
// FIM DO CONTEUDO
###################################################################################


?>
</table>


<!--<input name="RedirectTo" value="/css/cssweb.nsf" type=hidden>
<input type="submit" value="hidden submit btn">// -->
</div>


</div>

</div>
</form>


</body>
</html></form>