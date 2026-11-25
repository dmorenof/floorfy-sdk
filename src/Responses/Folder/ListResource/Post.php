<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Folder\ListResource;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public \FloorfySDK\Collections\Folder\ListResource\Post\ListResourceFoldersCollection $folders;
    public bool $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_bool($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
