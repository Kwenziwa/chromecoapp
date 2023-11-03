<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static male()
 * @method static static female()
 * @method static static other()
 */
final class UserGender extends Enum
{
    const MALE = 'male';
    const FEMALE = 'female';
    const OTHER = 'other';
}
