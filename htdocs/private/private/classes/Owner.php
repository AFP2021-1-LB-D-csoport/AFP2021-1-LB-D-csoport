<?php

class Owner
{
    function __construct(int $id, string $username, string $email, string $phone, string $registerDate, string $status, string $pw){
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
        $this->registerDate = $registerDate;
        $this->status = $status;
        $this->pw = $pw;
    }

    public $id;
    public $username;
    public $email;
    public $phone;
    public $registerDate;
    public $status;
    public $pw;

    public function GetData(){
        $data = array(
            'id' => $this->id,
            'username' => $this->username,
            'email'=> $this->email,
            'phone' => $this->phone,
            'registerDate' => $this->registerDate,
            'status' => $this->status
        );
        return $data;
    }

    public function SaveToProfile(){
        $query = "INSERT INTO profile VALUES (:id, :username, :email, :phone, :registerdate, :status, :pw)";
        $data = array(
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'phone' => $this->phone,
            'registerdate' => $this->registerDate,
            'status' => $this->status,
            'pw' => $this->pw
        );
        insert_into($query, $data);
    }

    public function SetStatus($status){
        $query = "UPDATE profile SET status = :status WHERE user_name = :username;";
        $data = array(
            'username' => $this->username,
            'status' => $status
        );
        update($query, $data);
    }

    public function UpdateProfile(){
        $query = "UPDATE profile SET email_address = :email, phone_number = :phone,  status = :status WHERE user_name = :username;";
        $data = array(
            'username' => $this->username,
            'email' => $this->email,
            'phone' => $this->phone,
            'status' => $this->status
        );
        update($query, $data);
    }

    public function ChangePassword($oldpw, $newpw): bool
    {
        if($oldpw === $this->pw){
            $this->pw = $newpw;
            $this->SavePassword();
            return true;
        }
        else{
            return false;
        }
    }


    private function SavePassword(){
        $query = 'UPDATE profile SET pwd = :pw WHERE user_name = :username;';
        $data = array(
            'username' => $this->username,
            'pw' => $this->pw
        );
        update($query,$data);
    }
}