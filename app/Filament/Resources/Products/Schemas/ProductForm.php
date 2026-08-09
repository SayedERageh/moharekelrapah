<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\ProductCategory;
use App\Models\Subcategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | معلومات المنتج
                |--------------------------------------------------------------------------
                */

                Section::make('معلومات المنتج')
                    ->description('البيانات الأساسية للمنتج')
                    ->icon('heroicon-o-cube')
                    ->schema([

                        TextInput::make('name')
                            ->label('اسم المنتج')
                            ->placeholder('مثال: موتور كهربائي 2 حصان')
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
                            ->placeholder('electric-motor-2hp')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),


                        Textarea::make('description')
                            ->label('وصف المنتج')
                            ->placeholder('اكتب وصفًا واضحًا ومختصرًا للمنتج...')
                            ->rows(6)
                            ->maxLength(5000)
                            ->columnSpanFull(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | التصنيف
                |--------------------------------------------------------------------------
                */

                Section::make('تصنيف المنتج')
                    ->description('حدد القسم والفرع الذي ينتمي إليه المنتج')
                    ->icon('heroicon-o-squares-2x2')
                    ->schema([

                        Select::make('subcategory_id')
                            ->label('فرع المنتج')
                            ->relationship('subcategory', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->native(false)
                            ->placeholder('اختر الفرع'),


                        Select::make('store_id')
                            ->label('المتجر الخارجي')
                            ->relationship('store', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->native(false)
                            ->placeholder('اختر المتجر'),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | صور المنتج
                |--------------------------------------------------------------------------
                */

                Section::make('صور المنتج')
                    ->description('يمكنك رفع أكثر من صورة للمنتج')
                    ->icon('heroicon-o-photo')
                    ->schema([

                        FileUpload::make('images')
                            ->label('صور المنتج')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->appendFiles()
                            ->disk('public')
                            ->directory('products')
                            ->imageEditor()
                            ->imagePreviewHeight('180')
                            ->maxSize(5120)
                            ->maxFiles(10)
                            ->helperText(
                                'يمكن رفع حتى 10 صور. يفضل استخدام صور واضحة للمنتج.'
                            )
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | الأسعار
                |--------------------------------------------------------------------------
                */

                Section::make('الأسعار')
                    ->description('حدد السعر الحالي والسعر قبل الخصم')
                    ->icon('heroicon-o-currency-dollar')
                    ->schema([

                        TextInput::make('price')
                            ->label('السعر الحالي')
                            ->numeric()
                            ->required()
                            ->minValue(0)
                            ->suffix('جنيه')
                            ->placeholder('0.00'),


                        TextInput::make('old_price')
                            ->label('السعر القديم')
                            ->numeric()
                            ->minValue(0)
                            ->suffix('جنيه')
                            ->placeholder('0.00')
                            ->helperText(
                                'اتركه فارغًا إذا لم يوجد خصم.'
                            ),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | Affiliate
                |--------------------------------------------------------------------------
                */

                Section::make('رابط المنتج الخارجي')
                    ->description('الرابط الذي سيتم تحويل المستخدم إليه لإتمام الشراء')
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->schema([

                        TextInput::make('affiliate_url')
                            ->label('Affiliate URL')
                            ->placeholder('https://www.amazon.com/...')
                            ->url()
                            ->required()
                            ->maxLength(2000)
                            ->suffixIcon('heroicon-o-link')
                            ->helperText(
                                'ضع رابط الـ Affiliate الخاص بالمنتج من المتجر الخارجي.'
                            )
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | إعدادات العرض
                |--------------------------------------------------------------------------
                */

                Section::make('إعدادات المنتج')
                    ->description('التحكم في ظهور المنتج وترتيبه')
                    ->icon('heroicon-o-adjustments-horizontal')
                    ->schema([

                        Toggle::make('is_featured')
                            ->label('منتج مميز')
                            ->helperText(
                                'سيظهر المنتج بشكل مميز في واجهة الموقع.'
                            )
                            ->default(false),


                        Toggle::make('is_active')
                            ->label('المنتج نشط')
                            ->helperText(
                                'عند تعطيله لن يظهر المنتج للزوار.'
                            )
                            ->default(true),


                        TextInput::make('sort_order')
                            ->label('ترتيب العرض')
                            ->numeric()
                            ->integer()
                            ->minValue(0)
                            ->default(0)
                            ->helperText(
                                'الأرقام الأصغر تظهر أولًا.'
                            ),

                    ])
                    ->columns(3)
                    ->columnSpanFull(),

            ]);
    }
}
