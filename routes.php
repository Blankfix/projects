<?php


//define('BASEURL',  $_SERVER['SERVER_NAME'] . '/projects/', false);
//define('BASEURL', $_SERVER['DOCUMENT_ROOT'] . '/projects/', false);
define('BASEURL', realpath());
echo BASEURL;

function call($controller, $action)
{
    require_once('controllers/' . $controller . 'Controller.php');

    switch($controller)
    {
        case 'User/List':
            $controller = new ListController();
            break;
        case 'User/Login':
            $controller = new LoginController();
            break;
    }

    $controller->{$action}();
}

