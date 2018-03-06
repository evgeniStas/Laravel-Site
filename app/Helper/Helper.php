<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 06.03.18
 * Time: 12:20
 */

namespace App\Helper;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class Helper
{
    public static function GetLangUrl()
    {
        $raw_locale = Session::get('locale');
        foreach(Config::get('app.locales') as $loc){
            if($loc != $raw_locale){
                return "/lang/".$loc;
            }
        }
        return "/lang/".$raw_locale;

    }
    public static function isActiveRoute($route, $output = "item")
    {
        if (Route::currentRouteName() == $route) return "active";

        return $output;
    }
}