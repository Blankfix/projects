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
	if (isset($_SESSION)) {
?>
	Connecté
<?php
	}else{
        require_once('views/Login/login_form.php');
        require_once('models/Times/Times.php');
	}
    require_once('views/layout/footer.php');
