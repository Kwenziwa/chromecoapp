<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderStatus extends Enum
{
    const PROCESSING = 'processing';
    const READY = 'ready for pickup';
    const COLLECTED = 'collected';
    const CANCELLED = 'cancelled';
}
