<?php

declare(strict_types=1);

namespace Dew\Acs\FCOpen;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result listReservedCapacities(array $arguments = [])
 * @method \Http\Promise\Promise listReservedCapacitiesAsync($arguments = [])
 * @method \Dew\Acs\Result getAccountSettings(array $arguments = [])
 * @method \Http\Promise\Promise getAccountSettingsAsync($arguments = [])
 * @method \Dew\Acs\Result createService(array $arguments = [])
 * @method \Http\Promise\Promise createServiceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteService(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceAsync($arguments = [])
 * @method \Dew\Acs\Result updateService(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceAsync($arguments = [])
 * @method \Dew\Acs\Result listServices(array $arguments = [])
 * @method \Http\Promise\Promise listServicesAsync($arguments = [])
 * @method \Dew\Acs\Result getService(array $arguments = [])
 * @method \Http\Promise\Promise getServiceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteServiceVersion(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceVersionAsync($arguments = [])
 * @method \Dew\Acs\Result publishServiceVersion(array $arguments = [])
 * @method \Http\Promise\Promise publishServiceVersionAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceVersions(array $arguments = [])
 * @method \Http\Promise\Promise listServiceVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result createTrigger(array $arguments = [])
 * @method \Http\Promise\Promise createTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTrigger(array $arguments = [])
 * @method \Http\Promise\Promise deleteTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result updateTrigger(array $arguments = [])
 * @method \Http\Promise\Promise updateTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result getTrigger(array $arguments = [])
 * @method \Http\Promise\Promise getTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result listTriggers(array $arguments = [])
 * @method \Http\Promise\Promise listTriggersAsync($arguments = [])
 * @method \Dew\Acs\Result createCustomDomain(array $arguments = [])
 * @method \Http\Promise\Promise createCustomDomainAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCustomDomain(array $arguments = [])
 * @method \Http\Promise\Promise deleteCustomDomainAsync($arguments = [])
 * @method \Dew\Acs\Result updateCustomDomain(array $arguments = [])
 * @method \Http\Promise\Promise updateCustomDomainAsync($arguments = [])
 * @method \Dew\Acs\Result getCustomDomain(array $arguments = [])
 * @method \Http\Promise\Promise getCustomDomainAsync($arguments = [])
 * @method \Dew\Acs\Result listCustomDomains(array $arguments = [])
 * @method \Http\Promise\Promise listCustomDomainsAsync($arguments = [])
 * @method \Dew\Acs\Result createAlias(array $arguments = [])
 * @method \Http\Promise\Promise createAliasAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAlias(array $arguments = [])
 * @method \Http\Promise\Promise deleteAliasAsync($arguments = [])
 * @method \Dew\Acs\Result updateAlias(array $arguments = [])
 * @method \Http\Promise\Promise updateAliasAsync($arguments = [])
 * @method \Dew\Acs\Result getAlias(array $arguments = [])
 * @method \Http\Promise\Promise getAliasAsync($arguments = [])
 * @method \Dew\Acs\Result listAliases(array $arguments = [])
 * @method \Http\Promise\Promise listAliasesAsync($arguments = [])
 * @method \Dew\Acs\Result createFunction(array $arguments = [])
 * @method \Http\Promise\Promise createFunctionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFunction(array $arguments = [])
 * @method \Http\Promise\Promise deleteFunctionAsync($arguments = [])
 * @method \Dew\Acs\Result updateFunction(array $arguments = [])
 * @method \Http\Promise\Promise updateFunctionAsync($arguments = [])
 * @method \Dew\Acs\Result getFunction(array $arguments = [])
 * @method \Http\Promise\Promise getFunctionAsync($arguments = [])
 * @method \Dew\Acs\Result getFunctionCode(array $arguments = [])
 * @method \Http\Promise\Promise getFunctionCodeAsync($arguments = [])
 * @method \Dew\Acs\Result listFunctions(array $arguments = [])
 * @method \Http\Promise\Promise listFunctionsAsync($arguments = [])
 * @method \Dew\Acs\Result invokeFunction(array $arguments = [])
 * @method \Http\Promise\Promise invokeFunctionAsync($arguments = [])
 * @method \Dew\Acs\Result putFunctionAsyncInvokeConfig(array $arguments = [])
 * @method \Http\Promise\Promise putFunctionAsyncInvokeConfigAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFunctionAsyncInvokeConfig(array $arguments = [])
 * @method \Http\Promise\Promise deleteFunctionAsyncInvokeConfigAsync($arguments = [])
 * @method \Dew\Acs\Result getFunctionAsyncInvokeConfig(array $arguments = [])
 * @method \Http\Promise\Promise getFunctionAsyncInvokeConfigAsync($arguments = [])
 * @method \Dew\Acs\Result listFunctionAsyncInvokeConfigs(array $arguments = [])
 * @method \Http\Promise\Promise listFunctionAsyncInvokeConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFunctionOnDemandConfig(array $arguments = [])
 * @method \Http\Promise\Promise deleteFunctionOnDemandConfigAsync($arguments = [])
 * @method \Dew\Acs\Result getFunctionOnDemandConfig(array $arguments = [])
 * @method \Http\Promise\Promise getFunctionOnDemandConfigAsync($arguments = [])
 * @method \Dew\Acs\Result listOnDemandConfigs(array $arguments = [])
 * @method \Http\Promise\Promise listOnDemandConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result putFunctionOnDemandConfig(array $arguments = [])
 * @method \Http\Promise\Promise putFunctionOnDemandConfigAsync($arguments = [])
 * @method \Dew\Acs\Result getProvisionConfig(array $arguments = [])
 * @method \Http\Promise\Promise getProvisionConfigAsync($arguments = [])
 * @method \Dew\Acs\Result listProvisionConfigs(array $arguments = [])
 * @method \Http\Promise\Promise listProvisionConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result putProvisionConfig(array $arguments = [])
 * @method \Http\Promise\Promise putProvisionConfigAsync($arguments = [])
 * @method \Dew\Acs\Result stopStatefulAsyncInvocation(array $arguments = [])
 * @method \Http\Promise\Promise stopStatefulAsyncInvocationAsync($arguments = [])
 * @method \Dew\Acs\Result listStatefulAsyncInvocationFunctions(array $arguments = [])
 * @method \Http\Promise\Promise listStatefulAsyncInvocationFunctionsAsync($arguments = [])
 * @method \Dew\Acs\Result getStatefulAsyncInvocation(array $arguments = [])
 * @method \Http\Promise\Promise getStatefulAsyncInvocationAsync($arguments = [])
 * @method \Dew\Acs\Result listStatefulAsyncInvocations(array $arguments = [])
 * @method \Http\Promise\Promise listStatefulAsyncInvocationsAsync($arguments = [])
 * @method \Dew\Acs\Result createLayerVersion(array $arguments = [])
 * @method \Http\Promise\Promise createLayerVersionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteLayerVersion(array $arguments = [])
 * @method \Http\Promise\Promise deleteLayerVersionAsync($arguments = [])
 * @method \Dew\Acs\Result listLayers(array $arguments = [])
 * @method \Http\Promise\Promise listLayersAsync($arguments = [])
 * @method \Dew\Acs\Result listLayerVersions(array $arguments = [])
 * @method \Http\Promise\Promise listLayerVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result getLayerVersion(array $arguments = [])
 * @method \Http\Promise\Promise getLayerVersionAsync($arguments = [])
 * @method \Dew\Acs\Result putLayerACL(array $arguments = [])
 * @method \Http\Promise\Promise putLayerACLAsync($arguments = [])
 * @method \Dew\Acs\Result listEventSources(array $arguments = [])
 * @method \Http\Promise\Promise listEventSourcesAsync($arguments = [])
 * @method \Dew\Acs\Result deregisterEventSource(array $arguments = [])
 * @method \Http\Promise\Promise deregisterEventSourceAsync($arguments = [])
 * @method \Dew\Acs\Result registerEventSource(array $arguments = [])
 * @method \Http\Promise\Promise registerEventSourceAsync($arguments = [])
 * @method \Dew\Acs\Result createVpcBinding(array $arguments = [])
 * @method \Http\Promise\Promise createVpcBindingAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVpcBinding(array $arguments = [])
 * @method \Http\Promise\Promise deleteVpcBindingAsync($arguments = [])
 * @method \Dew\Acs\Result listVpcBindings(array $arguments = [])
 * @method \Http\Promise\Promise listVpcBindingsAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceTags(array $arguments = [])
 * @method \Http\Promise\Promise getResourceTagsAsync($arguments = [])
 * @method \Dew\Acs\Result listTaggedResources(array $arguments = [])
 * @method \Http\Promise\Promise listTaggedResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResource(array $arguments = [])
 * @method \Http\Promise\Promise tagResourceAsync($arguments = [])
 * @method \Dew\Acs\Result untagResource(array $arguments = [])
 * @method \Http\Promise\Promise untagResourceAsync($arguments = [])
 * @method \Dew\Acs\Result listInstances(array $arguments = [])
 * @method \Http\Promise\Promise listInstancesAsync($arguments = [])
 */
final class FCOpenClient extends AcsClient
{
    //
}
