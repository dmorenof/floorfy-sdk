<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Folder\Delete;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public string $msg;
    public bool $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'msg' => is_string($value) ? $this->msg = $value : parent::assignMember($name, $value),
            'status' => is_bool($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
