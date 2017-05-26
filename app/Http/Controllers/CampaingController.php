<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Campaing;

class CampaingController extends Controller
{
    public function index()
    {
        return Campaing::all();
    }
}
