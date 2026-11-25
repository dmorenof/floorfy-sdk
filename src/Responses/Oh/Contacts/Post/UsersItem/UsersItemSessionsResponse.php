<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Oh\Contacts\Post\UsersItem;

final class UsersItemSessionsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $time_end;
    public string $time_start;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'time_end' => is_string($value) ? $this->time_end = $value : parent::assignMember($name, $value),
            'time_start' => is_string($value) ? $this->time_start = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
