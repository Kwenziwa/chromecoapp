<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Medication;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MedicationResource\Pages;
use App\Filament\Resources\MedicationResource\RelationManagers;

class MedicationResource extends Resource
{
    protected static ?string $model = Medication::class;
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    // enable global search
    protected static ?string $recordTitleAttribute = 'name';

    // override default 50 records limit to optimise performance
    protected static int $globalSearchResultsLimit = 10;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getGloballySearchableAttributes(): array
    {   // customise the global search attributes
        // this will override the $recordTitleAttribute property
        return ['name', 'sku', 'description'];
    }
    public static function form(Form $form): Form
    {
        return $form
           ->schema([
            Card::make()
                ->schema([

                Section::make()->schema([
                    TextInput::make('name')
                        ->required()
                        ->unique(Medication::class, 'name', ignoreRecord: true)
                        ->autofocus()
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')
                        ->required()
                        ->disabled()
                        ->unique(Medication::class, 'slug', ignoreRecord: true)
                        ->dehydrated(),
                    TextInput::make('dosage')
                        ->numeric()
                        ->maxLength(255),
                    TextInput::make('sku')
                            ->label('SKU (Stock Keeping Unit)')
                            ->unique(Medication::class, 'sku', ignoreRecord: true)
                            ->required(),
                    TextInput::make('quantity')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(100)
                            ->default(1)
                            ->required(),
                    FileUpload::make('image_url')
                            ->label('Medication Image')
                            ->image()
                            ->imageEditor()
                            ->imageCropAspectRatio(null),
                    MarkdownEditor::make('description')
                            ->columnSpan('full')
                ])->columns(2)
               ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                ImageColumn::make('image_url')->label('Image'),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('quantity')->sortable(),
                TextColumn::make('dosage')->sortable()->searchable(),
                TextColumn::make('description')->wrap()->limit(100)->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make()->requiresConfirmation(),
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
            'index' => Pages\ListMedications::route('/'),
            'create' => Pages\CreateMedication::route('/create'),
            'edit' => Pages\EditMedication::route('/{record}/edit'),
        ];
    }
}
