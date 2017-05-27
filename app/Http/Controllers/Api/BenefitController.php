<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\Benefit;
use App\Models\User;
use App\Models\ClientsBenefits;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\ErrorCorrectionLevel;

use Auth;

class BenefitController extends Controller
{
    public function index()
    {
        $benefits = Benefit::all();

        return $benefits;
    }

    public function get($benefit_id)
    {
        $benefit = Benefit::find($benefit_id);

        return $benefit;
    }

    public function created()
    {
        $user = Auth::user();
        $benefits = $user->created_benefits()->with('benefit')->get()->toArray();

        return response()->json($benefits);
    }

    public function getCreated(Request $request, $created_id)
    {
        $benefit = ClientsBenefits::find($created_id)->with('benefit')->get();

        return $benefit;
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
