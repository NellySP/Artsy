<?php

namespace App\Http\Controllers;

use App\Models\Exhibition;
use Illuminate\Http\Request;

class SingleexhibitionController extends Controller
{
    public function __invoke(Request $request, string $id)
    {
        $exhibition = Exhibition::where('id', '=', $id)->first();
        return view('singleexhibition', ['exhibition' => $exhibition]);
    }
}
