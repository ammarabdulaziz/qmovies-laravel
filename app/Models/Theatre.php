<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    use HasFactory;

    protected $table = 'theatres';
    protected $primaryKey = 'theatre_id';
    protected $fillable = array('name', 'location');

    public function screens()
    {
        return $this->hasMany(Screens::class, 'theatre_id');
    }
}
