<?php

namespace App\Filament\Resources\MedicationTrackingResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\MedicationTrackingResource;

class EditMedicationTracking extends EditRecord
{
    protected static string $resource = MedicationTrackingResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()->title('Medication Tracking Update')
            ->body('The Medication Tracking has been Updated successfully.');
    }
}
