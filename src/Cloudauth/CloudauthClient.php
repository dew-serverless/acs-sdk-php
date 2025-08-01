<?php

declare(strict_types=1);

namespace Dew\Acs\Cloudauth;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result describePageFaceVerifyData(array $arguments = [])
 * @method \Http\Promise\Promise describePageFaceVerifyDataAsync($arguments = [])
 * @method \Dew\Acs\Result initFaceVerify(array $arguments = [])
 * @method \Http\Promise\Promise initFaceVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result describeFaceVerify(array $arguments = [])
 * @method \Http\Promise\Promise describeFaceVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result contrastFaceVerify(array $arguments = [])
 * @method \Http\Promise\Promise contrastFaceVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result compareFaceVerify(array $arguments = [])
 * @method \Http\Promise\Promise compareFaceVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result livenessFaceVerify(array $arguments = [])
 * @method \Http\Promise\Promise livenessFaceVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result describeFaceGuardRisk(array $arguments = [])
 * @method \Http\Promise\Promise describeFaceGuardRiskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFaceVerifyResult(array $arguments = [])
 * @method \Http\Promise\Promise deleteFaceVerifyResultAsync($arguments = [])
 * @method \Dew\Acs\Result removeWhiteListSetting(array $arguments = [])
 * @method \Http\Promise\Promise removeWhiteListSettingAsync($arguments = [])
 * @method \Dew\Acs\Result pageQueryWhiteListSetting(array $arguments = [])
 * @method \Http\Promise\Promise pageQueryWhiteListSettingAsync($arguments = [])
 * @method \Dew\Acs\Result insertWhiteListSetting(array $arguments = [])
 * @method \Http\Promise\Promise insertWhiteListSettingAsync($arguments = [])
 * @method \Dew\Acs\Result describeSmartStatisticsPageList(array $arguments = [])
 * @method \Http\Promise\Promise describeSmartStatisticsPageListAsync($arguments = [])
 * @method \Dew\Acs\Result vehicleQuery(array $arguments = [])
 * @method \Http\Promise\Promise vehicleQueryAsync($arguments = [])
 * @method \Dew\Acs\Result vehicleMetaVerify(array $arguments = [])
 * @method \Http\Promise\Promise vehicleMetaVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result vehicleInsureQuery(array $arguments = [])
 * @method \Http\Promise\Promise vehicleInsureQueryAsync($arguments = [])
 * @method \Dew\Acs\Result vehicleMetaVerifyV2(array $arguments = [])
 * @method \Http\Promise\Promise vehicleMetaVerifyV2Async($arguments = [])
 * @method \Dew\Acs\Result vehicle5ItemQuery(array $arguments = [])
 * @method \Http\Promise\Promise vehicle5ItemQueryAsync($arguments = [])
 * @method \Dew\Acs\Result deepfakeDetect(array $arguments = [])
 * @method \Http\Promise\Promise deepfakeDetectAsync($arguments = [])
 * @method \Dew\Acs\Result credentialVerify(array $arguments = [])
 * @method \Http\Promise\Promise credentialVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result bankMetaVerify(array $arguments = [])
 * @method \Http\Promise\Promise bankMetaVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result mobileOnlineTime(array $arguments = [])
 * @method \Http\Promise\Promise mobileOnlineTimeAsync($arguments = [])
 * @method \Dew\Acs\Result mobileDetect(array $arguments = [])
 * @method \Http\Promise\Promise mobileDetectAsync($arguments = [])
 * @method \Dew\Acs\Result mobileOnlineStatus(array $arguments = [])
 * @method \Http\Promise\Promise mobileOnlineStatusAsync($arguments = [])
 * @method \Dew\Acs\Result mobile3MetaSimpleVerify(array $arguments = [])
 * @method \Http\Promise\Promise mobile3MetaSimpleVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result mobile3MetaSimpleStandardVerify(array $arguments = [])
 * @method \Http\Promise\Promise mobile3MetaSimpleStandardVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result mobile3MetaDetailStandardVerify(array $arguments = [])
 * @method \Http\Promise\Promise mobile3MetaDetailStandardVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result id2MetaVerify(array $arguments = [])
 * @method \Http\Promise\Promise id2MetaVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result id2MetaPeriodVerify(array $arguments = [])
 * @method \Http\Promise\Promise id2MetaPeriodVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result id2MetaStandardVerify(array $arguments = [])
 * @method \Http\Promise\Promise id2MetaStandardVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result mobile3MetaDetailVerify(array $arguments = [])
 * @method \Http\Promise\Promise mobile3MetaDetailVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result createAuthKey(array $arguments = [])
 * @method \Http\Promise\Promise createAuthKeyAsync($arguments = [])
 * @method \Dew\Acs\Result describeOssUploadToken(array $arguments = [])
 * @method \Http\Promise\Promise describeOssUploadTokenAsync($arguments = [])
 * @method \Dew\Acs\Result createVerifySetting(array $arguments = [])
 * @method \Http\Promise\Promise createVerifySettingAsync($arguments = [])
 * @method \Dew\Acs\Result describeVerifySDK(array $arguments = [])
 * @method \Http\Promise\Promise describeVerifySDKAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDeviceInfo(array $arguments = [])
 * @method \Http\Promise\Promise modifyDeviceInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeVerifyToken(array $arguments = [])
 * @method \Http\Promise\Promise describeVerifyTokenAsync($arguments = [])
 * @method \Dew\Acs\Result describeVerifyResult(array $arguments = [])
 * @method \Http\Promise\Promise describeVerifyResultAsync($arguments = [])
 * @method \Dew\Acs\Result verifyMaterial(array $arguments = [])
 * @method \Http\Promise\Promise verifyMaterialAsync($arguments = [])
 * @method \Dew\Acs\Result compareFaces(array $arguments = [])
 * @method \Http\Promise\Promise compareFacesAsync($arguments = [])
 * @method \Dew\Acs\Result detectFaceAttributes(array $arguments = [])
 * @method \Http\Promise\Promise detectFaceAttributesAsync($arguments = [])
 * @method \Dew\Acs\Result aIGCFaceVerify(array $arguments = [])
 * @method \Http\Promise\Promise aIGCFaceVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result id2MetaVerifyWithOCR(array $arguments = [])
 * @method \Http\Promise\Promise id2MetaVerifyWithOCRAsync($arguments = [])
 * @method \Dew\Acs\Result credentialVerifyV2(array $arguments = [])
 * @method \Http\Promise\Promise credentialVerifyV2Async($arguments = [])
 * @method \Dew\Acs\Result mobile2MetaVerify(array $arguments = [])
 * @method \Http\Promise\Promise mobile2MetaVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result initCardVerify(array $arguments = [])
 * @method \Http\Promise\Promise initCardVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result describeCardVerify(array $arguments = [])
 * @method \Http\Promise\Promise describeCardVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result credentialProductVerifyV2(array $arguments = [])
 * @method \Http\Promise\Promise credentialProductVerifyV2Async($arguments = [])
 * @method \Dew\Acs\Result entVerify(array $arguments = []) {@since 2022-11-25}
 * @method \Http\Promise\Promise entVerifyAsync($arguments = []) {@since 2022-11-25}
 * @method \Dew\Acs\Result entElementVerify(array $arguments = []) {@since 2022-11-25}
 * @method \Http\Promise\Promise entElementVerifyAsync($arguments = []) {@since 2022-11-25}
 * @method \Dew\Acs\Result entRiskQuery(array $arguments = []) {@since 2022-11-25}
 * @method \Http\Promise\Promise entRiskQueryAsync($arguments = []) {@since 2022-11-25}
 * @method \Dew\Acs\Result entElementVerifyV2(array $arguments = []) {@since 2022-11-25}
 * @method \Http\Promise\Promise entElementVerifyV2Async($arguments = []) {@since 2022-11-25}
 */
final class CloudauthClient extends AcsClient
{
    //
}
