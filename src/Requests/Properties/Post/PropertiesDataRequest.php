<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Properties\Post;

final class PropertiesDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'page' => [
        'minimum' => 1,
    ],
];

    public string $email_user;
    public int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email_user' => is_string($value) ? $this->email_user = $value : parent::assignMember($name, $value),
            'page' => is_int($value) ? $this->page = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
