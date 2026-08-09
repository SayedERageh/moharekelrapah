<?php

namespace App\Filament\Resources\Stores\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class StoresTable
{
    public static function configure(Table $table): Table
    {
        return $table

            ->columns([

                ImageColumn::make('logo')
                    ->label('الشعار')
                    ->disk('public')
                    ->square()
                    ->size(55),


                TextColumn::make('name')
                    ->label('اسم المتجر')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),


                TextColumn::make('website')
                    ->label('الموقع')
                    ->limit(35)
                    ->url(fn ($record) => $record->website)
                    ->openUrlInNewTab()
                    ->color('primary')
                    ->toggleable(),


                TextColumn::make('products_count')
                    ->label('عدد المنتجات')
                    ->counts('products')
                    ->badge()
                    ->color('info'),


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
                    ->placeholder('كل المتاجر'),

            ])


            ->recordActions([

                ViewAction::make(),

                EditAction::make(),

            ])


            ->toolbarActions([

                BulkActionGroup::make([

                    DeleteBulkAction::make(),

                ]),

            ]);


    }
}
