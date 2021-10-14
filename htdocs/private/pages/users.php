<?php

require_once './private/utils/db_manager.php';

function login(){
    require_once USERS_DIR.'login.php';
}

function logout(){
    session_unset();
    header('Location: '.BASE_URL);
}

function registration(){
    require_once USERS_DIR.'registration.php';
}