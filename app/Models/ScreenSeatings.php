<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScreenSeatings extends Model
{
    use HasFactory;

    protected $table = 'screen_seatings';
    protected $primaryKey = 'screen_seatings_id';
    protected $fillable = ['screen_id', 'type', 'capacity', 'price'];

    public function screens()
    {
        return $this->belongsTo(Screens::class);
    }
}
