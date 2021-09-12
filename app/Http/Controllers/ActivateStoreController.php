<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivateRequest;
use Illuminate\Http\Request;

class ActivateStoreController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);   
    }

    public function __invoke(StoreActivateRequest $request)
    {
        $request->user()->activate();
        $request->inviteCode->increment('quantity_used');

        return redirect()->route('dashboard');
    }
}
