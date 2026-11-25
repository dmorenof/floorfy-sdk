<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Oh\Inprogress;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public bool $online;
    public int $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'online' => is_bool($value) ? $this->online = $value : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
