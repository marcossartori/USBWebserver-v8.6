<html>  
<head>  
<title>Teste</title>  
  
<script type="text/javascript">  
  
function habilita_a()  
{  
    document.getElementById("a").disabled = false; //Habilitando  
}  
function desabilita_a()  
{  
    document.getElementById("a").disabled = true; //Desabilitando  
}  
</script>  
</head>  
  
<body>  
  
<form name="formulario">  
<input name="radio" type="radio" onclick="habilita_a();">  
<label>habilitado</label>  
  
<input name="radio" type="radio" onclick="desabilita_a();">  
<label>desabilitado</label>  
  
<br>  
<label>Campo A</label>  
<input name="a" id="a"  type="text">  
  
</form>  
</body>  
</html>  