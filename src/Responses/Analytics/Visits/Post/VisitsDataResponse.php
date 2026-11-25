<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Analytics\Visits\Post;

final class VisitsDataResponse extends \Dmorenof\SdkRuntime\DTO
{
    public bool $has_more;
    public \FloorfySDK\Collections\Analytics\Visits\Post\Data\DataItemsCollection $items;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'has_more' => is_bool($value) ? $this->has_more = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
