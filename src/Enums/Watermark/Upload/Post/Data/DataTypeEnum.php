<?php

declare(strict_types=1);

namespace FloorfySDK\Enums\Watermark\Upload\Post\Data;

enum DataTypeEnum: string
{
    case Floorplan = 'floorplan';
    case Photo = 'photo';
    case Scene = 'scene';
    case Tour = 'tour';
    case Video = 'video';
}
