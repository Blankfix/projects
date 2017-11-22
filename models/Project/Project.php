<?php

class Project {
    public function getProjects(){
        $db = new Database();
        $data = $db->query('SELECT * FROM project');

        return $data;
    }
}
