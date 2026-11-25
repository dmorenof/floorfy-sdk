<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Folder\Delete\Post;

final class FolderDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id_folder',
];

    public int $id_folder;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id_folder' => is_int($value) ? $this->id_folder = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
