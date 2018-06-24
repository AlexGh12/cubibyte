<?php

	if ( isset($_GET['p']) ) {

		switch ( $_GET['p'] ) {
			case 'var':            
				include('View/file.php');
				break;
			
			default:
				include('View/inicio.php');
				break;
		}
		
	}else{
		include('View/inicio.php');
	}

?>