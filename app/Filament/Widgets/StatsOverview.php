<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Post;
use App\Models\Category;
use App\Models\Service;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // أرقام حالية
        $postsCount = Post::count();
        $servicesCount = Service::count();

        // أرقام الشهر اللي فات (للمقارنة)
        $lastMonthPosts = Post::whereMonth('created_at', now()->subMonth()->month)->count();
        $lastMonthServices = Service::whereMonth('created_at', now()->subMonth()->month)->count();

        return [

            Stat::make('عدد المقالات', $postsCount)
                ->description($postsCount - $lastMonthPosts >= 0 ? 'زيادة' : 'نقصان')
                ->descriptionIcon($postsCount - $lastMonthPosts >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($postsCount - $lastMonthPosts >= 0 ? 'success' : 'danger'),

           
            Stat::make('عدد الخدمات', $servicesCount)
                ->description($servicesCount - $lastMonthServices >= 0 ? 'زيادة' : 'نقصان')
                ->descriptionIcon($servicesCount - $lastMonthServices >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($servicesCount - $lastMonthServices >= 0 ? 'success' : 'danger'),

        ];
    }
}