<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Benefit;

class BenefitController extends Controller
{
    public function index()
    {
    }

    public function list()
    {
        return Benefit::all();
    }
}