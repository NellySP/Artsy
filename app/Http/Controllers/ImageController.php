<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function __invoke(Request $request)
    {

        $images = Image::all();

        return view('exhibitions', ['images' => $images]);
    }
}
