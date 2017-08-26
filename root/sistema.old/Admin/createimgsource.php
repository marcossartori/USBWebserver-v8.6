<?php

 include("dados.php");
  $id=$_GET['id'];
  $sql="SELECT * from admin where id=$id";
 
  $query=mysql_query($sql) or die(mysql_error());
 
  while($result=mysql_fetch_array($query)){		
    header("Content-type:".$result['type_port']);
    header('Content-Disposition: attachament; filename="'.$result['name_port'].'"');

    echo $result['portaria'];			
  }
?>