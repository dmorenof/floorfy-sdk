<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Folder\ListResource\Post;

final class ListResourceFoldersResponse extends \Dmorenof\SdkRuntime\DTO
{
    public int $id;
    public string $name;
    public int $parent_folder_id;
    public int $tours_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'parent_folder_id' => is_int($value) ? $this->parent_folder_id = $value : parent::assignMember($name, $value),
            'tours_count' => is_int($value) ? $this->tours_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
