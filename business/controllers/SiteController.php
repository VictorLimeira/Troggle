<?php
/**
 * Created by PhpStorm.
 * User: mannuel
 * Date: 12/01/18
 * Time: 08:04
 */

class SiteController
{
    public function index(){
        require 'views/index.view.php';
    }

    public function about(){
        require 'views/about.view.php';
    }

    public function contact(){
        require 'views/contact.view.php';
    }
}