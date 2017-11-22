<?php

    function _t($str){
        switch($str)
        {
            case 'title':
                $str = 'Titre';
                break;
            case 'description':
                $str = 'Description';
                break;
            case 'package':
                $str = 'Forfait (j/h)';
                break;
            case 'costrate':
                $str = 'Taux forfaitaire';
                break;
        }
        return $str;
    }

    function _e($str){
        echo _t($str);
    }