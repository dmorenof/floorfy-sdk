<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Subscription\Consumption;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \FloorfySDK\Responses\Subscription\Consumption\Get\ConsumptionDataResponse $data;
    public bool $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_bool($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
