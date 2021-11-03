<?php


namespace App\Services;
use Illuminate\Http\Request;

class fileUploades
{
    public static function fileUpload(Request $request){
        if ($request->hasFile('question_thumbnail')) {
            $picName = $request->file('question_thumbnail')->getClientOriginalName();
            $picName = base_path() . uniqid() . $picName;
            $destinationPath = "uploads/files";
            $request->file('question_thumbnail')->move($destinationPath, $picName);
            return $picName;
        }
    }

}