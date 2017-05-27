<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Benefit;
use App\Models\ClientsBenefits;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\ErrorCorrectionLevel;

class BenefitController extends Controller
{
    public function index()
    {
        return Benefit::all();
    }

    public function redeem(Request $request)
    {   
        $client_benefit = ClientsBenefits::create(request()->all());
        $code = hash('crc32b', $client_benefit->id . $client_benefit->user_id . $client_benefit->benefit_id);

        $qr = new QrCode($code);
        $qr_file = '/qr/' . $code . '.png';
        $qr->setSize(300)
           ->setMargin(10)
           ->setEncoding('UTF-8')
           ->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH)
           ->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0])
           ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255]);

        $qr->writeFile(public_path() . $qr_file);

        $client_benefit->code = $code;
        $client_benefit->qr_file = url('/').$qr_file;
        $client_benefit->save();

        return $client_benefit;
    }
}