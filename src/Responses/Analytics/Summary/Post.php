<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Analytics\Summary;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public \FloorfySDK\Responses\Analytics\Summary\Post\SummaryDataResponse $data;
    public bool $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_bool($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
