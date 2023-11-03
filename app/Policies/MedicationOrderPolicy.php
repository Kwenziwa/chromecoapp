<?php

namespace App\Policies;

use App\Models\MedicationOrder;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MedicationOrderPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if($user->hasRole(['Admin','Moderator']) || $user->hasPermissionTo('View Order')){
            return true;
        }
        return false;

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, MedicationOrder $medicationOrder): bool
    {
        if($user->hasRole(['Admin','Moderator']) || $user->hasPermissionTo('View Order')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(['Admin','Moderator']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, MedicationOrder $medicationOrder): bool
    {
        return $user->hasRole(['Admin']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, MedicationOrder $medicationOrder): bool
    {
        return $user->hasRole(['Admin']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, MedicationOrder $medicationOrder): bool
    {
        return $user->hasRole(['Admin']);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, MedicationOrder $medicationOrder): bool
    {
        return $user->hasRole(['Admin']);
    }
}
