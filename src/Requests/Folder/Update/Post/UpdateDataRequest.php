<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Folder\Update\Post;

final class UpdateDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id_folder',
];

    public int $id_folder;
    public ?int $id_parent;
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id_folder' => is_int($value) ? $this->id_folder = $value : parent::assignMember($name, $value),
            'id_parent' => $value === null || is_int($value) ? $this->id_parent = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
