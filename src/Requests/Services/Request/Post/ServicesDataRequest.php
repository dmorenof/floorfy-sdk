<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Services\Request\Post;

final class ServicesDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $floorplan;
    public \FloorfySDK\Enums\Services\Request\Post\Data\DataTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'floorplan' => is_bool($value) ? $this->floorplan = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \FloorfySDK\Enums\Services\Request\Post\Data\DataTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
