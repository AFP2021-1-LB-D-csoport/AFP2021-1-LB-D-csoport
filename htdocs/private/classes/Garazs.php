<?php

class Garazs extends AProperty
{
    function __construct(int $id, string $subtype, int $ar, int $alapterulet, string $allapot)
    {
        $this->id = $id;
        $this->subtype = GetSubtypeById($subtype);
        $this->ar = $ar;
        $this->alapterulet = $alapterulet;
        $this->allapot = GetAllopotDescById($allapot);
    }

    public $alapterulet;
    public $allapot;

    public function SaveToDescription()
    {
        $query = "INSERT INTO property_description(property_id, property_type, property_sub_type, property_price, property_size, property_condition) VALUES (:id, :type, :subtype, :ar, :terulet, :allapot);";

        $data = $this->GetAllData();

        insert_into($query, $data);
    }

    public function UpdateOnDesc()
    {
        $alldata = $this->GetAllData();
        $query = "UPDATE property_description SET property_sub_type = :subtype, property_price = :ar, property_size = :terulet, property_condition = :allapot WHERE property_id = :id;";

        $data = array(
            'id' => $alldata['id'],
            'subtype' => $alldata['subtype'],
            'ar' => $alldata['ar'],
            'terulet' => $alldata['terulet'],
            'allapot' => $alldata['allapot']
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
        $type = GetTypeId("GARAZS");
        $subtype = GetSubtypeId($this->subtype);
        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'ar' => $this->ar,
            'terulet' => $this->alapterulet,
            'allapot' => GetAllapotIdByDesc($this->allapot)
        );
        return $data;
    }
}
?>
