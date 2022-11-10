<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Employee;
use App\Models\Country;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;


class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {   
        $us = Country::where('Country_code', 'USA')->withCount('employees')->first();
        $uk = Country::where('Country_code', 'UK')->withCount('employees')->first();
        $ph = Country::where('Country_code', 'PH')->withCount('employees')->first();
        return [
            Card::make('All Employees', Employee::all()->Count()),
            Card::make($uk-> name. ' Employees', $uk-> employees_count),
            Card::make($us-> name. ' Employees', $us-> employees_count),
            Card::make($ph-> name. ' Employees', $ph-> employees_count),
            
        ];
    }
}
