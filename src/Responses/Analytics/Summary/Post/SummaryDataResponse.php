<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Analytics\Summary\Post;

final class SummaryDataResponse extends \Dmorenof\SdkRuntime\DTO
{
    public float $average_time;
    public int $total_users;
    public int $total_videocalls;
    public int $total_visits;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'average_time' => is_float($value) ? $this->average_time = $value : parent::assignMember($name, $value),
            'total_users' => is_int($value) ? $this->total_users = $value : parent::assignMember($name, $value),
            'total_videocalls' => is_int($value) ? $this->total_videocalls = $value : parent::assignMember($name, $value),
            'total_visits' => is_int($value) ? $this->total_visits = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
