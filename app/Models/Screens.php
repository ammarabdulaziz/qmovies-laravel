<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screens extends Model
{
    use HasFactory;

    protected $table = 'screens';
    protected $primaryKey = 'screen_id';
    protected $fillable = [
        'name',
        'theatre_id',
        'mezzanine_price',
        'mezzanine_capacity',
        'balcony_price',
        'balcony_capacity',
        'total_capacity'
    ];

    public function theatres()
    {
        return $this->belongsTo(Theatre::class);
    }

    public function screenSeatings()
    {
        return $this->hasMany(ScreenSeatings::class, 'screen_id');
    }
}
