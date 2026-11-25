<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Agent\Get;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public string $email;
    public int $id;
    public string $message;
    public int $status;
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
