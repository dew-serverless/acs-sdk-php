<?php

declare(strict_types=1);

namespace Dew\Acs\OcrApi;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result recognizeAllText(array $arguments = [])
 * @method \Http\Promise\Promise recognizeAllTextAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeGeneralStructure(array $arguments = [])
 * @method \Http\Promise\Promise recognizeGeneralStructureAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeAdvanced(array $arguments = [])
 * @method \Http\Promise\Promise recognizeAdvancedAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeHandwriting(array $arguments = [])
 * @method \Http\Promise\Promise recognizeHandwritingAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeBasic(array $arguments = [])
 * @method \Http\Promise\Promise recognizeBasicAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeGeneral(array $arguments = [])
 * @method \Http\Promise\Promise recognizeGeneralAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeTableOcr(array $arguments = [])
 * @method \Http\Promise\Promise recognizeTableOcrAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeHealthCode(array $arguments = [])
 * @method \Http\Promise\Promise recognizeHealthCodeAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeDocumentStructure(array $arguments = [])
 * @method \Http\Promise\Promise recognizeDocumentStructureAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeIdcard(array $arguments = [])
 * @method \Http\Promise\Promise recognizeIdcardAsync($arguments = [])
 * @method \Dew\Acs\Result recognizePassport(array $arguments = [])
 * @method \Http\Promise\Promise recognizePassportAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeHousehold(array $arguments = [])
 * @method \Http\Promise\Promise recognizeHouseholdAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeEstateCertification(array $arguments = [])
 * @method \Http\Promise\Promise recognizeEstateCertificationAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeBankCard(array $arguments = [])
 * @method \Http\Promise\Promise recognizeBankCardAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeBirthCertification(array $arguments = [])
 * @method \Http\Promise\Promise recognizeBirthCertificationAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeChinesePassport(array $arguments = [])
 * @method \Http\Promise\Promise recognizeChinesePassportAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeExitEntryPermitToMainland(array $arguments = [])
 * @method \Http\Promise\Promise recognizeExitEntryPermitToMainlandAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeExitEntryPermitToHK(array $arguments = [])
 * @method \Http\Promise\Promise recognizeExitEntryPermitToHKAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeHKIdcard(array $arguments = [])
 * @method \Http\Promise\Promise recognizeHKIdcardAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeSocialSecurityCardVersionII(array $arguments = [])
 * @method \Http\Promise\Promise recognizeSocialSecurityCardVersionIIAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeInternationalIdcard(array $arguments = [])
 * @method \Http\Promise\Promise recognizeInternationalIdcardAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeMixedInvoices(array $arguments = [])
 * @method \Http\Promise\Promise recognizeMixedInvoicesAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeInvoice(array $arguments = [])
 * @method \Http\Promise\Promise recognizeInvoiceAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeCarInvoice(array $arguments = [])
 * @method \Http\Promise\Promise recognizeCarInvoiceAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeQuotaInvoice(array $arguments = [])
 * @method \Http\Promise\Promise recognizeQuotaInvoiceAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeAirItinerary(array $arguments = [])
 * @method \Http\Promise\Promise recognizeAirItineraryAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeTrainInvoice(array $arguments = [])
 * @method \Http\Promise\Promise recognizeTrainInvoiceAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeTaxiInvoice(array $arguments = [])
 * @method \Http\Promise\Promise recognizeTaxiInvoiceAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeRollTicket(array $arguments = [])
 * @method \Http\Promise\Promise recognizeRollTicketAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeBankAcceptance(array $arguments = [])
 * @method \Http\Promise\Promise recognizeBankAcceptanceAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeBusShipTicket(array $arguments = [])
 * @method \Http\Promise\Promise recognizeBusShipTicketAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeNonTaxInvoice(array $arguments = [])
 * @method \Http\Promise\Promise recognizeNonTaxInvoiceAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeCommonPrintedInvoice(array $arguments = [])
 * @method \Http\Promise\Promise recognizeCommonPrintedInvoiceAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeHotelConsume(array $arguments = [])
 * @method \Http\Promise\Promise recognizeHotelConsumeAsync($arguments = [])
 * @method \Dew\Acs\Result recognizePaymentRecord(array $arguments = [])
 * @method \Http\Promise\Promise recognizePaymentRecordAsync($arguments = [])
 * @method \Dew\Acs\Result recognizePurchaseRecord(array $arguments = [])
 * @method \Http\Promise\Promise recognizePurchaseRecordAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeRideHailingItinerary(array $arguments = [])
 * @method \Http\Promise\Promise recognizeRideHailingItineraryAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeShoppingReceipt(array $arguments = [])
 * @method \Http\Promise\Promise recognizeShoppingReceiptAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeSocialSecurityCard(array $arguments = [])
 * @method \Http\Promise\Promise recognizeSocialSecurityCardAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeTollInvoice(array $arguments = [])
 * @method \Http\Promise\Promise recognizeTollInvoiceAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeTaxClearanceCertificate(array $arguments = [])
 * @method \Http\Promise\Promise recognizeTaxClearanceCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeUsedCarInvoice(array $arguments = [])
 * @method \Http\Promise\Promise recognizeUsedCarInvoiceAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeBusinessLicense(array $arguments = [])
 * @method \Http\Promise\Promise recognizeBusinessLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeBankAccountLicense(array $arguments = [])
 * @method \Http\Promise\Promise recognizeBankAccountLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeTradeMarkCertification(array $arguments = [])
 * @method \Http\Promise\Promise recognizeTradeMarkCertificationAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeFoodProduceLicense(array $arguments = [])
 * @method \Http\Promise\Promise recognizeFoodProduceLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeFoodManageLicense(array $arguments = [])
 * @method \Http\Promise\Promise recognizeFoodManageLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeMedicalDeviceManageLicense(array $arguments = [])
 * @method \Http\Promise\Promise recognizeMedicalDeviceManageLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeMedicalDeviceProduceLicense(array $arguments = [])
 * @method \Http\Promise\Promise recognizeMedicalDeviceProduceLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeCtwoMedicalDeviceManageLicense(array $arguments = [])
 * @method \Http\Promise\Promise recognizeCtwoMedicalDeviceManageLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeCosmeticProduceLicense(array $arguments = [])
 * @method \Http\Promise\Promise recognizeCosmeticProduceLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeInternationalBusinessLicense(array $arguments = [])
 * @method \Http\Promise\Promise recognizeInternationalBusinessLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeVehicleLicense(array $arguments = [])
 * @method \Http\Promise\Promise recognizeVehicleLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeDrivingLicense(array $arguments = [])
 * @method \Http\Promise\Promise recognizeDrivingLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeWaybill(array $arguments = [])
 * @method \Http\Promise\Promise recognizeWaybillAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeCarNumber(array $arguments = [])
 * @method \Http\Promise\Promise recognizeCarNumberAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeCarVinCode(array $arguments = [])
 * @method \Http\Promise\Promise recognizeCarVinCodeAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeVehicleRegistration(array $arguments = [])
 * @method \Http\Promise\Promise recognizeVehicleRegistrationAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeVehicleCertification(array $arguments = [])
 * @method \Http\Promise\Promise recognizeVehicleCertificationAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeEduFormula(array $arguments = [])
 * @method \Http\Promise\Promise recognizeEduFormulaAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeEduOralCalculation(array $arguments = [])
 * @method \Http\Promise\Promise recognizeEduOralCalculationAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeEduPaperOcr(array $arguments = [])
 * @method \Http\Promise\Promise recognizeEduPaperOcrAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeEduPaperCut(array $arguments = [])
 * @method \Http\Promise\Promise recognizeEduPaperCutAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeEduQuestionOcr(array $arguments = [])
 * @method \Http\Promise\Promise recognizeEduQuestionOcrAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeEduPaperStructed(array $arguments = [])
 * @method \Http\Promise\Promise recognizeEduPaperStructedAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeMultiLanguage(array $arguments = [])
 * @method \Http\Promise\Promise recognizeMultiLanguageAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeEnglish(array $arguments = [])
 * @method \Http\Promise\Promise recognizeEnglishAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeThai(array $arguments = [])
 * @method \Http\Promise\Promise recognizeThaiAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeJanpanese(array $arguments = [])
 * @method \Http\Promise\Promise recognizeJanpaneseAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeKorean(array $arguments = [])
 * @method \Http\Promise\Promise recognizeKoreanAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeLatin(array $arguments = [])
 * @method \Http\Promise\Promise recognizeLatinAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeRussian(array $arguments = [])
 * @method \Http\Promise\Promise recognizeRussianAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeCovidTestReport(array $arguments = [])
 * @method \Http\Promise\Promise recognizeCovidTestReportAsync($arguments = [])
 * @method \Dew\Acs\Result verifyBusinessLicense(array $arguments = [])
 * @method \Http\Promise\Promise verifyBusinessLicenseAsync($arguments = [])
 * @method \Dew\Acs\Result verifyVATInvoice(array $arguments = [])
 * @method \Http\Promise\Promise verifyVATInvoiceAsync($arguments = [])
 */
final class OcrApiClient extends AcsClient
{
    //
}
