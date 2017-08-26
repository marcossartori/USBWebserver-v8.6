
<?php

 include("dados.php");
  $id=$_GET['codarq'];
  $sql="SELECT * from arquivos where codarq=$id";
 
  $query=mysql_query($sql) or die(mysql_error());
 
  while($result=mysql_fetch_array($query)){		
    header("Content-type:".$result['type']);
    header('Content-Disposition: attachament; filename="'.$result['name'].'"');

    print $result['anexo'];			
  }
  
  
?>
