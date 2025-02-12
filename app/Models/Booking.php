<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'name',
        'email',
        'phone',
        'request',
        'preference',
    ];

    // Define the relationship with the Tour model
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

}
