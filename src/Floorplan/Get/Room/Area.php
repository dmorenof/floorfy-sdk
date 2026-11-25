<?php

declare(strict_types=1);

namespace FloorfySDK\Floorplan\Get\Room;

final class Area extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /floorplan/get/room/area [operationId: getRoomAreas] */
    /**
     * Get room areas
     */
    public static function post(\FloorfySDK\Requests\Floorplan\Get\Room\Area\Post $payload): \FloorfySDK\Responses\Floorplan\Get\Room\Area\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Floorplan\Get\Room\Area::class)->post($payload);
    }

}
