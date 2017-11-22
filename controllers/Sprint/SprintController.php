<?php

class SprintController extends TimesController {

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

    public function getSprints($id){
        $content = null;

        $sprints = new Sprint();
        $getSprints = $sprints->getSprints($id);

        $table = array();
        $table['entries'] = array();

        while($entry = $getSprints->fetch(PDO::FETCH_ASSOC) )
        {
            array_push( $table['entries'], $entry );
        }

        $content = $table;
        return $content;
    }
}
