<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Published\Ready\Post;

final class ReadyPropertiesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $id;
    public string $tour;
    public bool $videocall;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'tour' => is_string($value) ? $this->tour = $value : parent::assignMember($name, $value),
            'videocall' => is_bool($value) ? $this->videocall = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
