<?php
/**
 * Created by PhpStorm.
 * User: mannuel
 * Date: 12/01/18
 * Time: 08:04
 */

use App\core\Display as Display;

class SiteController
{
    public function index(){
        Display::show("index");
    }

    public function about(){
        Display::show("about");
    }

    public function contact(){
        Display::show("contact");
    }
}