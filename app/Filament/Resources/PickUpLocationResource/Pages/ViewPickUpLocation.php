<?php

namespace App\Filament\Resources\PickUpLocationResource\Pages;

use App\Filament\Resources\PickUpLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPickUpLocation extends ViewRecord
{
    protected static string $resource = PickUpLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
