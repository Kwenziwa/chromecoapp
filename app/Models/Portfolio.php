<?php

namespace App\Models;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolios'; // Set the table name if it's different from the default

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'cover_image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Many-to-One with User
    }

    public function projects()
    {
        return $this->hasMany(Project::class); // One-to-Many with Project
    }
}
