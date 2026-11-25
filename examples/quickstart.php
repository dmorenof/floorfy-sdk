<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use FloorfySDK\Configuration;
use FloorfySDK\FloorfyAPISDK;
use FloorfySDK\Properties;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['AgencyToken' => getenv('FLOORFY_AGENCY_TOKEN') ?: '']);
FloorfyAPISDK::configure($configuration);

$property = Properties::getById(114);

echo $property->tour, "\n";
