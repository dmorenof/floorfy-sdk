<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Subscription\Consumption\Get\Data;

final class ImageStagingResponse extends \Dmorenof\SdkRuntime\DTO
{
    public bool $active;
    public ?string $renewal_date;
    public \FloorfySDK\Responses\Subscription\Consumption\Get\Data\ImageStaging\StagingUsageResponse $usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'renewal_date' => $value === null || is_string($value) ? $this->renewal_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
