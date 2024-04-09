<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'rating', 'review', 'tour_id','status'
    ];
    

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}
