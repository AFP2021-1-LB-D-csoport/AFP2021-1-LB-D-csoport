<?php

class Raktar extends AProperty
{
    function __construct(int $id, string $subtype, int $ar, int $alapterulet, int $telekterulet, string $allapot)
    {
        $this->id = $id;
        $this->subtype = GetSubtypeById($subtype);
        $this->ar = $ar;
        $this->alapterulet = $alapterulet;
        $this->telekterulet = $telekterulet;
        $this->allapot = GetAllopotDescById($allapot);
    }

    public $alapterulet;
    public $allapot;
    public $telekterulet;

    public function SaveToDescription()
    {
        $query = "INSERT INTO property_description(property_id, property_type, property_sub_type, property_price, property_size, property_condition, plot_size) VALUES (:id, :type, :subtype, :ar, :terulet, :allapot, :telekterulet);";

        $data = $this->GetAllData();

        insert_into($query, $data);
    }

    public function UpdateOnDesc()
    {
        $alldata = $this->GetAllData();
        $query = "UPDATE property_description SET property_sub_type = :subtype, property_price = :ar, property_size = :terulet, property_condition = :allapot, plot_size = :telekterulet WHERE property_id = :id;";
        $data = array(
            'id' => $alldata['id'],
            'subtype' => $alldata['subtype'],
            'ar' => $alldata['ar'],
            'terulet' => $alldata['terulet'],
            'allapot' => $alldata['allapot'],
            'telekterulet' => $alldata['telekterulet']
        );
        update($query, $data);
    }

    public function GetData(): array
    {
        $data = array(
            'id' => $this->id,
            'property_type' => "raktar",
            'subtype' => $this-> subtype,
            'ar' => $this->ar,
            'alapterulet' => $this->alapterulet,
            'telekterulet' => $this->telekterulet
        );
        return $data;
    }

    public function GetAllData(): array
    {
        $type = GetTypeId("RAKTAR");
        $subtype = GetSubtypeId($this->subtype);
        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'ar' => $this->ar,
            'terulet' => $this->alapterulet,
            'allapot' => GetAllapotIdByDesc($this->allapot),
            'telekterulet' => $this->telekterulet
        );
        return $data;
    }
}