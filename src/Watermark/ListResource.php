<?php

declare(strict_types=1);

namespace FloorfySDK\Watermark;

final class ListResource extends \FloorfySDK\FloorfyAPISDK
{
    /** GET /watermark/list [operationId: listWatermarks] */
    /**
     * Watermarks: list
     */
    public static function get(): \FloorfySDK\Responses\Watermark\ListResource\Get
    {
        return self::client()->resource(\FloorfySDK\Resources\Watermark\ListResource::class)->get();
    }
}
