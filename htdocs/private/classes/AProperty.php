<?php
require_once '../utils/db_manager.php';

abstract class AProperty
{
    public $id;
    public $subtype;
    public $ar;
    public $owner;
    public $realtor;
    public $status;
    public $tipus;
    public $dateOnMarket;
    public $dateOfMarket = null;

    public abstract function SaveToDescription();

    public abstract function UpdateOnDesc();

    public abstract function GetData(): array;

    public abstract function GetAllData(): array;

    public function SetStatus($status){
        $connection = get_connection();
        $query = "UPDATE property SET status = '". $status ."' WHERE property_id = " . $this->id . ";";
        $statement = $connection->prepare($query);
        $statement->execute();
        $statement->closeCursor();
        $connection = null;
    }


    public function SaveToPropertyTable(){
        $query = "INSERT INTO property VALUES (:id, :datum, null, :status, :tipus);";
        $data = array(
            'id' => $this->id,
            'datum' => $this->dateOnMarket,
            'status' => $this->status,
            'tipus' => $this->GetTipusIdByName($this->tipus)
        );
        insert_into($query,$data);
    }

    public function UpdateOnPropertyTable(){
        $query = "UPDATE property SET date_on_market = :date, status = :status, property_type_id = :tipus WHERE property_id = :id;";
        $data = array(
            'id' => $this->id,
            'date' => $this->dateOnMarket,
            'status' => $this->status,
            'tipus' => $this->GetTipusIdByName($this->tipus)
        );
        update($query, $data);
    }

    public function GetTipusNameById($id){
        $query = "SELECT property_type_desc FROM property_type WHERE property_type_id = :id;";
        $data = array(
            'id' => $id
        );
        $result = select($query,true,$data);
        foreach ($result as $r){
            return $r;
        }
    }

    public function GetTipusIdByName($name){
        $query = "SELECT property_type_id FROM property_type WHERE property_type_desc = :name;";
        $data = array(
            'name' => $name
        );
        $result = select($query,true,$data);
        foreach ($result as $r){
            return $r;
        }
    }
}


?>
