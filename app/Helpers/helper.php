<?php
    if(!function_exists('get_blood_groups')){
        function get_blood_groups($key){
            $items = get_blood_group_list();
            return $items[$key];
        }
    }
    
    if(!function_exists('get_blood_group_list')){
        function get_blood_group_list(){
            $items = [
                1 => __('A+'),
                2 => __('A-'),
                3 => __('B+'),
                4 => __('B-'),
                5 => __('AB+'),
                6 => __('AB-'),
                7 => __('O+'),
                8 => __('O-'),
            ];
            return $items;
        }
    }
?>