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

}
