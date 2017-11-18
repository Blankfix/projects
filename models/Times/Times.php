<?php
    $request = $db->query('SELECT * from project');
    while ($data = $request->fetch()){
        echo $data['title'];
    }