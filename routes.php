<?php

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

