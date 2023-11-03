<?php

namespace App\Filament\Resources\MedicationResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\MedicationResource;

class CreateMedication extends CreateRecord
{
    protected static string $resource = MedicationResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()->title('Medication Created')
            ->body('The Medication has been Created successfully.');
    }
}
