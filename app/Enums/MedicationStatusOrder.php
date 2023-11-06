<?php
namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;

enum MedicationStatusOrder: string implements HasLabel, HasColor, HasIcon
{
    case PROCESSING = 'processing';
    case PENDING = 'pending';
    case READY = 'ready for pickup';
    case COLLECTED = 'collected';
    case CANCELLED = 'cancelled';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::PROCESSING => 'Processing',
            self::PENDING => 'Pending',
            self::READY => 'Ready for pickup',
            self::COLLECTED => 'Collected',
            self::CANCELLED => 'Cancelled',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::PROCESSING => 'warning',
            self::PENDING => 'gray',
            self::READY => 'pink',
            self::COLLECTED => 'success',
            self::CANCELLED => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::PROCESSING => 'heroicon-o-arrow-path',
            self::PENDING => 'heroicon-o-exclamation-triangle',
            self::READY => 'heroicon-o-hand-thumb-up',
            self::COLLECTED => 'heroicon-o-check-badge',
            self::CANCELLED => 'heroicon-o-no-symbol',
        };
    }
}
