<?php

namespace App\Filament\Resources\MedicationOrderResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\MedicationOrderResource;

class CreateMedicationOrder extends CreateRecord
{
    protected static string $resource = MedicationOrderResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()->title('Medication Order Created')
            ->body('The Medication has been Created successfully.');
    }
}
