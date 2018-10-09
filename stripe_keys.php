<?php session_start();

	$s = "localhost";
	$d = "burntolearn";
	$u = "root";
	$p = "UPandrunning";
	
	$website = "http://www.burtolearn.com";
	
	$siteName = 'BurnToLearn';
	
	$con = mysqli_connect($s,$u,$p,$d);
	
	
	
	
	
	
	
	//phpmyadmin 
	
	$phpMYAD = "https://burntolearn.com/phpmyadmin";
	
	// Composer Autoloader
	require_once 'vendor/autoload.php';
	
	// Stripe
	$stripe = [
		
		'publishable' => 'pk_live_hyFkxeHB1z14uSxR6Rr2PW7l',	
		'private' => 'sk_live_eUOdfhIlsIKLrq2I6EuQTKov'
	];
	
	Stripe::setApiKey($stripe['private']);
	
	//'publishable' => 'pk_live_hyFkxeHB1z14uSxR6Rr2PW7l',	
	//'private' => 'sk_live_eUOdfhIlsIKLrq2I6EuQTKov'
	
	//TEST Publishable Key : 'publishable' => 'pk_test_3UsHheh23bwq8NJI9FIOzXFa',
	//TEST SECRET : 'private' => 'sk_test_kz5YtgaWKLCr6kW27puJ8APx'
	
	
	
?>