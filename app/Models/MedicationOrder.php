<?php

namespace App\Models;

use App\Models\User;
use App\Models\Medication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicationOrder extends Model
{
    use HasFactory;
        // Define the table associated with the model (if it's different from the default table name).

    protected $fillable = [
        'user_id',
        'medication_id',
        'pickup_at',
        'quantity',
        'order_date',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Many-to-One with User
    }

    public function medication()
    {
        return $this->belongsTo(Medication::class,'medication_id');
    }
}
