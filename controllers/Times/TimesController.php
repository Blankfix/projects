<?php
/**
 * Created by PhpStorm.
 * User: cyril
 * Date: 19/11/2017
 * Time: 12:52
 */
require_once (BASEURL.'models/Times/Times.php');

class TimesController{
    private function getRowsTimes(){
        $times = new Times();
        $getTimes = $times->getAllTimes();
        $rows = array();
        while ($result = $getTimes->fetchAll(PDO::FETCH_OBJ)){
            array_push ( $rows, $result );
        }
        return $rows;
    }
    public function displayRowsTimes(){
        
    }
}
