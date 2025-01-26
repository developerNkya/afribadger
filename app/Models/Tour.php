<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($tour) {
            $tour->slug = Str::slug($tour->title);
        });
    }
}
