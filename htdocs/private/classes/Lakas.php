<?php

class Lakas extends AProperty
{
    function __construct(int $id, string $subtype, string $allapot, string $kilatas, string $tajolas, string $futes, string $parkolas, string $komfort,
                         string $atticType, string $furdoEsWC, int $emelet, float $belmagassag, string $lift, string $erkely, string $akadalymentes, string $legkondi,
                         string $kertkapcsolatos, int $ar, int $alapterulet, int $szobakszama, int $felszobakszama, int $furdoszobak_szama, string $lepcsohaz)
    {
        $this->id = $id;
        $this->subtype = $this->GetSubtypeById($subtype);

        $this->allapot = $this->GetAllopotDescById($allapot);
        $this->kilatas = $this->GetViewTypeDescById($kilatas);
        $this->tajolas = $this->GetOrientationTypeDescById($tajolas);
        $this->futes = $this->GetHeatingTypeDescById($futes);
        $this->parkolas = $this->GetParkingTypeDescById($parkolas);
        $this->komfort = $this->GetComfortTypeDescById($komfort);
        $this->atticType = $this->GetAtticDescById($atticType);
        $this->furdoEsWC = $this->GetFurdoTypeDescById($furdoEsWC);
        $this->emelet = $emelet;
        $this->belmagassag = $belmagassag;
        $this->lift = $lift;
        $this->erkely = $erkely;
        $this->akadalymentes = $akadalymentes;
        $this->legkondi = $legkondi;
        $this->kertkapcsolatos = $kertkapcsolatos;
        $this->ar = $ar;
        $this->alapterulet = $alapterulet;
        $this->szobakszama = $szobakszama;
        $this->felszobakszama = $felszobakszama;
        $this->furdoszobak_szama = $furdoszobak_szama;
        $this->lepcsohaz = $this->GetStairTypeDescById($lepcsohaz);

    }

    public $allapot;
    public $kilatas;
    public $tajolas;
    public $futes;
    public $parkolas;
    public $komfort;
    public $atticType;
    public $furdoEsWC;
    public $emelet;
    public $belmagassag;
    public $lift;
    public $erkely;
    public $akadalymentes;
    public $legkondi;
    public $kertkapcsolatos;
    public $alapterulet;
    public $szobakszama;
    public $felszobakszama;
    public $furdoszobak_szama;
    public $lepcsohaz;


    public function SaveToDescription()
    {
        $query = "INSERT INTO property_description(property_id, property_type, property_sub_type, property_condition, property_view, orientation, heating_type, parking, comfort_rate, attic_loft, bathroom_toilet, floor_number, avg_room_height, "
            ."elevator, balcony_patio, property_price, property_size, num_of_whole_rooms, num_of_half_rooms, num_of_bathrooms, safe_for_wheelchair, airconditioning, garden, stairs)"
            ." VALUES (:id, :type, :subtype, :allapot, :kilatas, :tajolas, :futes, :parkolas, :komfort, :tetoter, :furdoEsWc, :emelet, :belmagassag, :lift, :erkely, :ar, :terulet, :szobaszam, :felszobaszam, :furdoszam, :akadalymentesitett, :legkondis, :kertkapcsolatos, :lepcsohaz);";

        $data = $this->GetAllData();

        insert_into($query, $data);
    }

    public function UpdateOnDesc()
    {
        $allData = $this->GetAllData();
        $query = "UPDATE property_description SET property_sub_type = :subtype, property_condition = :allapot, property_view = :kilatas, orientation = :tajolas, heating_type = :futes, parking = :parkolas, comfort_rate = :komfort, "
            ."attic_loft = :tetoter, bathroom_toilet = :furdoEsWc, floor_number = :emelet, balcony_patio = :erkely, avg_room_height = :belmagassag, elevator = :lift, property_price = :ar, property_size = :terulet, "
            ."num_of_whole_rooms = :szobaszam, num_of_half_rooms = :felszobaszam, num_of_bathrooms = :furdoszam, safe_for_wheelchair = :akadalymentesitett, airconditioning = :legkondis, garden = :kertkapcsolatos, stairs = :lepcsohaz WHERE property_id = :id;";
        $data = array(
            'id' => $allData['id'],
            'subtype' => $allData['subtype'],
            'allapot' => $allData['allapot'],
            'kilatas' => $allData['kilatas'],
            'tajolas' => $allData['tajolas'],
            'futes' => $allData['futes'],
            'parkolas' => $allData['parkolas'],
            'komfort' => $allData['komfort'],
            'tetoter' => $allData['tetoter'],
            'furdoEsWc' => $allData['furdoEsWc'],
            'emelet' => $allData['emelet'],
            'belmagassag' => $allData['belmagassag'],
            'lift' => $allData['lift'],
            'erkely' => $allData['erkely'],
            'ar' => $allData['ar'],
            'terulet' => $allData['terulet'],
            'szobaszam' => $allData['szobaszam'],
            'felszobaszam' => $allData['felszobaszam'],
            'furdoszam' => $allData['furdoszam'],
            'akadalymentesitett' => $allData['akadalymentesitett'],
            'legkondis' => $allData['legkondis'],
            'kertkapcsolatos' => $allData['kertkapcsolatos'],
            'lepcsohaz' => $allData['lepcsohaz']
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
        $tajolas = $this->GetOrientationTypeIdByDesc($this->tajolas);
        $komfort = $this->GetComfortTypeIdByDesc($this->komfort);
        $furdoEsWc = $this->GetFurdoTypeIdByDesc($this->furdoEsWC);
        $lepcsohaz = $this->GetStairTypeIdByDesc($this->lepcsohaz);
        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'allapot' => $this->GetAllapotIdByDesc($this->allapot),
            'kilatas' => $kilatas,
            'tajolas' => $tajolas,
            'futes' => $heatingType,
            'parkolas' => $parkolas,
            'komfort' => $komfort,
            'tetoter' => $atticType,
            'furdoEsWc' => $furdoEsWc,
            'emelet' => $this->emelet,
            'belmagassag' => $this->belmagassag,
            'lift' => $this->lift,
            'erkely' => $this->erkely,
            'ar' => $this->ar,
            'terulet' => $this->alapterulet,
            'szobaszam' => $this->szobakszama,
            'felszobaszam' => $this->felszobakszama,
            'furdoszam' => $this->furdoszobak_szama,
            'akadalymentesitett' => $this->akadalymentes,
            'legkondis' => $this->legkondi,
            'kertkapcsolatos' => $this->kertkapcsolatos,
            'lepcsohaz' => $lepcsohaz
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
        $result = (select( "SELECT property_type_code FROM property_types WHERE property_type_desc = 'LAKAS';", true, null));
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

    private function GetOrientationTypeDescById($orientation){
        $result = (select( "SELECT property_orientation_desc FROM property_orientations WHERE property_orientation_code = '".$orientation."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetOrientationTypeIdByDesc($orientation){
        $result = (select( "SELECT property_orientation_code FROM property_orientations WHERE property_orientation_desc = '".$orientation."';", true, null));
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

    private function GetStairTypeDescById($stair){
        $result = (select( "SELECT stair_type_desc FROM stairs_types WHERE stair_type_code = '".$stair."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }

    private function GetStairTypeIdByDesc($stair){
        $result = (select( "SELECT stair_type_code FROM stairs_types WHERE stair_type_desc = '".$stair."';", true, null));
        foreach ($result as $r){
            return $r;
        }
    }
}