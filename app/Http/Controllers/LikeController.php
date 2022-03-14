<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->validate($request, []);

        $user = Auth::user();
        $like = new Like();
        $like->image_id = $request->input('image_id');
        $like->like = $request->input('like');
        $like->user_id = Auth::id();
        $like->save();

        return back()->with('user', $user);
    }
}
