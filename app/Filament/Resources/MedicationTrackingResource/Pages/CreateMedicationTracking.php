<?php

namespace App\Filament\Resources\MedicationTrackingResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\MedicationTrackingResource;

class CreateMedicationTracking extends CreateRecord
{
    protected static string $resource = MedicationTrackingResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()->title('Medication Tracking Created')
            ->body('The Medication Tracking has been Created successfully.');
    }
}
