<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/desativa_Fun.js"></script> 


<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/imput.css" 
/> 

<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/validacao/mensagens.css" 
/>


<?php include('C:\wamp\www\sistema\validacao\somar_data.php');?>




<?php
$nome = $_SESSION["nome"];
?>

</head>

</p>
<body link="##063" vlink="##063" alink="##063">

<form id="form1" name="form1" method="post" action="processa_edicao2_Inativo_mapa_bolsista_estagiarios.php">
  <p class="style3">&nbsp;</p>
  
  
 

  <table width="750" height="257"   border="0" align="right">

    <tr>
    	<td colspan="2">
        <hr style=" width:800px; text-align:center;">
        <p style=" margin:15px; text-align:justify; "> Funcionário(a) Eventual: <b><?php echo $_SESSION["nome_funcionario"]?></b>
        <span style=" margin:15px; text-align:justify; ">Contrato: <b><?php echo $_SESSION["n_contrato"];?></b></span>        


                </b>       
      <hr style=" width:800px; text-align:center;"></p></td>
        <td colspan="2">
        <p style=" margin:15px; text-align:justify; "><b><b>
       </td>   
<td colspan="2" style="font-size:15px; color:#000;"><b></td>
	</tr>

          <tr>
<th width="226" align="right" scope="row" ><label for="Data">&nbsp;</label></th> 

      <td align="left">
<input name="Data" type="hidden" class="input-p" id="Data" size="25" maxlength="25" readonly="readonly" 
style="color: #999; background: #CCC;" value="<?php echo  $data = date("d-m-y")?>" input></td>






    <tr>
<th width="226" align="right" scope="row" ><label for="data_entrada_ev">Entrada:</label></th>
<td>
        <label for="data_entrada_ev"></label>
        <input name="data_entrada_ev" type="Text" id="data_entrada_ev" size="25" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
        <img src="http://localhost/sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_entrada_ev','yyyyMMdd')" style="cursor:pointer"/>
 </td>
    </tr>




          <tr>
<th width="226" align="right" scope="row" ><label for="data_saida_ev">Saída:</label></th>
<td>
        <label for="data_saida_ev"></label>
        <input name="data_saida_ev" type="Text" id="data_saida_ev" size="25" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
        <img src="http://localhost/sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_saida_ev','yyyyMMdd')" style="cursor:pointer"/>
 </td>
</tr>      


          <tr>
<th width="226" align="right" scope="row" ><label for="Hora">&nbsp;</label></th> 
      <td align="left" valign="middle">
<input name="Hora" type="hidden" class="input-p" id="Hora" size="25"  style="color: #999; background: #CCC;" readonly="readonly" 
value=" <?php date_default_timezone_set('America/Sao_Paulo');
echo $hora = date('H:i:s'); ?>" input></td>





        	<td>&nbsp;</td>
        
        	<td width="49">&nbsp;</td>
    </tr>



  
  
  
  
  
          <tr>
<th width="226" align="right" scope="row" ><label for="usuario">&nbsp;</label></th> 
      <td align="left">
<input name="usuario" type="hidden" class="input-p" id="usuario" size="35"  style="color: #999; background: #CCC;" readonly="readonly" 
value="<?php echo "$nome";?>" input></td>

    </tr>

<input name="nome_funcionario" type="hidden" class="input-p" id="nome_funcionario" size="35"  style="color: #999; background: #CCC;" readonly="readonly" 
value="<?php echo $_SESSION["nome_funcionario"]?>" input>
                    
    <tr>
<th width="226" align="right" scope="row" ><label for="descricao2">Descrição: *</label></th> 
      <td ><textarea name="descricao2"  id="descricao2" cols="45" rows="5">
      </textarea></td>
    </tr>
    
       
           


  </table>

  <p class="style1" align="center">
    <input type="submit" name="inserir" id="inserir" value="Gravar" onClick="return confirm('DESEJA INSERIR NOVO PERÍODO?')"  style="text-decoration:none" /> <input type="button" name="cancelar"  value="cancelar"  onclick="window.history.go(-1)"> 
  </p>
  <br />
  
  
  
  
  

  
  
</form>


   
</body>
</html>
