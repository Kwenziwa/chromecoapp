<?php

namespace App\Models;

use App\Models\MedicationOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickUpLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location_code',
    ];

    public function medicationOrders()
    {
        return $this->hasMany(MedicationOrder::class); // One-to-Many with MedicationOrder
    }

    public function getNameCodeAttribute()
    {
        return $this->name . ' - ' . $this->location_code;
    }
}
