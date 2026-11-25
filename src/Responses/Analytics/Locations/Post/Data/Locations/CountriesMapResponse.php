<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Analytics\Locations\Post\Data\Locations;

/** @extends \Dmorenof\SdkRuntime\Map<int> */
final class CountriesMapResponse extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'int';
    protected const bool VALUE_NULLABLE = false;
}
