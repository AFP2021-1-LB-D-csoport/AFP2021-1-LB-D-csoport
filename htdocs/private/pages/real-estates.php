<?php

require_once './private/utils/db_manager.php';

function my_ads(){
    echo 'Saját hirdetéseim';
    $query = 'SELECT * FROM real_estates';
    $result = select($query);
    require_once REAL_ESTATES_DIR.'list.php';
}

function enlist(){
    $for_sale_or_to_rent = filter_input(INPUT_POST, 'for_sale_or_to_rent');
    $city = filter_input(INPUT_POST, 'location');
    $type = filter_input(INPUT_POST, 'property_type');
    $price = filter_input(INPUT_POST, 'price');

    $query = "SELECT PRODES.property_id 
        FROM PROPERTY_DESCRIPTION PRODES 
        JOIN PROPERTY PROPER ON PROPER.property_id = PRODES.property_id 
        JOIN PROPERTY_LOCATION PROLOC ON PROLOC.property_id = PROPER.property_id 
        JOIN PROPERTY_TYPE PROTYP ON PROTYP.property_type_id = PROPER.property_type_id 
        JOIN PROPERTY_TYPES PROTYS ON PROTYS.property_type_code = PRODES.property_type 
        WHERE PROTYP.property_type_desc = '" .$for_sale_or_to_rent. "' 
        AND PROLOC.city = '" .$city. "' 
        AND PROTYS.property_type_desc = '" .$type. "' 
        AND PRODES.property_price = " .$price. "";
    
    $result = select($query);
    require_once REAL_ESTATES_DIR.'list.php';
}