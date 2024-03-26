<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    protected $fillable = [
        'reason',
    ];

    public function aboutUs()
    {
        return $this->belongsTo(AboutUs::class);
    }
}
