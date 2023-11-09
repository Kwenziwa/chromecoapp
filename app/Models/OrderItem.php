<?php

namespace App\Models;

use App\Models\Medication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;
     protected $fillable = [
        'medication_order_id',
        'medication_id',
        'quantity',
    ];

    public function medication()
    {
        return $this->belongsTo(Medication::class);
    }
}
