<?php

require(base_path().'/vendor/autoload.php');
use hsynlms\UrlRecord;

if (!function_exists('generateSlug')) {
    function generateSlug($text){
        $slugGenerator = new UrlRecord();
        return $slugGenerator->GetSeoFriendlyName($text);
    }
}
