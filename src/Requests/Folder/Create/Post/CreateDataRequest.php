<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Folder\Create\Post;

final class CreateDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    public int $id_parent;
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id_parent' => is_int($value) ? $this->id_parent = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
