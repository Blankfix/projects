<?php
	include('views/layout/head.php');
	/*
	include 'models/inc/database.php';
	$request = $sql->query('SELECT * FROM user');

	while ($data = $request->fetch()){
	  echo $data['firstname'].' '.$data['lastname'].' : connecté '.$data['email'];
	}
	*/
	session_start();
	if (isset($_SESSION)) {
		
	}else{
		
	}
	include('views/layout/footer.php');
?>