<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Watermark\ListResource\Get;

final class ListResourceDataResponse extends \Dmorenof\SdkRuntime\DTO
{
    public bool $active;
    public int $id;
    public string $type;
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
