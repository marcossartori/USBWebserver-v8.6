<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/ico" href="../imagens/LOGO_novo_vazio.ico">

<title>Cadastro de Empresas</title>
</head>
<body link="##063" vlink="##063" alink="##063">


<br />


           		<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:750;
            						height:30;">
<?php
include('..\..\sistema\validacao\dbconexao.php');
	include('..\..\sistema\validacao\testa_adm.php'); //Include de teste do administrador



					$data = date("d/m/Y");
					
					echo "Porto Alegre, $data."; echo "<br>";



	 $nome = $_SESSION["nome"];
     $n_port= $_SESSION["n_port"];
     $id= $_SESSION["id"];
	

	
	
	
	
	$sqll="SELECT * from admin where  Id ='$id'";
                    $query= mysql_query($sqll) or die(mysql_error);
                    $result=mysql_fetch_array($query);
                     $fisc= $result["Fiscal"];
					 if($fisc=="sim"){
					
					


echo "Portaria Nº"; echo '  '; echo "<a  href='../../../sistema/admin/createimgsource.php?id=".$id."')'>"; echo ".$n_port."; echo"</a>"; echo "<br>";}

echo "<br>";
echo "Olá, "; echo $nome;
	
echo "<br>";
echo "<br>";
?>

			</td>

        </tr> 
	

     <tr>
     
    	<td colspan="2" style="font-size:20px; color:#060;">
        
        <p style=" margin:5px; text-align:left; "> 
       <b> Inserir Empresas</b>                                                
               </td>
 
	</tr>      
           
           
                                    
  
  		<tr>
    
    		<td colspan="3" style="	text-align:center;
            						background-color:#FFF;
            						width:500;
            						">

									 <?php include("inserir_empresa.php"); ?>
                                    
			</td>
  		
        </tr>

