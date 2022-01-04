<?php

function GetAllopotDescById($allapot){
    $result = (select( "SELECT property_condition_desc FROM property_conditions WHERE property_condition_code = '".$allapot."';",true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetAllapotIdByDesc($allapot){
    $result = (select( "SELECT property_condition_code FROM property_conditions WHERE property_condition_desc = '".$allapot."';",true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetTypeId($type)
{
    $result = (select( "SELECT property_type_code FROM property_types WHERE property_type_desc = '".$type."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetSubtypeId($subtype)
{
    $result = (select( "SELECT property_sub_type_code FROM property_sub_types WHERE property_sub_type_desc = '".$subtype."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetSubtypeById($subtype_id)
{
    $result = (select( "SELECT property_sub_type_desc FROM property_sub_types WHERE property_sub_type_code = '".$subtype_id."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetAtticDescById($atticId){
    $result = (select( "SELECT attic_type_desc FROM attic_types WHERE attic_type_code = '".$atticId."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetAtticIdByDesc($atticDesc){
    $result = (select( "SELECT attic_type_code FROM attic_types WHERE attic_type_desc = '".$atticDesc."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}


function GetHeatingTypeDescById($heating){
    $result = (select( "SELECT heating_type_desc FROM property_heatings WHERE heating_type_code = '".$heating."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetHeatingTypeIdByDesc($heating){
    $result = (select( "SELECT heating_type_code FROM property_heatings WHERE heating_type_desc = '".$heating."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetViewTypeDescById($view){
    $result = (select( "SELECT property_view_desc FROM property_views WHERE property_view_code = '".$view."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetViewTypeIdByDesc($view){
    $result = (select( "SELECT property_view_code FROM property_views WHERE property_view_desc = '".$view."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetFurdoTypeDescById($furdo){
    $result = (select( "SELECT bathroom_toilet_type_desc FROM bathroom_toilet_types WHERE bathroom_toilet_type_code = '".$furdo."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetFurdoTypeIdByDesc($furdo){
    $result = (select( "SELECT bathroom_toilet_type_code FROM bathroom_toilet_types WHERE bathroom_toilet_type_desc = '".$furdo."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetParkingTypeDescById($parking){
    $result = (select( "SELECT parking_type_desc FROM parking_types WHERE parking_type_code = '".$parking."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetParkingTypeIdByDesc($parking){
    $result = (select( "SELECT parking_type_code FROM parking_types WHERE parking_type_desc = '".$parking."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetComfortTypeDescById($comfort){
    $result = (select( "SELECT comfort_type_desc FROM property_comfort_types WHERE comfort_type_code = '".$comfort."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetComfortTypeIdByDesc($comfort){
    $result = (select( "SELECT comfort_type_code FROM property_comfort_types WHERE comfort_type_desc = '".$comfort."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetV_V_G_CS_Id($desc)
{
    $result = (select( "SELECT e_w_g_p_type_code FROM e_w_g_p_types WHERE e_w_g_p_type_desc = '".$desc."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}


function GetV_V_G_CS_Desc($id)
{
    $result = (select( "SELECT e_w_g_p_type_desc FROM e_w_g_p_types WHERE e_w_g_p_type_code = '".$id."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetStairTypeDescById($stair){
    $result = (select( "SELECT stair_type_desc FROM stairs_types WHERE stair_type_code = '".$stair."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetStairTypeIdByDesc($stair){
    $result = (select( "SELECT stair_type_code FROM stairs_types WHERE stair_type_desc = '".$stair."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetOrientationTypeDescById($orientation){
    $result = (select( "SELECT property_orientation_desc FROM property_orientations WHERE property_orientation_code = '".$orientation."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetOrientationTypeIdByDesc($orientation){
    $result = (select( "SELECT property_orientation_code FROM property_orientations WHERE property_orientation_desc = '".$orientation."';", true, null));
    foreach ($result as $r){
        return $r;
    }
}

function GetAllTelek()
{
    $query = "SELECT property_description.property_id, property_description.property_sub_type, property_description.property_price, property_description.plot_size, property_description.electricity,
                        property_description.water, property_description.gas, property_description.pipage, property.date_on_market, property.status, property.property_type_id FROM property_description INNER JOIN property ON property_description.property_id = property.property_id
                        WHERE property_description.property_type = 'TELEK';";
    $result = select($query,false, null);
    $telkek = array();
    $i=0;
    foreach ($result as $r){
        $telek = new Telek(intval($r[0]), $r[1], intval($r[2]), intval($r[3]), $r[4], $r[5], $r[6], $r[7]);
        $telek->dateOnMarket = $r[8];
        $telek->status = $r[9];
        $telek->tipus = $r[10];
        $telkek[$i] = $telek;
        $i++;
    }
    return $telkek;
}

function GetAllRaktar()
{
    $query = "SELECT property_description.property_id, property_description.property_sub_type, property_description.property_price, property_description.property_size, property_description.plot_size,
                            property_description.property_condition, property.date_on_market, property.status, property.property_type_id FROM property_description INNER JOIN property ON property_description.property_id = property.property_id
                            WHERE property_description.property_type = 'RAKT';";
    $result = select($query, false, null);
    $raktarak = array();
    $i = 0;
    foreach ($result as $r) {
        $raktar = new Raktar(intval($r[0]), $r[1], intval($r[2]), intval($r[3]), intval($r[4]), $r[5]);
        $raktar->dateOnMarket = $r[6];
        $raktar->status = $r[7];
        $raktar->tipus = $r[8];
        $raktarak[$i] = $raktar;
        $i++;
    }
    return $raktarak;
}

function GetAllGarazs()
{
    $query = "SELECT property_description.property_id, property_description.property_sub_type, property_description.property_price, property_description.property_size, property_description.property_condition,
                            property.date_on_market, property.status, property.property_type_id FROM property_description INNER JOIN property ON property_description.property_id = property.property_id
                            WHERE property_description.property_type = 'GAR';";
    $result = select($query,false, null);
    $garazsok = array();
    $i=0;
    foreach ($result as $r){
        foreach ($r as $adat){
            echo $adat . ' ';
        }
        $garazs = new Garazs(intval($r[0]), $r[1], intval($r[2]), intval($r[3]), $r[4]);
        $garazs->dateOnMarket = $r[5];
        $garazs->status = $r[6];
        $garazs->tipus = $r[7];
        $garazsok[$i] = $garazs;
        $i++;
    }
    return $garazsok;
}