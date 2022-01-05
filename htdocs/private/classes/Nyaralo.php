<?php

class Nyaralo extends AProperty
{
    function __construct(int $id, string $subtype, int $ar, int $alapterulet, string $allapot, string $kilatas, string $futes,
                         string $atticType, string $erkely, string $akadalymentes, string $legkondi, int $szobakszama, int $felszobakszama,
                         int $furdoszobak_szama, int $telekterulet, string $villany, string $viz, string $gaz, string $csatorna)
    {
        $this->id = $id;
        $this->subtype = GetSubtypeById($subtype);
        $this->ar = $ar;
        $this->alapterulet = $alapterulet;
        $this->allapot = GetAllopotDescById($allapot);
        $this->atticType = GetAtticDescById($atticType);
        $this->erkely = $erkely;
        $this->akadalymentes = $akadalymentes;
        $this->legkondi = $legkondi;
        $this->villany = GetV_V_G_CS_Desc($villany);
        $this->viz = GetV_V_G_CS_Desc($viz);
        $this->gaz = GetV_V_G_CS_Desc($gaz);
        $this->csatorna = GetV_V_G_CS_Desc($csatorna);
        $this->kilatas = GetViewTypeDescById($kilatas);
        $this->futes = GetHeatingTypeDescById($futes);
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
        $alldata = $this->GetAllData();
        $query = "UPDATE property_description SET property_sub_type = :subtype, property_condition = :allapot, property_view = :kilatas, heating_type = :futes, attic_loft = :tetoter, balcony_patio = :erkely,"
            ."property_price = :ar, property_size = :terulet, num_of_whole_rooms = :szobaszam, num_of_half_rooms = :felszobaszam, num_of_bathrooms = :furdoszam, safe_for_wheelchair = :akadalymentesitett,"
            ." airconditioning = :legkondis, plot_size = :telekterulet, electricity = :villany, water = :viz, gas = :gaz, pipage = :csatorna WHERE property_id = :id;";
        $data = array(
            'id' => $alldata['id'],
            'subtype' => $alldata['subtype'],
            'allapot' => $alldata['allapot'],
            'kilatas' => $alldata['kilatas'],
            'futes' => $alldata['futes'],
            'tetoter' => $alldata['tetoter'],
            'erkely' => $alldata['erkely'],
            'ar' => $alldata['ar'],
            'terulet' => $alldata['terulet'],
            'szobaszam' => $alldata['szobaszam'],
            'felszobaszam' => $alldata['felszobaszam'],
            'furdoszam' => $alldata['furdoszam'],
            'akadalymentesitett' => $alldata['akadalymentesitett'],
            'legkondis' => $alldata['legkondis'],
            'telekterulet' => $alldata['telekterulet'],
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
        $type = GetTypeId("NYARALO");
        $subtype = GetSubtypeId($this->subtype);
        $atticType = GetAtticIdByDesc($this->atticType);
        $heatingType = GetHeatingTypeIdByDesc($this->futes);
        $kilatas = GetViewTypeIdByDesc($this->kilatas);
        $villany = GetV_V_G_CS_Id($this->villany);
        $viz = GetV_V_G_CS_Id($this->viz);
        $gaz = GetV_V_G_CS_Id($this->gaz);
        $csatorna = GetV_V_G_CS_Id($this->csatorna);
        $data = array(
            'id' => $this->id,
            'type' => $type,
            'subtype' => $subtype,
            'allapot' => GetAllapotIdByDesc($this->allapot),
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
}