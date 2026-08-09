<?php

namespace App\Filament\Resources\Stores\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class StoreForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('اسم المتجر')
                    ->placeholder('مثال: Amazon')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {

                        if (filled($state)) {
                            $set('slug', Str::slug($state));
                        }

                    }),


                TextInput::make('slug')
                    ->label('الرابط المختصر')
                    ->placeholder('مثال: amazon')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),


                TextInput::make('website')
                    ->label('موقع المتجر')
                    ->placeholder('https://www.amazon.com')
                    ->url()
                    ->maxLength(500)
                    ->helperText(
                        'الرابط الرسمي لموقع المتجر.'
                    ),


                Textarea::make('description')
                    ->label('وصف المتجر')
                    ->placeholder('اكتب وصفًا مختصرًا عن المتجر...')
                    ->rows(5)
                    ->maxLength(1000)
                    ->columnSpanFull(),


                FileUpload::make('logo')
                    ->label('شعار المتجر')
                    ->image()
                    ->disk('public')
                    ->directory('stores')
                    ->imageEditor()
                    ->imagePreviewHeight('150')
                    ->maxSize(5120)
                    ->helperText(
                        'يفضل استخدام صورة PNG بخلفية شفافة.'
                    ),


                Toggle::make('is_active')
                    ->label('المتجر نشط')
                    ->default(true)
                    ->inline(false),

            ]);
    }
}
