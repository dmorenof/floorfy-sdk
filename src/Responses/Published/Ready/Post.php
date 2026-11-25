<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Published\Ready;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public int $current_page_total;
    public string $message;
    public int $page;
    public \FloorfySDK\Collections\Published\Ready\Post\ReadyPropertiesCollection $properties;
    public int $status;
    public int $total;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'current_page_total' => is_int($value) ? $this->current_page_total = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'page' => is_int($value) ? $this->page = $value : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
