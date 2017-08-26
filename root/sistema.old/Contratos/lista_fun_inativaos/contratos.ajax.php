<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	$con = mysql_connect( 'localhost', 'root', 'root' ) ;
	mysql_select_db( 'lanagro_rs', $con );

	$id = mysql_real_escape_string( $_REQUEST['id'] );

	$cidades = array();

	$sql = "SELECT empresa, n_contrato
			FROM contratos
			WHERE empresa=$id
			ORDER BY n_contrato";
	$res = mysql_query( $sql );
	while ( $row = mysql_fetch_assoc( $res ) ) {


$cidades[] = array('empresa' => $row['empresa'], 'n_contrato'	=> utf8_encode($row['n_contrato']),);
		
	}

	echo( json_encode( $cidades ) );