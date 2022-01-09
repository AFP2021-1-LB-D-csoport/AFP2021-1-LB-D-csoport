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
            if ($user['email_address']===$email && $user['pwd']===$password && $user['status'] !== 'DELETED'){
                $_SESSION['user'] = $user;
                $success = true;
                break;
            }
        }
        if ($success){
            header('Location: '.BASE_URL);
        } else {
            $realtors = select('SELECT * FROM realtor');
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            $success = false;
            foreach ($realtors as &$realtor){
                if ($realtor['email_address']===$email && $realtor['pwd']===$password){
                    $_SESSION['user'] = $realtor;
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
}

function logout(){
    session_unset();
    header('Location: '.BASE_URL);
}

function registration(){
    if (!filter_has_var(INPUT_POST, 'submit')){
        require USERS_DIR.'registration.php';
    } else {
        $select = select('SELECT MAX(profile_id) FROM profile');
        $max_id = $select[0]["MAX(profile_id)"];
        $id = str_pad(($max_id + 1), 4, '0', STR_PAD_LEFT);
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
        $new_name = filter_input(INPUT_POST, 'username');
        $id = $_SESSION['user']['profile_id'];
        $query = 'UPDATE profile SET user_name = :new_name WHERE profile_id = :id';
        $params = ['new_name' => $new_name, 'id' => $id];
        $success = update($query, $params);
        if ($success) {
            $_SESSION['user']['user_name'] = $new_name;
            header('Location: '.BASE_URL);
        } else {
            echo 'Sikertelen módosítás.';
        }
    }
}

function edit_email() {
    if (!filter_has_var(INPUT_POST, 'edit_email')){
        require USERS_DIR.'edit_email.php';
    } else {
        $new_email = filter_input(INPUT_POST, 'email');
        $id = $_SESSION['user']['profile_id'];
        $query = 'UPDATE profile SET email_address = :new_email WHERE profile_id = :id';
        $params = ['new_email' => $new_email, 'id' => $id];
        $success = update($query, $params);
        if ($success) {
            $_SESSION['user']['email_address'] = $new_email;
            header('Location: '.BASE_URL);
        } else {
            echo 'Sikertelen módosítás.';
        }
    }
}

function edit_phone() {
    if (!filter_has_var(INPUT_POST, 'edit_phone')){
        require USERS_DIR.'edit_phone.php';
    } else {
        $new_phone = filter_input(INPUT_POST, 'phone');
        $id = $_SESSION['user']['profile_id'];
        $query = 'UPDATE profile SET phone_number = :new_phone WHERE profile_id = :id';
        $params = ['new_phone' => $new_phone, 'id' => $id];
        $success = update($query, $params);
        if ($success) {
            $_SESSION['user']['phone_number'] = $new_phone;
            header('Location: '.BASE_URL);
        } else {
            echo 'Sikertelen módosítás.';
        }
    }
}

function change_password() {
    if (!filter_has_var(INPUT_POST, 'change_password')){
        require USERS_DIR.'change_password.php';
    } else {
        $old_pwd = filter_input(INPUT_POST, 'old_pwd');
        $new_pwd = filter_input(INPUT_POST, 'pwd');
        $new_pwd_confirm = filter_input(INPUT_POST, 'pwd_confirm');
        $id = $_SESSION['user']['profile_id'];
        if ($old_pwd !== $_SESSION['user']['pwd'] || $new_pwd !== $new_pwd_confirm) {
            echo 'Helytelenül megadott adatok.';
            return;
        }
        $query = 'UPDATE profile SET pwd = :new_pwd WHERE profile_id = :id';
        $params = ['new_pwd' => $new_pwd, 'id' => $id];
        $success = update($query, $params);
        if ($success) {
            $_SESSION['user']['pwd'] = $new_pwd;
            header('Location: '.BASE_URL);
        } else {
            echo 'Sikertelen módosítás.';
        }
    }
}

function delete_user() {
    $id = filter_input(INPUT_GET, 'd');
    $success = delete("UPDATE profile SET status = 'DELETED' WHERE profile_id = :id", ['id' => $id]);
    if ($success) echo "Felhasználó törölve az adatbázisból.";
    else echo "Felhasználó törlése sikertelen.";
}