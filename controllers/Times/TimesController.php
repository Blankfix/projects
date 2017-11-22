<?php
/**
 * Created by PhpStorm.
 * User: cyril
 * Date: 19/11/2017
 * Time: 12:52
 */

class TimesController{

    protected $do = null;

    protected function className(){
        return chop(__CLASS__ , 'Controller');
    }

    protected function classModel(){
        require_once ( MODEL. $this->className() . '/' . $this->className() . '.php');
    }

    protected function classExtends(){
        require_once ( CONTROLLER. 'Project/ProjectController.php');
        new ProjectController();
        require_once ( CONTROLLER. 'Sprint/SprintController.php');
        new SprintController();
    }

    public function __construct()
    {
        $this->classModel();
        $this->classExtends();
        switch ($_SERVER['QUERY_STRING']) {
            case 'global':
            default:
                $content = ProjectController::getProjects();
                require(VIEW . $this->className() . '/times_table.php');
                //require(LAYOUT . 'table/table.php');
                break;
        }
    }
}
