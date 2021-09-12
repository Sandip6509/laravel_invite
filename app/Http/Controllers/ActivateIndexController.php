<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivateIndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);   
    }

    public function __invoke()
    {
        return view('activate.index');   
    }
}
