<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Folder\ListResource\Post;

final class ListResourceDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public int $id_parent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id_parent' => is_int($value) ? $this->id_parent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
