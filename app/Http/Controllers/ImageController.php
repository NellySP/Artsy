<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = Auth::user();
        $images = Image::where('id', '=', $user->like['image_id'])->get();

        return view('user-page', [
            'user' => $user, 'images' => $images,
        ]);
    }
}
