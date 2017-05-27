<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaing extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'start_date', 'finish_date', 'place', 'points'
    ];

    public function organization() {
       return $this->belongsTo(Organization::class);
    }
}
