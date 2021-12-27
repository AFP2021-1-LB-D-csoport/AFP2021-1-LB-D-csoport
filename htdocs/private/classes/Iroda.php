<?php

class Iroda extends AProperty
{
    function __construct(int $id, string $subtype, int $ar, int $alapterulet, string $allapot, string $atticType, int $emelet, string $lift, string $erkely, string $akadalymentes, string $legkondi)
    {
        $this->id = $id;
        $this->subtype = $this->GetSubtypeById($subtype);
        $this->ar = $ar;
        $this->alapterulet = $alapterulet;
        $this->allapot = $this->GetAllopotDescById($allapot);
        $this->atticType = $this->GetAtticDescById($atticType);
        $this->lift = $lift;
        $this->erkely = $erkely;
        $this->emelet = $emelet;
        $this->akadalymentes = $akadalymentes;
        $this->legkondi = $legkondi;
    }

    public $alapterulet;
    public $allapot;
    public $atticType;
    public $emelet;
    public $lift;
    public $erkely;
    public $akadalymentes;
    public $legkondi;

    public function SaveToDescription()
    {
        $type = $this->GetTypeId();
        $subtype = $this->GetSubtypeId($this->subtype);
        $atticType = $this->GetAtticIdByDesc($this->atticType);
        $query = "INSERT INTO property_description(property_id, property_type, property_sub_type, property_price, property_size, property_condition, attic_loft, floor_number, elevator, balcony_patio, safe_for_wheelchair, airconditioning)"
            ." VALUES (:id, :type, :subtype, :ar, :terulet, :allapot, :tetoter, :emelet, :lift, :erkely, :akadalymentes, :legkondi);";

        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'ar' => $this->ar,
            'terulet' => $this->alapterulet,
            'allapot' => $this->GetAllapotIdByDesc($this->allapot),
            'tetoter' => $atticType,
            'emelet' => $this->emelet,
            'lift' => $this->lift,
            'erkely' => $this->erkely,
            'akadalymentes' => $this->akadalymentes,
            'legkondi' => $this->legkondi
        );

        insert_into($query, $data);
    }

    public function UpdateOnDesc()
    {
        $subtype = $this->GetSubtypeId($this->subtype);
        $atticType = $this->GetAtticIdByDesc($this->atticType);
        $query = "UPDATE property_description SET property_sub_type = :subtype, property_price = :ar, property_size = :terulet, property_condition = :allapot, attic_loft = :tetoter, floor_number = :emelet,
                elevator = :lift, balcony_patio = :erkely, safe_for_wheelchair = :akadalymentes, airconditioning = :legkondi WHERE property_id = :id;";
        $data = array(
            'id' => $this->id,
            'subtype' => $subtype,
            'ar' => $this->ar,
            'terulet' => $this->alapterulet,
            'allapot' => $this->GetAllapotIdByDesc($this->allapot),
            'tetoter' => $atticType,
            'emelet' => $this->emelet,
            'lift' => $this->lift,
            'erkely' => $this->erkely,
            'akadalymentes' => $this->akadalymentes,
            'legkondi' => $this->legkondi
        );
        update($query, $data);
    }

    public function GetData(): array
    {
        $data = array(
            'id' => $this->id,
            'property_type' => "UZLETHELYISEG",
            'subtype' => $this-> subtype,
            'ar' => $this->ar,
            'alapterulet' => $this->alapterulet
        );
        return $data;
    }

    public function GetAllData(): array
    {
        $data = array(
            'id' => $this->id,
            'property_type' => "UZLETHELYISEG",
            'subtype' => $this-> subtype,
            'ar' => $this->ar,
            'alapterulet' => $this->alapterulet,
            'allapot' => $this->GetAllapotIdByDesc($this->allapot),
            'tetoter' => $this->atticType,
            'emelet' => $this->emelet,
            'lift' => $this->lift,
            'erkely' => $this->erkely,
            'akadalymentes' => $this->akadalymentes,
            'legkondi' => $this->legkondi
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
        $result = (select( "SELECT property_type_code FROM property_types WHERE property_type_desc = 'UZLETHELYISEG';", true, null));
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

    private function GetAtticDescById($atticId){
        $result = (select( "SELECT attic_type_desc FROM attic_types WHERE attic_type_code = '".$atticId."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetAtticIdByDesc($atticDesc){
        $result = (select( "SELECT attic_type_code FROM attic_types WHERE attic_type_desc = '".$atticDesc."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }
}