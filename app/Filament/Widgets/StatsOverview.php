<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Medication;
use App\Models\MedicationOrder;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    // by default the widget will poll every 5 seconds
    // and here we are overriding it to 15 seconds
    // you can also disable it by setting it to null
    protected static ?string $pollingInterval = '15s';

    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
                ->description('Increase in users')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([7, 3, 5, 7, 4, 3, 6, 7, 8, 9, 10]),

            Stat::make('Total Medication', Medication::count())
                ->description('Total available Medication products in Pharmacy')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('danger')
                ->chart([10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0]),

            Stat::make('Pending Orders', MedicationOrder::pending()->count())
                ->description('Total amount of pending orders')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('warning')
                ->chart([9, 4, 6, 8, 3, 5, 7, 2, 4, 6, 8]),
        ];
    }

    public static function canView(): bool
    {
        return auth()->user()->hasRole(['Admin','Moderator','Writer']);

    }
}
