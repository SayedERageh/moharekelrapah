<?php

namespace App\Filament\Resources\ProductCategories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('اسم القسم')
                    ->placeholder('مثال: الأجهزة الكهربائية')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {

                        $set(
                            'slug',
                            \Illuminate\Support\Str::slug($state)
                        );

                    })
                    ->columnSpan(1),


                TextInput::make('slug')
                    ->label('الرابط المختصر')
                    ->placeholder('مثال: electrical-appliances')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->columnSpan(1),


                Textarea::make('description')
                    ->label('وصف القسم')
                    ->placeholder('اكتب وصفًا مختصرًا للقسم...')
                    ->rows(5)
                    ->maxLength(1000)
                    ->columnSpanFull(),


                FileUpload::make('image')
                    ->label('صورة القسم')
                    ->image()
                    ->disk('public')
                    ->directory('product-categories')
                    ->imageEditor()
                    ->imagePreviewHeight('180')
                    ->maxSize(5120)
                    ->columnSpan(1),


                Toggle::make('is_active')
                    ->label('القسم نشط')
                    ->default(true)
                    ->inline(false)
                    ->columnSpan(1),


                TextInput::make('sort_order')
                    ->label('ترتيب العرض')
                    ->numeric()
                    ->integer()
                    ->default(0)
                    ->minValue(0)
                    ->helperText('الأرقام الأصغر تظهر أولًا.')
                    ->columnSpan(1),

            ]);
    }
}
