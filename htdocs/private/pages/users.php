<?php

require_once './private/utils/db_manager.php';

function login(){
    if (!filter_has_var(INPUT_POST, 'submit')){
        require USERS_DIR.'login.php';
    } else {
        $users = select('SELECT * FROM users');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $success = false;
        foreach ($users as &$user){
            if ($user['email']===$email && $user['password']===$password){
                $_SESSION['user'] = $user;
                $success = true;
                break;
            }
        }
        if ($success){
            header('Location: '.BASE_URL);
        } else {
            echo 'Helytelen email cím vagy jelszó!';
        }
    }
}

function logout(){
    session_unset();
    header('Location: '.BASE_URL);
}

function registration(){
    require_once USERS_DIR.'registration.php';
}