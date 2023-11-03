<?php

namespace App\Filament\Resources\MedicationResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\MedicationResource;

class EditMedication extends EditRecord
{
    protected static string $resource = MedicationResource::class;
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
            ->success()->title('Medication Update')
            ->body('The Medication has been Updated successfully.');
    }
}
