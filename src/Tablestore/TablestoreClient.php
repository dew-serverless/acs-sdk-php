<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\AcsClient;
use Dew\Acs\ApiDocsResolver;
use Dew\Acs\OpenApi\ApiDocs;
use InvalidArgumentException;
use Override;

/**
 * @method \Dew\Acs\Result changeResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise changeResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createInstance(array $arguments = [])
 * @method \Http\Promise\Promise createInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteInstance(array $arguments = [])
 * @method \Http\Promise\Promise deleteInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result getInstance(array $arguments = [])
 * @method \Http\Promise\Promise getInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listInstances(array $arguments = [])
 * @method \Http\Promise\Promise listInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result updateInstance(array $arguments = [])
 * @method \Http\Promise\Promise updateInstanceAsync($arguments = [])
 */
final class TablestoreClient extends AcsClient
{
    public const DEFAULT_VERSION = '2020-12-09';

    #[Override]
    protected function resolveApiDocs(): ApiDocs
    {
        $version = $this->config['version'] ?? self::DEFAULT_VERSION;

        if (! is_string($version)) {
            throw new InvalidArgumentException('The version should be a string.');
        }

        return ApiDocs::make(
            ApiDocsResolver::make()->getProductDefinition('Tablestore', $version)
        );
    }

    /**
     * @see https://github.com/aliyun/terraform-provider-alicloud/blob/5ec9f55e1f5ee8352074e117752d434c96060f47/alicloud/connectivity/endpoint.go#L165
     */
    #[Override]
    protected function resolveEndpoint(): string
    {
        return $this->config['endpoint'] ?? sprintf('tablestore.%s.aliyuncs.com', $this->region);
    }
}
