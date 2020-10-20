# Changes between versions

## Unreleased

 * add support for the `is_active` query param on the `/reports/project_budget` endpoint - see jolicode/harvest-openapi-generator#14

## 4.1.0 (2020-08-21)

 * use Jane 6 Authentication plugins
 * upgrade to `janephp/open-api` 6.1
 * regenerated SDK
 * fixed the `jane-php/open-api-runtime` dependency to a minor version, in order to avoid situations where a jane-php update would break things

## 4.0.1 (2020-07-30)

 * upgrade to `janephp/open-api` 6.0
 * fixed boolean query parameters serialization

## 4.0.0 (2020-05-14)

 * fixed several endpoint names
 * removed missnamed endpoints
 * [documented all the available operations](doc/index.md)

## 3.0.3 (2020-02-25)

 * fixed plural definition names for reports Schemas

## 3.0.2 (2020-02-25)

 * Added Schemas for the "reports" endpoints

## 3.0.1 (2020-02-25)

 * fixed the location of reports endpoints parameters

## 3.0.0 (2020-02-21)

 * upgrade to `janephp/open-api` 5.3
 * updated the SDK based on the latest [spec updates](https://github.com/jolicode/harvest-openapi-generator/pull/9):
   * add the ability to filter time entries by `task_id`
   * several new "report" endpoints
   * support for `rounded_hours` in the `TimeEntry` model

## 2.1.0 (2020-01-14)

 * updated the OpenAPI definition file
 * added the "company update" endpoint
 * updated the endpoints documentation according to Harvest's API doc
 * added the `Company` `weekly_capacity` attribute
 * added the `Invoice` `recurring_invoice_id` attribute

## 2.0.0 (2019-10-28)
​
* Upgrade Jane to 4.5 https://github.com/janephp/janephp/releases/tag/v4.5.3, the new generated classes have better PHPDoc​
* Generate PSR-18 client instead of HttPlug client
* Support for cost and billable rates
* Removed the telephone property from the user model
* Added statement_key in the Client properties

## 1.1.0 (2019-04-01)

* Support HTTPlug 2

## 1.0.2 (2019-01-24)

* support null values for nested objects or values (jane-openapi strict mode false)
* changed `quantity` types to `float` instead of `integer`

## 1.0.1 (2019-01-22)

* Fixed the `deleteTimeEntryExternalReference` endpoint operationId

## 1.0.0 (2019-01-21)

* Initial release
