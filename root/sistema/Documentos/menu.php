<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<style type="text/css">
<!--
.wrapper {
     width:600px;
     height:27px;
     background:grey;
 }
 .menu-holder ul {
     margin: 2px 0 0px 25px;
     padding: 0;
     list-style-type: none;
 }
 .menu-holder ul li {
     position: relative;
     float: left;
     padding: 0px 10px 0 10px;
     margin: 0px 0px 100px 0px;
     border-left: 1px dotted white;
     line-height: 0px;
 }
 .menu-holder ul li:hover > a {
     background-color: #025179;
 }
 .menu-holder ul li:hover ul {
     display: block;
 }
 .menu-holder ul li a {
     font-family: arial, sans-serif;
     font-size: 12px;
     font-weight: bold;
     display: block;
     color: white;
     text-decoration: none;
     padding: 15px 10px 15px 10px;
     -webkit-border-radius: 5px 5px 0px 0px;
     border-radius: 5px 5px 0px 0px;
 }
 .menu-holder ul li ul {
     float: none;
     display: none;
     position: absolute;
     top: 30px;
     left: 0px;
     margin: -1px 0 0px 10px;
     padding: 5px 10px 5px 10px;
     white-space: nowrap;
 }
 .menu-holder ul li ul:hover {
     display: block;
 }
 .menu-holder ul li ul li {
     position: static;
     float: none;
     display: inline;
     padding: 5px 10px 5px 10px;
     margin: 0px 0px 0px -10px;
     background-color: #025179;
 }
 .menu-holder ul li ul li a {
     display: inline;
     margin: 0 0px 0 0px;
     padding: 0px 10px 0px 10px;
     font-weight: normal;
     -webkit-border-radius: 0;
     border-radius: 0;
 }
 .menu-holder ul li ul li:first-of-type {
     -webkit-border-radius: 0px 0px 0px 5px;
     border-radius: 0px 0px 0px 5px;
 }
 .menu-holder ul li ul li:last-of-type {
     -webkit-border-radius: 0px 5px 5px 0px;
     border-radius: 0px 5px 5px 0px;
 }
 .menu-holder ul li:first-of-type {
     border-left: none;
 }
-->
</style>
</head>

<body>
<form action="teste.php" method="get">
<div class="wrapper">
    <div class="menu-holder">
        <ul class="menu">
        
            <li><a href="../../sistema/Contratos/link2_contrato.php?pagina=1">INÍCIO</a>
            </li>
            
            <li><a href="../../SISTEMA/DOCUMENTOS/pesquisa.PHP">
			<?php  
			include "dados.php";
			$sql="select ativo from arquivos where ativo='Y'";
			       $executar = mysql_query($sql) ;
					$reg = mysql_num_rows($executar);
							
							echo "ANEXOS\n $reg ";?></a>
            </li>
            
            <li class="active"><a class="test" href="../../SISTEMA/DOCUMENTOS/ANEXO.PHP">NOVO ANEXO</a>

                
            </li>
            <li><a href="#">CRIAR DOCUMENTO</a>
            <ul class="submenu">
                    <li><a href="#"><input name="doc" type="text"  maxlength="20" /></a>
                    </li>
                    <li><a href="#"> <input name="pk" type='submit' value="enviar"  /></a>
                    </li>
                </ul>
            </li>
             <li> <a href="../../SISTEMA/DOCUMENTOS/excluidos.PHP"><?php  
			include "dados.php";
			$sql="select ativo from arquivos where ativo='N'";
			       $executar = mysql_query($sql) ;
					$reg = mysql_num_rows($executar);
							
							echo "LIXEIRA\n $reg ";
			
       
			?></a>
            </li>
            
        </ul>
    </div>
    <!-- menu-holder end -->
</div>


</form>




</body>
</html>


