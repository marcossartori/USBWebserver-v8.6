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
<td style="padding-left:40px;"><span class="title">LanagroRS </span></td>
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

<table border="0" cellspacing="0" cellpadding="0">
<tr valign="top">
  <td width="227">&nbsp;</td>
  <td width="454">&nbsp;</td></tr>

<tr valign="top"><td width="227">&nbsp;</td><td width="454"><img width="1" height="1" src="/icons/ecblank.gif" border="0" alt=""></td></tr>

<tr valign="top">
  <td width="227"><span class="txtnormal"><font size="2">Usuario</font></span></td><td width="454"><font size="2">
<input name="login" value="" 0 id="login"></font></td></tr>

<tr valign="top">
  <td width="227"><span style="font-weight : normal; color : #000000; font-family: Arial, Helvetica, Geneva, sans-serif;"><font size="2">Senha</font></span></td><td width="454"><font size="2">
<input name="senha" value="" type="password" 0 id="senha"></font><b><font size="2"> </font></b></td></tr>

<tr valign="top"><td width="227">&nbsp;</td><td width="454"><div id="infobar" ></div>
<button type="submit"> &nbsp;Log in</button>
<br>
<br>
<span class="txtnormal"><input type="checkbox" name="fldRM" value="0" checked style="width:auto;"> Remember username</span></td></tr>

<tr valign="top"><td width="227"><img width="1" height="1" src="/icons/ecblank.gif" border="0" alt=""></td><td width="454"><img width="1" height="1" src="/icons/ecblank.gif" border="0" alt=""></td></tr>

<tr valign="top"><td width="227">&nbsp;</td><td width="454"><img width="1" height="1" src="/icons/ecblank.gif" border="0" alt=""></td></tr>

<tr valign="top"><td width="227">&nbsp;</td><td width="454"><img width="1" height="1" src="/icons/ecblank.gif" border="0" alt=""></td></tr>

<tr valign="top"><td class="txtnormal" width="680" colspan="2"><font size="2">Confidentiality Note</font><br>
<font size="2">The information provided in this website is confidential and intended only for the named user (identified by the personal password provided by Franke). Any unauthorized access or use, particularly making such information available to others is strictly prohibited.</font><br>
<br>
<font size="2">Vertraulichkeit</font><br>
<font size="2">Die in diesem Kundendienst Service Programm enthaltenen Informationen sind vertraulich und ausschliesslich nur für den Berechtigten bestimmt. (Die Berechtigung ergibt sich ausschliesslich durch Zuteilung eines persönlichen Passwortes durch Franke.) Jede unberechtigte Verwendung ist unzulässig; insbesondere dürfen diese Informationen weder an andere abgegeben noch zugänglich gemacht werden.</font><br>
<br>
<font size="2">Confidentialité</font><br>
<font size="2">Les informations contenues sur ce site web sont confidentielles et exclusivement réservées aux personnes autorisées. (L'autorisation est exclusivement fournie par l'attribution d'un mot de passe personnel par Franke.) Toute utilisation non autorisée est interdite ; ces informations ne peuvent être transmises ni être rendues accessibles à des tiers.</font></td></tr>

<tr valign="top"><td width="227">&nbsp;</td><td width="454"><img width="1" height="1" src="/icons/ecblank.gif" border="0" alt=""></td></tr>

<tr valign="top"><td width="227"><img width="1" height="1" src="/icons/ecblank.gif" border="0" alt=""></td><td width="454"><img width="1" height="1" src="/icons/ecblank.gif" border="0" alt=""></td></tr>
</table>

<!--<input name="RedirectTo" value="/css/cssweb.nsf" type=hidden>
<input type="submit" value="hidden submit btn">// -->
</div>


</div>

</div>
</form>


</body>
</html></form>