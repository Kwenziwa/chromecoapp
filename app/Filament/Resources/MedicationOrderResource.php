<?php

namespace App\Filament\Resources;

use auth;
use Wizard\Step;
use Filament\Card;
use Filament\Forms;
use Filament\Select;
use Filament\Tables;
use Filament\Wizard;
use Filament\TextInput;
use Filament\DatePicker;
use Filament\Forms\Form;
use App\Enums\OrderStatus;
use App\Models\Medication;
use Filament\Tables\Table;
use Filament\DateTimePicker;
use App\Models\MedicationOrder;
use Filament\Resources\Resource;
use App\Enums\MedicationStatusOrder;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MedicationOrderResource\Pages;
use App\Filament\Resources\MedicationOrderResource\RelationManagers;

class MedicationOrderResource extends Resource
{
    protected static ?string $model = MedicationOrder::class;
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';
        public static function getNavigationBadge(): ?string
    {
        return static::getModel()::processing()->count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        // get processing orders count
        $count = (int) static::getNavigationBadge();

        // show warning badge if there are more than 10 orders
        // in processing state otherwise show success badge
        return $count > 10 ? 'warning' : 'success';
    }

    public static function form(Form $form): Form
    {
        return $form
             ->schema([
                Forms\Components\Wizard::make([
                    Forms\Components\Wizard\Step::make('Order Details')->schema([
                        Forms\Components\TextInput::make('order_number')
                            ->default('OR-' . random_int(100000, 99999999))
                            ->disabled()
                            ->required()
                            ->dehydrated(),
                        Forms\Components\Select::make('user_id')
                            ->relationship(name: 'user', titleAttribute: 'first_name')
                            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->id} - {$record->first_name} {$record->last_name}")
                            ->preload()
                            ->searchable(['first_name', 'last_name','email', 'phone_number'])
                            ->required(),
                        Forms\Components\DateTimePicker::make('pickup_at')
                            ->label('Pickup Date')
                            ->format('Y-m-d'),
                        Forms\Components\Select::make('status')
                            ->disabledOn('create')
                            ->options(MedicationStatusOrder::class)->required()
                            ->default('processing'),
                        Forms\Components\MarkdownEditor::make('notes')
                            ->columnSpanFull()

                    ])->columns(2),
                    Forms\Components\Wizard\Step::make('Medication Items')->schema([
                        // add a repeatable fieldset for order items
                        Forms\Components\Repeater::make('items')
                            ->label(false)
                            ->addActionLabel('Add Item')
                            ->relationship()
                            ->schema([
                                Forms\Components\Select::make('medication_id')
                                    ->label('Medication')
                                    ->options(Medication::query()->pluck('name', 'id'))
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->reactive(),
                                Forms\Components\TextInput::make('quantity')
                                    ->numeric()
                                    ->default(1)
                                    ->minValue(1)
                                    ->required()
                                    ->live()
                                    ->dehydrated(),
                            ])->columns(4)
                    ])
                ])->columnSpanFull()
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order_number')->sortable()->searchable(),
                TextColumn::make('user.first_name')->sortable()->searchable(),
                TextColumn::make('status')->sortable()->searchable()->badge(),
                TextColumn::make('pickup_at')->date()->sortable()->searchable(),
                TextColumn::make('created_at')->date()->sortable()->searchable(),
                TextColumn::make('updated_at')->date()->sortable()->searchable(),

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
