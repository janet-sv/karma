<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Campaing;
use App\Models\ClientsCampaings;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\ErrorCorrectionLevel;

use Carbon\Carbon;

use Auth;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaing::all();

        $formatted_campaigns = [];
        foreach ($campaigns as $campaign) {
            $formatted_campaigns[] = $this->formatCampaign($campaign);
        }

        return $formatted_campaigns;
    }

    public function get(Request $request, $campaign_id)
    {
        $campaign = Campaing::find($campaign_id);

        return response()->json($this->formatCampaign($campaign));
    }

    public function validateCampaign()
    {   
        $client_campaign = ClientsCampaings::where('code', request('code'))->with('campaign')->first();

        $user = Auth::user();

        if (!$client_campaign || $client_campaign->used) {
            return response()->json(['status' => 'failed', 'points' => $user->points]);
        }

        $user->points = $user->points + $client_campaign->campaign->points;
        $user->save();

        $client_campaign->used = 1;
        $client_campaign->save();

        return response()->json([
            'status' => 'success',
            'points' => $user->points,
        ]);
    }

    private function formatCampaign($campaign)
    {
        $start_date = new Carbon($campaign->start_date);
        $finish_date = new Carbon($campaign->finish_date);

        $res = [
            'id'              => $campaign->id,
            'title'           => $campaign->title,
            'description'     => $campaign->description,
            'start_date'      => $start_date->format('d-m-Y'),
            'finish_date'     => $finish_date->format('d-m-Y'),
            'place'           => $campaign->place,
            'points'          => $campaign->points,
            'created_at'      => $campaign->created_at,
            'updated_at'      => $campaign->updated_at,
            'organization_id' => $campaign->organization_id,
        ];

        return $res;
    }

}
