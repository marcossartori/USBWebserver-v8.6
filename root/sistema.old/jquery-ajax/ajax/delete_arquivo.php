<?php

 include("../../sistema/validacao/dados.php");
 $id=$_GET['codano'];
  
  $sql="select * from arquivos where ano='$id'  ";
  $teste=mysql_query($sql);
   $linha =mysql_fetch_array($teste);
  echo $ano= $linha['ano'];
  echo $mes= $linha['mes'];
  echo $tipo= $linha['tipo_arq'];
 echo  $empresa= $linha['codempresa'];
  
  
 $sql="DELETE FROM `arquivos` WHERE  `tipo_arq`='$tipo' AND `codempresa`='$empresa' AND `mes`='$mes' AND `ano`='$ano' LIMIT 1";
 
 $query=mysql_query($sql) ;
 header('Location:..\..\jquery-ajax/ajax/index.php?pagina=4#page4');
 // while($result=mysql_fetch_array($query)){		
//    header("Content-type:".$result['type_arq']);
//    header('Content-Disposition: attachament; filename="'.$result['name_arq'].'"');
//
//    echo $result['anexo'];			
//  }
?>