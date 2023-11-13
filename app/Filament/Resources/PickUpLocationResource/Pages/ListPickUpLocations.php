<?php

namespace App\Filament\Resources\PickUpLocationResource\Pages;

use App\Filament\Resources\PickUpLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPickUpLocations extends ListRecords
{
    protected static string $resource = PickUpLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
