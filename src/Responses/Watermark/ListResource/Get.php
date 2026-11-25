<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Watermark\ListResource;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \FloorfySDK\Collections\Watermark\ListResource\Get\ListResourceDataCollection $data;
    public bool $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_bool($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
