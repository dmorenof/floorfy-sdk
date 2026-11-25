<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Analytics\Visits\Post;

final class VisitsDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id_origin',
        'limit',
        'page',
    ];

    protected const array VALIDATION = [
        'limit' => [
            'minimum' => 1,
            'maximum' => 100,
        ],
        'page' => [
            'minimum' => 1,
        ],
    ];

    public string $id_origin;
    public int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id_origin' => is_string($value) ? $this->id_origin = $value : parent::assignMember($name, $value),
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            'page' => is_int($value) ? $this->page = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
