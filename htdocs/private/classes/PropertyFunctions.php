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
