<?php

class Nyaralo extends AProperty
{
    function __construct(int $id, string $subtype, int $ar, int $alapterulet, string $allapot, string $kilatas, string $futes,
                         string $atticType, string $erkely, string $akadalymentes, string $legkondi, int $szobakszama, int $felszobakszama,
                         int $furdoszobak_szama, int $telekterulet, string $villany, string $viz, string $gaz, string $csatorna)
    {
        $this->id = $id;
        $this->subtype = $this->GetSubtypeById($subtype);
        $this->ar = $ar;
        $this->alapterulet = $alapterulet;
        $this->allapot = $this->GetAllopotDescById($allapot);
        $this->atticType = $this->GetAtticDescById($atticType);
        $this->erkely = $erkely;
        $this->akadalymentes = $akadalymentes;
        $this->legkondi = $legkondi;
        $this->villany = $this->GetV_V_G_CS_Desc($villany);
        $this->viz = $this->GetV_V_G_CS_Desc($viz);
        $this->gaz = $this->GetV_V_G_CS_Desc($gaz);
        $this->csatorna = $this->GetV_V_G_CS_Desc($csatorna);
        $this->kilatas = $this->GetViewTypeDescById($kilatas);
        $this->futes = $this->GetHeatingTypeDescById($futes);
        $this->szobakszama = $szobakszama;
        $this->felszobakszama = $felszobakszama;
        $this->telekterulet = $telekterulet;
        $this->furdoszobak_szama = $furdoszobak_szama;

    }

    public $alapterulet;
    public $allapot;
    public $atticType;
    public $erkely;
    public $akadalymentes;
    public $legkondi;
    public $telekterulet;
    public $villany;
    public $viz;
    public $gaz;
    public $csatorna;
    public $kilatas;
    public $futes;
    public $szobakszama;
    public $felszobakszama;
    public $furdoszobak_szama;

    public function SaveToDescription()
    {
        $query = "INSERT INTO property_description(property_id, property_type, property_sub_type, property_condition, property_view, heating_type, attic_loft, balcony_patio, property_price,"
            ."property_size, num_of_whole_rooms, num_of_half_rooms, num_of_bathrooms, safe_for_wheelchair, airconditioning, plot_size, electricity, water, gas, pipage)"
            ." VALUES (:id, :type, :subtype, :allapot, :kilatas, :futes, :tetoter, :erkely, :ar, :terulet, :szobaszam, :felszobaszam, :furdoszam, :akadalymentesitett, :legkondis, :telekterulet, :villany, :viz, :gaz, :csatorna);";

        $data = $this->GetAllData();

        insert_into($query, $data);
    }

    public function UpdateOnDesc()
    {
        $subtype = $this->GetSubtypeId();
        $atticType = $this->GetAtticIdByDesc($this->atticType);
        $heatingType = $this->GetHeatingTypeIdByDesc($this->futes);
        $kilatas = $this->GetViewTypeIdByDesc($this->kilatas);
        $villany = $this->GetV_V_G_CS_Id($this->villany);
        $viz = $this->GetV_V_G_CS_Id($this->viz);
        $gaz = $this->GetV_V_G_CS_Id($this->gaz);
        $csatorna = $this->GetV_V_G_CS_Id($this->csatorna);
        $query = "UPDATE property_description SET property_sub_type = :subtype, property_condition = :allapot, property_view = :kilatas, heating_type = :futes, attic_loft = :tetoter, balcony_patio = :erkely,"
            ."property_price = :ar, property_size = :terulet, num_of_whole_rooms = :szobaszam, num_of_half_rooms = :felszobaszam, num_of_bathrooms = :furdoszam, safe_for_wheelchair = :akadalymentesitett,"
            ." airconditioning = :legkondis, plot_size = :telekterulet, electricity = :villany, water = :viz, gas = :gaz, pipage = :csatorna WHERE property_id = :id;";
        $data = array(
            'id' => $this->id,
            'subtype' => $subtype,
            'allapot' => $this->GetAllapotIdByDesc($this->allapot),
            'kilatas' => $kilatas,
            'futes' => $heatingType,
            'tetoter' => $atticType,
            'erkely' => $this->erkely,
            'ar' => $this->ar,
            'terulet' => $this->alapterulet,
            'szobaszam' => $this->szobakszama,
            'felszobaszam' => $this->felszobakszama,
            'furdoszam' => $this->furdoszobak_szama,
            'akadalymentesitett' => $this->akadalymentes,
            'legkondis' => $this->legkondi,
            'telekterulet' => $this->telekterulet,
            'villany' => $villany,
            'viz' => $viz,
            'gaz'=>$gaz,
            'csatorna'=>$csatorna
        );
        update($query, $data);
    }

    public function GetData(): array
    {
        $data = array(
            'id' => $this->id,
            'property_type' => "NYARALO",
            'subtype' => $this-> subtype,
            'ar' => $this->ar,
            'alapterulet' => $this->alapterulet,
            'telekterulet' => $this->telekterulet
        );
        return $data;
    }

    public function GetAllData(): array
    {
        $type = $this->GetTypeId();
        $subtype = $this->GetSubtypeId();
        $atticType = $this->GetAtticIdByDesc($this->atticType);
        $heatingType = $this->GetHeatingTypeIdByDesc($this->futes);
        $kilatas = $this->GetViewTypeIdByDesc($this->kilatas);
        $villany = $this->GetV_V_G_CS_Id($this->villany);
        $viz = $this->GetV_V_G_CS_Id($this->viz);
        $gaz = $this->GetV_V_G_CS_Id($this->gaz);
        $csatorna = $this->GetV_V_G_CS_Id($this->csatorna);
        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'allapot' => $this->GetAllapotIdByDesc($this->allapot),
            'kilatas' => $kilatas,
            'futes' => $heatingType,
            'tetoter' => $atticType,
            'erkely' => $this->erkely,
            'ar' => $this->ar,
            'terulet' => $this->alapterulet,
            'szobaszam' => $this->szobakszama,
            'felszobaszam' => $this->felszobakszama,
            'furdoszam' => $this->furdoszobak_szama,
            'akadalymentesitett' => $this->akadalymentes,
            'legkondis' => $this->legkondi,
            'telekterulet' => $this->telekterulet,
            'villany' => $villany,
            'viz' => $viz,
            'gaz'=>$gaz,
            'csatorna'=>$csatorna
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
        $result = (select( "SELECT property_type_code FROM property_types WHERE property_type_desc = 'NYARALO';", true, null));
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

    private function GetV_V_G_CS_Id($needed)
    {
        $result = (select( "SELECT e_w_g_p_type_code FROM e_w_g_p_types WHERE e_w_g_p_type_desc = '".$needed."';", true, null));
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

    private function GetHeatingTypeDescById($heating){
        $result = (select( "SELECT heating_type_desc FROM property_heatings WHERE heating_type_code = '".$heating."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetHeatingTypeIdByDesc($heating){
        $result = (select( "SELECT heating_type_code FROM property_heatings WHERE heating_type_desc = '".$heating."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetViewTypeDescById($view){
        $result = (select( "SELECT property_view_desc FROM property_views WHERE property_view_code = '".$view."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetViewTypeIdByDesc($view){
        $result = (select( "SELECT property_view_code FROM property_views WHERE property_view_desc = '".$view."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

}