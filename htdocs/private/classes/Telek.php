<?php

class Telek extends AProperty
{
    function __construct(int $id, string $subtype, int $ar, int $telekterulet, string $villany, string $viz, string $gaz, string $csatorna)
    {
        $this->id = $id;
        $this->subtype = $this->GetSubtypeById($subtype);
        $this->ar = $ar;
        $this->telekterulet = $telekterulet;
        $this->villany = $this->GetV_V_G_CS_Desc($villany);
        $this->viz = $this->GetV_V_G_CS_Desc($viz);
        $this->gaz = $this->GetV_V_G_CS_Desc($gaz);
        $this->csatorna = $this->GetV_V_G_CS_Desc($csatorna);
    }

    public $telekterulet;
    public $villany;
    public $viz;
    public $gaz;
    public $csatorna;


    public function SaveToDescription()
    {
        $type = $this->GetTypeId();
        $subtype = $this->GetSubtypeId();
        $villany = $this->GetV_V_G_CS_Id($this->villany);
        $viz = $this->GetV_V_G_CS_Id($this->viz);
        $gaz = $this->GetV_V_G_CS_Id($this->gaz);
        $csatorna = $this->GetV_V_G_CS_Id($this->csatorna);
        $query = "INSERT INTO property_description(property_id, property_type, property_sub_type, property_price, plot_size, electricity, water, gas, pipage) VALUES (:id, :type, :subtype, :ar, :terulet, :villany, :viz, :gaz, :csatorna);";
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
        insert_into($query, $data);
    }

    public function UpdateOnDesc()
    {
        $villany = $this->GetV_V_G_CS_Id($this->villany);
        $viz = $this->GetV_V_G_CS_Id($this->viz);
        $gaz = $this->GetV_V_G_CS_Id($this->gaz);
        $csatorna = $this->GetV_V_G_CS_Id($this->csatorna);
        $subtype = $this->GetSubtypeId($this->subtype);
        $query = "UPDATE property_description SET property_sub_type = :subtype, property_price = :ar, plot_size = :terulet, electricity = :villany, water = :viz, gas = :gaz, pipage = :csatorna WHERE property_id = :id;";
        $data = array(
            'id' => $this->id,
            'subtype' => $subtype,
            'ar' => $this->ar,
            'terulet' => $this->telekterulet,
            'villany' => $villany,
            'viz' => $viz,
            'gaz'=> $gaz,
            'csatorna' => $csatorna);

        update($query, $data);
    }

    public function GetData(): array
    {
        $data = array(
            'id' => $this->id,
            'property_type' => "telek",
            'property_subtype'=> $this->subtype,
            'ar' => $this->ar,
            'terulet' => $this->telekterulet);
        return $data;
    }

    public function GetAllData(): array
    {
        $data = array('id' => $this->id,
            'property_type' => "telek",
            'property_subtype' => $this->subtype,
            'ar' => $this->ar,
            'terulet' => $this->telekterulet,
            'villany' => $this-> villany,
            'viz' => $this->viz,
            'gaz'=>$this->gaz,
            'csatorna'=>$this->csatorna);
        return $data;
    }

    private function GetTypeId()
    {
        $result = (select( "SELECT property_type_code FROM property_types WHERE property_type_desc = 'telek' ", true, null));
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

    private function GetV_V_G_CS_Id($needed)
    {
        $result = (select( "SELECT e_w_g_p_type_code FROM e_w_g_p_types WHERE e_w_g_p_type_desc = '".$needed."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetSubtypeById($subtype_id)
    {
        $result = (select( "SELECT property_sub_type_desc FROM property_sub_types WHERE property_sub_type_code = '".$subtype_id."';",true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetV_V_G_CS_Desc($id)
    {
        $result = (select( "SELECT e_w_g_p_type_desc FROM e_w_g_p_types WHERE e_w_g_p_type_code = '".$id."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

}

?>
