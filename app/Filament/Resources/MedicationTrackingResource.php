<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicationTrackingResource\Pages;
use App\Filament\Resources\MedicationTrackingResource\RelationManagers;
use App\Models\MedicationTracking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedicationTrackingResource extends Resource
{
    protected static ?string $model = MedicationTracking::class;
    protected static ?int $navigationSort = 4;


    protected static ?string $navigationIcon = 'heroicon-o-chart-bar-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedicationTrackings::route('/'),
            'create' => Pages\CreateMedicationTracking::route('/create'),
            'edit' => Pages\EditMedicationTracking::route('/{record}/edit'),
        ];
    }
}
