<?php
namespace MyCompany\SlugGenerator;

class SlugGenerator
{
    public static function make($string)
    {
        return strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $string));
    }
}

?>