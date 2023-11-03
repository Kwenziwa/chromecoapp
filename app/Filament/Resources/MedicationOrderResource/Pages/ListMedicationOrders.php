<?php

namespace App\Filament\Resources\MedicationOrderResource\Pages;

use App\Filament\Resources\MedicationOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedicationOrders extends ListRecords
{
    protected static string $resource = MedicationOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
