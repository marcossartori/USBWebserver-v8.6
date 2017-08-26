<!DOCTYPE html>
<html>
<head>
<title>CSS Portal - Layout</title>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="453248/css/453248.css" />
</head>
<?php include "dados.php";?>
<body>
    <div id="wrapper">
        <div id="header">
            <p>This is the Header</p>
        </div>
        <div id="navigation">
            <p>   </p>
        </div>
        <div id="contentliquid"><div id="content">
           <p><?php

echo '<table border="0" align="center" cellspacing="0" class="alt" id="mytable" summary="The technical specifications of the Apple PowerMac G5 series";>';
  echo'<caption>&nbsp;</caption>';
	echo'<tr>';
	echo' <th scope="col" abbr="Dual 1.8">'; echo 'CONTRATO';  echo'</th>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo 'ANO';  echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'MES'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'DOCUMENTO'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'EMPRESA'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'STATUS'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'ANEXO'; echo'</th>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo 'EDITAR'; echo'</th>';
	  echo'<th scope="col" abbr="Dual 1.8">'; echo 'ECLUIR'; echo'</th>';
	echo '</tr>';
	
		$where = Array();

		$ano = getPost('ano');
		$mes = getPost('mes');
		$status =getPost('status');
		$empresa =getPost('empresa');
		$ncontrato =getPost('contrato');
		$tipodoc =getPost('tipo');

		if( $ano ){ $where[] = " `ano` = '{$ano}'"; }
		if( $mes ){ $where[] = " `mes` = '{$mes}'"; }
		if( $status ){ $where[] = " status = '{$status}'"; }
		if( $empresa ){ $where[] = " empresa = '{$empresa}'"; }
		if( $ncontrato ){ $where[] = " n_contrato = '{$ncontrato}'"; }
		if( $tipodoc ){ $where[] = " nome = '{$tipodoc}'"; }


		$sql = "SELECT * from documentos ";
		if( sizeof( $where ) )
		 $sql .= ' WHERE '.implode( ' and ',$where );
            $page= mysql_query($sql);
			while( $linha=mysql_fetch_array($page))
			
			
			{
			
				$id= $linha['codano'];
				$mes= $linha['mes'];
				$contrato= $linha['n_contrato'];
				$ano= $linha['ano'];
				$tipo= $linha['nome'];
				$empresa= $linha['empresa'];
				$name= $linha['name'];
				$status=$linha['status'];
			if ($status== "incompleto"){
				
				$status= '<IMG SRC="../../sistema/documentos/images/negado.png" WIDTH="20" HEIGHT="20"/>';
				
				} else{$status= '<img src="../../sistema/documentos/images/certo.png" WIDTH="20" HEIGHT="20"/>';}	
				
				
  
  echo '<tr>';
     echo '<td>'; echo $contrato; echo'</td>';
     echo '<td>'; echo $ano; echo'</td>';
     echo '<td>'; echo $mes; echo'</td>';
     echo '<td>'; echo $tipo; echo'</td>';
    echo '<td>';echo $empresa; echo'</td>';
    echo '<td>'; echo $status; echo'</td>';
    echo '<td>';  echo "<a alt='texto';  href='http:../../sistema/validacao/anexo_documentos.php?codano=".$id."')'>"; echo '<IMG SRC="../../sistema/documentos/images/clips-29.png" WIDTH="20" HEIGHT="20" border="0" alt="Anexar documentos"/>'; echo'</td>';
    echo '<td>'; echo "<a   href='http:../../sistema/validacao/anexo_documentos.php?codano=".$id."')'>"; echo '<IMG SRC="../../sistema/documentos/images/editar.png" WIDTH="20" HEIGHT="20"  border="0" />'; echo'</td>';
     echo '<td>'; echo "<a  href='http:../../jquery-ajax/ajax/delete_arquivo.php?codano=".$id."')'>"; echo '<IMG SRC="../../sistema/documentos/images/lixeira.png" WIDTH="20" HEIGHT="20"  border="0"/>'; echo'</td>';
  echo"</tr>";
	}
	  echo'<tr>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo '';  echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo'<th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo'<th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	echo '</tr>';
	//a cargo do leitor melhorar o filtro anti injection
	function filter( $str ){
		return addslashes( $str );
	}
	function getPost( $key ){
		return isset( $_POST[ $key ] ) ? filter( $_POST[ $key ] ) : null;
	}
?> </p>
<p>&nbsp; </p>
        </div></div>
        <div id="leftcolumn">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
        </div>
        <div id="rightcolumn">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
        </div>
        <div id="footer">
            <p>This is the Footer</p>
        </div>
    </div>
</body>
</html>
