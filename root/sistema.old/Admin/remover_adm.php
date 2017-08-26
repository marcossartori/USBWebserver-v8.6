<?php

include('..\..\sistema\validacao\dbconexao.php');

include('..\..\sistema\validacao\testa_adm_master.php');

 $id_adm = (int) $_GET['id_adm'];
  
 $deleta_adm = "DELETE FROM Admin WHERE Id = $id_adm and Master <> 's'";
  
 if(!mysql_query($deleta_adm,$conexao)){
	 	 
 	echo "<script type=\"text/javascript\">
           alert('Erro na excluso do Admin');
           history.go(-1);
          </script>";	
    exit();	
	
 }
 
 header("Location: http:../../sistema/Admin/Administrador.php?pagina=1");
 
?>