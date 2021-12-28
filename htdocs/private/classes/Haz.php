<?php

class Haz extends AProperty
{
    function __construct(int $id, string $subtype, string $allapot, string $kilatas, string $futes, string $parkolas, string $komfort,
                         string $atticType, string $furdoEsWC, string $erkely, string $akadalymentes, string $legkondi, int $ar, int $alapterulet,
                         int $szobakszama, int $felszobakszama, int $furdoszobak_szama, int $telekterulet, int $szintekszama, string $pince, string $padlas)
    {
        $this->id = $id;
        $this->subtype = $this->GetSubtypeById($subtype);

        $this->allapot = $this->GetAllopotDescById($allapot);
        $this->kilatas = $this->GetViewTypeDescById($kilatas);
        $this->futes = $this->GetHeatingTypeDescById($futes);
        $this->parkolas = $this->GetParkingTypeDescById($parkolas);
        $this->komfort = $this->GetComfortTypeDescById($komfort);
        $this->atticType = $this->GetAtticDescById($atticType);
        $this->furdoEsWC = $this->GetFurdoTypeDescById($furdoEsWC);
        $this->erkely = $erkely;
        $this->akadalymentes = $akadalymentes;
        $this->legkondi = $legkondi;
        $this->ar = $ar;
        $this->alapterulet = $alapterulet;
        $this->szobakszama = $szobakszama;
        $this->felszobakszama = $felszobakszama;
        $this->furdoszobak_szama = $furdoszobak_szama;
        $this->telekterulet = $telekterulet;
        $this->szintekszama = $szintekszama;
        $this->pince = $pince;
        $this->padlas = $padlas;
    }

    public $allapot;
    public $kilatas;
    public $futes;
    public $parkolas;
    public $komfort;
    public $atticType;
    public $furdoEsWC;
    public $erkely;
    public $akadalymentes;
    public $legkondi;
    public $alapterulet;
    public $szobakszama;
    public $felszobakszama;
    public $furdoszobak_szama;
    public $telekterulet;
    public $szintekszama;
    public $pince;
    public $padlas;


    public function SaveToDescription()
    {
        $query = "INSERT INTO property_description(property_id, property_type, property_sub_type, property_condition, property_view, heating_type, parking, comfort_rate, attic_loft, bathroom_toilet, "
            ."balcony_patio, property_price, property_size, num_of_whole_rooms, num_of_half_rooms, num_of_bathrooms, safe_for_wheelchair, airconditioning, plot_size, num_of_floors, basement, attic)"
            ." VALUES (:id, :type, :subtype, :allapot, :kilatas, :futes, :parkolas, :komfort, :tetoter, :furdoEsWc, :erkely, :ar, :terulet, :szobaszam, :felszobaszam, :furdoszam, :akadalymentesitett, :legkondis, :telekterulet, :szintekszama, :pince, :padlas);";

        $data = $this->GetAllData();

        insert_into($query, $data);
    }

    public function UpdateOnDesc()
    {
        $allData = $this->GetAllData();
        $query = "UPDATE property_description SET property_sub_type = :subtype, property_condition = :allapot, property_view = :kilatas, heating_type = :futes, parking = :parkolas, comfort_rate = :komfort, "
            ."attic_loft = :tetoter, bathroom_toilet = :furdoEsWc, balcony_patio = :erkely, property_price = :ar, property_size = :terulet, num_of_whole_rooms = :szobaszam, num_of_half_rooms = :felszobaszam, num_of_bathrooms = :furdoszam, "
            ."safe_for_wheelchair = :akadalymentesitett, airconditioning = :legkondis, plot_size = :telekterulet, num_of_floors = :szintekszama, basement = :pince, attic = :pince WHERE property_id = :id;";
        $data = array(
            'id' => $allData['id'],
            'subtype' => $allData['subtype'],
            'allapot' => $allData['allapot'],
            'kilatas' => $allData['kilatas'],
            'futes' => $allData['futes'],
            'parkolas' => $allData['parkolas'],
            'komfort' => $allData['komfort'],
            'tetoter' => $allData['tetoter'],
            'furdoEsWc' => $allData['furdoEsWc'],
            'erkely' => $allData['erkely'],
            'ar' => $allData['ar'],
            'terulet' => $allData['terulet'],
            'szobaszam' => $allData['szobaszam'],
            'felszobaszam' => $allData['felszobaszam'],
            'furdoszam' => $allData['furdoszam'],
            'akadalymentesitett' => $allData['akadalymentesitett'],
            'legkondis' => $allData['legkondis'],
            'telekterulet' => $allData['telekterulet'],
            'szintekszama' => $allData['szintekszama'],
            'pince' => $allData['pince'],
            'padlas' => $allData['padlas']
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
            'alapterulet' => $this->alapterulet
        );
        return $data;
    }

    public function GetAllData(): array
    {
        $type = $this->GetTypeId();
        $subtype = $this->GetSubtypeId();
        $atticType = $this->GetAtticIdByDesc($this->atticType);
        $parkolas = $this->GetParkingTypeIdByDesc($this->parkolas);
        $heatingType = $this->GetHeatingTypeIdByDesc($this->futes);
        $kilatas = $this->GetViewTypeIdByDesc($this->kilatas);
        $komfort = $this->GetComfortTypeIdByDesc($this->komfort);
        $furdoEsWc = $this->GetFurdoTypeIdByDesc($this->furdoEsWC);
        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'allapot' => $this->GetAllapotIdByDesc($this->allapot),
            'kilatas' => $kilatas,
            'futes' => $heatingType,
            'parkolas' => $parkolas,
            'komfort' => $komfort,
            'tetoter' => $atticType,
            'furdoEsWc' => $furdoEsWc,
            'erkely' => $this->erkely,
            'ar' => $this->ar,
            'terulet' => $this->alapterulet,
            'szobaszam' => $this->szobakszama,
            'felszobaszam' => $this->felszobakszama,
            'furdoszam' => $this->furdoszobak_szama,
            'akadalymentesitett' => $this->akadalymentes,
            'legkondis' => $this->legkondi,
            'telekterulet' => $this->telekterulet,
            'szintekszama' => $this->szintekszama,
            'pince' => $this->pince,
            'padlas' => $this->padlas
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
        $result = (select( "SELECT property_type_code FROM property_types WHERE property_type_desc = 'HAZ';", true, null));
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

    private function GetFurdoTypeDescById($furdo){
        $result = (select( "SELECT bathroom_toilet_type_desc FROM bathroom_toilet_types WHERE bathroom_toilet_type_code = '".$furdo."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetFurdoTypeIdByDesc($furdo){
        $result = (select( "SELECT bathroom_toilet_type_code FROM bathroom_toilet_types WHERE bathroom_toilet_type_desc = '".$furdo."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetParkingTypeDescById($parking){
        $result = (select( "SELECT parking_type_desc FROM parking_types WHERE parking_type_code = '".$parking."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetParkingTypeIdByDesc($parking){
        $result = (select( "SELECT parking_type_code FROM parking_types WHERE parking_type_desc = '".$parking."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetComfortTypeDescById($comfort){
        $result = (select( "SELECT comfort_type_desc FROM property_comfort_types WHERE comfort_type_code = '".$comfort."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetComfortTypeIdByDesc($comfort){
        $result = (select( "SELECT comfort_type_code FROM property_comfort_types WHERE comfort_type_desc = '".$comfort."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

}