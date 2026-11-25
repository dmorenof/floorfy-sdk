<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Oh\Contacts\Post;

final class ContactsUsersResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \FloorfySDK\Collections\Oh\Contacts\Post\UsersItem\UsersItemActionsCollection $actions;
    public string $name;
    public \FloorfySDK\Collections\Oh\Contacts\Post\UsersItem\UsersItemSessionsCollection $sessions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
