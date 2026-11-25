<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Property\Exists;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public int $has_tour;
    public string $id_floorfy;
    public string $message;
    public \FloorfySDK\Responses\Property\Exists\Post\HistoryMapResponse $prop_history;
    public int $property_status;
    public int $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'has_tour' => is_int($value) ? $this->has_tour = $value : parent::assignMember($name, $value),
            'id_floorfy' => is_string($value) ? $this->id_floorfy = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'property_status' => is_int($value) ? $this->property_status = $value : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
