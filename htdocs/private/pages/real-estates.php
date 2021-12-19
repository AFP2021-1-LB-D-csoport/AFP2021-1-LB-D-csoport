<?php

require_once './private/utils/db_manager.php';

function my_ads(){
    echo 'Saját hirdetéseim';
    $query = 'SELECT * FROM real_estates';
    $result = select($query);
    require_once REAL_ESTATES_DIR.'list.php';
}

function enlist(){
    $result = null;
    require_once REAL_ESTATES_DIR.'list.php';
}