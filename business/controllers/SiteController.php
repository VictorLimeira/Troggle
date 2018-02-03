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
        require '/Users/victor/code/Troggle/business/views/index.view.php';
    }

    public function about(){
        require '/Users/victor/code/Troggle/business/views/about.view.php';
    }

    public function contact(){
        require '/Users/victor/code/Troggle/business/views/contact.view.php';
    }
}