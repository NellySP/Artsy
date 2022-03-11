<?php

namespace App\Http\Controllers;

use App\Models\Exhibition;

use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function __invoke(Request $request)
    {

        $exhibitions = Exhibition::all();

        return view('exhibitions', ['exhibitions' => $exhibitions]);
    }
}
