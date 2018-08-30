<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public function login(Request $request) {

        $query = $request->getContent();

        parse_str($query, $data);

        print_r($data);

        echo "Works";
//        $users = Admin::login("123", "123");

//        print_r($users);
//        session(["admin" => true]);
//
        $data = array(
            "title" => "Admin"
        );
//
        return view("page.admin")->with($data);

    }

}
