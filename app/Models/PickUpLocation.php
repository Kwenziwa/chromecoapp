<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PickUpLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
