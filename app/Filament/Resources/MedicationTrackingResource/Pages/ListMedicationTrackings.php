<?php

namespace App\Filament\Resources\MedicationTrackingResource\Pages;

use App\Filament\Resources\MedicationTrackingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedicationTrackings extends ListRecords
{
    protected static string $resource = MedicationTrackingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
