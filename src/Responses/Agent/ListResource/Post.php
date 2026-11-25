<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Agent\ListResource;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public string $message;
    public int $status;
    public int $total;
    public \FloorfySDK\Collections\Agent\ListResource\Post\ListResourceUsersCollection $users;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
