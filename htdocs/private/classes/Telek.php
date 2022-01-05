<?php

class Telek extends AProperty
{
    function __construct(int $id, string $subtype, int $ar, int $telekterulet, string $villany, string $viz, string $gaz, string $csatorna)
    {
        $this->id = $id;
        $this->subtype = GetSubtypeById($subtype);
        $this->ar = $ar;
        $this->telekterulet = $telekterulet;
        $this->villany = GetV_V_G_CS_Desc($villany);
        $this->viz = GetV_V_G_CS_Desc($viz);
        $this->gaz = GetV_V_G_CS_Desc($gaz);
        $this->csatorna = GetV_V_G_CS_Desc($csatorna);
    }

    public $telekterulet;
    public $villany;
    public $viz;
    public $gaz;
    public $csatorna;


    public function SaveToDescription()
    {
        $query = "INSERT INTO property_description(property_id, property_type, property_sub_type, property_price, plot_size, electricity, water, gas, pipage) VALUES (:id, :type, :subtype, :ar, :terulet, :villany, :viz, :gaz, :csatorna);";
        $data = $this->GetAllData();
        insert_into($query, $data);
    }

    public function UpdateOnDesc()
    {
        $alldata = $this->GetAllData();
        $query = "UPDATE property_description SET property_sub_type = :subtype, property_price = :ar, plot_size = :terulet, electricity = :villany, water = :viz, gas = :gaz, pipage = :csatorna WHERE property_id = :id;";
        $data = array(
            'id' => $alldata['id'],
            'subtype' => $alldata['subtype'],
            'ar' => $alldata['ar'],
            'terulet' => $alldata['terulet'],
            'villany' => $alldata['villany'],
            'viz' => $alldata['viz'],
            'gaz' => $alldata['gaz'],
            'csatorna' => $alldata['csatorna']
        );

        update($query, $data);
    }

    public function GetData(): array
    {
        $data = array(
            'id' => $this->id,
            'property_type' => "TELEK",
            'property_subtype'=> $this->subtype,
            'ar' => $this->ar,
            'terulet' => $this->telekterulet
        );
        return $data;
    }

    public function GetAllData(): array
    {
        $type = GetTypeId("TELEK");
        $subtype = GetSubtypeId($this->subtype);
        $villany = GetV_V_G_CS_Id($this->villany);
        $viz = GetV_V_G_CS_Id($this->viz);
        $gaz = GetV_V_G_CS_Id($this->gaz);
        $csatorna = GetV_V_G_CS_Id($this->csatorna);
        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'ar' => $this->ar,
            'terulet' => $this->telekterulet,
            'villany' => $villany,
            'viz' => $viz,
            'gaz'=>$gaz,
            'csatorna'=>$csatorna
        );
        return $data;
    }
}

?>
