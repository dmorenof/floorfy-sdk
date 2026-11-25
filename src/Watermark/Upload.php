<?php

declare(strict_types=1);

namespace FloorfySDK\Watermark;

final class Upload extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /watermark/upload [operationId: uploadWatermark] */
    /**
     * Watermarks: upload
     */
    public static function post(\FloorfySDK\Requests\Watermark\Upload\Post $payload): \FloorfySDK\Responses\Watermark\Upload\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Watermark\Upload::class)->post($payload);
    }

}
