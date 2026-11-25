<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Analytics\Visits;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public \FloorfySDK\Responses\Analytics\Visits\Post\VisitsDataResponse $data;
    public bool $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_bool($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
