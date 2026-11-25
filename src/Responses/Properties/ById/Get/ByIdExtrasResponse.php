<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Properties\ById\Get;

final class ByIdExtrasResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $photographer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'photographer' => is_string($value) ? $this->photographer = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
