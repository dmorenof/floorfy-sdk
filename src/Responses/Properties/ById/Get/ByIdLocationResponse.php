<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Properties\ById\Get;

final class ByIdLocationResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $address;
    public string $city;
    public int $door;
    public int $floor;
    public int $number;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'door' => is_int($value) ? $this->door = $value : parent::assignMember($name, $value),
            'floor' => is_int($value) ? $this->floor = $value : parent::assignMember($name, $value),
            'number' => is_int($value) ? $this->number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
