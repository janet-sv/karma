<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Benefit;
use App\Models\ClientsBenefits;

class BenefitController extends Controller
{
    public function index()
    {
        return Benefit::all();
    }

    public function redeem(Request $request)
    {   
        ClientsBenefits::insert(request()->all());
    }
}
