<?php


//define('BASEURL',  $_SERVER['SERVER_NAME'] . '/projects/', false);
//define('BASEURL', $_SERVER['DOCUMENT_ROOT'] . '/projects/', false);
define('BASEURL', realpath());

function call($controller, $action)
{
    require_once('controllers/' . ucfirst($controller) . 'Controller.php');

    switch($controller)
    {
        case 'User/List':
            $controller = new ListController();
            break;
        case 'User/Login':
            $controller = new LoginController();
            break;
        case 'times':
            $controller = new LoginController();
            break;
    }

    $controller->{$action}();
}

