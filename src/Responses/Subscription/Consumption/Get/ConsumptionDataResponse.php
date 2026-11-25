<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Subscription\Consumption\Get;

final class ConsumptionDataResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \FloorfySDK\Responses\Subscription\Consumption\Get\Data\ImageStagingResponse $image_staging;
    public \FloorfySDK\Responses\Subscription\Consumption\Get\Data\DataTourResponse $tour;

}
