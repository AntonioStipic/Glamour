<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public static function login($username, $password) {
//        $users = DB::table('admins')->get();
//
//        print_r($users);

//    use Illuminate\Support\Facades\DB;
        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }


//        $pdo = DB::connection()->getPdo();
//
//        print_r($pdo);

//        return $users;
        echo "1234";
        return "123";
    }
}
