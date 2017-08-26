		<style type="text/css" title="currentStyle">
.Button {
display: inline-block;
border: 0px solid #ffffff;
cursor: pointer;
text-align: center;
text-decoration: none;
font: 16px Arial;
font-weight: bold;
padding: 10px 16px;
-webkit-border-radius: 0px;
-moz-border-radius: 0px;
border-radius: 0px;
text-shadow:0px 0px 0px #444444;
-moz-box-shadow: 0px 0px 0px 0px #444444;
-webkit-box-shadow: 0px 0px 0px 0px #444444;
box-shadow: 0px 0px 0px 0px #444444;
color: #ffffff;
background: #168c26;
background-image: -webkit-gradient(linear, left top, left bottom, from(#168c26), to(#29f229));
background-image: -moz-linear-gradient(top,  #168c26,  #29f229);
background-image:     -ms-linear-gradient(top, #168c26,  #29f229);
background-image:      -o-linear-gradient(top, #168c26,  #29f229);
background-image:         linear-gradient(top, #168c26,  #29f229);
filter:  progid:DXImaGETransform.Microsoft.gradient(startColorstr='#168c26', endColorstr='#29f229');
}
.Button:hover {
background: #168c26;
background-image: -webkit-gradient(linear, left top, left bottom, from(#29f229), to(#168c26));
background-image: -moz-linear-gradient(top,  #29f229,  #168c26);
background-image:     -ms-linear-gradient(top, #29f229,  #168c26);
background-image:      -o-linear-gradient(top, #29f229,  #168c26);
background-image:         linear-gradient(top, #29f229,  #168c26);
filter:  progid:DXImaGETransform.Microsoft.gradient(startColorstr='#29f229', endColorstr='#168c26');
text-decoration: none;
color: #ffffff;
}
.Button:active {
color: #ffffff;
position: relative;
top: 1px;
}
		</style>
<?php     
        if($_SESSION["Acesso"] == 'Consulta' ){

		echo "<a href='../../../sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php' class='Button' >Consultas </a>";
	}
	
	 if($_SESSION["Acesso"] == 'Terceirizados' ){

	
	echo "<a href='../../../sistema/Contratos/link2_contrato.php?pagina=1' class='Button' >Inicio</a>";
	echo "<a href='../../../sistema/altera_senha.php' class='Button' >Alterar Senha </a>";
    echo "<a href='../../../sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php' class='Button' >Consultas </a>";
	echo "<a href='../../../sistema/Documentos/pesquisa.php' class='Button' >Anexar</a>";


	}
	
	 if($_SESSION["Acesso"] == 'Terceirizados' and $_SESSION["Fiscal"] == 'sim' ){

	    echo "<a href='../../../sistema/Contratos/cadastrar_contrato.php' class='Button' >Novo Contrato</a>";
	}
	
	
	

		 if($_SESSION["Acesso"] == 'Mapa' ){

        echo "<a href='../../../sistema/MAPA/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1' class='Button' >Inicio</a>";
		echo "<a href='../../../sistema/altera_senha.php' class='Button' >Alterar Senha </a>";
		echo "<a href='../../../sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php' class='Button' >Consultas </a>";


	}

	
				 if($_SESSION["Master"] == 's' ){


		echo "<a href='../../../sistema/Admin/Administrador.php?pagina=1' class='Button' >Inicio</a>";
		echo "<a href='../../../sistema/altera_senha.php' class='Button' >Alterar Senha </a>";
		echo "<a href='../../../sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php' class='Button' >Consultas </a>";

		
	}
	
	
					 if($_SESSION["Acesso"] == 'Bolsistas' ){
		
		echo "<a href='../../../sistema/Bolsistas/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1' class='Button' >Inicio</a>";				 
		echo "<a href='../../../sistema/altera_senha.php' class='Button' >Alterar Senha </a>";
		echo "<a href='../../../sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php' class='Button' >Consultas </a>";				 

	
	}

	
?>