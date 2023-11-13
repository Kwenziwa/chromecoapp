<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Panel;
use App\Enums\UserGender;
use App\Enums\UserStatus;
use App\Models\Portfolio;
use App\Models\Notification;
use App\Models\PickUpLocation;
use App\Models\MedicationOrder;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\HasName;
use Spatie\Permission\Traits\HasRoles;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasName, HasAvatar, MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $enumCasts = [
        'status' => UserStatus::class,
        'gender' => UserGender::class,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'profile_image',
        'address',
        'phone_number',
        'pick_up_location_id',
        'status',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // public function canAccessPanel(Panel $panel): bool
    // {
    //     return $this->hasRole(['Admin','Moderator','Writer','User']);

    // }

    public function getFilamentName(): string
    {
        return "{$this->first_name} {$this->middle_name} {$this->last_name}";
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->avatar_url;
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class); // One-to-Many with Portfolio
    }

    public function medicationOrders()
    {
        return $this->hasMany(MedicationOrder::class); // One-to-Many with MedicationOrder
    }

    // Define the inverse relationship with notifications
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    // Define the inverse relationship with the pickup location
    public function pickUpLocation()
    {
        return $this->belongsTo(PickUpLocation::class);
    }
}
