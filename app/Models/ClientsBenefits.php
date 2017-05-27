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

    protected $table = 'clients_benefits';

    public function benefit()
    {
        return $this->belongsTo(Benefit::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
