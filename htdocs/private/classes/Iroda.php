<?php

class Iroda extends AProperty
{
    function __construct(int $id, string $subtype, int $ar, int $alapterulet, string $allapot, string $atticType, int $emelet, string $lift, string $erkely, string $akadalymentes, string $legkondi)
    {
        $this->id = $id;
        $this->subtype = GetSubtypeById($subtype);
        $this->ar = $ar;
        $this->alapterulet = $alapterulet;
        $this->allapot = GetAllopotDescById($allapot);
        $this->atticType = GetAtticDescById($atticType);
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
        $query = "INSERT INTO property_description(property_id, property_type, property_sub_type, property_price, property_size, property_condition, attic_loft, floor_number, elevator, balcony_patio, safe_for_wheelchair, airconditioning)"
            ." VALUES (:id, :type, :subtype, :ar, :alapterulet, :allapot, :tetoter, :emelet, :lift, :erkely, :akadalymentesitett, :legkondi);";

        $data = $this->GetAllData();
        insert_into($query, $data);
    }

    public function UpdateOnDesc()
    {
        $alldata = $this->GetAllData();
        $query = "UPDATE property_description SET property_sub_type = :subtype, property_price = :ar, property_size = :alapterulet, property_condition = :allapot, attic_loft = :tetoter, floor_number = :emelet,
                elevator = :lift, balcony_patio = :erkely, safe_for_wheelchair = :akadalymentesitett, airconditioning = :legkondi WHERE property_id = :id;";
        $data = array(
            'id' => $alldata['id'],
            'subtype' => $alldata['subtype'],
            'ar' => $alldata['ar'],
            'alapterulet' => $alldata['alapterulet'],
            'allapot' => $alldata['allapot'],
            'tetoter' => $alldata['tetoter'],
            'emelet' => $alldata['emelet'],
            'lift' => $alldata['lift'],
            'erkely' => $alldata['erkely'],
            'akadalymentesitett' => $alldata['akadalymentesitett'],
            'legkondi' => $alldata['legkondi']
        );
        update($query, $data);
    }

    public function GetData(): array
    {
        $data = array(
            'id' => $this->id,
            'property_type' => "UZLETHELYISEG",
            'subtype' => $this -> subtype,
            'ar' => $this->ar,
            'alapterulet' => $this->alapterulet
        );
        return $data;
    }

    public function GetAllData(): array
    {
        $type = GetTypeId("UZLETHELYISEG");
        $subtype = GetSubtypeId($this->subtype);
        $atticType = GetAtticIdByDesc($this->atticType);

        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'ar' => $this->ar,
            'alapterulet' => $this->alapterulet,
            'allapot' => GetAllapotIdByDesc($this->allapot),
            'tetoter' => $atticType,
            'emelet' => $this->emelet,
            'lift' => $this->lift,
            'erkely' => $this->erkely,
            'akadalymentesitett' => $this->akadalymentes,
            'legkondi' => $this->legkondi
        );
        return $data;
    }
}