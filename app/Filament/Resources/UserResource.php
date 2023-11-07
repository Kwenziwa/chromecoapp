<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Livewire\UserStatsOverview;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('first_name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('middle_name')
                            ->maxLength(255),
                        TextInput::make('last_name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Select::make('gender')
                            ->options([
                                'male' => 'Male',
                                'female' => 'Female',
                                'other' => 'Other',
                            ])->required(),
                        Select::make('status')
                            ->options([
                                'active' => 'Active',
                                'inactive' => 'Inactive',
                                'suspended' => 'Suspended',
                            ])->required(),
                        FileUpload::make('profile_image')
                            ->image(),
                        TextInput::make('address')
                            ->maxLength(255),
                        TextInput::make('phone_number')
                            ->tel()
                            ->maxLength(255),
                        TextInput::make('password')
                            ->password()
                            ->dehydrateStateUsing(fn (string $state): string => Hash::make($state))
                            ->dehydrated(fn (?string $state): bool => filled($state))
                            ->required(fn (string $operation): bool => $operation === 'create')
                            ->maxLength(255),
                        Select::make('roles')
                            ->preload()
                            ->relationship('roles',titleAttribute: 'name'),
                        Select::make('permissions')
                            ->multiple()
                            ->preload()
                            ->relationship('permissions',titleAttribute: 'name')

                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                    TextColumn::make('first_name')->sortable()->searchable(),
                    TextColumn::make('last_name')->sortable()->searchable(),
                    ImageColumn::make('profile_image')->label('Profile')
                                ->circular()
                                ->defaultImageUrl(url('/images/user_default.png')),
                    TextColumn::make('email')->sortable()->searchable(),
                    TextColumn::make('gender')->sortable(),
                    BadgeColumn::make('status')->colors([
                         'success' => 'active',
                         'warning' => 'inactive',
                         'danger' => 'suspended',
                    ]),

                    TextColumn::make('address')->wrap()->limit(20)->sortable()->searchable(),
                    TextColumn::make('phone_number')->sortable()->searchable(),
                    TextColumn::make('created_at')->dateTime('d-M-Y')->sortable()->toggleable(isToggledHiddenByDefault: true),
                    TextColumn::make('updated_at')->dateTime('d-M-Y')->sortable()->toggleable(isToggledHiddenByDefault: true),

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

    public static function getWidgets(): array
    {
        return [
            UserStatsOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
