<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;

class UploadController extends Controller
{
    //
    public function upload(Request $request) {
        $path = $request->file('file')->store('uploads', 'public');
        $fileNameArray = explode("/", $path);
        $imgPath = $fileNameArray[1];
        
        $img = new Image();
        $img->path=$imgPath;
        return $img->save();
    }
}
