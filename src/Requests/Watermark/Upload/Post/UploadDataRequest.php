<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Watermark\Upload\Post;

final class UploadDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'active',
    'type',
    'watermark',
];

    public bool $active;
    public \FloorfySDK\Enums\Watermark\Upload\Post\Data\DataTypeEnum $type;
    /**
     * Image, base64
     */
    public string $watermark;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \FloorfySDK\Enums\Watermark\Upload\Post\Data\DataTypeEnum::from($value) : parent::assignMember($name, $value),
            'watermark' => is_string($value) ? $this->watermark = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
