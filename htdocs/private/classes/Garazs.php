<?php

class Garazs extends AProperty
{
    function __construct(int $id, string $subtype, int $ar, int $alapterulet, string $allapot)
    {
        $this->id = $id;
        $this->subtype = $this->GetSubtypeById($subtype);
        $this->ar = $ar;
        $this->alapterulet = $alapterulet;
        $this->allapot = $this->GetAllopotDescById($allapot);
    }

    public $alapterulet;
    public $allapot;

    public function SaveToDescription()
    {
        $type = $this->GetTypeId();
        $subtype = $this->GetSubtypeId($this->subtype);
        $query = "INSERT INTO property_description(property_id, property_type, property_sub_type, property_price, property_size, property_condition) VALUES (:id, :type, :subtype, :ar, :terulet, :allapot);";
        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'ar' => $this->ar,
            'terulet' => $this->alapterulet,
            'allapot' => $this->GetAllapotIdByDesc($this->allapot)
        );
        insert_into($query, $data);
    }

    public function UpdateOnDesc()
    {
        $subtype = $this->GetSubtypeId($this->subtype);
        $query = "UPDATE property_description SET property_sub_type = :subtype, property_price = :ar, property_size = :terulet, property_condition = :allapot WHERE property_id = :id;";
        $data = array(
            'id' => $this->id,
            'subtype' => $subtype,
            'ar' => $this->ar,
            'terulet' => $this->alapterulet,
            'allapot' => $this->GetAllapotIdByDesc($this->allapot)
        );
        update($query, $data);
    }

    public function GetData(): array
    {
        $data = array(
            'id' => $this->id,
            'property_type' => "garazs",
            'subtype' => $this-> subtype,
            'ar' => $this->ar,
            'alapterulet' => $this->alapterulet
        );
        return $data;
    }

    public function GetAllData(): array
    {
        $data = array('id' => $this->id,
            'property_type' => "garazs",
            'subtype' => $this->subtype,
            'ar' => $this->ar,
            'alapterulet' => $this->alapterulet,
            'allapot' => $this->allapot
        );
        return $data;
    }

    private function GetAllopotDescById($allapot){
        $result = (select( "SELECT property_condition_desc FROM property_conditions WHERE property_condition_code = '".$allapot."';",true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetAllapotIdByDesc($allapot){
        $result = (select( "SELECT property_condition_code FROM property_conditions WHERE property_condition_desc = '".$allapot."';",true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetTypeId()
    {
        $result = (select( "SELECT property_type_code FROM property_types WHERE property_type_desc = 'GARAZS';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetSubtypeId()
    {
        $result = (select( "SELECT property_sub_type_code FROM property_sub_types WHERE property_sub_type_desc = '".$this->subtype."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetSubtypeById($subtype_id)
    {
        $result = (select( "SELECT property_sub_type_desc FROM property_sub_types WHERE property_sub_type_code = '".$subtype_id."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

}
?>
