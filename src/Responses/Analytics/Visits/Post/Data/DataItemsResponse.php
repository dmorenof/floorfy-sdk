<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Analytics\Visits\Post\Data;

final class DataItemsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $city;
    public string $country;
    public string $date;
    public string $referrer;
    public string $region;
    public string $time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            'referrer' => is_string($value) ? $this->referrer = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'time' => is_string($value) ? $this->time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
