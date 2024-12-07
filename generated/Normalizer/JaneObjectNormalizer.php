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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;
        protected $normalizers = [
            \JoliCode\Harvest\Api\Model\Contact::class => ContactNormalizer::class,

            \JoliCode\Harvest\Api\Model\ContactClient::class => ContactClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\Client::class => ClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\Company::class => CompanyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceMessage::class => InvoiceMessageNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceMessageRecipient::class => InvoiceMessageRecipientNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicePayment::class => InvoicePaymentNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicePaymentPaymentGateway::class => InvoicePaymentPaymentGatewayNormalizer::class,

            \JoliCode\Harvest\Api\Model\Invoice::class => InvoiceNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceClient::class => InvoiceClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceEstimate::class => InvoiceEstimateNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceRetainer::class => InvoiceRetainerNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceCreator::class => InvoiceCreatorNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceLineItem::class => InvoiceLineItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceLineItemProject::class => InvoiceLineItemProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceItemCategory::class => InvoiceItemCategoryNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateMessage::class => EstimateMessageNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateMessageRecipient::class => EstimateMessageRecipientNormalizer::class,

            \JoliCode\Harvest\Api\Model\Estimate::class => EstimateNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateClient::class => EstimateClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateCreator::class => EstimateCreatorNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateLineItem::class => EstimateLineItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateItemCategory::class => EstimateItemCategoryNormalizer::class,

            \JoliCode\Harvest\Api\Model\Expense::class => ExpenseNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseClient::class => ExpenseClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseProject::class => ExpenseProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseExpenseCategory::class => ExpenseExpenseCategoryNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseUser::class => ExpenseUserNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseReceipt::class => ExpenseReceiptNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseInvoice::class => ExpenseInvoiceNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseCategory::class => ExpenseCategoryNormalizer::class,

            \JoliCode\Harvest\Api\Model\Task::class => TaskNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntry::class => TimeEntryNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryUser::class => TimeEntryUserNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryClient::class => TimeEntryClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryProject::class => TimeEntryProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryTask::class => TimeEntryTaskNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryExternalReference::class => TimeEntryExternalReferenceNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryInvoice::class => TimeEntryInvoiceNormalizer::class,

            \JoliCode\Harvest\Api\Model\UserAssignment::class => UserAssignmentNormalizer::class,

            \JoliCode\Harvest\Api\Model\UserAssignmentProject::class => UserAssignmentProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\UserAssignmentUser::class => UserAssignmentUserNormalizer::class,

            \JoliCode\Harvest\Api\Model\TaskAssignment::class => TaskAssignmentNormalizer::class,

            \JoliCode\Harvest\Api\Model\TaskAssignmentProject::class => TaskAssignmentProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\TaskAssignmentTask::class => TaskAssignmentTaskNormalizer::class,

            \JoliCode\Harvest\Api\Model\Project::class => ProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectClient::class => ProjectClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\Role::class => RoleNormalizer::class,

            \JoliCode\Harvest\Api\Model\Teammate::class => TeammateNormalizer::class,

            \JoliCode\Harvest\Api\Model\BillableRate::class => BillableRateNormalizer::class,

            \JoliCode\Harvest\Api\Model\CostRate::class => CostRateNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectAssignment::class => ProjectAssignmentNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectAssignmentProject::class => ProjectAssignmentProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectAssignmentClient::class => ProjectAssignmentClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\User::class => UserNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseReportsResult::class => ExpenseReportsResultNormalizer::class,

            \JoliCode\Harvest\Api\Model\UninvoicedReportResult::class => UninvoicedReportResultNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeReportsResult::class => TimeReportsResultNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectBudgetReportResult::class => ProjectBudgetReportResultNormalizer::class,

            \JoliCode\Harvest\Api\Model\Contacts::class => ContactsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Clients::class => ClientsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Companies::class => CompaniesNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceMessages::class => InvoiceMessagesNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceMessageRecipients::class => InvoiceMessageRecipientsNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicePayments::class => InvoicePaymentsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Invoices::class => InvoicesNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceLineItems::class => InvoiceLineItemsNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceItemCategories::class => InvoiceItemCategoriesNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateMessages::class => EstimateMessagesNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateMessageRecipients::class => EstimateMessageRecipientsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Estimates::class => EstimatesNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateLineItems::class => EstimateLineItemsNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateItemCategories::class => EstimateItemCategoriesNormalizer::class,

            \JoliCode\Harvest\Api\Model\Expenses::class => ExpensesNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseCategories::class => ExpenseCategoriesNormalizer::class,

            \JoliCode\Harvest\Api\Model\Tasks::class => TasksNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntries::class => TimeEntriesNormalizer::class,

            \JoliCode\Harvest\Api\Model\UserAssignments::class => UserAssignmentsNormalizer::class,

            \JoliCode\Harvest\Api\Model\TaskAssignments::class => TaskAssignmentsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Projects::class => ProjectsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Roles::class => RolesNormalizer::class,

            \JoliCode\Harvest\Api\Model\Teammates::class => TeammatesNormalizer::class,

            \JoliCode\Harvest\Api\Model\BillableRates::class => BillableRatesNormalizer::class,

            \JoliCode\Harvest\Api\Model\CostRates::class => CostRatesNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectAssignments::class => ProjectAssignmentsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Users::class => UsersNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseReportsResults::class => ExpenseReportsResultsNormalizer::class,

            \JoliCode\Harvest\Api\Model\UninvoicedReportResults::class => UninvoicedReportResultsNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeReportsResults::class => TimeReportsResultsNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectBudgetReportResults::class => ProjectBudgetReportResultsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Error::class => ErrorNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceMessageSubjectAndBody::class => InvoiceMessageSubjectAndBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\PaginationLinks::class => PaginationLinksNormalizer::class,

            \JoliCode\Harvest\Api\Model\TeammatesPatchResponse::class => TeammatesPatchResponseNormalizer::class,

            \JoliCode\Harvest\Api\Model\ClientsPostBody::class => ClientsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ClientsClientIdPatchBody::class => ClientsClientIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\CompanyPatchBody::class => CompanyPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ContactsPostBody::class => ContactsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ContactsContactIdPatchBody::class => ContactsContactIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateItemCategoriesPostBody::class => EstimateItemCategoriesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateItemCategoriesEstimateItemCategoryIdPatchBody::class => EstimateItemCategoriesEstimateItemCategoryIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesPostBody::class => EstimatesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesPostBodyLineItemsItem::class => EstimatesPostBodyLineItemsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesEstimateIdPatchBody::class => EstimatesEstimateIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesEstimateIdPatchBodyLineItemsItem::class => EstimatesEstimateIdPatchBodyLineItemsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBody::class => EstimatesEstimateIdMessagesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBodyRecipientsItem::class => EstimatesEstimateIdMessagesPostBodyRecipientsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseCategoriesPostBody::class => ExpenseCategoriesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseCategoriesExpenseCategoryIdPatchBody::class => ExpenseCategoriesExpenseCategoryIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpensesPostBody::class => ExpensesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpensesExpenseIdPatchBody::class => ExpensesExpenseIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesPostBody::class => InvoiceItemCategoriesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody::class => InvoiceItemCategoriesInvoiceItemCategoryIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesPostBody::class => InvoicesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport::class => InvoicesPostBodyLineItemsImportNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportTime::class => InvoicesPostBodyLineItemsImportTimeNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportExpenses::class => InvoicesPostBodyLineItemsImportExpensesNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsItem::class => InvoicesPostBodyLineItemsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody::class => InvoicesInvoiceIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBodyLineItemsItem::class => InvoicesInvoiceIdPatchBodyLineItemsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody::class => InvoicesInvoiceIdMessagesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBodyRecipientsItem::class => InvoicesInvoiceIdMessagesPostBodyRecipientsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody::class => InvoicesInvoiceIdPaymentsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsPostBody::class => ProjectsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody::class => ProjectsProjectIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsPostBody::class => ProjectsProjectIdTaskAssignmentsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody::class => ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsPostBody::class => ProjectsProjectIdUserAssignmentsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody::class => ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\RolesPostBody::class => RolesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\RolesRoleIdPatchBody::class => RolesRoleIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\TasksPostBody::class => TasksPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody::class => TasksTaskIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntriesPostBody::class => TimeEntriesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntriesPostBodyExternalReference::class => TimeEntriesPostBodyExternalReferenceNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBody::class => TimeEntriesTimeEntryIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBodyExternalReference::class => TimeEntriesTimeEntryIdPatchBodyExternalReferenceNormalizer::class,

            \JoliCode\Harvest\Api\Model\UsersPostBody::class => UsersPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\UsersUserIdPatchBody::class => UsersUserIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\UsersUserIdBillableRatesPostBody::class => UsersUserIdBillableRatesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\UsersUserIdCostRatesPostBody::class => UsersUserIdCostRatesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\UsersUserIdTeammatesPatchBody::class => UsersUserIdTeammatesPatchBodyNormalizer::class,

            \Jane\Component\JsonSchemaRuntime\Reference::class => \JoliCode\Harvest\Api\Runtime\Normalizer\ReferenceNormalizer::class,
        ];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return \array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return \is_object($data) && \array_key_exists($data::class, $this->normalizers);
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[$object::class];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \JoliCode\Harvest\Api\Model\Contact::class => false,
                \JoliCode\Harvest\Api\Model\ContactClient::class => false,
                \JoliCode\Harvest\Api\Model\Client::class => false,
                \JoliCode\Harvest\Api\Model\Company::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceMessage::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceMessageRecipient::class => false,
                \JoliCode\Harvest\Api\Model\InvoicePayment::class => false,
                \JoliCode\Harvest\Api\Model\InvoicePaymentPaymentGateway::class => false,
                \JoliCode\Harvest\Api\Model\Invoice::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceClient::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceEstimate::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceRetainer::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceCreator::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceLineItem::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceLineItemProject::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceItemCategory::class => false,
                \JoliCode\Harvest\Api\Model\EstimateMessage::class => false,
                \JoliCode\Harvest\Api\Model\EstimateMessageRecipient::class => false,
                \JoliCode\Harvest\Api\Model\Estimate::class => false,
                \JoliCode\Harvest\Api\Model\EstimateClient::class => false,
                \JoliCode\Harvest\Api\Model\EstimateCreator::class => false,
                \JoliCode\Harvest\Api\Model\EstimateLineItem::class => false,
                \JoliCode\Harvest\Api\Model\EstimateItemCategory::class => false,
                \JoliCode\Harvest\Api\Model\Expense::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseClient::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseProject::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseExpenseCategory::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseUser::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseReceipt::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseInvoice::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseCategory::class => false,
                \JoliCode\Harvest\Api\Model\Task::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntry::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryUser::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryClient::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryProject::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryTask::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryExternalReference::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryInvoice::class => false,
                \JoliCode\Harvest\Api\Model\UserAssignment::class => false,
                \JoliCode\Harvest\Api\Model\UserAssignmentProject::class => false,
                \JoliCode\Harvest\Api\Model\UserAssignmentUser::class => false,
                \JoliCode\Harvest\Api\Model\TaskAssignment::class => false,
                \JoliCode\Harvest\Api\Model\TaskAssignmentProject::class => false,
                \JoliCode\Harvest\Api\Model\TaskAssignmentTask::class => false,
                \JoliCode\Harvest\Api\Model\Project::class => false,
                \JoliCode\Harvest\Api\Model\ProjectClient::class => false,
                \JoliCode\Harvest\Api\Model\Role::class => false,
                \JoliCode\Harvest\Api\Model\Teammate::class => false,
                \JoliCode\Harvest\Api\Model\BillableRate::class => false,
                \JoliCode\Harvest\Api\Model\CostRate::class => false,
                \JoliCode\Harvest\Api\Model\ProjectAssignment::class => false,
                \JoliCode\Harvest\Api\Model\ProjectAssignmentProject::class => false,
                \JoliCode\Harvest\Api\Model\ProjectAssignmentClient::class => false,
                \JoliCode\Harvest\Api\Model\User::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseReportsResult::class => false,
                \JoliCode\Harvest\Api\Model\UninvoicedReportResult::class => false,
                \JoliCode\Harvest\Api\Model\TimeReportsResult::class => false,
                \JoliCode\Harvest\Api\Model\ProjectBudgetReportResult::class => false,
                \JoliCode\Harvest\Api\Model\Contacts::class => false,
                \JoliCode\Harvest\Api\Model\Clients::class => false,
                \JoliCode\Harvest\Api\Model\Companies::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceMessages::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceMessageRecipients::class => false,
                \JoliCode\Harvest\Api\Model\InvoicePayments::class => false,
                \JoliCode\Harvest\Api\Model\Invoices::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceLineItems::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceItemCategories::class => false,
                \JoliCode\Harvest\Api\Model\EstimateMessages::class => false,
                \JoliCode\Harvest\Api\Model\EstimateMessageRecipients::class => false,
                \JoliCode\Harvest\Api\Model\Estimates::class => false,
                \JoliCode\Harvest\Api\Model\EstimateLineItems::class => false,
                \JoliCode\Harvest\Api\Model\EstimateItemCategories::class => false,
                \JoliCode\Harvest\Api\Model\Expenses::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseCategories::class => false,
                \JoliCode\Harvest\Api\Model\Tasks::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntries::class => false,
                \JoliCode\Harvest\Api\Model\UserAssignments::class => false,
                \JoliCode\Harvest\Api\Model\TaskAssignments::class => false,
                \JoliCode\Harvest\Api\Model\Projects::class => false,
                \JoliCode\Harvest\Api\Model\Roles::class => false,
                \JoliCode\Harvest\Api\Model\Teammates::class => false,
                \JoliCode\Harvest\Api\Model\BillableRates::class => false,
                \JoliCode\Harvest\Api\Model\CostRates::class => false,
                \JoliCode\Harvest\Api\Model\ProjectAssignments::class => false,
                \JoliCode\Harvest\Api\Model\Users::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseReportsResults::class => false,
                \JoliCode\Harvest\Api\Model\UninvoicedReportResults::class => false,
                \JoliCode\Harvest\Api\Model\TimeReportsResults::class => false,
                \JoliCode\Harvest\Api\Model\ProjectBudgetReportResults::class => false,
                \JoliCode\Harvest\Api\Model\Error::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceMessageSubjectAndBody::class => false,
                \JoliCode\Harvest\Api\Model\PaginationLinks::class => false,
                \JoliCode\Harvest\Api\Model\TeammatesPatchResponse::class => false,
                \JoliCode\Harvest\Api\Model\ClientsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ClientsClientIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\CompanyPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\ContactsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ContactsContactIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimateItemCategoriesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimateItemCategoriesEstimateItemCategoryIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesPostBodyLineItemsItem::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesEstimateIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesEstimateIdPatchBodyLineItemsItem::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBodyRecipientsItem::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseCategoriesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseCategoriesExpenseCategoryIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\ExpensesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ExpensesExpenseIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportTime::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportExpenses::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsItem::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBodyLineItemsItem::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBodyRecipientsItem::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\RolesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\RolesRoleIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\TasksPostBody::class => false,
                \JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntriesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntriesPostBodyExternalReference::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBodyExternalReference::class => false,
                \JoliCode\Harvest\Api\Model\UsersPostBody::class => false,
                \JoliCode\Harvest\Api\Model\UsersUserIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\UsersUserIdBillableRatesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\UsersUserIdCostRatesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\UsersUserIdTeammatesPatchBody::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
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
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;
        protected $normalizers = [
            \JoliCode\Harvest\Api\Model\Contact::class => ContactNormalizer::class,

            \JoliCode\Harvest\Api\Model\ContactClient::class => ContactClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\Client::class => ClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\Company::class => CompanyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceMessage::class => InvoiceMessageNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceMessageRecipient::class => InvoiceMessageRecipientNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicePayment::class => InvoicePaymentNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicePaymentPaymentGateway::class => InvoicePaymentPaymentGatewayNormalizer::class,

            \JoliCode\Harvest\Api\Model\Invoice::class => InvoiceNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceClient::class => InvoiceClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceEstimate::class => InvoiceEstimateNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceRetainer::class => InvoiceRetainerNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceCreator::class => InvoiceCreatorNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceLineItem::class => InvoiceLineItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceLineItemProject::class => InvoiceLineItemProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceItemCategory::class => InvoiceItemCategoryNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateMessage::class => EstimateMessageNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateMessageRecipient::class => EstimateMessageRecipientNormalizer::class,

            \JoliCode\Harvest\Api\Model\Estimate::class => EstimateNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateClient::class => EstimateClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateCreator::class => EstimateCreatorNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateLineItem::class => EstimateLineItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateItemCategory::class => EstimateItemCategoryNormalizer::class,

            \JoliCode\Harvest\Api\Model\Expense::class => ExpenseNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseClient::class => ExpenseClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseProject::class => ExpenseProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseExpenseCategory::class => ExpenseExpenseCategoryNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseUser::class => ExpenseUserNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseReceipt::class => ExpenseReceiptNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseInvoice::class => ExpenseInvoiceNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseCategory::class => ExpenseCategoryNormalizer::class,

            \JoliCode\Harvest\Api\Model\Task::class => TaskNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntry::class => TimeEntryNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryUser::class => TimeEntryUserNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryClient::class => TimeEntryClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryProject::class => TimeEntryProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryTask::class => TimeEntryTaskNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryExternalReference::class => TimeEntryExternalReferenceNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntryInvoice::class => TimeEntryInvoiceNormalizer::class,

            \JoliCode\Harvest\Api\Model\UserAssignment::class => UserAssignmentNormalizer::class,

            \JoliCode\Harvest\Api\Model\UserAssignmentProject::class => UserAssignmentProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\UserAssignmentUser::class => UserAssignmentUserNormalizer::class,

            \JoliCode\Harvest\Api\Model\TaskAssignment::class => TaskAssignmentNormalizer::class,

            \JoliCode\Harvest\Api\Model\TaskAssignmentProject::class => TaskAssignmentProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\TaskAssignmentTask::class => TaskAssignmentTaskNormalizer::class,

            \JoliCode\Harvest\Api\Model\Project::class => ProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectClient::class => ProjectClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\Role::class => RoleNormalizer::class,

            \JoliCode\Harvest\Api\Model\Teammate::class => TeammateNormalizer::class,

            \JoliCode\Harvest\Api\Model\BillableRate::class => BillableRateNormalizer::class,

            \JoliCode\Harvest\Api\Model\CostRate::class => CostRateNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectAssignment::class => ProjectAssignmentNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectAssignmentProject::class => ProjectAssignmentProjectNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectAssignmentClient::class => ProjectAssignmentClientNormalizer::class,

            \JoliCode\Harvest\Api\Model\User::class => UserNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseReportsResult::class => ExpenseReportsResultNormalizer::class,

            \JoliCode\Harvest\Api\Model\UninvoicedReportResult::class => UninvoicedReportResultNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeReportsResult::class => TimeReportsResultNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectBudgetReportResult::class => ProjectBudgetReportResultNormalizer::class,

            \JoliCode\Harvest\Api\Model\Contacts::class => ContactsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Clients::class => ClientsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Companies::class => CompaniesNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceMessages::class => InvoiceMessagesNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceMessageRecipients::class => InvoiceMessageRecipientsNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicePayments::class => InvoicePaymentsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Invoices::class => InvoicesNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceLineItems::class => InvoiceLineItemsNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceItemCategories::class => InvoiceItemCategoriesNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateMessages::class => EstimateMessagesNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateMessageRecipients::class => EstimateMessageRecipientsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Estimates::class => EstimatesNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateLineItems::class => EstimateLineItemsNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateItemCategories::class => EstimateItemCategoriesNormalizer::class,

            \JoliCode\Harvest\Api\Model\Expenses::class => ExpensesNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseCategories::class => ExpenseCategoriesNormalizer::class,

            \JoliCode\Harvest\Api\Model\Tasks::class => TasksNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntries::class => TimeEntriesNormalizer::class,

            \JoliCode\Harvest\Api\Model\UserAssignments::class => UserAssignmentsNormalizer::class,

            \JoliCode\Harvest\Api\Model\TaskAssignments::class => TaskAssignmentsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Projects::class => ProjectsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Roles::class => RolesNormalizer::class,

            \JoliCode\Harvest\Api\Model\Teammates::class => TeammatesNormalizer::class,

            \JoliCode\Harvest\Api\Model\BillableRates::class => BillableRatesNormalizer::class,

            \JoliCode\Harvest\Api\Model\CostRates::class => CostRatesNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectAssignments::class => ProjectAssignmentsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Users::class => UsersNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseReportsResults::class => ExpenseReportsResultsNormalizer::class,

            \JoliCode\Harvest\Api\Model\UninvoicedReportResults::class => UninvoicedReportResultsNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeReportsResults::class => TimeReportsResultsNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectBudgetReportResults::class => ProjectBudgetReportResultsNormalizer::class,

            \JoliCode\Harvest\Api\Model\Error::class => ErrorNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceMessageSubjectAndBody::class => InvoiceMessageSubjectAndBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\PaginationLinks::class => PaginationLinksNormalizer::class,

            \JoliCode\Harvest\Api\Model\TeammatesPatchResponse::class => TeammatesPatchResponseNormalizer::class,

            \JoliCode\Harvest\Api\Model\ClientsPostBody::class => ClientsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ClientsClientIdPatchBody::class => ClientsClientIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\CompanyPatchBody::class => CompanyPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ContactsPostBody::class => ContactsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ContactsContactIdPatchBody::class => ContactsContactIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateItemCategoriesPostBody::class => EstimateItemCategoriesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimateItemCategoriesEstimateItemCategoryIdPatchBody::class => EstimateItemCategoriesEstimateItemCategoryIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesPostBody::class => EstimatesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesPostBodyLineItemsItem::class => EstimatesPostBodyLineItemsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesEstimateIdPatchBody::class => EstimatesEstimateIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesEstimateIdPatchBodyLineItemsItem::class => EstimatesEstimateIdPatchBodyLineItemsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBody::class => EstimatesEstimateIdMessagesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBodyRecipientsItem::class => EstimatesEstimateIdMessagesPostBodyRecipientsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseCategoriesPostBody::class => ExpenseCategoriesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpenseCategoriesExpenseCategoryIdPatchBody::class => ExpenseCategoriesExpenseCategoryIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpensesPostBody::class => ExpensesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ExpensesExpenseIdPatchBody::class => ExpensesExpenseIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesPostBody::class => InvoiceItemCategoriesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody::class => InvoiceItemCategoriesInvoiceItemCategoryIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesPostBody::class => InvoicesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport::class => InvoicesPostBodyLineItemsImportNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportTime::class => InvoicesPostBodyLineItemsImportTimeNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportExpenses::class => InvoicesPostBodyLineItemsImportExpensesNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsItem::class => InvoicesPostBodyLineItemsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody::class => InvoicesInvoiceIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBodyLineItemsItem::class => InvoicesInvoiceIdPatchBodyLineItemsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody::class => InvoicesInvoiceIdMessagesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBodyRecipientsItem::class => InvoicesInvoiceIdMessagesPostBodyRecipientsItemNormalizer::class,

            \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody::class => InvoicesInvoiceIdPaymentsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsPostBody::class => ProjectsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody::class => ProjectsProjectIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsPostBody::class => ProjectsProjectIdTaskAssignmentsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody::class => ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsPostBody::class => ProjectsProjectIdUserAssignmentsPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody::class => ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\RolesPostBody::class => RolesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\RolesRoleIdPatchBody::class => RolesRoleIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\TasksPostBody::class => TasksPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody::class => TasksTaskIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntriesPostBody::class => TimeEntriesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntriesPostBodyExternalReference::class => TimeEntriesPostBodyExternalReferenceNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBody::class => TimeEntriesTimeEntryIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBodyExternalReference::class => TimeEntriesTimeEntryIdPatchBodyExternalReferenceNormalizer::class,

            \JoliCode\Harvest\Api\Model\UsersPostBody::class => UsersPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\UsersUserIdPatchBody::class => UsersUserIdPatchBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\UsersUserIdBillableRatesPostBody::class => UsersUserIdBillableRatesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\UsersUserIdCostRatesPostBody::class => UsersUserIdCostRatesPostBodyNormalizer::class,

            \JoliCode\Harvest\Api\Model\UsersUserIdTeammatesPatchBody::class => UsersUserIdTeammatesPatchBodyNormalizer::class,

            \Jane\Component\JsonSchemaRuntime\Reference::class => \JoliCode\Harvest\Api\Runtime\Normalizer\ReferenceNormalizer::class,
        ];
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
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[$object::class];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \JoliCode\Harvest\Api\Model\Contact::class => false,
                \JoliCode\Harvest\Api\Model\ContactClient::class => false,
                \JoliCode\Harvest\Api\Model\Client::class => false,
                \JoliCode\Harvest\Api\Model\Company::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceMessage::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceMessageRecipient::class => false,
                \JoliCode\Harvest\Api\Model\InvoicePayment::class => false,
                \JoliCode\Harvest\Api\Model\InvoicePaymentPaymentGateway::class => false,
                \JoliCode\Harvest\Api\Model\Invoice::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceClient::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceEstimate::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceRetainer::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceCreator::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceLineItem::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceLineItemProject::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceItemCategory::class => false,
                \JoliCode\Harvest\Api\Model\EstimateMessage::class => false,
                \JoliCode\Harvest\Api\Model\EstimateMessageRecipient::class => false,
                \JoliCode\Harvest\Api\Model\Estimate::class => false,
                \JoliCode\Harvest\Api\Model\EstimateClient::class => false,
                \JoliCode\Harvest\Api\Model\EstimateCreator::class => false,
                \JoliCode\Harvest\Api\Model\EstimateLineItem::class => false,
                \JoliCode\Harvest\Api\Model\EstimateItemCategory::class => false,
                \JoliCode\Harvest\Api\Model\Expense::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseClient::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseProject::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseExpenseCategory::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseUser::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseReceipt::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseInvoice::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseCategory::class => false,
                \JoliCode\Harvest\Api\Model\Task::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntry::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryUser::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryClient::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryProject::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryTask::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryExternalReference::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntryInvoice::class => false,
                \JoliCode\Harvest\Api\Model\UserAssignment::class => false,
                \JoliCode\Harvest\Api\Model\UserAssignmentProject::class => false,
                \JoliCode\Harvest\Api\Model\UserAssignmentUser::class => false,
                \JoliCode\Harvest\Api\Model\TaskAssignment::class => false,
                \JoliCode\Harvest\Api\Model\TaskAssignmentProject::class => false,
                \JoliCode\Harvest\Api\Model\TaskAssignmentTask::class => false,
                \JoliCode\Harvest\Api\Model\Project::class => false,
                \JoliCode\Harvest\Api\Model\ProjectClient::class => false,
                \JoliCode\Harvest\Api\Model\Role::class => false,
                \JoliCode\Harvest\Api\Model\Teammate::class => false,
                \JoliCode\Harvest\Api\Model\BillableRate::class => false,
                \JoliCode\Harvest\Api\Model\CostRate::class => false,
                \JoliCode\Harvest\Api\Model\ProjectAssignment::class => false,
                \JoliCode\Harvest\Api\Model\ProjectAssignmentProject::class => false,
                \JoliCode\Harvest\Api\Model\ProjectAssignmentClient::class => false,
                \JoliCode\Harvest\Api\Model\User::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseReportsResult::class => false,
                \JoliCode\Harvest\Api\Model\UninvoicedReportResult::class => false,
                \JoliCode\Harvest\Api\Model\TimeReportsResult::class => false,
                \JoliCode\Harvest\Api\Model\ProjectBudgetReportResult::class => false,
                \JoliCode\Harvest\Api\Model\Contacts::class => false,
                \JoliCode\Harvest\Api\Model\Clients::class => false,
                \JoliCode\Harvest\Api\Model\Companies::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceMessages::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceMessageRecipients::class => false,
                \JoliCode\Harvest\Api\Model\InvoicePayments::class => false,
                \JoliCode\Harvest\Api\Model\Invoices::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceLineItems::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceItemCategories::class => false,
                \JoliCode\Harvest\Api\Model\EstimateMessages::class => false,
                \JoliCode\Harvest\Api\Model\EstimateMessageRecipients::class => false,
                \JoliCode\Harvest\Api\Model\Estimates::class => false,
                \JoliCode\Harvest\Api\Model\EstimateLineItems::class => false,
                \JoliCode\Harvest\Api\Model\EstimateItemCategories::class => false,
                \JoliCode\Harvest\Api\Model\Expenses::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseCategories::class => false,
                \JoliCode\Harvest\Api\Model\Tasks::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntries::class => false,
                \JoliCode\Harvest\Api\Model\UserAssignments::class => false,
                \JoliCode\Harvest\Api\Model\TaskAssignments::class => false,
                \JoliCode\Harvest\Api\Model\Projects::class => false,
                \JoliCode\Harvest\Api\Model\Roles::class => false,
                \JoliCode\Harvest\Api\Model\Teammates::class => false,
                \JoliCode\Harvest\Api\Model\BillableRates::class => false,
                \JoliCode\Harvest\Api\Model\CostRates::class => false,
                \JoliCode\Harvest\Api\Model\ProjectAssignments::class => false,
                \JoliCode\Harvest\Api\Model\Users::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseReportsResults::class => false,
                \JoliCode\Harvest\Api\Model\UninvoicedReportResults::class => false,
                \JoliCode\Harvest\Api\Model\TimeReportsResults::class => false,
                \JoliCode\Harvest\Api\Model\ProjectBudgetReportResults::class => false,
                \JoliCode\Harvest\Api\Model\Error::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceMessageSubjectAndBody::class => false,
                \JoliCode\Harvest\Api\Model\PaginationLinks::class => false,
                \JoliCode\Harvest\Api\Model\TeammatesPatchResponse::class => false,
                \JoliCode\Harvest\Api\Model\ClientsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ClientsClientIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\CompanyPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\ContactsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ContactsContactIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimateItemCategoriesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimateItemCategoriesEstimateItemCategoryIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesPostBodyLineItemsItem::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesEstimateIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesEstimateIdPatchBodyLineItemsItem::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBodyRecipientsItem::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseCategoriesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ExpenseCategoriesExpenseCategoryIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\ExpensesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ExpensesExpenseIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportTime::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportExpenses::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsItem::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBodyLineItemsItem::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBodyRecipientsItem::class => false,
                \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsPostBody::class => false,
                \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\RolesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\RolesRoleIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\TasksPostBody::class => false,
                \JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntriesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntriesPostBodyExternalReference::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBodyExternalReference::class => false,
                \JoliCode\Harvest\Api\Model\UsersPostBody::class => false,
                \JoliCode\Harvest\Api\Model\UsersUserIdPatchBody::class => false,
                \JoliCode\Harvest\Api\Model\UsersUserIdBillableRatesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\UsersUserIdCostRatesPostBody::class => false,
                \JoliCode\Harvest\Api\Model\UsersUserIdTeammatesPatchBody::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
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
}
