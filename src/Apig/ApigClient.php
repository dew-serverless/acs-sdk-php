<?php

declare(strict_types=1);

namespace Dew\Acs\Apig;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result deployHttpApi(array $arguments = [])
 * @method \Http\Promise\Promise deployHttpApiAsync($arguments = [])
 * @method \Dew\Acs\Result createHttpApi(array $arguments = [])
 * @method \Http\Promise\Promise createHttpApiAsync($arguments = [])
 * @method \Dew\Acs\Result updateHttpApi(array $arguments = [])
 * @method \Http\Promise\Promise updateHttpApiAsync($arguments = [])
 * @method \Dew\Acs\Result getHttpApi(array $arguments = [])
 * @method \Http\Promise\Promise getHttpApiAsync($arguments = [])
 * @method \Dew\Acs\Result listHttpApis(array $arguments = [])
 * @method \Http\Promise\Promise listHttpApisAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHttpApi(array $arguments = [])
 * @method \Http\Promise\Promise deleteHttpApiAsync($arguments = [])
 * @method \Dew\Acs\Result createHttpApiOperation(array $arguments = [])
 * @method \Http\Promise\Promise createHttpApiOperationAsync($arguments = [])
 * @method \Dew\Acs\Result getHttpApiOperation(array $arguments = [])
 * @method \Http\Promise\Promise getHttpApiOperationAsync($arguments = [])
 * @method \Dew\Acs\Result updateHttpApiOperation(array $arguments = [])
 * @method \Http\Promise\Promise updateHttpApiOperationAsync($arguments = [])
 * @method \Dew\Acs\Result listHttpApiOperations(array $arguments = [])
 * @method \Http\Promise\Promise listHttpApiOperationsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHttpApiOperation(array $arguments = [])
 * @method \Http\Promise\Promise deleteHttpApiOperationAsync($arguments = [])
 * @method \Dew\Acs\Result createHttpApiRoute(array $arguments = [])
 * @method \Http\Promise\Promise createHttpApiRouteAsync($arguments = [])
 * @method \Dew\Acs\Result updateHttpApiRoute(array $arguments = [])
 * @method \Http\Promise\Promise updateHttpApiRouteAsync($arguments = [])
 * @method \Dew\Acs\Result getHttpApiRoute(array $arguments = [])
 * @method \Http\Promise\Promise getHttpApiRouteAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHttpApiRoute(array $arguments = [])
 * @method \Http\Promise\Promise deleteHttpApiRouteAsync($arguments = [])
 * @method \Dew\Acs\Result getGateway(array $arguments = [])
 * @method \Http\Promise\Promise getGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result listGateways(array $arguments = [])
 * @method \Http\Promise\Promise listGatewaysAsync($arguments = [])
 * @method \Dew\Acs\Result addGatewaySecurityGroupRule(array $arguments = [])
 * @method \Http\Promise\Promise addGatewaySecurityGroupRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGateway(array $arguments = [])
 * @method \Http\Promise\Promise deleteGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result listPolicyClasses(array $arguments = [])
 * @method \Http\Promise\Promise listPolicyClassesAsync($arguments = [])
 * @method \Dew\Acs\Result createPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result getPolicy(array $arguments = [])
 * @method \Http\Promise\Promise getPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result updatePolicy(array $arguments = [])
 * @method \Http\Promise\Promise updatePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deletePolicy(array $arguments = [])
 * @method \Http\Promise\Promise deletePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createPolicyAttachment(array $arguments = [])
 * @method \Http\Promise\Promise createPolicyAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result getPolicyAttachment(array $arguments = [])
 * @method \Http\Promise\Promise getPolicyAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result deletePolicyAttachment(array $arguments = [])
 * @method \Http\Promise\Promise deletePolicyAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result getDomain(array $arguments = [])
 * @method \Http\Promise\Promise getDomainAsync($arguments = [])
 * @method \Dew\Acs\Result createDomain(array $arguments = [])
 * @method \Http\Promise\Promise createDomainAsync($arguments = [])
 * @method \Dew\Acs\Result listDomains(array $arguments = [])
 * @method \Http\Promise\Promise listDomainsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDomain(array $arguments = [])
 * @method \Http\Promise\Promise deleteDomainAsync($arguments = [])
 * @method \Dew\Acs\Result updateDomain(array $arguments = [])
 * @method \Http\Promise\Promise updateDomainAsync($arguments = [])
 * @method \Dew\Acs\Result importHttpApi(array $arguments = [])
 * @method \Http\Promise\Promise importHttpApiAsync($arguments = [])
 * @method \Dew\Acs\Result changeResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise changeResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listZones(array $arguments = [])
 * @method \Http\Promise\Promise listZonesAsync($arguments = [])
 * @method \Dew\Acs\Result getDashboard(array $arguments = [])
 * @method \Http\Promise\Promise getDashboardAsync($arguments = [])
 * @method \Dew\Acs\Result getTraceConfig(array $arguments = [])
 * @method \Http\Promise\Promise getTraceConfigAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeGateway(array $arguments = [])
 * @method \Http\Promise\Promise upgradeGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGatewaySecurityGroupRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteGatewaySecurityGroupRuleAsync($arguments = [])
 * @method \Dew\Acs\Result restartGateway(array $arguments = [])
 * @method \Http\Promise\Promise restartGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result listSslCerts(array $arguments = [])
 * @method \Http\Promise\Promise listSslCertsAsync($arguments = [])
 * @method \Dew\Acs\Result updateGatewayFeature(array $arguments = [])
 * @method \Http\Promise\Promise updateGatewayFeatureAsync($arguments = [])
 * @method \Dew\Acs\Result updateGatewayName(array $arguments = [])
 * @method \Http\Promise\Promise updateGatewayNameAsync($arguments = [])
 * @method \Dew\Acs\Result exportHttpApi(array $arguments = [])
 * @method \Http\Promise\Promise exportHttpApiAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceOverview(array $arguments = [])
 * @method \Http\Promise\Promise getResourceOverviewAsync($arguments = [])
 * @method \Dew\Acs\Result createEnvironment(array $arguments = []) {@deprecated 2024-03-27}
 * @method \Http\Promise\Promise createEnvironmentAsync($arguments = []) {@deprecated 2024-03-27}
 * @method \Dew\Acs\Result getEnvironment(array $arguments = []) {@deprecated 2024-03-27}
 * @method \Http\Promise\Promise getEnvironmentAsync($arguments = []) {@deprecated 2024-03-27}
 * @method \Dew\Acs\Result updateEnvironment(array $arguments = []) {@deprecated 2024-03-27}
 * @method \Http\Promise\Promise updateEnvironmentAsync($arguments = []) {@deprecated 2024-03-27}
 * @method \Dew\Acs\Result deleteEnvironment(array $arguments = []) {@deprecated 2024-03-27}
 * @method \Http\Promise\Promise deleteEnvironmentAsync($arguments = []) {@deprecated 2024-03-27}
 * @method \Dew\Acs\Result listEnvironments(array $arguments = []) {@deprecated 2024-03-27}
 * @method \Http\Promise\Promise listEnvironmentsAsync($arguments = []) {@deprecated 2024-03-27}
 */
final class ApigClient extends AcsClient
{
    //
}
