<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;
use Filament\Pages\Auth\Register as BaseRegister;;
use Cheesegrits\FilamentPhoneNumbers\Forms\Components\PhoneNumber;

class Register extends BaseRegister
{

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                $this->getFirstNameFormComponent(),
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
                FileUpload::make('profile_image')
                        ->image(),
                TextInput::make('address')
                    ->maxLength(255),
                PhoneInput::make('phone_number')->defaultCountry('ZAR'),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
            ])->columns(1)
            ->statePath('data');
    }


    protected function getFirstNameFormComponent(): Component
    {
        return  TextInput::make('first_name')
            ->label(__('filament-panels::pages/auth/register.form.name.label'))
            ->required()
            ->maxLength(255)
            ->autofocus();
    }




}
