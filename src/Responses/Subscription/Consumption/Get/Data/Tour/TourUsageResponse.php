<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Subscription\Consumption\Get\Data\Tour;

final class TourUsageResponse extends \Dmorenof\SdkRuntime\DTO
{
    public int $current;
    public ?int $limit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'current' => is_int($value) ? $this->current = $value : parent::assignMember($name, $value),
            'limit' => $value === null || is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
