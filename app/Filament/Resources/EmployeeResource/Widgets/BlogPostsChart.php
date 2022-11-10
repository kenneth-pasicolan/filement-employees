<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use Filament\Widgets\PieChartWidget;

class BlogPostsChart extends PieChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [0, 10, 5, 2, 21, 32, 45],
                    'backgroundColor'=> [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    ],
                    
                ],
                

            ],
            'labels' => ['Pvt', 'Pfc', 'Cpl', 'Sgt', 'Ssg', 'Tsg', 'Msg'],
            'hoverOffset'=> 50
            
        ];
    }
}
