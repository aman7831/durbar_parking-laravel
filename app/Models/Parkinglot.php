<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ReserveParking;

class Parkinglot extends Model
{
    use HasFactory;

    public function reserve()
    {
        return $this->hasMany(ReserveParking::class);
    }
}
