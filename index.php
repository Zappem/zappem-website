<?php

	$Layouts = [];

	ob_start();
	require('./resources/views/'.getViewFileName().'.php');
	$Content = ob_get_contents();
	ob_get_clean();

	ob_start();
	require('./resources/views/topbar.php');
	$Layouts['topbar'] = ob_get_contents();
	ob_get_clean();

	require('./resources/views/layout.php');


	function getViewFileName(){
		switch($_SERVER['REQUEST_URI']){
			case "/get-started":
				return "getting-started";
			case "/docs":
				return "docs";
			case "/":
				return "home";
			default:
				return "404";
		}
	}