<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Scene\Upload\Post;

final class UploadDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'file',
        'id_origin',
    ];

    /**
     * Equirectangular image, base64
     */
    public string $file;
    public string $id_origin;
    public string $room_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'file' => is_string($value) ? $this->file = $value : parent::assignMember($name, $value),
            'id_origin' => is_string($value) ? $this->id_origin = $value : parent::assignMember($name, $value),
            'room_type' => is_string($value) ? $this->room_type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
