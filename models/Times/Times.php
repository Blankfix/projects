<?php
    $request = $sql->query('SELECT * from project');
    while ($data = $results->fetch()){
        echo $data['title'];
    }