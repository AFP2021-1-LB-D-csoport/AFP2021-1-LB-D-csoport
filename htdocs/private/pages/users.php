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
        $date = "TO_DATE(2021-12-19)";
        $status = 'offline';
        $password = filter_input(INPUT_POST, 'pwd');
        insert_into('INSERT INTO profile (profile_id, user_name, email_address, date_of_registration, status, pwd) 
            VALUES (:profile_id, :user_name, :email_address, :date_of_registration, :status, :pwd)', 
            ['profile_id' => $id, 'user_name' => $username, 'email_address' => $email, 'date_of_registration' => 
            $date, 'status' => $status, 'pwd' => $password]);
        header('Location: '.BASE_URL);
    }
}