# Floorfy SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/floorfy-sdk.svg)](https://packagist.org/packages/dmorenof/floorfy-sdk)

**Create and manage Floorfy virtual tours from your PHP application.**

Push your listings to Floorfy, upload panoramas, order tours and floor plans, read back tour links, and manage agents, folders, watermarks and analytics, all through typed requests.

> Unofficial. Not affiliated with, endorsed by or supported by Floorfy. See [NOTICE.md](NOTICE.md).

## Why this SDK

- 26 operations: properties, panoramas, services, agents, folders, open house, analytics, watermarks, subscription.
- Requests are typed with the same field names and enumerations as the Floorfy documentation (property types, contract types, facilities).
- The agency token travels in the `tk` parameter automatically.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/floorfy.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 26 operations and 100 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/floorfy-sdk
```

## Quick start

```php
<?php
use FloorfySDK\Configuration;
use FloorfySDK\FloorfyAPISDK;
use FloorfySDK\Properties;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['AgencyToken' => getenv('FLOORFY_AGENCY_TOKEN') ?: '']);
FloorfyAPISDK::configure($configuration);

$property = Properties::getById(114);

echo $property->tour, "\n";
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

26 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `agent` | 4 |
| `folder` | 4 |
| `analytics` | 3 |
| `property` | 3 |
| `oh` | 2 |
| `properties` | 2 |
| `watermark` | 2 |
| `floorplan` | 1 |
| `multiple` | 1 |
| `published` | 1 |
| `scene` | 1 |
| `services` | 1 |

…and 1 more areas; the full list is in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- Floorfy publishes no machine-readable contract: this one was written from its public documentation (see NOTICE.md).
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://developers.floorfy.com/)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
