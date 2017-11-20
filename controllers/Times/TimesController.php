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
        $getCols = $times->getAllTimes();
        $getRows = $times->getAllTimes();

        $tableContent = array();
        $tableContent['thead'] = array();
        $tableContent['tbody'] = array();

        /*foreach ($getCols as $col){
            array_push ( $tableContent['thead'], array_keys( $col ) );
        }*/

        foreach ($getCols as $col){
            $colType = array_keys( $col );
            foreach($colType as $key => $value) {
                if( !is_numeric( $value ) ){
                    array_push ( $tableContent['thead'], $value );
                }
            }
        }

        while ($row = $getRows->fetch(PDO::FETCH_OBJ)){
            array_push ( $tableContent['tbody'], $row );
        }

        return $tableContent;
    }
}
