<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';

    protected $fillable = [
        'header',
        'history',
    ];

    public function founders()
    {
        return $this->hasMany(Founder::class);
    }

    public function reasons()
    {
        return $this->hasMany(Reason::class);
    }
}
