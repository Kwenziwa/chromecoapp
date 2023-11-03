<?php

namespace App\Livewire;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class UserStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::all()->count())
                ->icon('heroicon-o-user-group'),
            Stat::make('Total Admins',  User::with('roles')->get()->filter( fn ($user) => $user->roles->where('name', 'Admin')->toArray() )->count())
                ->icon('heroicon-m-user-circle'),
            Stat::make('Total Males', User::where('gender','male')->count()),
            Stat::make('Total Females',User::where('gender','female')->count()),
        ];
    }
}
