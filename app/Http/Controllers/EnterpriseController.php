<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enterprise;

class EnterpriseController extends Controller
{
    public function listEnterprise(){

        $enterprises  = Enterprise::all();
        return view('home', compact(['enterprises']));

    }
}
