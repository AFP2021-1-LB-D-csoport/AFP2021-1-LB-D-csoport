<?php

require_once './private/utils/db_manager.php';

function my_ads(){
    if (isset($_SESSION['user']['profile_id'])) {
        $id = $_SESSION['user']['profile_id'];
        $query = "SELECT * 
            FROM PROPERTY_DESCRIPTION PRODES 
            JOIN PROPERTY PROPER ON PROPER.property_id = PRODES.property_id 
            JOIN PROPERTY_LOCATION PROLOC ON PROLOC.property_id = PROPER.property_id 
            JOIN PROPERTY_TYPE PROTYP ON PROTYP.property_type_id = PROPER.property_type_id 
            JOIN PROPERTY_TYPES PROTYS ON PROTYS.property_type_code = PRODES.property_type 
            JOIN PROPERTY_X_PROFILE PROXPRO ON PROXPRO.property_id = PRODES.property_id
            WHERE PROXPRO.profile_id = " .$id. "";
        $result = select($query);
        require_once REAL_ESTATES_DIR.'list.php';
    } else {
        echo 'Nincsenek hirdetéseid.';
    }
}

function enlist(){
    $for_sale_or_to_rent = filter_input(INPUT_POST, 'for_sale_or_to_rent');
    $city = filter_input(INPUT_POST, 'location');
    $type = filter_input(INPUT_POST, 'property_type');
    $price = filter_input(INPUT_POST, 'price');

    $query = "SELECT * 
        FROM PROPERTY_DESCRIPTION PRODES 
        JOIN PROPERTY PROPER ON PROPER.property_id = PRODES.property_id 
        JOIN PROPERTY_LOCATION PROLOC ON PROLOC.property_id = PROPER.property_id 
        JOIN PROPERTY_TYPE PROTYP ON PROTYP.property_type_id = PROPER.property_type_id 
        JOIN PROPERTY_TYPES PROTYS ON PROTYS.property_type_code = PRODES.property_type 
        WHERE PROTYP.property_type_desc = '" .$for_sale_or_to_rent. "' 
        AND PROLOC.city = '" .$city. "' 
        AND PROTYS.property_type_desc = '" .$type. "' 
        AND PRODES.property_price >= " .$price. "";
    
    $result = select($query);
    require_once REAL_ESTATES_DIR.'list.php';
}

function add(){
    if (!filter_has_var(INPUT_POST, 'addAd')){
        require REAL_ESTATES_DIR.'add.php';
    } else {
        $property_id = select('SELECT MAX(property_id) FROM property');
        $property_id = $id + 1;
        $property_type = filter_input(INPUT_POST, "property_type");
        $property_sub_type = filter_input(INPUT_POST, "property_subtype");
        $property_view = filter_input(INPUT_POST, 'view_or_not');
        $property_condition = filter_input(INPUT_POST, 'property_condition');
        $orientation = filter_input(INPUT_POST, 'property_orient');
        $heating_type = filter_input(INPUT_POST, 'property_heat');
        $parking = filter_input(INPUT_POST, 'parking_or_not');
        $comfort_rate = filter_input(INPUT_POST, 'comfort_rate');
        $attic_loft = filter_input(INPUT_POST, 'attic_build_or_not');
        $bathroom_toilet = filter_input(INPUT_POST, 'wc_or_not');
        $floor_number = filter_input(INPUT_POST, 'number_floor');
        $avg_room_height = filter_input(INPUT_POST, 'avg_size');
        $elevator = filter_input(INPUT_POST, 'elevator_or_not');
        $balcony_patio = filter_input(INPUT_POST, 'balcony_or_not');
        $safe_for_wheelchair = filter_input(INPUT_POST, 'wheelchair_or_not');
        $airconditioning = filter_input(INPUT_POST, 'air_or_not');
        $garden = filter_input(INPUT_POST, 'garden_or_not');
        $property_price = filter_input(INPUT_POST, 'price');
        $property_size = filter_input(INPUT_POST, 'property_size');
        $num_of_whole_rooms = filter_input(INPUT_POST, 'number_rooms');
        $num_of_half_rooms = filter_input(INPUT_POST, 'number_halfrooms');
        $stairs = filter_input(INPUT_POST, 'number_floor');
        $plot_size = filter_input(INPUT_POST, 'size_plot');
        $num_of_floors = filter_input(INPUT_POST, 'number_floor');
        $basement = filter_input(INPUT_POST, 'basement');
        $attic = filter_input(INPUT_POST, 'attic_or_not');
        $electricity = filter_input(INPUT_POST, 'electric_or_not');
        $water = filter_input(INPUT_POST, 'water_or_not');
        $gas = filter_input(INPUT_POST, 'gas_or_not');
        $pipage = filter_input(INPUT_POST, 'pipe_or_not');
        $date = '2021-12-20';
        $status = 'active';
        insert_into('INSERT INTO property (property_id, property_type, property_sub_type, property_view, property_condition, orientation, heating_type, parking,
        comfort_rate, attic_loft, bathroom_toilet, floor_number, avg_room_height, elevator, balcony_patio, safe_for_wheelchair, airconditioning, garden, 
        property_price, property_size, num_of_whole_rooms, num_of_half_rooms, stairs, plot_size, num_of_floors, basement, attic, electricity, water, gas, pipage,
        ) 
            VALUES (:property_id, :property_type, :property_sub_type, :property_view, :property_condition, :orientation, :heating_type, :parking,
        :comfort_rate, :attic_loft, :bathroom_toilet, :floor_number, :avg_room_height, :elevator, :balcony_patio, :safe_for_wheelchair, :airconditioning, :garden, 
        :property_price, :property_size, :num_of_whole_rooms, :num_of_half_rooms, :stairs, :plot_size, :num_of_floors, :basement, :attic, :electricity, :water, :gas, :pipage)', 
            ['property_id' => $id, 'property_type' => $property_type, 'property_sub_type' => $property_sub_type, 'property_view' => 
            $property_view, 'status' => $status, 'property_condition' => $property_condition, 'orientation' => $orientation, 'heating_type' => $heating_type, 'parking' => $parking
            , 'comfort_rate' => $comfort_rate, 'attic_loft' => $attic_loft, 'bathroom_toilet' => $bathroom_toilet, 'floor_number' => $floor_number
            , 'avg_room_height' => $avg_room_height, 'elevator' => $elevator, 'balcony_patio' => $balcony_patio
            , 'airconditioning' => $airconditioning, 'garden' => $garden, 'property_price' => $property_price, 'property_price' => $property_price
            , 'property_price' => $property_price, 'property_price' => $property_price, 'property_price' => $property_price, 'property_price' => $property_price
            , 'property_size' => $property_size, 'num_of_whole_rooms' => $num_of_whole_rooms, 'num_of_half_rooms' => $num_of_half_rooms, 'stairs' => $stairs
            , 'plot_size' => $plot_size, 'num_of_floors' => $num_of_floors, 'basement' => $basement, 'attic' => $attic
            , 'water' => $water, 'gas' => $gas, 'pipage' => $pipage, 'date' => $date, 'status' => $status ]);
        header('Location: '.BASE_URL);
        
    }
}