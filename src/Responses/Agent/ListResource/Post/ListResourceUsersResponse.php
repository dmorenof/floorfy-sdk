<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Agent\ListResource\Post;

final class ListResourceUsersResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $email;
    public int $id;
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
