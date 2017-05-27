<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Campaing;
use App\Models\User;

class ClientsCampaings extends Model
{
    protected $fillable = [
        'campaing_id', 'user_id'
    ];

    public function campaing()
    {
        $this->belongsTo(Campaing::class);
    }

    public function User()
    {
        $this->belongsTo(User::class);
    }
}
