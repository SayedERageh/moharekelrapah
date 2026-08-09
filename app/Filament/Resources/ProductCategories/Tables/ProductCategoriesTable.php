<?php

namespace App\Filament\Resources\ProductCategories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class ProductCategoriesTable
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
                    ->label('اسم القسم')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('subcategories_count')
                    ->label('عدد الفروع')
                    ->counts('subcategories')
                    ->badge()
                    ->color('info'),

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
                    ->toggleable(isToggledHiddenByDefault: true),

            ])

            ->filters([

                TernaryFilter::make('is_active')
                    ->label('الحالة')
                    ->trueLabel('نشطة فقط')
                    ->falseLabel('غير نشطة')
                    ->placeholder('كل الأقسام'),

                SelectFilter::make('is_active')
                    ->label('الحالة')
                    ->options([
                        1 => 'نشط',
                        0 => 'غير نشط',
                    ]),

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

            ->defaultSort('sort_order', 'asc');
    }
}
