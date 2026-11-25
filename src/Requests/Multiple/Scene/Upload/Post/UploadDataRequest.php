<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Multiple\Scene\Upload\Post;

final class UploadDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'files',
        'id_origin',
    ];

    public \FloorfySDK\Collections\StringCollection $files;
    public string $id_origin;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->files = new \FloorfySDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'id_origin' => is_string($value) ? $this->id_origin = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
