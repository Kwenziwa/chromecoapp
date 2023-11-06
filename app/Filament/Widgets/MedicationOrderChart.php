<?php

namespace App\Filament\Widgets;

use App\Models\MedicationOrder;
use Filament\Widgets\ChartWidget;

class MedicationOrderChart extends ChartWidget
{
   protected static ?string $heading = 'Medication Orders';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = MedicationOrder::query()
            ->select('status')
            ->selectRaw('count(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status')
            ->toArray();


        return [
            'datasets' => [
                [
                    'label' => 'Orders',
                    'data' => array_values($data)
                ],
            ],
            'labels' => array_keys($data),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
