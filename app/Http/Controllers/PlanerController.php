<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class PlanerController extends Controller {

    public function submitPlaner(Request $request) {

        $query = $request->getContent();

        parse_str($query, $data);

        if ($data["brojUzvanika"] == 1) {
            $data["brojUzvanika"] = "200";
        } else if ($data["brojUzvanika"] == 2) {
            $data["brojUzvanika"] = "250+";
        } else if ($data["brojUzvanika"] == 3) {
            $data["brojUzvanika"] = "350+";
        } else if ($data["brojUzvanika"] == 4) {
            $data["brojUzvanika"] = "450+";
        } else if ($data["brojUzvanika"] == 5) {
            $data["brojUzvanika"] = "550";
        }

//        print_r($data);

        if (isset($data["dodaci"])) {
            $dodaci = implode(", ", $data["dodaci"]);

            $data["dodaci"] = $dodaci;
        } else {
            $data["dodaci"] = "/";
        }


        Mail::send("mail", $data, function ($message) {
            $message->to('antonio.stipic2@gmail.com', 'Tutorials Point')
                ->from("noreply@dvorana-glamour.hr", "Planer Vjenčanja")
                ->subject("Nova poruka - Glamour Planer Vjenčanja");
        });

        echo "success";
    }

}
