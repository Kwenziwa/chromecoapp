<?php

namespace App\Policies;

use App\Models\MedicationTracking;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MedicationTrackingPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasRole(['Admin','Moderator']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, MedicationTracking $medicationTracking)
    {
        return $user->hasRole(['Admin','Moderator']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasRole(['Admin','Moderator']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, MedicationTracking $medicationTracking)
    {
        return $user->hasRole(['Admin','Moderator']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, MedicationTracking $medicationTracking)
    {
       return $user->hasRole(['Admin','Moderator']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, MedicationTracking $medicationTracking)
    {
      return $user->hasRole(['Admin','Moderator']);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, MedicationTracking $medicationTracking)
    {
       return $user->hasRole(['Admin','Moderator']);
    }
}
