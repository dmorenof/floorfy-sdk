<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Watermark\Upload\Post;

final class UploadDataResponse extends \Dmorenof\SdkRuntime\DTO
{
    public int $id;
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
