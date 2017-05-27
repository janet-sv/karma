<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Benefit;
use App\Models\Client;

class ClientsBenefits extends Model
{
    protected $fillable = [
        'benefit_id', 'user_id'
    ];

    public function benefit()
    {
        $this->belongsTo(Benefit::class);
    }

    public function client()
    {
        $this->belongsTo(Client::class);
    }
}
