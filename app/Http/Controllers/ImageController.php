<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function __invoke(Request $request)
    {
        // $likes = Like::all();
        $user = Auth::user();
        // $userFavorites = $user->like;
        $images = Image::where('id', '=', $user->like)->get();

        return view('user-page', [
            'user' => $user, 'images' => $images,
        ]);
    }
}
