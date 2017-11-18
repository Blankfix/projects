<?php
    require_once('models/inc/database.php');
    require_once('views/layout/head.php');
	/*
	include 'models/inc/database.php';
	$request = $sql->query('SELECT * FROM user');

	while ($data = $request->fetch()){
	  echo $data['firstname'].' '.$data['lastname'].' : connecté '.$data['email'];
	}
	*/
	//session_start();

    $db = new Database('db710253047');
    $data = $db->query('SELECT * FROM user');
    var_dump($data);

	if (isset($_SESSION))
	{
	    echo 'Connecté';
	}
	else
    {
        require_once('views/Login/login_form.php');
	}
    require_once('views/layout/footer.php');
