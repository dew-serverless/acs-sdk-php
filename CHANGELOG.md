# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.7.0] - 2024-11-23

### Added

- [INTERNAL] Cover test cases with PHP 8.4 on Github Actions
  https://github.com/dew-serverless/acs-sdk-php/pull/75

### Changed

- Respect user data when object parameter lacks concrete definition
  https://github.com/dew-serverless/acs-sdk-php/pull/74

## [0.6.0] - 2024-11-16

### Changed

- Trim endpoint for unwanted spaces
  https://github.com/dew-serverless/acs-sdk-php/pull/71

## [0.5.0] - 2024-10-26

### Added

- Retrieve the underlying value from the backed enum when resolving
  the schema value
  https://github.com/dew-serverless/acs-sdk-php/pull/63

### Changed

- Encode array value to JSON string when schema misses style specification
  https://github.com/dew-serverless/acs-sdk-php/pull/64

### Fixed

- Respect product exception when something goes wrong
  https://github.com/dew-serverless/acs-sdk-php/pull/65

## [0.4.0] - 2024-10-05

### Changed

- Update metadata from metadata repository instead of retrieving and building
  from scratch via Alibaba Cloud Openmeta
  https://github.com/dew-serverless/acs-sdk-php/pull/59

## [0.3.0] - 2024-09-21

### Added

- Support PHP 8.2 #52

### Changed

- Update package vendor name from `dew` to `dew-serverless` #49
- **SLS**: align schema structure with the official API docs for the `PutLogs` API #55

## [0.2.0] - 2024-09-15

### Added

- Supports "any" type of schema #45
- Validate pattern for string property #46

## [0.1.0] - 2024-09-04

Initial release.

[unreleased]: https://github.com/dew-serverless/acs-sdk-php/compare/v0.7.0...HEAD
[0.7.0]: https://github.com/dew-serverless/acs-sdk-php/compare/v0.6.0...v0.7.0
[0.6.0]: https://github.com/dew-serverless/acs-sdk-php/compare/v0.5.0...v0.6.0
[0.5.0]: https://github.com/dew-serverless/acs-sdk-php/compare/v0.4.0...v0.5.0
[0.4.0]: https://github.com/dew-serverless/acs-sdk-php/compare/v0.3.0...v0.4.0
[0.3.0]: https://github.com/dew-serverless/acs-sdk-php/compare/v0.2.0...v0.3.0
[0.2.0]: https://github.com/dew-serverless/acs-sdk-php/compare/v0.1.0...v0.2.0
[0.1.0]: https://github.com/dew-serverless/acs-sdk-php/releases/tag/v0.1.0
