<?php

class Sprint {
    public function getSprints($id){
        $db = new Database();
        $data = $db->query('SELECT * FROM sprint WHERE project = '.$id);

        return $data;
    }
}
