<?php

class Haz extends AProperty
{
    function __construct(int $id, string $subtype, string $allapot, string $kilatas, string $futes, string $parkolas, string $komfort,
                         string $atticType, string $furdoEsWC, string $erkely, string $akadalymentes, string $legkondi, int $ar, int $alapterulet,
                         int $szobakszama, int $felszobakszama, int $furdoszobak_szama, int $telekterulet, int $szintekszama, string $pince, string $padlas)
    {
        $this->id = $id;
        $this->subtype = GetSubtypeById($subtype);
        $this->allapot = GetAllopotDescById($allapot);
        $this->kilatas = GetViewTypeDescById($kilatas);
        $this->futes = GetHeatingTypeDescById($futes);
        $this->parkolas = GetParkingTypeDescById($parkolas);
        $this->komfort = GetComfortTypeDescById($komfort);
        $this->atticType = GetAtticDescById($atticType);
        $this->furdoEsWC = GetFurdoTypeDescById($furdoEsWC);
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
            'property_type' => "HAZ",
            'subtype' => $this->subtype,
            'ar' => $this->ar,
            'alapterulet' => $this->alapterulet,
            'telekterulet' => $this->telekterulet
        );
        return $data;
    }

    public function GetAllData(): array
    {
        $type = GetTypeId("HAZ");
        $subtype = GetSubtypeId($this->subtype);
        $atticType = GetAtticIdByDesc($this->atticType);
        $parkolas = GetParkingTypeIdByDesc($this->parkolas);
        $heatingType = GetHeatingTypeIdByDesc($this->futes);
        $kilatas = GetViewTypeIdByDesc($this->kilatas);
        $komfort = GetComfortTypeIdByDesc($this->komfort);
        $furdoEsWc = GetFurdoTypeIdByDesc($this->furdoEsWC);
        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'allapot' => GetAllapotIdByDesc($this->allapot),
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

}