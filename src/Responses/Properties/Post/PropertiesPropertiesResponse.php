<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Properties\Post;

final class PropertiesPropertiesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public bool $active;
    public int $id;
    public string $id_ext;
    public int $publish_status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'id_ext' => is_string($value) ? $this->id_ext = $value : parent::assignMember($name, $value),
            'publish_status' => is_int($value) ? $this->publish_status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
