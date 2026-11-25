<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Floorplan\Get\Room\Area\Post;

final class RoomAreasResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $area;
    public string $length;
    public string $name;
    public string $width;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'area' => is_string($value) ? $this->area = $value : parent::assignMember($name, $value),
            'length' => is_string($value) ? $this->length = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'width' => is_string($value) ? $this->width = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
