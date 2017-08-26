<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




<title>Untitled Document</title>
</head>

<body onload=document.form1.reset();>

<form id="form1" name="form1" method="post" runat="server" visible="false" action="">

  <label>
  
    <input type="hidden" name="nome" id="textfield" />

  </label>
  <p><strong>Digite sua observação abaixo</strong></p>
  <p>
    <label></label>
    
    <textarea name="recado" id="textarea" cols="45" rows="5"></textarea>
    <br />
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
</form>

<hr style=" width:820px; text-align:center;">
<p><strong>Observações:</strong></p>
<?php

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

header("Cache-Control: private",false);
?>

</body>
</html>
