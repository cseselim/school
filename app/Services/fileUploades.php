<?php


namespace App\Services;
use Illuminate\Http\Request;


class fileUploades
{
    public static function fileUpload($thumbnail){
        if (Request::hasFile($thumbnail->question_thumbnail)) {
            $picName = Request::file($thumbnail->question_thumbnail)->getClientOriginalName();
            $picName = base_path() . uniqid() . $picName;
            $destinationPath = "uploads/files";
            Request::file('question_thumbnail')->move($destinationPath, $picName);
            return $picName;
        }
    }

}
