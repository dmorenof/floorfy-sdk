<?php

declare(strict_types=1);

namespace FloorfySDK\Analytics;

final class Visits extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /analytics/visits [operationId: analyticsVisits] */
    /**
     * Analytics: get visits list
     */
    public static function post(\FloorfySDK\Requests\Analytics\Visits\Post $payload): \FloorfySDK\Responses\Analytics\Visits\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Analytics\Visits::class)->post($payload);
    }
}
