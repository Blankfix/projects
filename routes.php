<?php


//define('BASEURL',  $_SERVER['SERVER_NAME'] . '/projects/', false);
//define('BASEURL', $_SERVER['DOCUMENT_ROOT'] . '/projects/', false);
define('BASEURL', realpath());
define('MODEL', realpath().'models/');
define('CONTROLLER', realpath().'controllers/');
define('VIEW', realpath().'views/');
define('LAYOUT', realpath().'views/layout/');
define('SKELETON', realpath().'views/layout/global/');
define('CSS', realpath().'assets/css/');
define('JS', realpath().'assets/js/');
define('IMG', realpath().'assets/img/');

function call($controller, $action)
{
    switch($controller)
    {
        case 'User/List':
            $controller = new ListController();
            break;
        case 'User/Login':
            $controller = new LoginController();
            break;
        case 'Project':
            require_once( CONTROLLER . $controller. '/'. $controller . 'Controller.php' );
            $controller = new TimesController();
            break;
    }

    //$controller->{$action}();
}

