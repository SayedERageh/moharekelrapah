<?php

namespace App\Filament\Resources\Subcategories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class SubcategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table

            ->columns([

                ImageColumn::make('image')
                    ->label('الصورة')
                    ->disk('public')
                    ->square()
                    ->size(50),


                TextColumn::make('name')
                    ->label('اسم الفرع')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),


                TextColumn::make('productCategory.name')
                    ->label('القسم')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),


                TextColumn::make('products_count')
                    ->label('عدد المنتجات')
                    ->counts('products')
                    ->badge()
                    ->color('success'),


                TextColumn::make('sort_order')
                    ->label('الترتيب')
                    ->sortable()
                    ->badge(),


                TextColumn::make('is_active')
                    ->label('الحالة')
                    ->badge()
                    ->formatStateUsing(
                        fn ($state) => $state ? 'نشط' : 'غير نشط'
                    )
                    ->color(
                        fn ($state) => $state ? 'success' : 'danger'
                    ),


                TextColumn::make('created_at')
                    ->label('تاريخ الإضافة')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(
                        isToggledHiddenByDefault: true
                    ),

            ])


            ->filters([

                TernaryFilter::make('is_active')
                    ->label('الحالة')
                    ->trueLabel('نشطة فقط')
                    ->falseLabel('غير نشطة')
                    ->placeholder('كل الفروع'),


                SelectFilter::make('product_category_id')
                    ->label('القسم')
                    ->relationship(
                        'productCategory',
                        'name'
                    )
                    ->searchable()
                    ->preload(),

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
                'sort_order',
                'asc'
            );
    }
}
