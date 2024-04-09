<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    protected $fillable = [
        'name',
        'title',
        'image_path',
    ];

    public function aboutUs()
    {
        return $this->belongsTo(AboutUs::class);
    }
}
