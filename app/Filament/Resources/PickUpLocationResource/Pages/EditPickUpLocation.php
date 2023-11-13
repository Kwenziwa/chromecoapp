<?php

namespace App\Filament\Resources\PickUpLocationResource\Pages;

use App\Filament\Resources\PickUpLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPickUpLocation extends EditRecord
{
    protected static string $resource = PickUpLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
