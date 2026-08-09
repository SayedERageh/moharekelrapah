<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table

            ->columns([

                ImageColumn::make('images')
                    ->label('الصورة')
                    ->disk('public')
                    ->square()
                    ->size(55),


                TextColumn::make('name')
                    ->label('المنتج')
                    ->searchable()
                    ->sortable()
                    ->limit(35)
                    ->weight('bold'),


                TextColumn::make('subcategory.productCategory.name')
                    ->label('القسم')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),


                TextColumn::make('subcategory.name')
                    ->label('الفرع')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('gray'),


                TextColumn::make('store.name')
                    ->label('المتجر')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('warning'),


                TextColumn::make('price')
                    ->label('السعر')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: '.',
                        thousandsSeparator: ','
                    )
                    ->suffix(' جنيه')
                    ->sortable()
                    ->color('success')
                    ->weight('bold'),


                TextColumn::make('old_price')
                    ->label('السعر القديم')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: '.',
                        thousandsSeparator: ','
                    )
                    ->suffix(' جنيه')
                    ->color('gray')
                    ->toggleable(
                        isToggledHiddenByDefault: true
                    ),


                TextColumn::make('discount_percentage')
                    ->label('الخصم')
                    ->badge()
                    ->formatStateUsing(
                        fn ($state) => $state
                            ? "-{$state}%"
                            : 'بدون خصم'
                    )
                    ->color(
                        fn ($state) => $state
                            ? 'danger'
                            : 'gray'
                    ),


                TextColumn::make('is_featured')
                    ->label('مميز')
                    ->badge()
                    ->formatStateUsing(
                        fn ($state) => $state
                            ? 'مميز'
                            : 'عادي'
                    )
                    ->color(
                        fn ($state) => $state
                            ? 'warning'
                            : 'gray'
                    ),


                TextColumn::make('is_active')
                    ->label('الحالة')
                    ->badge()
                    ->formatStateUsing(
                        fn ($state) => $state
                            ? 'نشط'
                            : 'غير نشط'
                    )
                    ->color(
                        fn ($state) => $state
                            ? 'success'
                            : 'danger'
                    ),


                TextColumn::make('sort_order')
                    ->label('الترتيب')
                    ->sortable()
                    ->badge()
                    ->toggleable(
                        isToggledHiddenByDefault: true
                    ),

            ])


            ->filters([

                SelectFilter::make('store_id')
                    ->label('المتجر')
                    ->relationship(
                        'store',
                        'name'
                    )
                    ->searchable()
                    ->preload(),


                SelectFilter::make('subcategory_id')
                    ->label('الفرع')
                    ->relationship(
                        'subcategory',
                        'name'
                    )
                    ->searchable()
                    ->preload(),


                TernaryFilter::make('is_featured')
                    ->label('المنتجات المميزة')
                    ->trueLabel('مميزة فقط')
                    ->falseLabel('غير مميزة')
                    ->placeholder('كل المنتجات'),


                TernaryFilter::make('is_active')
                    ->label('الحالة')
                    ->trueLabel('نشطة فقط')
                    ->falseLabel('غير نشطة')
                    ->placeholder('كل المنتجات'),

            ])


            ->recordActions([

                ViewAction::make(),

                EditAction::make(),

            ])


            ->toolbarActions([

                BulkActionGroup::make([

                    DeleteBulkAction::make(),

                ]),

            ])


            ->defaultSort(
                'price',
                'asc'
            );
    }
}
