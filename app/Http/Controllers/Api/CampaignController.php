<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Campaing;
use App\Models\ClientsCampaings;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\ErrorCorrectionLevel;

class CampaignController extends Controller
{
    public function index()
    {
        return Campaing::all();
    }

    public function validateCampaing()
    {   
        $client_campaign = ClientsCampaings::where('code', request('code'))->update(['used' => 1]);

        return ClientsCampaings::find($client_campaign);
    }

}
