<?php 
	include('controller/home_controller.php');
	//include('controller/type_controller.php');
	//include('controller/single_controller.php');
	$page = new Home_controller;
	//$page = new Single_controller;
	//$page->getSingle();
	$page ->getIndex();
 ?>