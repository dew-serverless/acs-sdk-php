<?php

declare(strict_types=1);

namespace Dew\Acs\EkycSaas;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result scanDocument(array $arguments = [])
 * @method \Http\Promise\Promise scanDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result verifyDocument(array $arguments = [])
 * @method \Http\Promise\Promise verifyDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result faceRecognitionCompare(array $arguments = [])
 * @method \Http\Promise\Promise faceRecognitionCompareAsync($arguments = [])
 * @method \Dew\Acs\Result faceToFaceCompare(array $arguments = [])
 * @method \Http\Promise\Promise faceToFaceCompareAsync($arguments = [])
 * @method \Dew\Acs\Result idDetectionAndScanDocument(array $arguments = [])
 * @method \Http\Promise\Promise idDetectionAndScanDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result idDetectOcrCompareFaces(array $arguments = [])
 * @method \Http\Promise\Promise idDetectOcrCompareFacesAsync($arguments = [])
 */
final class EkycSaasClient extends AcsClient
{
    //
}
