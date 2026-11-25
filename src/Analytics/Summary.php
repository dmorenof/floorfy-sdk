<?php

declare(strict_types=1);

namespace FloorfySDK\Analytics;

final class Summary extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /analytics/summary [operationId: analyticsSummary] */
    /**
     * Analytics: get summary
     */
    public static function post(\FloorfySDK\Requests\Analytics\Summary\Post $payload): \FloorfySDK\Responses\Analytics\Summary\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Analytics\Summary::class)->post($payload);
    }
}
