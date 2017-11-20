<?php
/**
 * Created by PhpStorm.
 * User: cyril
 * Date: 19/11/2017
 * Time: 12:52
 */
require_once (BASEURL.'models/Times/Times.php');

class TimesController{

    protected $do = null;

    public function __construct() {

        switch ($_SERVER['QUERY_STRING']){
            case 'global':
            default:
                $content = $this->getRowsTimes();
                include(BASEURL.'views/Times/times_table.php');
                break;
        }
    }

    public function getRowsTimes(){
        $times = new Times();
        $getTimes = $times->getAllTimes();

        $tableContent = array();
        $tableContent['thead'] = array();
        $tableContent['tbody'] = array();
        /*
        while ($result = $getTimes->fetchAll (PDO::FETCH_COLUMN)){
            var_dump($result);
            array_push ( $tableContent['thead'], $result );
        }*/
        while ($result = $getTimes->fetchAll(PDO::FETCH_OBJ)){
            array_push ( $tableContent['tbody'], $result );
        }
        return $tableContent;
    }
}
