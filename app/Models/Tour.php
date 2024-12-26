<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';
    protected $fillable = [
        'title',
        'description',
        'days',
        'people',
        'amount',
        'tour_type_id',
    ];

    // public function tourType()
    // {
    //     return $this->belongsTo(TourType::class, 'tour_type_id');
    // }
}
