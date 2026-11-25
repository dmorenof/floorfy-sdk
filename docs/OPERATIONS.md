# Floorfy SDK for PHP: operations

26 operations. Each is a static method of a facade class (`FloorfySDK\...`); configure the SDK once with `FloorfyAPISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Create user | POST | `/agent/add` | `Agent\Add::post()` |
| Get user by email | POST | `/agent/get` | `Agent\Get::post()` |
| List agency users | POST | `/agent/list` | `Agent\ListResource::post()` |
| Update user | POST | `/agent/update` | `Agent\Update::post()` |
| Analytics: get locations | POST | `/analytics/locations` | `Analytics\Locations::post()` |
| Analytics: get summary | POST | `/analytics/summary` | `Analytics\Summary::post()` |
| Analytics: get visits list | POST | `/analytics/visits` | `Analytics\Visits::post()` |
| Get room areas | POST | `/floorplan/get/room/area` | `Floorplan\Get\Room\Area::post()` |
| Create folder | POST | `/folder/create` | `Folder\Create::post()` |
| Delete folder | POST | `/folder/delete` | `Folder\Delete::post()` |
| List folders | POST | `/folder/list` | `Folder\ListResource::post()` |
| Update folder | POST | `/folder/update` | `Folder\Update::post()` |
| Upload list of panoramas | POST | `/multiple/scene/upload` | `Multiple\Scene\Upload::post()` |
| Check openhouse contacts | POST | `/oh/contacts` | `Oh\Contacts::post()` |
| Check openhouse status | POST | `/oh/inprogress` | `Oh\Inprogress::post()` |
| Get properties | POST | `/properties` | `Properties::post()` |
| Read property | GET | `/properties/{id}` | `Properties::getById()` |
| Create property | POST | `/property/add` | `Property\Add::post()` |
| Get tour status | POST | `/property/exists` | `Property\Exists::post()` |
| Update property | POST | `/property/update` | `Property\Update::post()` |
| Get tours | POST | `/published/ready` | `Published\Ready::post()` |
| Upload panorama | POST | `/scene/upload` | `Scene\Upload::post()` |
| Process tour (order services) | POST | `/services/request` | `Services\Request::post()` |
| Subscription: get consumption | GET | `/subscription/consumption` | `Subscription\Consumption::get()` |
| Watermarks: list | GET | `/watermark/list` | `Watermark\ListResource::get()` |
| Watermarks: upload | POST | `/watermark/upload` | `Watermark\Upload::post()` |
