<?php

 include("../validacao/dados.php");
 $codigo=$_GET['codarq'];
  
  $sql="select * from arquivos where codarq='$codigo'  ";
  $teste=mysql_query($sql);
   $linha =mysql_fetch_array($teste);
  
 echo $ativo=$linha['ativo'];
 
 if ($ativo=="Y"){
 
	  $sql = "UPDATE arquivos SET ativo='N' WHERE  `codarq`='$codigo'";
 
       $query=mysql_query($sql) ;
	   header('Location:../../sistema/documentos/pesquisa.php');
	   
	   } else{
		   
		   $sql = "UPDATE arquivos SET ativo='Y' WHERE  `codarq`='$codigo'";
            $query=mysql_query($sql);
			 header('Location:../../sistema/documentos/excluidos.php');
			
			}
	  
	  
	  
	 


//header('Location:../../sistema/documentos/pesquisa.php'); 
 // while($result=mysql_fetch_array($query)){		
//    header("Content-type:".$result['type_arq']);
//    header('Content-Disposition: attachament; filename="'.$result['name_arq'].'"');
//
//    echo $result['anexo'];			
//  }
?>