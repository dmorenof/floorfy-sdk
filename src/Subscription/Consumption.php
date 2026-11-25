<?php

declare(strict_types=1);

namespace FloorfySDK\Subscription;

final class Consumption extends \FloorfySDK\FloorfyAPISDK
{
    /** GET /subscription/consumption [operationId: getSubscriptionConsumption] */
    /**
     * Subscription: get consumption
     */
    public static function get(): \FloorfySDK\Responses\Subscription\Consumption\Get
    {
        return self::client()->resource(\FloorfySDK\Resources\Subscription\Consumption::class)->get();
    }

}
