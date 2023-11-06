<?php

namespace App\Filament\Widgets;

use App\Models\Medication;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class MedicationChart extends ChartWidget
{
    protected static ?string $heading = 'Total Transactions';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        [$medications, $months] = $this->getProductsPerMonth();

        return [
            'datasets' => [
                [
                    'label' => 'Total Transactions',
                    'data' => $medications,
                ],
            ],
            'labels' => $months,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getProductsPerMonth(): array
    {
        $data = Trend::model(Medication::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            $data->map(fn (TrendValue $value) => $value->aggregate),
            $data->map(fn (TrendValue $value) => now()->rawParse($value->date)->format('M')),
        ];
    }
}
