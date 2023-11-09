<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;

use ShuvroRoy\FilamentSpatieLaravelHealth\Pages\HealthCheckResults as BaseHealthCheckResults;

class HealthCheckResults extends BaseHealthCheckResults
{
    protected static string $view = 'filament.pages.health-check-results';

    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';

    public function getHeading(): Htmlable|string
    {
        return 'Health Check Results';
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Core';
    }



    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole(['Admin','Writer','Moderator']);
    }
 }
