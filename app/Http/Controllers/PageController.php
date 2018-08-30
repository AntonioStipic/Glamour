<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {

    public function index() {
        $data = array(
            "title" => "Naslovnica"
        );
        return view("page.index")->with($data);
//        return view("page.index", compact("title"));
    }

    public function dvorana() {
        $data = array(
            "title" => "Dvorana"
        );
        return view("page.dvorana")->with($data);
    }

    public function service() {
        $data = array(
            "title" => "Service",
            "services" => ["Web Design", "Programming", "SEO"]
        );


        return view("page.service")->with($data);
    }

    public function galerija() {

        $data = array(
            "title" => "Galerija"
        );

        return view("page.galerija")->with($data);
    }

    public function planer() {

        $data = array(
            "title" => "Planer"
        );

        return view("page.planer")->with($data);
    }

    public function blog() {
        $data = array(
            "title" => "Blog"
        );

        return view("page.blog")->with($data);
    }

    public function blogId($id) {

//        echo $id;

        $data = array(
            "title" => "Blog"
        );

        try {
            return view("page.blog" . $id)->with($data);
        } catch (Exception $e) {

        }

    }

    public function admin(Request $request) {

//        print_r($request->session());

        $admin = $request->session()->get("admin");

        print_r($admin);
//        echo "1";

        if (isset($admin)) {

            $data = array(
                "title" => "Admin"
            );

            return view("page.admin")->with($data);
        } else {

            $data = array(
                "title" => "Login"
            );

            return view("page.adminLogin")->with($data);
        }


    }

}
