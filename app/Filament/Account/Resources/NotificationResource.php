<?php

namespace App\Filament\Account\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Notification;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\NotificationResource\Pages;

class NotificationResource extends Resource
{
    protected static ?string $model = Notification::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell';
    protected static ?int $navigationSort = 5;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::read()->count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        // get processing orders count
        $count = (int) static::getNavigationBadge();

        // show warning badge if there are more than 10 orders
        // in processing state otherwise show success badge
        return $count > 0 ? 'warning' : 'success';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->relationship(name: 'user', titleAttribute: 'first_name')
                    ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->id} - {$record->first_name} {$record->last_name}")
                    ->preload()
                    ->searchable(['first_name', 'last_name', 'email', 'phone_number'])
                    ->required(),
                TextInput::make('subject')
                    ->label('Subject')
                    ->placeholder('Enter subject here...'),
                MarkdownEditor::make('message')
                    ->columnSpan('full')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('user.fullname')->label('Sent To'),
                TextColumn::make('message'),
                TextColumn::make('Status'),
                TextColumn::make('created_at')->label('Sent on'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListNotifications::route('/'),
            'create' => Pages\CreateNotification::route('/create'),
            'view' => Pages\ViewNotification::route('/{record}'),
            'edit' => Pages\EditNotification::route('/{record}/edit'),
        ];
    }
}
