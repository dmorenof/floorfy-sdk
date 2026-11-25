<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Oh\Inprogress\Post;

final class InprogressDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
];

    public int $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
