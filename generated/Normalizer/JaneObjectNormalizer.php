<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Normalizer;

use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use JoliCode\Harvest\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;
    protected $normalizers = ['JoliCode\\Harvest\\Api\\Model\\Contact' => 'JoliCode\\Harvest\\Api\\Normalizer\\ContactNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ContactClient' => 'JoliCode\\Harvest\\Api\\Normalizer\\ContactClientNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Client' => 'JoliCode\\Harvest\\Api\\Normalizer\\ClientNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Company' => 'JoliCode\\Harvest\\Api\\Normalizer\\CompanyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessage' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceMessageNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessageRecipient' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceMessageRecipientNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicePayment' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicePaymentNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicePaymentPaymentGateway' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicePaymentPaymentGatewayNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Invoice' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceClient' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceClientNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceEstimate' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceEstimateNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceRetainer' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceRetainerNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceCreator' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceCreatorNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceLineItem' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceLineItemNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceLineItemProject' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceLineItemProjectNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategory' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceItemCategoryNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateMessage' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateMessageNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateMessageRecipient' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateMessageRecipientNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Estimate' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateClient' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateClientNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateCreator' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateCreatorNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateLineItem' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateLineItemNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategory' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateItemCategoryNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Expense' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseClient' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseClientNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseProject' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseProjectNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseExpenseCategory' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseExpenseCategoryNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseUser' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseUserNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseReceipt' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseReceiptNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseInvoice' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseInvoiceNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseCategory' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseCategoryNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Task' => 'JoliCode\\Harvest\\Api\\Normalizer\\TaskNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntry' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntryNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntryUser' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntryUserNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntryClient' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntryClientNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntryProject' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntryProjectNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntryTask' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntryTaskNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntryExternalReferenceNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntryInvoice' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntryInvoiceNormalizer', 'JoliCode\\Harvest\\Api\\Model\\UserAssignment' => 'JoliCode\\Harvest\\Api\\Normalizer\\UserAssignmentNormalizer', 'JoliCode\\Harvest\\Api\\Model\\UserAssignmentProject' => 'JoliCode\\Harvest\\Api\\Normalizer\\UserAssignmentProjectNormalizer', 'JoliCode\\Harvest\\Api\\Model\\UserAssignmentUser' => 'JoliCode\\Harvest\\Api\\Normalizer\\UserAssignmentUserNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TaskAssignment' => 'JoliCode\\Harvest\\Api\\Normalizer\\TaskAssignmentNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TaskAssignmentProject' => 'JoliCode\\Harvest\\Api\\Normalizer\\TaskAssignmentProjectNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TaskAssignmentTask' => 'JoliCode\\Harvest\\Api\\Normalizer\\TaskAssignmentTaskNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Project' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectClient' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectClientNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Role' => 'JoliCode\\Harvest\\Api\\Normalizer\\RoleNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Teammate' => 'JoliCode\\Harvest\\Api\\Normalizer\\TeammateNormalizer', 'JoliCode\\Harvest\\Api\\Model\\BillableRate' => 'JoliCode\\Harvest\\Api\\Normalizer\\BillableRateNormalizer', 'JoliCode\\Harvest\\Api\\Model\\CostRate' => 'JoliCode\\Harvest\\Api\\Normalizer\\CostRateNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectAssignment' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectAssignmentNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectAssignmentProject' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectAssignmentProjectNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectAssignmentClient' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectAssignmentClientNormalizer', 'JoliCode\\Harvest\\Api\\Model\\User' => 'JoliCode\\Harvest\\Api\\Normalizer\\UserNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseReportsResult' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseReportsResultNormalizer', 'JoliCode\\Harvest\\Api\\Model\\UninvoicedReportResult' => 'JoliCode\\Harvest\\Api\\Normalizer\\UninvoicedReportResultNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeReportsResult' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeReportsResultNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResult' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectBudgetReportResultNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Contacts' => 'JoliCode\\Harvest\\Api\\Normalizer\\ContactsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Clients' => 'JoliCode\\Harvest\\Api\\Normalizer\\ClientsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Companies' => 'JoliCode\\Harvest\\Api\\Normalizer\\CompaniesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessages' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceMessagesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessageRecipients' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceMessageRecipientsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicePayments' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicePaymentsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Invoices' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceLineItems' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceLineItemsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategories' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceItemCategoriesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateMessages' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateMessagesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateMessageRecipients' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateMessageRecipientsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Estimates' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimatesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateLineItems' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateLineItemsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategories' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateItemCategoriesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Expenses' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpensesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseCategories' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseCategoriesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Tasks' => 'JoliCode\\Harvest\\Api\\Normalizer\\TasksNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntries' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntriesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\UserAssignments' => 'JoliCode\\Harvest\\Api\\Normalizer\\UserAssignmentsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TaskAssignments' => 'JoliCode\\Harvest\\Api\\Normalizer\\TaskAssignmentsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Projects' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Roles' => 'JoliCode\\Harvest\\Api\\Normalizer\\RolesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Teammates' => 'JoliCode\\Harvest\\Api\\Normalizer\\TeammatesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\BillableRates' => 'JoliCode\\Harvest\\Api\\Normalizer\\BillableRatesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\CostRates' => 'JoliCode\\Harvest\\Api\\Normalizer\\CostRatesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectAssignments' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectAssignmentsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Users' => 'JoliCode\\Harvest\\Api\\Normalizer\\UsersNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseReportsResults' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseReportsResultsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\UninvoicedReportResults' => 'JoliCode\\Harvest\\Api\\Normalizer\\UninvoicedReportResultsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeReportsResults' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeReportsResultsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResults' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectBudgetReportResultsNormalizer', 'JoliCode\\Harvest\\Api\\Model\\Error' => 'JoliCode\\Harvest\\Api\\Normalizer\\ErrorNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessageSubjectAndBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceMessageSubjectAndBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks' => 'JoliCode\\Harvest\\Api\\Normalizer\\PaginationLinksNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TeammatesPatchResponse' => 'JoliCode\\Harvest\\Api\\Normalizer\\TeammatesPatchResponseNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ClientsPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ClientsPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ClientsClientIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ClientsClientIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\CompanyPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\CompanyPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ContactsPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ContactsPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ContactsContactIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ContactsContactIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategoriesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateItemCategoriesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategoriesEstimateItemCategoryIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimateItemCategoriesEstimateItemCategoryIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimatesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimatesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimatesPostBodyLineItemsItem' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimatesPostBodyLineItemsItemNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimatesEstimateIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdPatchBodyLineItemsItem' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimatesEstimateIdPatchBodyLineItemsItemNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdMessagesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimatesEstimateIdMessagesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdMessagesPostBodyRecipientsItem' => 'JoliCode\\Harvest\\Api\\Normalizer\\EstimatesEstimateIdMessagesPostBodyRecipientsItemNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseCategoriesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseCategoriesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpenseCategoriesExpenseCategoryIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpenseCategoriesExpenseCategoryIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpensesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpensesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ExpensesExpenseIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ExpensesExpenseIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategoriesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceItemCategoriesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImport' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicesPostBodyLineItemsImportNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicesPostBodyLineItemsImportTimeNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportExpenses' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicesPostBodyLineItemsImportExpensesNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsItem' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicesPostBodyLineItemsItemNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicesInvoiceIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPatchBodyLineItemsItem' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicesInvoiceIdPatchBodyLineItemsItemNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdMessagesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicesInvoiceIdMessagesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdMessagesPostBodyRecipientsItem' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicesInvoiceIdMessagesPostBodyRecipientsItemNormalizer', 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPaymentsPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\InvoicesInvoiceIdPaymentsPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectsPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectsPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectsProjectIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdTaskAssignmentsPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectsProjectIdTaskAssignmentsPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdUserAssignmentsPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectsProjectIdUserAssignmentsPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\RolesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\RolesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\RolesRoleIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\RolesRoleIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TasksPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\TasksPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TasksTaskIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\TasksTaskIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntriesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesPostBodyExternalReference' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntriesPostBodyExternalReferenceNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntriesTimeEntryIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBodyExternalReference' => 'JoliCode\\Harvest\\Api\\Normalizer\\TimeEntriesTimeEntryIdPatchBodyExternalReferenceNormalizer', 'JoliCode\\Harvest\\Api\\Model\\UsersPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\UsersPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\UsersUserIdPatchBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdBillableRatesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\UsersUserIdBillableRatesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdCostRatesPostBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\UsersUserIdCostRatesPostBodyNormalizer', 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdTeammatesPatchBody' => 'JoliCode\\Harvest\\Api\\Normalizer\\UsersUserIdTeammatesPatchBodyNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\JoliCode\\Harvest\\Api\\Runtime\\Normalizer\\ReferenceNormalizer'];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return \array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && \array_key_exists($data::class, $this->normalizers);
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[$object::class];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['JoliCode\\Harvest\\Api\\Model\\Contact' => false, 'JoliCode\\Harvest\\Api\\Model\\ContactClient' => false, 'JoliCode\\Harvest\\Api\\Model\\Client' => false, 'JoliCode\\Harvest\\Api\\Model\\Company' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessage' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessageRecipient' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicePayment' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicePaymentPaymentGateway' => false, 'JoliCode\\Harvest\\Api\\Model\\Invoice' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceClient' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceEstimate' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceRetainer' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceCreator' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceLineItem' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceLineItemProject' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategory' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateMessage' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateMessageRecipient' => false, 'JoliCode\\Harvest\\Api\\Model\\Estimate' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateClient' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateCreator' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateLineItem' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategory' => false, 'JoliCode\\Harvest\\Api\\Model\\Expense' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseClient' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseProject' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseExpenseCategory' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseUser' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseReceipt' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseInvoice' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseCategory' => false, 'JoliCode\\Harvest\\Api\\Model\\Task' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntry' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryUser' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryClient' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryProject' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryTask' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryInvoice' => false, 'JoliCode\\Harvest\\Api\\Model\\UserAssignment' => false, 'JoliCode\\Harvest\\Api\\Model\\UserAssignmentProject' => false, 'JoliCode\\Harvest\\Api\\Model\\UserAssignmentUser' => false, 'JoliCode\\Harvest\\Api\\Model\\TaskAssignment' => false, 'JoliCode\\Harvest\\Api\\Model\\TaskAssignmentProject' => false, 'JoliCode\\Harvest\\Api\\Model\\TaskAssignmentTask' => false, 'JoliCode\\Harvest\\Api\\Model\\Project' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectClient' => false, 'JoliCode\\Harvest\\Api\\Model\\Role' => false, 'JoliCode\\Harvest\\Api\\Model\\Teammate' => false, 'JoliCode\\Harvest\\Api\\Model\\BillableRate' => false, 'JoliCode\\Harvest\\Api\\Model\\CostRate' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectAssignment' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectAssignmentProject' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectAssignmentClient' => false, 'JoliCode\\Harvest\\Api\\Model\\User' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseReportsResult' => false, 'JoliCode\\Harvest\\Api\\Model\\UninvoicedReportResult' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeReportsResult' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResult' => false, 'JoliCode\\Harvest\\Api\\Model\\Contacts' => false, 'JoliCode\\Harvest\\Api\\Model\\Clients' => false, 'JoliCode\\Harvest\\Api\\Model\\Companies' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessages' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessageRecipients' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicePayments' => false, 'JoliCode\\Harvest\\Api\\Model\\Invoices' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceLineItems' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategories' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateMessages' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateMessageRecipients' => false, 'JoliCode\\Harvest\\Api\\Model\\Estimates' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateLineItems' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategories' => false, 'JoliCode\\Harvest\\Api\\Model\\Expenses' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseCategories' => false, 'JoliCode\\Harvest\\Api\\Model\\Tasks' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntries' => false, 'JoliCode\\Harvest\\Api\\Model\\UserAssignments' => false, 'JoliCode\\Harvest\\Api\\Model\\TaskAssignments' => false, 'JoliCode\\Harvest\\Api\\Model\\Projects' => false, 'JoliCode\\Harvest\\Api\\Model\\Roles' => false, 'JoliCode\\Harvest\\Api\\Model\\Teammates' => false, 'JoliCode\\Harvest\\Api\\Model\\BillableRates' => false, 'JoliCode\\Harvest\\Api\\Model\\CostRates' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectAssignments' => false, 'JoliCode\\Harvest\\Api\\Model\\Users' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseReportsResults' => false, 'JoliCode\\Harvest\\Api\\Model\\UninvoicedReportResults' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeReportsResults' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResults' => false, 'JoliCode\\Harvest\\Api\\Model\\Error' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessageSubjectAndBody' => false, 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks' => false, 'JoliCode\\Harvest\\Api\\Model\\TeammatesPatchResponse' => false, 'JoliCode\\Harvest\\Api\\Model\\ClientsPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ClientsClientIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\CompanyPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ContactsPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ContactsContactIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategoriesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategoriesEstimateItemCategoryIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimatesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimatesPostBodyLineItemsItem' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdPatchBodyLineItemsItem' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdMessagesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdMessagesPostBodyRecipientsItem' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseCategoriesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpenseCategoriesExpenseCategoryIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpensesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ExpensesExpenseIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategoriesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImport' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportExpenses' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsItem' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPatchBodyLineItemsItem' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdMessagesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdMessagesPostBodyRecipientsItem' => false, 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPaymentsPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectsPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdTaskAssignmentsPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdUserAssignmentsPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\RolesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\RolesRoleIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\TasksPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\TasksTaskIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesPostBodyExternalReference' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBodyExternalReference' => false, 'JoliCode\\Harvest\\Api\\Model\\UsersPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdPatchBody' => false, 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdBillableRatesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdCostRatesPostBody' => false, 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdTeammatesPatchBody' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}
