<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 02/11/17
 * Time: 22:22
 */

namespace App\business\models;
use App\core\App as App;

class User
{
    public $id;
    public $email;
    public $username;
    public $password;

    public static function validate_login($username, $password){

        $user = App::get('database')->queryColumn("user", "User", "username", $username);

        if (!$user
            || ($user[0]->username != $username)
            || ($user[0]->password != $password)) {
            return false;
        }

        $user = $user[0];

        return $user;
    }

}