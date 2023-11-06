<?php

namespace App\Models;

use App\Models\MedicationOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medication extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dosage',
        'description',
        'slug',
        'sku',
        'image_url',
        'quantity',
        'is_visible',
        'is_featured',
    ];
}
