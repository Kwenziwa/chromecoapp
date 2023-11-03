<?php

namespace App\Models;

use App\Models\User;
use App\Models\Medication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicationTracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'medication_id',
        'user_id',
        'date_time_of_intake',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Many-to-One with User
    }

    public function medication()
    {
        return $this->belongsTo(Medication::class, 'medication_id'); // Many-to-One with Medication
    }
}
