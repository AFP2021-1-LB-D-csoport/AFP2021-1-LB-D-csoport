<?php

class Lakas extends AProperty
{
    function __construct(int $id, string $subtype, string $allapot, string $kilatas, string $tajolas, string $futes, string $parkolas, string $komfort,
                         string $atticType, string $furdoEsWC, int $emelet, float $belmagassag, string $lift, string $erkely, string $akadalymentes, string $legkondi,
                         string $kertkapcsolatos, int $ar, int $alapterulet, int $szobakszama, int $felszobakszama, int $furdoszobak_szama, string $lepcsohaz)
    {
        $this->id = $id;
        $this->subtype = GetSubtypeById($subtype);

        $this->allapot = GetAllopotDescById($allapot);
        $this->kilatas = GetViewTypeDescById($kilatas);
        $this->tajolas = GetOrientationTypeDescById($tajolas);
        $this->futes = GetHeatingTypeDescById($futes);
        $this->parkolas = GetParkingTypeDescById($parkolas);
        $this->komfort = GetComfortTypeDescById($komfort);
        $this->atticType = GetAtticDescById($atticType);
        $this->furdoEsWC = GetFurdoTypeDescById($furdoEsWC);
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
        $this->lepcsohaz = GetStairTypeDescById($lepcsohaz);

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
        $type = GetTypeId("LAKAS");
        $subtype = GetSubtypeId($this->subtype);
        $atticType = GetAtticIdByDesc($this->atticType);
        $parkolas = GetParkingTypeIdByDesc($this->parkolas);
        $heatingType = GetHeatingTypeIdByDesc($this->futes);
        $kilatas = GetViewTypeIdByDesc($this->kilatas);
        $tajolas = GetOrientationTypeIdByDesc($this->tajolas);
        $komfort = GetComfortTypeIdByDesc($this->komfort);
        $furdoEsWc = GetFurdoTypeIdByDesc($this->furdoEsWC);
        $lepcsohaz = GetStairTypeIdByDesc($this->lepcsohaz);
        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'allapot' => GetAllapotIdByDesc($this->allapot),
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
}