<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as ModelsPermission;
use Illuminate\Database\Eloquent\Model;

class Permission extends ModelsPermission
{
    use HasFactory;
}
