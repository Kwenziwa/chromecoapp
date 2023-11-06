<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderItem;
use App\Enums\OrderStatus;
use App\Models\Medication;
use App\Enums\MedicationStatusOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicationOrder extends Model
{
    use HasFactory;
        // Define the table associated with the model (if it's different from the default table name).

    protected $casts = [
        'status' =>  MedicationStatusOrder::class,
    ];
    protected $fillable = [
        'user_id',
        'medication_id',
        'order_number',
        'pickup_at',
        'quantity',
        'order_date',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); // Many-to-One with User
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function scopePending(Builder $query): void
    {
        $query->where('status', OrderStatus::PENDING);
    }

    public function scopeProcessing(Builder $query): void
    {
        $query->where('status', OrderStatus::PROCESSING);
    }
}
