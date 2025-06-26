<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashbord extends BaseWidget
{
    protected function getStats(): array
    {
        $countNews = \App\Models\News::count();
        return [
            Stat::make('Jumlah Blog Artikel', value: $countNews . ' Artikel'),
            // Stat::make('Bounce rate', '21%'),
            // Stat::make('Average time on page', '3:12'),
            
        ];
    }
}
