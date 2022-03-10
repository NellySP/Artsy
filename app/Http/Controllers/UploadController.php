<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, []);


        $image = new Image();
        $image->title = $request->input('title');
        $image->artist = $request->input('artist');
        $image->exhibition = $request->input('exhibition');
        $image->image = $request->input('image');
        $image->save();

        return back();
    }
}
