           		<tr>
    
    		<td colspan="3" style="	text-align:right;
            						background-color:#FFF;
            						width:750;
            						height:30;">
<?php
include('dbconexao.php');
	include('testa_adm.php'); //Include de teste do administrador



					@$data = date("d/m/Y");
					
					echo "Porto Alegre, $data."; echo "<br>";



	 $nome = $_SESSION["nome"];
     $n_port= $_SESSION["n_port"];
     $id= $_SESSION["id"];
	

	
	
	
	
	$sqll="SELECT * from admin where  Id ='$id'";
                    $query= mysql_query($sqll) or die(mysql_error);
                    $result=mysql_fetch_array($query);
                     $fisc= $result["Fiscal"];
					 if($fisc=="sim"){
					
					


echo "Portaria Nº"; echo '  '; echo "<a  href='../admin/createimgsource.php?id=".$id."')'>"; echo ".$n_port."; echo"</a>"; echo "<br>";}

echo "<br>";
echo "Olá, "; echo $nome; echo "<a href=../logout_adm.php> ( Sair ) </a>";
	
echo "<br>";
echo "<br>";
?>

			</td>

        </tr> 