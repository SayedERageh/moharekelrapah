<?php

namespace App\Filament\Resources\Subcategories\Schemas;

use App\Models\ProductCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class SubcategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('product_category_id')
                    ->label('قسم المنتجات')
                    ->relationship('productCategory', 'name')
                   
                    ->preload()
                    ->required()
                    ->native(false)
                    ->placeholder('اختر قسم المنتجات'),


                TextInput::make('name')
                    ->label('اسم الفرع')
                    ->placeholder('مثال: مواتير كهربائية')
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
                    ->placeholder('مثال: electric-motors')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),


                Textarea::make('description')
                    ->label('وصف الفرع')
                    ->placeholder('اكتب وصفًا مختصرًا للفرع...')
                    ->rows(5)
                    ->maxLength(1000)
                    ->columnSpanFull(),


                FileUpload::make('image')
                    ->label('صورة الفرع')
                    ->image()
                    ->disk('public')
                    ->directory('subcategories')
                    ->imageEditor()
                    ->imagePreviewHeight('180')
                    ->maxSize(5120),


                Toggle::make('is_active')
                    ->label('الفرع نشط')
                    ->default(true)
                    ->inline(false),


                TextInput::make('sort_order')
                    ->label('ترتيب العرض')
                    ->numeric()
                    ->integer()
                    ->default(0)
                    ->minValue(0)
                    ->helperText('الأرقام الأصغر تظهر أولًا.'),

            ]);
    }
}
