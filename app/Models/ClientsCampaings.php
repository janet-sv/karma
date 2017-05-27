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

    public function campaign()
    {
        return $this->belongsTo(Campaing::class, 'campaing_id', 'id');
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
