<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Subscription\Consumption\Get\Data\Tour;

final class ServiceCreditsResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
    '3d_tour' => '_3d_tour',
];
    protected const array WIRE_PROPERTY_MAP = [
    '_3d_tour' => '3d_tour',
];

    public int $_3d_tour;
    public int $floorplan;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            '3d_tour' => is_int($value) ? $this->_3d_tour = $value : parent::assignMember($name, $value),
            'floorplan' => is_int($value) ? $this->floorplan = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
