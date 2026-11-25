<?php

declare(strict_types=1);

namespace FloorfySDK\Collections\Analytics\Visits\Post\Data;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\FloorfySDK\Responses\Analytics\Visits\Post\Data\DataItemsResponse> */
final class DataItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \FloorfySDK\Responses\Analytics\Visits\Post\Data\DataItemsResponse::class;
}
