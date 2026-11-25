<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Analytics\Locations\Post\Data;

final class DataLocationsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \FloorfySDK\Responses\Analytics\Locations\Post\Data\Locations\CountriesMapResponse $countries;
    public \FloorfySDK\Responses\Analytics\Locations\Post\Data\Locations\RegionsMapResponse $regions;
}
