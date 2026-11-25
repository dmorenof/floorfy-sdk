<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Published\Ready\Post;

final class ReadyDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'page' => [
        'minimum' => 1,
    ],
];

    public int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'page' => is_int($value) ? $this->page = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
