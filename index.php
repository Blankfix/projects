<?php
    require_once('routes.php');
    require_once(MODEL.'inc/database.php');
    require_once(CONTROLLER.'inc/translation.php');

    require_once(SKELETON.'head.php');


//    var_dump(BASEURL. 'routes.php');


	/*
	include 'models/inc/database.php';
	$request = $sql->query('SELECT * FROM user');

	while ($data = $request->fetch()){
	  echo $data['firstname'].' '.$data['lastname'].' : connecté '.$data['email'];
	}
	*/
	//session_start();

//    $db = new Database('db710253047');
//    $data = $db->query('SELECT * FROM user');
//    $data = $db->query("INSERT INTO user VALUES ('', 'test', 'test', 'test', 'test', 'test', '1234567890', 5)");
//    $data = $db->query("SELECT * FROM user");
//    $result = $data->fetch();

/*
    echo '<pre>',
    var_dump($result);
    echo '</pre>';*/

//INSERT INTO client (prenom, nom, ville, age)
// VALUES
// ('Rébecca', 'Armand', 'Saint-Didier-des-Bois', 24),
// ('Aimée', 'Hebert', 'Marigny-le-Châtel', 36),
// ('Marielle', 'Ribeiro', 'Maillères', 27),
// ('Hilaire', 'Savary', 'Conie-Molitard', 58);




//    $insertDb = $db->insertDb('user', 'firstname, lastname, email, password, group, phone, role', 'test', 'test', 'test', 'test', 'test', '1234567890', 5');



//$insert = $this->getPDO()->prepare('INSERT INTO' . $table . '('. $fields .') VALUES(' . $values . ')');
//$insert->execute();


    session_start();
	if (isset($_SESSION))
	{
        call('Times');
	}
	else
    {
        require_once(VIEW.'Login/login_form.php');
	}
    require_once(SKELETON.'footer.php');
