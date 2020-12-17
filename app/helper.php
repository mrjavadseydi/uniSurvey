<?php
if (!function_exists("sci_level")) {
      function sci_level($code) {
        switch ($code) {
            case 1: return"مربي آموزشيار";
            case 2: return"مربي";
            case 3: return"استاديار";
            case 4: return"دانشيار";
            case 5: return"استاد";
        }

        return "";
    }
}
if (!function_exists('pardis')) {
    function pardis($id){
        return \App\Models\University::whereUnicod($id)->first()->pardis_id;
    }
}
