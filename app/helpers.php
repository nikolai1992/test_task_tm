<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.05.2023
 * Time: 17:06
 */

if (!function_exists('modify_text')) {
    function modify_text($string) {

        $result = [];
        $replace = [];

        $fulltext = preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $string);
        preg_match_all('/\w+/', $fulltext, $matches);    // match words
        $array = explode(" ", $fulltext);
        $array = array_unique($array);

        foreach($array as $key => $val){
            if(strlen($val) == 6 && ctype_alpha($val)) {
                $result[] = $val;
                $replace[] = $val . "™";
            }

        }

        if (str_contains($string, "<a") && str_contains($string, "</a>")) {
            $part_text = explode("<a ", $string)[0];
            $new_string = str_replace($result, $replace, $part_text);
            $string = str_replace($part_text, $new_string, $string);
            $part_text = explode("</a>", $string)[1];
            $new_string = str_replace($result, $replace, $part_text);
            $string = str_replace($part_text, $new_string, $string);
        } else {
            $string = str_replace($result, $replace, $string);
        }

        return $string;
    }
}