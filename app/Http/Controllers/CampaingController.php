<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Campaing;
use App\Models\ClientsCampaings;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\ErrorCorrectionLevel;

class CampaingController extends Controller
{
    public function index()
    {
        return Campaing::all();
    }

    public function store()
    {   
        $client_campaing = ClientsCampaings::create(request()->all());
        $code = hash('crc32b', $client_campaing->id.$client_campaing->user_id.$client_campaing->campaing_id);

        $qr = new QrCode($code);
        $qr_file = '/qr/'.$code.'.png';
        $qr->setSize(300)
            ->setMargin(10)
            ->setEncoding('UTF-8')
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH)
            ->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0])
            ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255]);
        $qr->writeFile(public_path().$qr_file);

        $client_campaing->code = $code;
        $client_campaing->qr_file = url('/').$qr_file;
        $client_campaing->save();
        return $client_campaing;
    }

    public function validateCampaing()
    {   
        $client_campaing = ClientsCampaings::where('code', request('code'))->update(['used'=>1]);
        return ClientsCampaings::find($client_campaing);
    }

}
