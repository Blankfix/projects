<?php
require_once('../../models/inc/database.php');

class Times{
    public function getAllTimes(){
        $db = new Database();
        $data = $db->query('SELECT * FROM project');

        return $data;
    }
    public function getUserTimes(){
        $db = new Database();
        $data = $db->query('SELECT * FROM project where TODO');

        return $data;
    }
}

$times = new Times();
$getTimes = $times->getAllTimes();
while ($result = $getTimes->fetchAll(PDO::FETCH_OBJ)){
    var_dump($result);
}