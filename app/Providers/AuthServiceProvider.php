<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Medication;
use App\Models\Permission;
use App\Models\Notification;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Models\PickUpLocation;
use App\Models\MedicationOrder;
use App\Models\MedicationTracking;
use App\Policies\MedicationPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\NotificationPolicy;
use App\Policies\PickUpLocationPolicy;
use App\Policies\MedicationOrderPolicy;
use App\Policies\MedicationTrackingPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [

        User::class => UserPolicy::class,
        Medication::class => MedicationPolicy::class,
        MedicationOrder::class => MedicationOrderPolicy::class,
        MedicationTracking::class => MedicationTrackingPolicy::class,
        Notification::class => NotificationPolicy::class,
        Permission::class => PermissionPolicy::class,
        Role::class => RolePolicy::class,
        PickUpLocation::class => PickUpLocationPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
