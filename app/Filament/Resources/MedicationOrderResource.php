<?php

namespace App\Filament\Resources;

use auth;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\MedicationOrder;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MedicationOrderResource\Pages;
use App\Filament\Resources\MedicationOrderResource\RelationManagers;

class MedicationOrderResource extends Resource
{
    protected static ?string $model = MedicationOrder::class;
    protected static ?int $navigationSort = 3;


    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('user_id')
                            ->relationship(name: 'user', titleAttribute: 'first_name')
                            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->id} - {$record->first_name} {$record->last_name}")
                            ->preload()
                            ->searchable(['first_name', 'last_name','email', 'phone_number'])
                            ->required(),
                        Select::make('medication_id')
                            ->relationship(name: 'medication', titleAttribute: 'name')
                            ->label('Medication')
                            ->preload()
                            ->searchable(['name', 'id'])
                            ->required(),
                        TextInput::make('quantity')
                            ->numeric()
                            ->maxLength(255),
                        DateTimePicker::make('pickup_at')
                            ->label('Pickup Date')
                            ->format('Y-m-d'),
                        DateTimePicker::make('collected_at')
                            ->default(now())
                            ->hiddenOn('create')
                            ->format('Y-m-d'),
                        Select::make('status')
                            ->disabledOn('create')
                            ->hiddenOn('create')
                            ->options([
                                'processing' => 'Processing',
                                'ready_for_pickup' => 'Ready for Pickup',
                                'collected' => 'Collected',
                                'cancelled' => 'Cancelled',
                            ])->required()
                            ->default('processing'),
                        ])

                    ->columns(2),
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('user_id')->sortable()->searchable(),
                TextColumn::make('status')->sortable()->searchable(),
                TextColumn::make('pickup_at')->sortable()->searchable(),
                TextColumn::make('collected_at')->sortable()->searchable(),
                TextColumn::make('created_at')->sortable()->searchable(),
                TextColumn::make('updated_at')->sortable()->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                ViewAction::make(),
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
            'index' => Pages\ListMedicationOrders::route('/'),
            'create' => Pages\CreateMedicationOrder::route('/create'),
            'edit' => Pages\EditMedicationOrder::route('/{record}/edit'),
        ];
    }

    public function query($query)
    {
        if (!auth()->user()->hasRole(['Admin','Moderator'])) {
            $query->where('user_id', auth()->id()); // Filter orders for non-admin users
        }
    }

    public static function getEloquentQuery(): Builder
    {
        if (!auth()->user()->hasRole(['Admin','Moderator'])) {
            return parent::getEloquentQuery()->where('user_id', auth()->id());
        }
        return parent::getEloquentQuery();
    }


}
