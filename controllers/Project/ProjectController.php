<?php

class ProjectController extends TimesController {

    protected $do = null;

    protected function className(){
        return str_replace('Controller', '', __CLASS__);
    }

    protected function classModel(){
        require_once ( MODEL. $this->className() . '/' . $this->className() . '.php');
    }


    public function __construct() {
        $this->classModel();
    }
    public function getProjects(){
        $content = null;

        $projects = new Project();
        $getProjects = $projects->getProjects();

        $table = array();
        $table['entries'] = array();

        while($entry = $getProjects->fetch(PDO::FETCH_ASSOC) )
        {
            array_push( $table['entries'], $entry );
        }

        $content = $table;
        return $content;
    }
}
