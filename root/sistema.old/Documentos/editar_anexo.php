<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/ico" href="../imagens/LOGO_novo_vazio.ico">

<title>Login</title>
<link href="../validacao/css_login/style.css" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="../validacao/filtros/media/js/jquery.js" type="text/javascript"> </script>

</head>
<script type="text/javascript">
    window.onload = function() {
		//document.getElementById("filedoc").disabled=true;
		//document.getElementById("obs").disabled=true;
        var eSelect = document.getElementById('status');
		var optOtherReason = document.getElementById('obs');
		var elemento= document.getElementById('show');
		var file= document.getElementById('filedoc');
		optOtherReason.disabled=true;
		file.disabled=true;
		 
		
		
        eSelect.onchange = function() {
            if(eSelect.selectedIndex === 2) {
                optOtherReason.disabled=false;
            } else {
                optOtherReason.disabled=true;
            }
			
					
		}
		elemento.onclick=function() {
		if(elemento.checked===true){
				 file.disabled=false;
				
				}
			else{file.disabled=true;}	
				
		}
			
				
    }
  </script>


<?php

 include('../../sistema/documentos/dados.php');
  $id=$_GET['codarq'];
  $sql="SELECT * from arquivos where codarq=$id";
 
  $query=mysql_query($sql) or die(mysql_error());
 
  while($result=mysql_fetch_array($query)){	
  	$ano=$result['ano'];
	 $name=$result['name'];
	$pk=$result['codarq'];
	$mes=$result['mes'];
	$empresa=$result['codempresa'];
	$contrato=$result['contrato'];
	$documento=$result['tipo_arq'];
	
	


   // echo $result['anexo'];			
  }
?>

<body >
<?php include('../../sistema/validacao/cima.php');
     include "dados.php";
?>


<table> 
<?php include('../../sistema/documentos/menu.php'); ?>  </table>
<center>
<br  />
<br  />
<br  />
 <form id="form1" name="form1" method="post" action="editdocumentos.php" enctype="multipart/form-data">
 <input name="pk" type="hidden"  value="<?php  echo $id; ?>" />


<table border="0" align="center" cellspacing="0" class="alt" id="mytable" summary="The technical specifications of the Apple PowerMac G5 series";>
 <tr>
    <td id="th">CONTRATO </td>
<td id="th">	<select id="fiscal_sub_1" name="contrato"> 
			  <option value="">Selecione
					
					
					<?php
						$sql = "SELECT * FROM contratos ";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$idcont= $reg["id"];
							$contratos= $reg["n_contrato"];
							
					?>
<option value="<?php echo $idcont?>" <?php if ($idcont == $contrato) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $contratos;?></option>
					<?php
					}
					?>
				</select>
                </td>
  </tr>
  <tr>
 <td id="th">ANO</td>
    
<td id="th">	<select id="fiscal_sub_1" name="ano"> 
			  <option value="">Selecione
					
					
					<?php
						$sql = "SELECT * FROM anos ";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$codano= $reg["codano"];
							$anos= $reg["ano"];
							
					?>
<option value="<?php echo $codano?>" <?php if ($codano == $ano) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $anos;?></option>
					<?php
					}
					?>
				</select>
                </td>
  </tr>
  <tr>
    <td id="th">MESE</td>
    
<td id="th">	<select id="fiscal_sub_1" name="mes"> 
			  <option value="">Selecione
					
					
					<?php
						$sql = "SELECT * FROM meses ";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$codmes= $reg["codmes"];
							$meses= $reg["mes"];
							
					?>
<option value="<?php echo $codmes?>" <?php if ($codmes == $mes) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $meses;?></option>
					<?php
					}
					?>
				</select>
                </td>
  </tr>
  
   <tr>
    <td id="th">DOCUMENTO</td>
    
<td id="th"> 	<select id="fiscal_sub_1" name="documento"> 
			  <option value="">Selecione
					
					
						<?php
						$sql = "SELECT * FROM tipodoc ";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$iddoc= $reg["iddoc"];
							$doc= $reg["nome"];
							
					?>
<option value="<?php echo $iddoc?>" <?php if ($iddoc == $documento) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $doc ;?></option>
					<?php
					}
					?>				</select>
                </td>
  </tr>
  
 
  
    <tr>
    <td id="th">EMPRESA</td>
    
<td id="th"><select id="fiscal_sub_1" name="empresa"> 
			  <option value="">Selecione
					
					
						<?php
						$sql = "SELECT * FROM tab_empresa ";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$codempresa= $reg["id"];
							$empresas= $reg["empresa"];
							
					?>
<option value="<?php echo $codempresa?>" <?php if ($codempresa == $empresa) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $empresas;?></option>
					<?php
					}
					?>				</select>
                </td>
  </tr>
  <tr>
<td id="th"> STATUS</td>
  <td id="th"><select name="status" id="status">
			  <option value="0" ></option>
			  <option value="completo" >completo</option>
			  <option value="Incompleto" >Incompleto</option>>
			</select></td>
            
  </tr>
  
    <tr>
<td id="th"> OBSERVAÇÃO</td>
  <td id="th"><textarea name="incompleto"  id="obs" cols="50" rows="1"> </textarea> </td>
            
  </tr>
  
   <tr>
<td id="th">ANEXO</td>
<td id="th"><input type="checkbox" name="show" id="show"  value="1"/></td>
            
  </tr> 
<tr  id="">
  <td id="th"><div id="tr">ANEXO</div></td>
    <td id="th">	<input name="fileanexo" type="file" class="spec" id="filedoc" dir="rtl" value="<?php echo $name;?>" size="30"/>
</td>
</tr>

<tr>
 <td id="th"><input name="enviar"  value="ATUALIZAR" type="submit" /></td>

 <td id="th"></td>

</tr>
 </table>
 

 
 </form>
 
 	<table>
    </table>
    

</body>
</html>
   
<?php include('../../sistema/validacao/baixo.php') ?>
