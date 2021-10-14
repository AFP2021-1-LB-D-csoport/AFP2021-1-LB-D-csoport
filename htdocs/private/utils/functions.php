<?php

function print_menu(&$menu, $return_html = FALSE){
    $menu_string = '';
    $menu_string .= '<ul id="navbar">';
    foreach ($menu as $menu_item){
        $menu_string .= '<li '. (array_key_exists('li_extra', $menu_item) ? 
            generate_attributes($menu_item['li_extra']) : '').'><a href="'.$menu_item['href'].'" '
            . (array_key_exists('a_extra', $menu_item) ? generate_attributes($menu_item['a_extra']) : '')
            .'>'.$menu_item['title'].'</a>';
        $menu_string .= '</li>';
    }
    $menu_string .= '</ul>';
    
    if ($return_html)
        return $menu_string;
    else
        print $menu_string;
}

function generate_attributes($key_value_pair){
    $tag_string = '';
    foreach ($key_value_pair as $key => $value){
        $tag_string .= $key.'="'.$value.'" ';
    }
    return $tag_string;
}