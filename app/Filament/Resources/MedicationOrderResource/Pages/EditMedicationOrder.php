<?php

namespace App\Filament\Resources\MedicationOrderResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\MedicationOrderResource;

class EditMedicationOrder extends EditRecord
{
    protected static string $resource = MedicationOrderResource::class;
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
            ->success()->title('Medication Order Update')
            ->body('The Medication has been Updated successfully.');
    }
}
