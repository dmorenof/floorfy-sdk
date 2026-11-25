<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Agent\Add\Post;

final class AddDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'email',
];

    public string $email;
    public \FloorfySDK\Collections\IntegerCollection $folders;
    public bool $is_read_only;
    public bool $list_all_properties;
    public string $name;
    public string $phone;
    public string $surname;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'folders' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->folders = new \FloorfySDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'is_read_only' => is_bool($value) ? $this->is_read_only = $value : parent::assignMember($name, $value),
            'list_all_properties' => is_bool($value) ? $this->list_all_properties = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'surname' => is_string($value) ? $this->surname = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
