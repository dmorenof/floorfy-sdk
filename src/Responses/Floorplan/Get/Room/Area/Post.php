<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Floorplan\Get\Room\Area;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public string $date_generated;
    public \FloorfySDK\Collections\Floorplan\Get\Room\Area\Post\RoomAreasArray\RoomAreasCollection $room_areas;
    public int $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date_generated' => is_string($value) ? $this->date_generated = $value : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
