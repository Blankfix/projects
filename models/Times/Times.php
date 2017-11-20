<?php

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
