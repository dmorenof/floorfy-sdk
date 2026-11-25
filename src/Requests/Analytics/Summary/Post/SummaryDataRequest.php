<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Analytics\Summary\Post;

final class SummaryDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id_origin',
    ];

    public string $id_origin;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id_origin' => is_string($value) ? $this->id_origin = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
