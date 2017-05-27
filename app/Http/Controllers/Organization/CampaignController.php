<?php

namespace App\Http\Controllers\Organization;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Campaing;
use App\Models\ClientsCampaings;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\ErrorCorrectionLevel;

class CampaignController extends Controller
{

    public function index()
    {
       $campaigns = Campaing::all();

       return view('pages.campaign.campaign', ['campaigns' => $campaigns]);
    }

    public function store()
    {
        $user = Auth::user();
        $campaign = new Campaing(request()->all());
        $campaign->save();
        return redirect()->route('campaigns.index');
    }

    public function generate()
    {
       $client_campaign = ClientsCampaings::create(request()->all());
        $code = hash('crc32b', $client_campaign->id . $client_campaign->user_id . $client_campaign->campaing_id);
        $qr = new QrCode($code);
        $qr_file = '/qr/' . $code . '.png';
        $qr->setSize(300)
           ->setMargin(10)
           ->setEncoding('UTF-8')
           ->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH)
           ->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0])
           ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255]);

        $qr->writeFile(public_path() . $qr_file);

        $client_campaign->code = $code;
        $client_campaign->qr_file = url('/') . $qr_file;
        $client_campaign->save();

        return $client_campaign;
    }
}
