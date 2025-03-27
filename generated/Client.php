<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api;

class Client extends Runtime\Client\Client
{
    /**
     * Returns a list of your clients. The clients are returned sorted by creation date, with the most recently created clients appearing first.
     *
     * The response contains an object with a clients property that contains an array of up to per_page clients. Each entry in the array is a separate client object. If no more clients are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your clients.
     *
     * @param array $queryParameters {
     *
     * @var bool   $is_active pass true to only return active clients and false to return inactive clients
     * @var string $updated_since only return clients that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Clients|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listClients(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListClients($queryParameters), $fetch);
    }

    /**
     * Creates a new client object. Returns a client object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Client|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createClient(Model\ClientsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateClient($requestBody), $fetch);
    }

    /**
     * Delete a client. Deleting a client is only possible if it has no projects, invoices, or estimates associated with it. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteClient(string $clientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteClient($clientId), $fetch);
    }

    /**
     * Retrieves the client with the given ID. Returns a client object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Client|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveClient(string $clientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveClient($clientId), $fetch);
    }

    /**
     * Updates the specific client by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a client object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Client|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateClient(string $clientId, Model\ClientsClientIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateClient($clientId, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Company|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveCompany(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveCompany(), $fetch);
    }

    /**
     * Updates the company setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a company object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Company|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateCompany(Model\CompanyPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateCompany($requestBody), $fetch);
    }

    /**
     * Returns a list of your contacts. The contacts are returned sorted by creation date, with the most recently created contacts appearing first.
     *
     * The response contains an object with a contacts property that contains an array of up to per_page contacts. Each entry in the array is a separate contact object. If no more contacts are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your contacts.
     *
     * @param array $queryParameters {
     *
     * @var int    $client_id only return contacts belonging to the client with the given ID
     * @var string $updated_since only return contacts that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Contacts|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listContacts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListContacts($queryParameters), $fetch);
    }

    /**
     * Creates a new contact object. Returns a contact object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Contact|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createContact(Model\ContactsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateContact($requestBody), $fetch);
    }

    /**
     * Delete a contact. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteContact(string $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteContact($contactId), $fetch);
    }

    /**
     * Retrieves the contact with the given ID. Returns a contact object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Contact|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveContact(string $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveContact($contactId), $fetch);
    }

    /**
     * Updates the specific contact by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a contact object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Contact|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateContact(string $contactId, Model\ContactsContactIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateContact($contactId, $requestBody), $fetch);
    }

    /**
     * Returns a list of your estimate item categories. The estimate item categories are returned sorted by creation date, with the most recently created estimate item categories appearing first.
     *
     * The response contains an object with a estimate_item_categories property that contains an array of up to per_page estimate item categories. Each entry in the array is a separate estimate item category object. If no more estimate item categories are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your estimate item categories.
     *
     * @param array $queryParameters {
     *
     * @var string $updated_since only return estimate item categories that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\EstimateItemCategories|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listEstimateItemCategories(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListEstimateItemCategories($queryParameters), $fetch);
    }

    /**
     * Creates a new estimate item category object. Returns an estimate item category object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\EstimateItemCategory|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createEstimateItemCategory(Model\EstimateItemCategoriesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateEstimateItemCategory($requestBody), $fetch);
    }

    /**
     * Delete an estimate item category. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteEstimateItemCategory(string $estimateItemCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteEstimateItemCategory($estimateItemCategoryId), $fetch);
    }

    /**
     * Retrieves the estimate item category with the given ID. Returns an estimate item category object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\EstimateItemCategory|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveEstimateItemCategory(string $estimateItemCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveEstimateItemCategory($estimateItemCategoryId), $fetch);
    }

    /**
     * Updates the specific estimate item category by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an estimate item category object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\EstimateItemCategory|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateEstimateItemCategory(string $estimateItemCategoryId, Model\EstimateItemCategoriesEstimateItemCategoryIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateEstimateItemCategory($estimateItemCategoryId, $requestBody), $fetch);
    }

    /**
     * Returns a list of your estimates. The estimates are returned sorted by issue date, with the most recently issued estimates appearing first.
     *
     * The response contains an object with a estimates property that contains an array of up to per_page estimates. Each entry in the array is a separate estimate object. If no more estimates are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your estimates.
     *
     * @param array $queryParameters {
     *
     * @var int    $client_id only return estimates belonging to the client with the given ID
     * @var string $updated_since only return estimates that have been updated since the given date and time
     * @var string $from only return estimates with an issue_date on or after the given date
     * @var string $to only return estimates with an issue_date on or before the given date
     * @var string $state Only return estimates with a state matching the value provided. Options: draft, sent, accepted, or declined.
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Estimates|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listEstimates(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListEstimates($queryParameters), $fetch);
    }

    /**
     * Creates a new estimate object. Returns an estimate object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Estimate|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createEstimate(Model\EstimatesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateEstimate($requestBody), $fetch);
    }

    /**
     * Delete an estimate. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteEstimate(string $estimateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteEstimate($estimateId), $fetch);
    }

    /**
     * Retrieves the estimate with the given ID. Returns an estimate object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Estimate|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveEstimate(string $estimateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveEstimate($estimateId), $fetch);
    }

    /**
     * Updates the specific estimate by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an estimate object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Estimate|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateEstimate(string $estimateId, Model\EstimatesEstimateIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateEstimate($estimateId, $requestBody), $fetch);
    }

    /**
     * Returns a list of messages associated with a given estimate. The estimate messages are returned sorted by creation date, with the most recently created messages appearing first.
     *
     * The response contains an object with an estimate_messages property that contains an array of up to per_page messages. Each entry in the array is a separate message object. If no more messages are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your messages.
     *
     * @param array $queryParameters {
     *
     * @var string $updated_since only return estimate messages that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\EstimateMessages|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listMessagesForEstimate(string $estimateId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListMessagesForEstimate($estimateId, $queryParameters), $fetch);
    }

    /**
     * Creates a new estimate message object. Returns an estimate message object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\EstimateMessage|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createEstimateMessage(string $estimateId, Model\EstimatesEstimateIdMessagesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateEstimateMessage($estimateId, $requestBody), $fetch);
    }

    /**
     * Delete an estimate message. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteEstimateMessage(string $estimateId, string $messageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteEstimateMessage($estimateId, $messageId), $fetch);
    }

    /**
     * Returns a list of your expense categories. The expense categories are returned sorted by creation date, with the most recently created expense categories appearing first.
     *
     * The response contains an object with a expense_categories property that contains an array of up to per_page expense categories. Each entry in the array is a separate expense category object. If no more expense categories are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your expense categories.
     *
     * @param array $queryParameters {
     *
     * @var bool   $is_active pass true to only return active expense categories and false to return inactive expense categories
     * @var string $updated_since only return expense categories that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\ExpenseCategories|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listExpenseCategories(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListExpenseCategories($queryParameters), $fetch);
    }

    /**
     * Creates a new expense category object. Returns an expense category object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\ExpenseCategory|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createExpenseCategory(Model\ExpenseCategoriesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateExpenseCategory($requestBody), $fetch);
    }

    /**
     * Delete an expense category. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteExpenseCategory(string $expenseCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteExpenseCategory($expenseCategoryId), $fetch);
    }

    /**
     * Retrieves the expense category with the given ID. Returns an expense category object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\ExpenseCategory|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveExpenseCategory(string $expenseCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveExpenseCategory($expenseCategoryId), $fetch);
    }

    /**
     * Updates the specific expense category by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an expense category object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\ExpenseCategory|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateExpenseCategory(string $expenseCategoryId, Model\ExpenseCategoriesExpenseCategoryIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateExpenseCategory($expenseCategoryId, $requestBody), $fetch);
    }

    /**
     * Returns a list of your expenses. If accessing this endpoint as an Administrator, all expenses in the account will be returned. If accessing this endpoint as a Manager, all expenses for assigned teammates and managed projects will be returned. The expenses are returned sorted by the spent_at date, with the most recent expenses appearing first.
     *
     * The response contains an object with a expenses property that contains an array of up to per_page expenses. Each entry in the array is a separate expense object. If no more expenses are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your expenses.
     *
     * @param array $queryParameters {
     *
     * @var int    $user_id only return expenses belonging to the user with the given ID
     * @var int    $client_id only return expenses belonging to the client with the given ID
     * @var int    $project_id only return expenses belonging to the project with the given ID
     * @var bool   $is_billed pass true to only return expenses that have been invoiced and false to return expenses that have not been invoiced
     * @var string $updated_since only return expenses that have been updated since the given date and time
     * @var string $from only return expenses with a spent_date on or after the given date
     * @var string $to only return expenses with a spent_date on or before the given date
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Expenses|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listExpenses(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListExpenses($queryParameters), $fetch);
    }

    /**
     * Creates a new expense object. Returns an expense object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Expense|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createExpense(Model\ExpensesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateExpense($requestBody), $fetch);
    }

    /**
     * Delete an expense. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteExpense(string $expenseId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteExpense($expenseId), $fetch);
    }

    /**
     * Retrieves the expense with the given ID. Returns an expense object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Expense|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveExpense(string $expenseId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveExpense($expenseId), $fetch);
    }

    /**
     * Updates the specific expense by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an expense object and a 200 OK response code if the call succeeded.
     *
     * Note that changes to project_id and expense_category_id will be silently dropped if the expense is locked. Users with sufficient permissions are able to update the rest of a locked expense’s attributes.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Expense|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateExpense(string $expenseId, Model\ExpensesExpenseIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateExpense($expenseId, $requestBody), $fetch);
    }

    /**
     * Returns a list of your invoice item categories. The invoice item categories are returned sorted by creation date, with the most recently created invoice item categories appearing first.
     *
     * The response contains an object with a invoice_item_categories property that contains an array of up to per_page invoice item categories. Each entry in the array is a separate invoice item category object. If no more invoice item categories are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your invoice item categories.
     *
     * @param array $queryParameters {
     *
     * @var string $updated_since only return invoice item categories that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\InvoiceItemCategories|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listInvoiceItemCategories(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListInvoiceItemCategories($queryParameters), $fetch);
    }

    /**
     * Creates a new invoice item category object. Returns an invoice item category object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\InvoiceItemCategory|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createInvoiceItemCategory(Model\InvoiceItemCategoriesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateInvoiceItemCategory($requestBody), $fetch);
    }

    /**
     * Delete an invoice item category. Deleting an invoice item category is only possible if use_as_service and use_as_expense are both false. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteInvoiceItemCategory(string $invoiceItemCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteInvoiceItemCategory($invoiceItemCategoryId), $fetch);
    }

    /**
     * Retrieves the invoice item category with the given ID. Returns an invoice item category object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\InvoiceItemCategory|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveInvoiceItemCategory(string $invoiceItemCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveInvoiceItemCategory($invoiceItemCategoryId), $fetch);
    }

    /**
     * Updates the specific invoice item category by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an invoice item category object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\InvoiceItemCategory|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateInvoiceItemCategory(string $invoiceItemCategoryId, Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateInvoiceItemCategory($invoiceItemCategoryId, $requestBody), $fetch);
    }

    /**
     * Returns a list of your invoices. The invoices are returned sorted by issue date, with the most recently issued invoices appearing first.
     *
     * The response contains an object with a invoices property that contains an array of up to per_page invoices. Each entry in the array is a separate invoice object. If no more invoices are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your invoices.
     *
     * @param array $queryParameters {
     *
     * @var int    $client_id only return invoices belonging to the client with the given ID
     * @var int    $project_id only return invoices associated with the project with the given ID
     * @var string $updated_since only return invoices that have been updated since the given date and time
     * @var string $from only return invoices with an issue_date on or after the given date
     * @var string $to only return invoices with an issue_date on or before the given date
     * @var string $state Only return invoices with a state matching the value provided. Options: draft, open, paid, or closed.
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 100)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Invoices|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listInvoices(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListInvoices($queryParameters), $fetch);
    }

    /**
     * Creates a new invoice object. Returns an invoice object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Invoice|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createInvoice(Model\InvoicesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateInvoice($requestBody), $fetch);
    }

    /**
     * Delete an invoice. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteInvoice(string $invoiceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteInvoice($invoiceId), $fetch);
    }

    /**
     * Retrieves the invoice with the given ID. Returns an invoice object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Invoice|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveInvoice(string $invoiceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveInvoice($invoiceId), $fetch);
    }

    /**
     * Updates the specific invoice by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an invoice object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Invoice|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateInvoice(string $invoiceId, Model\InvoicesInvoiceIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateInvoice($invoiceId, $requestBody), $fetch);
    }

    /**
     * Returns a list of messages associated with a given invoice. The invoice messages are returned sorted by creation date, with the most recently created messages appearing first.
     *
     * The response contains an object with an invoice_messages property that contains an array of up to per_page messages. Each entry in the array is a separate message object. If no more messages are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your messages.
     *
     * @param array $queryParameters {
     *
     * @var string $updated_since only return invoice messages that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\InvoiceMessages|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listMessagesForInvoice(string $invoiceId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListMessagesForInvoice($invoiceId, $queryParameters), $fetch);
    }

    /**
     * Creates a new invoice message object and sends it. Returns an invoice message object and a 201 Created response code if the call succeeded.
     *
     * A note about the optional event_type parameter: If event_type is omitted in a request, its default value of null means the message will be sent. In such a request, if the recipients array is omitted or empty and send_me_a_copy is also omitted or set to false, the request will fail because the message has no recipients. When omitting event_type to create and send a message, be sure to include a recipients array as a parameter or ensure the send_me_a_copy parameter is included and set to true.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\InvoiceMessage|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createInvoiceMessage(string $invoiceId, Model\InvoicesInvoiceIdMessagesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateInvoiceMessage($invoiceId, $requestBody), $fetch);
    }

    /**
     * Returns the subject and body text as configured in Harvest of an invoice message for a specific invoice and a 200 OK response code if the call succeeded. Does not create the invoice message. If no parameters are passed, will return the subject and body of a general invoice message for the specific invoice.
     *
     * @param array $queryParameters {
     *
     * @var bool $thank_you set to true to return the subject and body of a thank-you invoice message for the specific invoice
     * @var bool $reminder Set to true to return the subject and body of a reminder invoice message for the specific invoice.
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\InvoiceMessageSubjectAndBody|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveInvoiceMessageSubjectAndBodyForSpecificInvoice(string $invoiceId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveInvoiceMessageSubjectAndBodyForSpecificInvoice($invoiceId, $queryParameters), $fetch);
    }

    /**
     * Delete an invoice message. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteInvoiceMessage(string $invoiceId, string $messageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteInvoiceMessage($invoiceId, $messageId), $fetch);
    }

    /**
     * Returns a list of payments associate with a given invoice. The payments are returned sorted by creation date, with the most recently created payments appearing first.
     *
     * The response contains an object with an invoice_payments property that contains an array of up to per_page payments. Each entry in the array is a separate payment object. If no more payments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your payments.
     *
     * @param array $queryParameters {
     *
     * @var string $updated_since only return invoice payments that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\InvoicePayments|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listPaymentsForInvoice(string $invoiceId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListPaymentsForInvoice($invoiceId, $queryParameters), $fetch);
    }

    /**
     * Creates a new invoice payment object. Returns an invoice payment object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\InvoicePayment|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createInvoicePayment(string $invoiceId, Model\InvoicesInvoiceIdPaymentsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateInvoicePayment($invoiceId, $requestBody), $fetch);
    }

    /**
     * Delete an invoice payment. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteInvoicePayment(string $invoiceId, string $paymentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteInvoicePayment($invoiceId, $paymentId), $fetch);
    }

    /**
     * Returns a list of your projects. The projects are returned sorted by creation date, with the most recently created projects appearing first.
     *
     * The response contains an object with a projects property that contains an array of up to per_page projects. Each entry in the array is a separate project object. If no more projects are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your projects.
     *
     * @param array $queryParameters {
     *
     * @var bool   $is_active pass true to only return active projects and false to return inactive projects
     * @var int    $client_id only return projects belonging to the client with the given ID
     * @var string $updated_since only return projects that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Projects|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listProjects(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListProjects($queryParameters), $fetch);
    }

    /**
     * Creates a new project object. Returns a project object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Project|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createProject(Model\ProjectsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateProject($requestBody), $fetch);
    }

    /**
     * Deletes a project and any time entries or expenses tracked to it.
     * However, invoices associated with the project will not be deleted.
     * If you don’t want the project’s time entries and expenses to be deleted, you should archive the project instead.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteProject(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteProject($projectId), $fetch);
    }

    /**
     * Retrieves the project with the given ID. Returns a project object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Project|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveProject(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveProject($projectId), $fetch);
    }

    /**
     * Updates the specific project by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a project object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Project|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateProject(string $projectId, Model\ProjectsProjectIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateProject($projectId, $requestBody), $fetch);
    }

    /**
     * Returns a list of your task assignments for the project identified by PROJECT_ID. The task assignments are returned sorted by creation date, with the most recently created task assignments appearing first.
     *
     * The response contains an object with a task_assignments property that contains an array of up to per_page task assignments. Each entry in the array is a separate task assignment object. If no more task assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your task assignments.
     *
     * @param array $queryParameters {
     *
     * @var bool   $is_active pass true to only return active task assignments and false to return inactive task assignments
     * @var string $updated_since only return task assignments that have been updated since the given date and time
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TaskAssignments|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listTaskAssignmentsForSpecificProject(string $projectId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListTaskAssignmentsForSpecificProject($projectId, $queryParameters), $fetch);
    }

    /**
     * Creates a new task assignment object. Returns a task assignment object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TaskAssignment|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createTaskAssignment(string $projectId, Model\ProjectsProjectIdTaskAssignmentsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateTaskAssignment($projectId, $requestBody), $fetch);
    }

    /**
     * Delete a task assignment. Deleting a task assignment is only possible if it has no time entries associated with it. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteTaskAssignment(string $projectId, string $taskAssignmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteTaskAssignment($projectId, $taskAssignmentId), $fetch);
    }

    /**
     * Retrieves the task assignment with the given ID. Returns a task assignment object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TaskAssignment|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveTaskAssignment(string $projectId, string $taskAssignmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveTaskAssignment($projectId, $taskAssignmentId), $fetch);
    }

    /**
     * Updates the specific task assignment by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a task assignment object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TaskAssignment|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateTaskAssignment(string $projectId, string $taskAssignmentId, Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateTaskAssignment($projectId, $taskAssignmentId, $requestBody), $fetch);
    }

    /**
     * Returns a list of user assignments for the project identified by PROJECT_ID. The user assignments are returned sorted by creation date, with the most recently created user assignments appearing first.
     *
     * The response contains an object with a user_assignments property that contains an array of up to per_page user assignments. Each entry in the array is a separate user assignment object. If no more user assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your user assignments.
     *
     * @param array $queryParameters {
     *
     * @var int    $user_id only return user assignments belonging to the user with the given ID
     * @var bool   $is_active pass true to only return active user assignments and false to return inactive user assignments
     * @var string $updated_since only return user assignments that have been updated since the given date and time
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\UserAssignments|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listUserAssignmentsForSpecificProject(string $projectId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListUserAssignmentsForSpecificProject($projectId, $queryParameters), $fetch);
    }

    /**
     * Creates a new user assignment object. Returns a user assignment object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\UserAssignment|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createUserAssignment(string $projectId, Model\ProjectsProjectIdUserAssignmentsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateUserAssignment($projectId, $requestBody), $fetch);
    }

    /**
     * Delete a user assignment. Deleting a user assignment is only possible if it has no time entries or expenses associated with it. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteUserAssignment(string $projectId, string $userAssignmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteUserAssignment($projectId, $userAssignmentId), $fetch);
    }

    /**
     * Retrieves the user assignment with the given ID. Returns a user assignment object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\UserAssignment|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveUserAssignment(string $projectId, string $userAssignmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveUserAssignment($projectId, $userAssignmentId), $fetch);
    }

    /**
     * Updates the specific user assignment by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a user assignment object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\UserAssignment|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateUserAssignment(string $projectId, string $userAssignmentId, Model\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateUserAssignment($projectId, $userAssignmentId, $requestBody), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $from only report on expenses with a spent_date on or after the given date
     * @var string $to only report on expenses with a spent_date on or before the given date
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\ExpenseReportsResults|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function expenseCategoriesReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ExpenseCategoriesReport($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $from only report on expenses with a spent_date on or after the given date
     * @var string $to only report on expenses with a spent_date on or before the given date
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\ExpenseReportsResults|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function clientsExpensesReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ClientsExpensesReport($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $from only report on expenses with a spent_date on or after the given date
     * @var string $to only report on expenses with a spent_date on or before the given date
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\ExpenseReportsResults|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function projectsExpensesReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ProjectsExpensesReport($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $from only report on expenses with a spent_date on or after the given date
     * @var string $to only report on expenses with a spent_date on or before the given date
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\ExpenseReportsResults|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamExpensesReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\TeamExpensesReport($queryParameters), $fetch);
    }

    /**
     * The response contains an object with a results property that contains an array of up to per_page results. Each entry in the array is a separate result object. If no more results are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your results.
     *
     * @param array $queryParameters {
     *
     * @var int  $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int  $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     * @var bool $is_active Pass true to only return active projects and false to return inactive projects.
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\ProjectBudgetReportResults|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function projectBudgetReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ProjectBudgetReport($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $from only report on time entries with a spent_date on or after the given date
     * @var string $to only report on time entries with a spent_date on or before the given date
     * @var string $include_fixed_fee when true, billable amounts will be calculated and included for fixed fee projects
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TimeReportsResults|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function clientsTimeReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ClientsTimeReport($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $from only report on time entries with a spent_date on or after the given date
     * @var string $to only report on time entries with a spent_date on or before the given date
     * @var string $include_fixed_fee when true, billable amounts will be calculated and included for fixed fee projects
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TimeReportsResults|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function projectsTimeReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ProjectsTimeReport($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $from only report on time entries with a spent_date on or after the given date
     * @var string $to only report on time entries with a spent_date on or before the given date
     * @var string $include_fixed_fee when true, billable amounts will be calculated and included for fixed fee projects
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TimeReportsResults|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function tasksReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\TasksReport($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $from only report on time entries with a spent_date on or after the given date
     * @var string $to only report on time entries with a spent_date on or before the given date
     * @var string $include_fixed_fee when true, billable amounts will be calculated and included for fixed fee projects
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TimeReportsResults|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamTimeReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\TeamTimeReport($queryParameters), $fetch);
    }

    /**
     * The response contains an object with a results property that contains an array of up to per_page results. Each entry in the array is a separate result object. If no more results are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your results.
     *
     * Note: Each request requires both the from and to parameters to be supplied in the URL’s query string. The timeframe supplied cannot exceed 1 year (365 days).
     *
     * @param array $queryParameters {
     *
     * @var string $from only report on time entries and expenses with a spent_date on or after the given date
     * @var string $to only report on time entries and expenses with a spent_date on or before the given date
     * @var bool   $include_fixed_fee Whether or not to include fixed-fee projects in the response. Fixed-fee uninvoiced fee amount will show as long as the selected date range is on or after the project start date (If project start date is not specified, it is project creation date). Otherwise, it will be 0. (Default: true)
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\UninvoicedReportResults|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function uninvoicedReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UninvoicedReport($queryParameters), $fetch);
    }

    /**
     * Returns a list of roles in the account. The roles are returned sorted by creation date, with the most recently created roles appearing first.
     *
     * The response contains an object with a roles property that contains an array of up to per_page roles. Each entry in the array is a separate role object. If no more roles are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your roles.
     *
     * @param array $queryParameters {
     *
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Roles|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listRoles(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListRoles($queryParameters), $fetch);
    }

    /**
     * Creates a new role object. Returns a role object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Role|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createRole(Model\RolesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateRole($requestBody), $fetch);
    }

    /**
     * Delete a role. Deleting a role will unlink it from any users it was assigned to. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteRole(string $roleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteRole($roleId), $fetch);
    }

    /**
     * Retrieves the role with the given ID. Returns a role object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Role|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveRole(string $roleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveRole($roleId), $fetch);
    }

    /**
     * Updates the specific role by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a role object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Role|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateRole(string $roleId, Model\RolesRoleIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateRole($roleId, $requestBody), $fetch);
    }

    /**
     * Returns a list of your task assignments. The task assignments are returned sorted by creation date, with the most recently created task assignments appearing first.
     *
     * The response contains an object with a task_assignments property that contains an array of up to per_page task assignments. Each entry in the array is a separate task assignment object. If no more task assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your task assignments.
     *
     * @param array $queryParameters {
     *
     * @var bool   $is_active pass true to only return active task assignments and false to return inactive task assignments
     * @var string $updated_since only return task assignments that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TaskAssignments|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listTaskAssignments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListTaskAssignments($queryParameters), $fetch);
    }

    /**
     * Returns a list of your tasks. The tasks are returned sorted by creation date, with the most recently created tasks appearing first.
     *
     * The response contains an object with a tasks property that contains an array of up to per_page tasks. Each entry in the array is a separate task object. If no more tasks are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your tasks.
     *
     * @param array $queryParameters {
     *
     * @var bool   $is_active pass true to only return active tasks and false to return inactive tasks
     * @var string $updated_since only return tasks that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Tasks|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listTasks(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListTasks($queryParameters), $fetch);
    }

    /**
     * Creates a new task object. Returns a task object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Task|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createTask(Model\TasksPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateTask($requestBody), $fetch);
    }

    /**
     * Delete a task. Deleting a task is only possible if it has no time entries associated with it. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteTask(string $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteTask($taskId), $fetch);
    }

    /**
     * Retrieves the task with the given ID. Returns a task object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Task|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveTask(string $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveTask($taskId), $fetch);
    }

    /**
     * Updates the specific task by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a task object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Task|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateTask(string $taskId, Model\TasksTaskIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateTask($taskId, $requestBody), $fetch);
    }

    /**
     * Returns a list of time entries. The time entries are returned sorted by spent_date date. At this time, the sort option can’t be customized.
     *
     * The response contains an object with a time_entries property that contains an array of up to per_page time entries. Each entry in the array is a separate time entry object. If no more time entries are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your time entries.
     *
     * @param array $queryParameters {
     *
     * @var int    $user_id only return time entries belonging to the user with the given ID
     * @var int    $client_id only return time entries belonging to the client with the given ID
     * @var int    $project_id only return time entries belonging to the project with the given ID
     * @var int    $task_id only return time entries belonging to the task with the given ID
     * @var string $external_reference_id only return time entries with the given external_reference ID
     * @var bool   $is_billed pass true to only return time entries that have been invoiced and false to return time entries that have not been invoiced
     * @var bool   $is_running pass true to only return running time entries and false to return non-running time entries
     * @var string $updated_since Only return time entries that have been updated since the given date and time. Use the ISO 8601 Format.
     * @var string $from only return time entries with a spent_date on or after the given date
     * @var string $to only return time entries with a spent_date on or before the given date
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TimeEntries|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listTimeEntries(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListTimeEntries($queryParameters), $fetch);
    }

    /**
     * Creates a new time entry object. Returns a time entry object and a 201 Created response code if the call succeeded.
     *
     * You should only use this method to create time entries when your account is configured to track time via duration. You can verify this by visiting the Settings page in your Harvest account or by checking if wants_timestamp_timers is false in the Company API.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TimeEntry|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createTimeEntry(Model\TimeEntriesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateTimeEntry($requestBody), $fetch);
    }

    /**
     * Delete a time entry. Deleting a time entry is only possible if it’s not closed and the associated project and task haven’t been archived.  However, Admins can delete closed entries. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteTimeEntry(string $timeEntryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteTimeEntry($timeEntryId), $fetch);
    }

    /**
     * Retrieves the time entry with the given ID. Returns a time entry object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TimeEntry|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveTimeEntry(string $timeEntryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveTimeEntry($timeEntryId), $fetch);
    }

    /**
     * Updates the specific time entry by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a time entry object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TimeEntry|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateTimeEntry(string $timeEntryId, Model\TimeEntriesTimeEntryIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateTimeEntry($timeEntryId, $requestBody), $fetch);
    }

    /**
     * Delete a time entry’s external reference. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteTimeEntryExternalReference(string $timeEntryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteTimeEntryExternalReference($timeEntryId), $fetch);
    }

    /**
     * Restarting a time entry is only possible if it isn’t currently running. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TimeEntry|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function restartStoppedTimeEntry(string $timeEntryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RestartStoppedTimeEntry($timeEntryId), $fetch);
    }

    /**
     * Stopping a time entry is only possible if it’s currently running. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TimeEntry|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function stopRunningTimeEntry(string $timeEntryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\StopRunningTimeEntry($timeEntryId), $fetch);
    }

    /**
     * Returns a list of your projects user assignments, active and archived. The user assignments are returned sorted by creation date, with the most recently created user assignments appearing first.
     *
     * The response contains an object with a user_assignments property that contains an array of up to per_page user assignments. Each entry in the array is a separate user assignment object. If no more user assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your user assignments.
     *
     * @param array $queryParameters {
     *
     * @var int    $user_id only return user assignments belonging to the user with the given ID
     * @var bool   $is_active pass true to only return active user assignments and false to return inactive user assignments
     * @var string $updated_since only return user assignments that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\UserAssignments|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listUserAssignments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListUserAssignments($queryParameters), $fetch);
    }

    /**
     * Returns a list of your users. The users are returned sorted by creation date, with the most recently created users appearing first.
     *
     * The response contains an object with a users property that contains an array of up to per_page users. Each entry in the array is a separate user object. If no more users are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your users.
     *
     * @param array $queryParameters {
     *
     * @var bool   $is_active pass true to only return active users and false to return inactive users
     * @var string $updated_since only return users that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Users|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listUsers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListUsers($queryParameters), $fetch);
    }

    /**
     * Creates a new user object and sends an invitation email to the address specified in the email parameter. Returns a user object and a 201 Created response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\User|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createUser(Model\UsersPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateUser($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\User|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveTheCurrentlyAuthenticatedUser(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveTheCurrentlyAuthenticatedUser(), $fetch);
    }

    /**
     * Returns a list of your active project assignments for the currently authenticated user. The project assignments are returned sorted by creation date, with the most recently created project assignments appearing first.
     *
     * The response contains an object with a project_assignments property that contains an array of up to per_page project assignments. Each entry in the array is a separate project assignment object. If no more project assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your project assignments.
     *
     * @param array $queryParameters {
     *
     * @var int $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *          }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\ProjectAssignments|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listActiveProjectAssignmentsForTheCurrentlyAuthenticatedUser(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListActiveProjectAssignmentsForTheCurrentlyAuthenticatedUser($queryParameters), $fetch);
    }

    /**
     * Delete a user. Deleting a user is only possible if they have no time entries or expenses associated with them. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteUser(string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteUser($userId), $fetch);
    }

    /**
     * Retrieves the user with the given ID. Returns a user object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\User|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveUser(string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveUser($userId), $fetch);
    }

    /**
     * Updates the specific user by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a user object and a 200 OK response code if the call succeeded.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\User|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateUser(string $userId, Model\UsersUserIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateUser($userId, $requestBody), $fetch);
    }

    /**
     * Returns a list of billable rates for the user identified by USER_ID. The billable rates are returned sorted by start_date, with the oldest starting billable rates appearing first.
     *
     * The response contains an object with a billable_rates property that contains an array of up to per_page billable rates. Each entry in the array is a separate billable rate object. If no more billable rates are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your billable rates.
     *
     * @param array $queryParameters {
     *
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\BillableRates|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listBillableRatesForSpecificUser(string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListBillableRatesForSpecificUser($userId, $queryParameters), $fetch);
    }

    /**
     * Creates a new billable rate object. Returns a billable rate object and a 201 Created response code if the call succeeded.
     *
     * Creating a billable rate with no start_date will replace a user’s existing rate(s).
     * Creating a billable rate with a start_date that is before a user’s existing rate(s) will replace those billable rates with the new one.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\BillableRate|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createBillableRate(string $userId, Model\UsersUserIdBillableRatesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateBillableRate($userId, $requestBody), $fetch);
    }

    /**
     * Retrieves the billable rate with the given ID. Returns a billable rate object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\BillableRate|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveBillableRate(string $userId, string $billableRateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveBillableRate($userId, $billableRateId), $fetch);
    }

    /**
     * Returns a list of cost rates for the user identified by USER_ID. The cost rates are returned sorted by start_date, with the oldest starting cost rates appearing first.
     *
     * The response contains an object with a cost_rates property that contains an array of up to per_page cost rates. Each entry in the array is a separate cost rate object. If no more cost rates are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your cost rates.
     *
     * @param array $queryParameters {
     *
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\CostRates|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listCostRatesForSpecificUser(string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListCostRatesForSpecificUser($userId, $queryParameters), $fetch);
    }

    /**
     * Creates a new cost rate object. Returns a cost rate object and a 201 Created response code if the call succeeded.
     *
     * Creating a cost rate with no start_date will replace a user’s existing rate(s).
     * Creating a cost rate with a start_date that is before a user’s existing rate(s) will replace those cost rates with the new one.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\CostRate|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createCostRate(string $userId, Model\UsersUserIdCostRatesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateCostRate($userId, $requestBody), $fetch);
    }

    /**
     * Retrieves the cost rate with the given ID. Returns a cost rate object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\CostRate|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveCostRate(string $userId, string $costRateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveCostRate($userId, $costRateId), $fetch);
    }

    /**
     * Returns a list of active project assignments for the user identified by USER_ID. The project assignments are returned sorted by creation date, with the most recently created project assignments appearing first.
     *
     * The response contains an object with a project_assignments property that contains an array of up to per_page project assignments. Each entry in the array is a separate project assignment object. If no more project assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your project assignments.
     *
     * @param array $queryParameters {
     *
     * @var string $updated_since only return project assignments that have been updated since the given date and time
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\ProjectAssignments|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listActiveProjectAssignments(string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListActiveProjectAssignments($userId, $queryParameters), $fetch);
    }

    /**
     * Returns a list of assigned teammates for the user identified by USER_ID. The USER_ID must belong to a user that is a Manager, if not, a 422 Unprocessable Entity status code will be returned.
     *
     * The response contains an object with a teammates property that contains an array of up to per_page teammates. Each entry in the array is a separate teammate object. If no more teammates are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your teammates.
     *
     * @param array $queryParameters {
     *
     * @var int    $page DEPRECATED The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var string $cursor Pagination cursor
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Teammates|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listAssignedTeammatesForSpecificUser(string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListAssignedTeammatesForSpecificUser($userId, $queryParameters), $fetch);
    }

    /**
     * Updates the the assigned teammates for a specific user. Returns list of assigned teammates and a 200 OK response code if the call succeeded. The USER_ID must belong to a user that is a Manager, if not, a 422 Unprocessable Entity status code will be returned.
     *
     * Adding teammates for the first time will add the people_manager access role to the Manager. Any IDs not included in the teammate_ids that are currently assigned will be unassigned from the Manager. Use an empty array to unassign all users. This will also remove the people_manager access role from the Manager.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\TeammatesPatchResponse|Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateUserAssignedTeammates(string $userId, Model\UsersUserIdTeammatesPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateUserAssignedTeammates($userId, $requestBody), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.harvestapp.com/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (\count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new Normalizer\JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
