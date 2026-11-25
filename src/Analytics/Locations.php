<?php

declare(strict_types=1);

namespace FloorfySDK\Analytics;

final class Locations extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /analytics/locations [operationId: analyticsLocations] */
    /**
     * Analytics: get locations
     */
    public static function post(\FloorfySDK\Requests\Analytics\Locations\Post $payload): \FloorfySDK\Responses\Analytics\Locations\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Analytics\Locations::class)->post($payload);
    }

}
