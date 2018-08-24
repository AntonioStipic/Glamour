<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalerijaController extends Controller {

   public function getImg(Request $request) {


       $dirname = "images/img/gallery/";
       $images = scandir($dirname);
       shuffle($images);
       $ignore = Array(".", "..");

       $final = "";
       foreach($images as $curimg){
           if(!in_array($curimg, $ignore)) {
//                $final .= "<div class=\"col-md-3\">
//                            <div class=\"blo1\">
//                                <div class=\"wrap-pic-blo1 bo-rad-10 hov-img-zoom m-t-10\">
//                                    <a href=\"" . $dirname . $curimg . "\"><img src=\"" . $dirname . $curimg . "\" alt=\"IMG-INTRO\" class='galleryImage'></a>
//                                </div>
//                            </div>
//                        </div>";


               $final .= "<a href=\"" . $dirname . $curimg . "\" data-lightbox=\"galleryPhoto\"><img src=\"" . $dirname . $curimg . "\"></a>";
           }
       }
       echo $final;

   }

}
