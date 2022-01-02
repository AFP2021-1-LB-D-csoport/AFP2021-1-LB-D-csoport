<?php

require_once './private/utils/db_manager.php';

function login(){
    if (!filter_has_var(INPUT_POST, 'submit')){
        require USERS_DIR.'login.php';
    } else {
        $users = select('SELECT * FROM profile');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $success = false;
        foreach ($users as &$user){
            if ($user['email_address']===$email && $user['pwd']===$password){
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
    if (!filter_has_var(INPUT_POST, 'submit')){
        require USERS_DIR.'registration.php';
    } else {
        $id = select('SELECT MAX(profile_id) FROM profile');
        $id = $id + 1;
        $username = filter_input(INPUT_POST, 'username');
        $email = filter_input(INPUT_POST, 'email');
        $date = '2021-12-19';
        $status = 'active';
        $password = filter_input(INPUT_POST, 'pwd');
        insert_into('INSERT INTO profile (profile_id, user_name, email_address, date_of_registration, status, pwd) 
            VALUES (:profile_id, :user_name, :email_address, :date_of_registration, :status, :pwd)', 
            ['profile_id' => $id, 'user_name' => $username, 'email_address' => $email, 'date_of_registration' => 
            $date, 'status' => $status, 'pwd' => $password]);
        header('Location: '.BASE_URL);
    }
}

function settings() {
    require USERS_DIR.'settings.php';
}

function edit_name() {
    if (!filter_has_var(INPUT_POST, 'edit_name')){
        require USERS_DIR.'edit_name.php';
    } else {
        
    }
}

function edit_email() {
    if (!filter_has_var(INPUT_POST, 'edit_email')){
        require USERS_DIR.'edit_email.php';
    } else {
        
    }
}

function edit_phone() {
    if (!filter_has_var(INPUT_POST, 'edit_phone')){
        require USERS_DIR.'edit_phone.php';
    } else {
        
    }
}

function change_password() {
    if (!filter_has_var(INPUT_POST, 'change_password')){
        require USERS_DIR.'change_password.php';
    } else {
        
    }
}