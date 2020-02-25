<?php

namespace JoliCode\Harvest\Api;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
    * Returns a list of your contacts. The contacts are returned sorted by creation date, with the most recently created contacts appearing first.
    
    The response contains an object with a contacts property that contains an array of up to per_page contacts. Each entry in the array is a separate contact object. If no more contacts are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your contacts.
    *
    * @param array $queryParameters {
    *     @var int $client_id Only return contacts belonging to the client with the given ID.
    *     @var string $updated_since Only return contacts that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\Contacts|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listContacts(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListContacts($queryParameters), $fetch);
    }
    /**
     * Creates a new contact object. Returns a contact object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\ContactsPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Contact|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createContact(\JoliCode\Harvest\Api\Model\ContactsPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateContact($payload), $fetch);
    }
    /**
     * Delete a contact. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $contactId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContact(string $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteContact($contactId), $fetch);
    }
    /**
     * Retrieves the contact with the given ID. Returns a contact object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $contactId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Contact|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveContact(string $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveContact($contactId), $fetch);
    }
    /**
     * Updates the specific contact by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a contact object and a 200 OK response code if the call succeeded.
     *
     * @param string $contactId 
     * @param \JoliCode\Harvest\Api\Model\ContactsContactIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Contact|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateContact(string $contactId, \JoliCode\Harvest\Api\Model\ContactsContactIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateContact($contactId, $payload), $fetch);
    }
    /**
    * Returns a list of your clients. The clients are returned sorted by creation date, with the most recently created clients appearing first.
    
    The response contains an object with a clients property that contains an array of up to per_page clients. Each entry in the array is a separate client object. If no more clients are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your clients.
    *
    * @param array $queryParameters {
    *     @var bool $is_active Pass true to only return active clients and false to return inactive clients.
    *     @var string $updated_since Only return clients that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\Clients|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listClients(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListClients($queryParameters), $fetch);
    }
    /**
     * Creates a new client object. Returns a client object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\ClientsPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Client|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createClient(\JoliCode\Harvest\Api\Model\ClientsPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateClient($payload), $fetch);
    }
    /**
     * Delete a client. Deleting a client is only possible if it has no projects, invoices, or estimates associated with it. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $clientId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteClient(string $clientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteClient($clientId), $fetch);
    }
    /**
     * Retrieves the client with the given ID. Returns a client object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $clientId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Client|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveClient(string $clientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveClient($clientId), $fetch);
    }
    /**
     * Updates the specific client by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a client object and a 200 OK response code if the call succeeded.
     *
     * @param string $clientId 
     * @param \JoliCode\Harvest\Api\Model\ClientsClientIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Client|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateClient(string $clientId, \JoliCode\Harvest\Api\Model\ClientsClientIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateClient($clientId, $payload), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Company|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveCompany(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveCompany(), $fetch);
    }
    /**
     * Updates the company setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a company object and a 200 OK response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\CompanyPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Company|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateCompany(\JoliCode\Harvest\Api\Model\CompanyPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateCompany($payload), $fetch);
    }
    /**
    * Returns a list of messages associated with a given invoice. The invoice messages are returned sorted by creation date, with the most recently created messages appearing first.
    
    The response contains an object with an invoice_messages property that contains an array of up to per_page messages. Each entry in the array is a separate message object. If no more messages are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your messages.
    *
    * @param string $invoiceId 
    * @param array $queryParameters {
    *     @var string $updated_since Only return invoice messages that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\InvoiceMessages|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listMessagesForInvoice(string $invoiceId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListMessagesForInvoice($invoiceId, $queryParameters), $fetch);
    }
    /**
     * Creates a new invoice message object and marks an open invoice as a draft. Returns an invoice message object and a 201 Created response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function markOpenInvoiceAsDraft(string $invoiceId, \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\MarkOpenInvoiceAsDraft($invoiceId, $payload), $fetch);
    }
    /**
     * Delete an invoice message. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param string $messageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInvoiceMessage(string $invoiceId, string $messageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteInvoiceMessage($invoiceId, $messageId), $fetch);
    }
    /**
    * Returns a list of payments associate with a given invoice. The payments are returned sorted by creation date, with the most recently created payments appearing first.
    
    The response contains an object with an invoice_payments property that contains an array of up to per_page payments. Each entry in the array is a separate payment object. If no more payments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your payments.
    *
    * @param string $invoiceId 
    * @param array $queryParameters {
    *     @var string $updated_since Only return invoice payments that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\InvoicePayments|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listPaymentsForInvoice(string $invoiceId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListPaymentsForInvoice($invoiceId, $queryParameters), $fetch);
    }
    /**
     * Creates a new invoice payment object. Returns an invoice payment object and a 201 Created response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\InvoicePayment|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createInvoicePayment(string $invoiceId, \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateInvoicePayment($invoiceId, $payload), $fetch);
    }
    /**
     * Delete an invoice payment. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param string $paymentId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInvoicePayment(string $invoiceId, string $paymentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteInvoicePayment($invoiceId, $paymentId), $fetch);
    }
    /**
    * Returns a list of your invoices. The invoices are returned sorted by issue date, with the most recently issued invoices appearing first.
    
    The response contains an object with a invoices property that contains an array of up to per_page invoices. Each entry in the array is a separate invoice object. If no more invoices are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your invoices.
    *
    * @param array $queryParameters {
    *     @var int $client_id Only return invoices belonging to the client with the given ID.
    *     @var int $project_id Only return invoices associated with the project with the given ID.
    *     @var string $updated_since Only return invoices that have been updated since the given date and time.
    *     @var string $from Only return invoices with an issue_date on or after the given date.
    *     @var string $to Only return invoices with an issue_date on or before the given date.
    *     @var string $state Only return invoices with a state matching the value provided. Options: draft, open, paid, or closed.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\Invoices|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listInvoices(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListInvoices($queryParameters), $fetch);
    }
    /**
     * Creates a new invoice object. Returns an invoice object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\InvoicesPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Invoice|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createInvoiceBasedOnTrackedTimeAndExpenses(\JoliCode\Harvest\Api\Model\InvoicesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateInvoiceBasedOnTrackedTimeAndExpenses($payload), $fetch);
    }
    /**
     * Delete an invoice. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInvoice(string $invoiceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteInvoice($invoiceId), $fetch);
    }
    /**
     * Retrieves the invoice with the given ID. Returns an invoice object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $invoiceId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Invoice|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveInvoice(string $invoiceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveInvoice($invoiceId), $fetch);
    }
    /**
     * Updates the specific invoice by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an invoice object and a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Invoice|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateInvoice(string $invoiceId, \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateInvoice($invoiceId, $payload), $fetch);
    }
    /**
    * Returns a list of your invoice item categories. The invoice item categories are returned sorted by creation date, with the most recently created invoice item categories appearing first.
    
    The response contains an object with a invoice_item_categories property that contains an array of up to per_page invoice item categories. Each entry in the array is a separate invoice item category object. If no more invoice item categories are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your invoice item categories.
    *
    * @param array $queryParameters {
    *     @var string $updated_since Only return invoice item categories that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\InvoiceItemCategories|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listInvoiceItemCategories(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListInvoiceItemCategories($queryParameters), $fetch);
    }
    /**
     * Creates a new invoice item category object. Returns an invoice item category object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\InvoiceItemCategory|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createInvoiceItemCategory(\JoliCode\Harvest\Api\Model\InvoiceItemCategoriesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateInvoiceItemCategory($payload), $fetch);
    }
    /**
     * Delete an invoice item category. Deleting an invoice item category is only possible if use_as_service and use_as_expense are both false. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceItemCategoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInvoiceItemCategory(string $invoiceItemCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteInvoiceItemCategory($invoiceItemCategoryId), $fetch);
    }
    /**
     * Retrieves the invoice item category with the given ID. Returns an invoice item category object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $invoiceItemCategoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\InvoiceItemCategory|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveInvoiceItemCategory(string $invoiceItemCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveInvoiceItemCategory($invoiceItemCategoryId), $fetch);
    }
    /**
     * Updates the specific invoice item category by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an invoice item category object and a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceItemCategoryId 
     * @param \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\InvoiceItemCategory|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateInvoiceItemCategory(string $invoiceItemCategoryId, \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateInvoiceItemCategory($invoiceItemCategoryId, $payload), $fetch);
    }
    /**
    * Returns a list of messages associated with a given estimate. The estimate messages are returned sorted by creation date, with the most recently created messages appearing first.
    
    The response contains an object with an estimate_messages property that contains an array of up to per_page messages. Each entry in the array is a separate message object. If no more messages are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your messages.
    *
    * @param string $estimateId 
    * @param array $queryParameters {
    *     @var string $updated_since Only return estimate messages that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\EstimateMessages|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listMessagesForEstimate(string $estimateId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListMessagesForEstimate($estimateId, $queryParameters), $fetch);
    }
    /**
     * Creates a new estimate message object and re-opens a closed estimate. Returns an estimate message object and a 201 Created response code if the call succeeded.
     *
     * @param string $estimateId 
     * @param \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function reOpenClosedEstimate(string $estimateId, \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ReOpenClosedEstimate($estimateId, $payload), $fetch);
    }
    /**
     * Delete an estimate message. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $estimateId 
     * @param string $messageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteEstimateMessage(string $estimateId, string $messageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteEstimateMessage($estimateId, $messageId), $fetch);
    }
    /**
    * Returns a list of your estimates. The estimates are returned sorted by issue date, with the most recently issued estimates appearing first.
    
    The response contains an object with a estimates property that contains an array of up to per_page estimates. Each entry in the array is a separate estimate object. If no more estimates are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your estimates.
    *
    * @param array $queryParameters {
    *     @var int $client_id Only return estimates belonging to the client with the given ID.
    *     @var string $updated_since Only return estimates that have been updated since the given date and time.
    *     @var string $from Only return estimates with an issue_date on or after the given date.
    *     @var string $to Only return estimates with an issue_date on or before the given date.
    *     @var string $state Only return estimates with a state matching the value provided. Options: draft, sent, accepted, or declined.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\Estimates|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listEstimates(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListEstimates($queryParameters), $fetch);
    }
    /**
     * Creates a new estimate object. Returns an estimate object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\EstimatesPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Estimate|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createEstimate(\JoliCode\Harvest\Api\Model\EstimatesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateEstimate($payload), $fetch);
    }
    /**
     * Delete an estimate. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $estimateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteEstimate(string $estimateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteEstimate($estimateId), $fetch);
    }
    /**
     * Retrieves the estimate with the given ID. Returns an estimate object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $estimateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Estimate|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveEstimate(string $estimateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveEstimate($estimateId), $fetch);
    }
    /**
     * Updates the specific estimate by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an estimate object and a 200 OK response code if the call succeeded.
     *
     * @param string $estimateId 
     * @param \JoliCode\Harvest\Api\Model\EstimatesEstimateIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Estimate|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateEstimate(string $estimateId, \JoliCode\Harvest\Api\Model\EstimatesEstimateIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateEstimate($estimateId, $payload), $fetch);
    }
    /**
    * Returns a list of your estimate item categories. The estimate item categories are returned sorted by creation date, with the most recently created estimate item categories appearing first.
    
    The response contains an object with a estimate_item_categories property that contains an array of up to per_page estimate item categories. Each entry in the array is a separate estimate item category object. If no more estimate item categories are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your estimate item categories.
    *
    * @param array $queryParameters {
    *     @var string $updated_since Only return estimate item categories that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\EstimateItemCategories|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listEstimateItemCategories(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListEstimateItemCategories($queryParameters), $fetch);
    }
    /**
     * Creates a new estimate item category object. Returns an estimate item category object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\EstimateItemCategoriesPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\EstimateItemCategory|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createEstimateItemCategory(\JoliCode\Harvest\Api\Model\EstimateItemCategoriesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateEstimateItemCategory($payload), $fetch);
    }
    /**
     * Delete an estimate item category. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $estimateItemCategoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteEstimateItemCategory(string $estimateItemCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteEstimateItemCategory($estimateItemCategoryId), $fetch);
    }
    /**
     * Retrieves the estimate item category with the given ID. Returns an estimate item category object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $estimateItemCategoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\EstimateItemCategory|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveEstimateItemCategory(string $estimateItemCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveEstimateItemCategory($estimateItemCategoryId), $fetch);
    }
    /**
     * Updates the specific estimate item category by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an estimate item category object and a 200 OK response code if the call succeeded.
     *
     * @param string $estimateItemCategoryId 
     * @param \JoliCode\Harvest\Api\Model\EstimateItemCategoriesEstimateItemCategoryIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\EstimateItemCategory|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateEstimateItemCategory(string $estimateItemCategoryId, \JoliCode\Harvest\Api\Model\EstimateItemCategoriesEstimateItemCategoryIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateEstimateItemCategory($estimateItemCategoryId, $payload), $fetch);
    }
    /**
    * Returns a list of your expenses. If accessing this endpoint as an Admin, all expenses in the account will be returned. The expenses are returned sorted by the spent_at date, with the most recent expenses appearing first.
    
    The response contains an object with a expenses property that contains an array of up to per_page expenses. Each entry in the array is a separate expense object. If no more expenses are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your expenses.
    *
    * @param array $queryParameters {
    *     @var int $user_id Only return expenses belonging to the user with the given ID.
    *     @var int $client_id Only return expenses belonging to the client with the given ID.
    *     @var int $project_id Only return expenses belonging to the project with the given ID.
    *     @var bool $is_billed Pass true to only return expenses that have been invoiced and false to return expenses that have not been invoiced.
    *     @var string $updated_since Only return expenses that have been updated since the given date and time.
    *     @var string $from Only return expenses with a spent_date on or after the given date.
    *     @var string $to Only return expenses with a spent_date on or before the given date.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\Expenses|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listExpenses(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListExpenses($queryParameters), $fetch);
    }
    /**
     * Creates a new expense object. Returns an expense object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\ExpensesPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Expense|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createExpense(\JoliCode\Harvest\Api\Model\ExpensesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateExpense($payload), $fetch);
    }
    /**
     * Delete an expense. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $expenseId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteExpense(string $expenseId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteExpense($expenseId), $fetch);
    }
    /**
     * Retrieves the expense with the given ID. Returns an expense object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $expenseId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Expense|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveExpense(string $expenseId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveExpense($expenseId), $fetch);
    }
    /**
     * Updates the specific expense by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an expense object and a 200 OK response code if the call succeeded.
     *
     * @param string $expenseId 
     * @param \JoliCode\Harvest\Api\Model\ExpensesExpenseIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Expense|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateExpense(string $expenseId, \JoliCode\Harvest\Api\Model\ExpensesExpenseIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateExpense($expenseId, $payload), $fetch);
    }
    /**
    * Returns a list of your expense categories. The expense categories are returned sorted by creation date, with the most recently created expense categories appearing first.
    
    The response contains an object with a expense_categories property that contains an array of up to per_page expense categories. Each entry in the array is a separate expense category object. If no more expense categories are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your expense categories.
    *
    * @param array $queryParameters {
    *     @var bool $is_active Pass true to only return active expense categories and false to return inactive expense categories.
    *     @var string $updated_since Only return expense categories that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\ExpenseCategories|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listExpenseCategories(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListExpenseCategories($queryParameters), $fetch);
    }
    /**
     * Creates a new expense category object. Returns an expense category object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\ExpenseCategoriesPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\ExpenseCategory|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createExpenseCategory(\JoliCode\Harvest\Api\Model\ExpenseCategoriesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateExpenseCategory($payload), $fetch);
    }
    /**
     * Delete an expense category. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $expenseCategoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteExpenseCategory(string $expenseCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteExpenseCategory($expenseCategoryId), $fetch);
    }
    /**
     * Retrieves the expense category with the given ID. Returns an expense category object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $expenseCategoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\ExpenseCategory|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveExpenseCategory(string $expenseCategoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveExpenseCategory($expenseCategoryId), $fetch);
    }
    /**
     * Updates the specific expense category by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an expense category object and a 200 OK response code if the call succeeded.
     *
     * @param string $expenseCategoryId 
     * @param \JoliCode\Harvest\Api\Model\ExpenseCategoriesExpenseCategoryIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\ExpenseCategory|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateExpenseCategory(string $expenseCategoryId, \JoliCode\Harvest\Api\Model\ExpenseCategoriesExpenseCategoryIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateExpenseCategory($expenseCategoryId, $payload), $fetch);
    }
    /**
    * Returns a list of your tasks. The tasks are returned sorted by creation date, with the most recently created tasks appearing first.
    
    The response contains an object with a tasks property that contains an array of up to per_page tasks. Each entry in the array is a separate task object. If no more tasks are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your tasks.
    *
    * @param array $queryParameters {
    *     @var bool $is_active Pass true to only return active tasks and false to return inactive tasks.
    *     @var string $updated_since Only return tasks that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\Tasks|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listTasks(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListTasks($queryParameters), $fetch);
    }
    /**
     * Creates a new task object. Returns a task object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\TasksPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Task|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createTask(\JoliCode\Harvest\Api\Model\TasksPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateTask($payload), $fetch);
    }
    /**
     * Delete a task. Deleting a task is only possible if it has no time entries associated with it. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $taskId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTask(string $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteTask($taskId), $fetch);
    }
    /**
     * Retrieves the task with the given ID. Returns a task object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $taskId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Task|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveTask(string $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveTask($taskId), $fetch);
    }
    /**
     * Updates the specific task by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a task object and a 200 OK response code if the call succeeded.
     *
     * @param string $taskId 
     * @param \JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Task|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateTask(string $taskId, \JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateTask($taskId, $payload), $fetch);
    }
    /**
    * Returns a list of your time entries. The time entries are returned sorted by spent_at date. At this time, the sort option can’t be customized.
    
    The response contains an object with a time_entries property that contains an array of up to per_page time entries. Each entry in the array is a separate time entry object. If no more time entries are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your time entries.
    *
    * @param array $queryParameters {
    *     @var int $user_id Only return time entries belonging to the user with the given ID.
    *     @var int $client_id Only return time entries belonging to the client with the given ID.
    *     @var int $project_id Only return time entries belonging to the project with the given ID.
    *     @var int $task_id Only return time entries belonging to the task with the given ID.
    *     @var bool $is_billed Pass true to only return time entries that have been invoiced and false to return time entries that have not been invoiced.
    *     @var bool $is_running Pass true to only return running time entries and false to return non-running time entries.
    *     @var string $updated_since Only return time entries that have been updated since the given date and time. Use the ISO 8601 Format.
    *     @var string $from Only return time entries with a spent_date on or after the given date.
    *     @var string $to Only return time entries with a spent_date on or before the given date.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\TimeEntries|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listTimeEntries(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListTimeEntries($queryParameters), $fetch);
    }
    /**
    * Creates a new time entry object. Returns a time entry object and a 201 Created response code if the call succeeded.
    
    You should only use this method to create time entries when your account is configured to track time via start and end time. You can verify this by visiting the Settings page in your Harvest account or by checking if wants_timestamp_timers is true in the Company API.
    *
    * @param \JoliCode\Harvest\Api\Model\TimeEntriesPostBody $payload json payload
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\TimeEntry|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function createTimeEntryViaStartAndEndTime(\JoliCode\Harvest\Api\Model\TimeEntriesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateTimeEntryViaStartAndEndTime($payload), $fetch);
    }
    /**
     * Delete a time entry. Deleting a time entry is only possible if it’s not closed and the associated project and task haven’t been archived.  However, Admins can delete closed entries. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $timeEntryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTimeEntry(string $timeEntryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteTimeEntry($timeEntryId), $fetch);
    }
    /**
     * Retrieves the time entry with the given ID. Returns a time entry object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $timeEntryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\TimeEntry|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveTimeEntry(string $timeEntryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveTimeEntry($timeEntryId), $fetch);
    }
    /**
     * Updates the specific time entry by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a time entry object and a 200 OK response code if the call succeeded.
     *
     * @param string $timeEntryId 
     * @param \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\TimeEntry|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateTimeEntry(string $timeEntryId, \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateTimeEntry($timeEntryId, $payload), $fetch);
    }
    /**
     * Delete a time entry’s external reference. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $timeEntryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTimeEntryExternalReference(string $timeEntryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteTimeEntryExternalReference($timeEntryId), $fetch);
    }
    /**
     * Restarting a time entry is only possible if it isn’t currently running. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $timeEntryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function restartStoppedTimeEntry(string $timeEntryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RestartStoppedTimeEntry($timeEntryId), $fetch);
    }
    /**
     * Stopping a time entry is only possible if it’s currently running. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $timeEntryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function stopRunningTimeEntry(string $timeEntryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\StopRunningTimeEntry($timeEntryId), $fetch);
    }
    /**
    * Returns a list of your projects user assignments, active and archived. The user assignments are returned sorted by creation date, with the most recently created user assignments appearing first.
    
    The response contains an object with a user_assignments property that contains an array of up to per_page user assignments. Each entry in the array is a separate user assignment object. If no more user assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your user assignments.
    *
    * @param array $queryParameters {
    *     @var int $user_id Only return user assignments belonging to the user with the given ID.
    *     @var bool $is_active Pass true to only return active user assignments and false to return inactive user assignments.
    *     @var string $updated_since Only return user assignments that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\UserAssignments|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listUserAssignments(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListUserAssignments($queryParameters), $fetch);
    }
    /**
    * Returns a list of user assignments for the project identified by PROJECT_ID. The user assignments are returned sorted by creation date, with the most recently created user assignments appearing first.
    
    The response contains an object with a user_assignments property that contains an array of up to per_page user assignments. Each entry in the array is a separate user assignment object. If no more user assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your user assignments.
    *
    * @param string $projectId 
    * @param array $queryParameters {
    *     @var int $user_id Only return user assignments belonging to the user with the given ID.
    *     @var bool $is_active Pass true to only return active user assignments and false to return inactive user assignments.
    *     @var string $updated_since Only return user assignments that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\UserAssignments|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listUserAssignmentsForSpecificProject(string $projectId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListUserAssignmentsForSpecificProject($projectId, $queryParameters), $fetch);
    }
    /**
     * Creates a new user assignment object. Returns a user assignment object and a 201 Created response code if the call succeeded.
     *
     * @param string $projectId 
     * @param \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\UserAssignment|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createUserAssignment(string $projectId, \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateUserAssignment($projectId, $payload), $fetch);
    }
    /**
     * Delete a user assignment. Deleting a user assignment is only possible if it has no time entries or expenses associated with it. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $projectId 
     * @param string $userAssignmentId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUserAssignment(string $projectId, string $userAssignmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteUserAssignment($projectId, $userAssignmentId), $fetch);
    }
    /**
     * Retrieves the user assignment with the given ID. Returns a user assignment object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $projectId 
     * @param string $userAssignmentId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\UserAssignment|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveUserAssignment(string $projectId, string $userAssignmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveUserAssignment($projectId, $userAssignmentId), $fetch);
    }
    /**
     * Updates the specific user assignment by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a user assignment object and a 200 OK response code if the call succeeded.
     *
     * @param string $projectId 
     * @param string $userAssignmentId 
     * @param \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\UserAssignment|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateUserAssignment(string $projectId, string $userAssignmentId, \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateUserAssignment($projectId, $userAssignmentId, $payload), $fetch);
    }
    /**
    * Returns a list of your task assignments. The task assignments are returned sorted by creation date, with the most recently created task assignments appearing first.
    
    The response contains an object with a task_assignments property that contains an array of up to per_page task assignments. Each entry in the array is a separate task assignment object. If no more task assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your task assignments.
    *
    * @param array $queryParameters {
    *     @var bool $is_active Pass true to only return active task assignments and false to return inactive task assignments.
    *     @var string $updated_since Only return task assignments that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\TaskAssignments|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listTaskAssignments(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListTaskAssignments($queryParameters), $fetch);
    }
    /**
    * Returns a list of your task assignments for the project identified by PROJECT_ID. The task assignments are returned sorted by creation date, with the most recently created task assignments appearing first.
    
    The response contains an object with a task_assignments property that contains an array of up to per_page task assignments. Each entry in the array is a separate task assignment object. If no more task assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your task assignments.
    *
    * @param string $projectId 
    * @param array $queryParameters {
    *     @var bool $is_active Pass true to only return active task assignments and false to return inactive task assignments.
    *     @var string $updated_since Only return task assignments that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\TaskAssignments|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listTaskAssignmentsForSpecificProject(string $projectId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListTaskAssignmentsForSpecificProject($projectId, $queryParameters), $fetch);
    }
    /**
     * Creates a new task assignment object. Returns a task assignment object and a 201 Created response code if the call succeeded.
     *
     * @param string $projectId 
     * @param \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\TaskAssignment|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createTaskAssignment(string $projectId, \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateTaskAssignment($projectId, $payload), $fetch);
    }
    /**
     * Delete a task assignment. Deleting a task assignment is only possible if it has no time entries associated with it. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $projectId 
     * @param string $taskAssignmentId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTaskAssignment(string $projectId, string $taskAssignmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteTaskAssignment($projectId, $taskAssignmentId), $fetch);
    }
    /**
     * Retrieves the task assignment with the given ID. Returns a task assignment object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $projectId 
     * @param string $taskAssignmentId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\TaskAssignment|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveTaskAssignment(string $projectId, string $taskAssignmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveTaskAssignment($projectId, $taskAssignmentId), $fetch);
    }
    /**
     * Updates the specific task assignment by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a task assignment object and a 200 OK response code if the call succeeded.
     *
     * @param string $projectId 
     * @param string $taskAssignmentId 
     * @param \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\TaskAssignment|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateTaskAssignment(string $projectId, string $taskAssignmentId, \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateTaskAssignment($projectId, $taskAssignmentId, $payload), $fetch);
    }
    /**
    * Returns a list of your projects. The projects are returned sorted by creation date, with the most recently created projects appearing first.
    
    The response contains an object with a projects property that contains an array of up to per_page projects. Each entry in the array is a separate project object. If no more projects are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your projects.
    *
    * @param array $queryParameters {
    *     @var bool $is_active Pass true to only return active projects and false to return inactive projects.
    *     @var int $client_id Only return projects belonging to the client with the given ID.
    *     @var string $updated_since Only return projects that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\Projects|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listProjects(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListProjects($queryParameters), $fetch);
    }
    /**
     * Creates a new project object. Returns a project object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\ProjectsPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Project|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createProject(\JoliCode\Harvest\Api\Model\ProjectsPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateProject($payload), $fetch);
    }
    /**
    * Deletes a project and any time entries or expenses tracked to it.
    However, invoices associated with the project will not be deleted.
    If you don’t want the project’s time entries and expenses to be deleted, you should archive the project instead.
    *
    * @param string $projectId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function deleteProject(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteProject($projectId), $fetch);
    }
    /**
     * Retrieves the project with the given ID. Returns a project object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $projectId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Project|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveProject(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveProject($projectId), $fetch);
    }
    /**
     * Updates the specific project by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a project object and a 200 OK response code if the call succeeded.
     *
     * @param string $projectId 
     * @param \JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Project|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateProject(string $projectId, \JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateProject($projectId, $payload), $fetch);
    }
    /**
    * Returns a list of roles in the account. The roles are returned sorted by creation date, with the most recently created roles appearing first.
    
    The response contains an object with a roles property that contains an array of up to per_page roles. Each entry in the array is a separate role object. If no more roles are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your roles.
    *
    * @param array $queryParameters {
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\Roles|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listRoles(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListRoles($queryParameters), $fetch);
    }
    /**
     * Creates a new role object. Returns a role object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\RolesPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Role|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createRole(\JoliCode\Harvest\Api\Model\RolesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateRole($payload), $fetch);
    }
    /**
     * Delete a role. Deleting a role will unlink it from any users it was assigned to. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $roleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRole(string $roleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteRole($roleId), $fetch);
    }
    /**
     * Retrieves the role with the given ID. Returns a role object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $roleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Role|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveRole(string $roleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveRole($roleId), $fetch);
    }
    /**
     * Updates the specific role by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a role object and a 200 OK response code if the call succeeded.
     *
     * @param string $roleId 
     * @param \JoliCode\Harvest\Api\Model\RolesRoleIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Role|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateRole(string $roleId, \JoliCode\Harvest\Api\Model\RolesRoleIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateRole($roleId, $payload), $fetch);
    }
    /**
    * Returns a list of billable rates for the user identified by USER_ID. The billable rates are returned sorted by start_date, with the oldest starting billable rates appearing first.
    
    The response contains an object with a billable_rates property that contains an array of up to per_page billable rates. Each entry in the array is a separate billable rate object. If no more billable rates are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your billable rates.
    *
    * @param string $userId 
    * @param array $queryParameters {
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\BillableRates|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listBillableRatesForSpecificUser(string $userId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListBillableRatesForSpecificUser($userId, $queryParameters), $fetch);
    }
    /**
    * Creates a new billable rate object. Returns a billable rate object and a 201 Created response code if the call succeeded.
    
    
     Creating a billable rate with no start_date will replace a user’s existing rate(s).
     Creating a billable rate with a start_date that is before a user’s existing rate(s) will replace those billable rates with the new one.
    
    *
    * @param string $userId 
    * @param \JoliCode\Harvest\Api\Model\UsersUserIdBillableRatesPostBody $payload json payload
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\BillableRate|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function createBillableRate(string $userId, \JoliCode\Harvest\Api\Model\UsersUserIdBillableRatesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateBillableRate($userId, $payload), $fetch);
    }
    /**
     * Retrieves the billable rate with the given ID. Returns a billable rate object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $userId 
     * @param string $billableRateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\BillableRate|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveBillableRate(string $userId, string $billableRateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveBillableRate($userId, $billableRateId), $fetch);
    }
    /**
    * Returns a list of cost rates for the user identified by USER_ID. The cost rates are returned sorted by start_date, with the oldest starting cost rates appearing first.
    
    The response contains an object with a cost_rates property that contains an array of up to per_page cost rates. Each entry in the array is a separate cost rate object. If no more cost rates are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your cost rates.
    *
    * @param string $userId 
    * @param array $queryParameters {
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\CostRates|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listCostRatesForSpecificUser(string $userId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListCostRatesForSpecificUser($userId, $queryParameters), $fetch);
    }
    /**
    * Creates a new cost rate object. Returns a cost rate object and a 201 Created response code if the call succeeded.
    
    
     Creating a cost rate with no start_date will replace a user’s existing rate(s).
     Creating a cost rate with a start_date that is before a user’s existing rate(s) will replace those cost rates with the new one.
    
    *
    * @param string $userId 
    * @param \JoliCode\Harvest\Api\Model\UsersUserIdCostRatesPostBody $payload json payload
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\CostRate|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function createCostRate(string $userId, \JoliCode\Harvest\Api\Model\UsersUserIdCostRatesPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateCostRate($userId, $payload), $fetch);
    }
    /**
     * Retrieves the cost rate with the given ID. Returns a cost rate object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $userId 
     * @param string $costRateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\CostRate|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveCostRate(string $userId, string $costRateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveCostRate($userId, $costRateId), $fetch);
    }
    /**
    * Returns a list of active project assignments for the user identified by USER_ID. The project assignments are returned sorted by creation date, with the most recently created project assignments appearing first.
    
    The response contains an object with a project_assignments property that contains an array of up to per_page project assignments. Each entry in the array is a separate project assignment object. If no more project assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your project assignments.
    *
    * @param string $userId 
    * @param array $queryParameters {
    *     @var string $updated_since Only return project assignments that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\ProjectAssignments|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listActiveProjectAssignments(string $userId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListActiveProjectAssignments($userId, $queryParameters), $fetch);
    }
    /**
    * Returns a list of your active project assignments for the currently authenticated user. The project assignments are returned sorted by creation date, with the most recently created project assignments appearing first.
    
    The response contains an object with a project_assignments property that contains an array of up to per_page project assignments. Each entry in the array is a separate project assignment object. If no more project assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your project assignments.
    *
    * @param array $queryParameters {
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\ProjectAssignments|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listActiveProjectAssignmentsForTheCurrentlyAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListActiveProjectAssignmentsForTheCurrentlyAuthenticatedUser($queryParameters), $fetch);
    }
    /**
    * Returns a list of your users. The users are returned sorted by creation date, with the most recently created users appearing first.
    
    The response contains an object with a users property that contains an array of up to per_page users. Each entry in the array is a separate user object. If no more users are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your users.
    *
    * @param array $queryParameters {
    *     @var bool $is_active Pass true to only return active users and false to return inactive users.
    *     @var string $updated_since Only return users that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\Users|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listUsers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ListUsers($queryParameters), $fetch);
    }
    /**
     * Creates a new user object. Returns a user object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\UsersPostBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\User|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createUser(\JoliCode\Harvest\Api\Model\UsersPostBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\CreateUser($payload), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\User|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveTheCurrentlyAuthenticatedUser(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveTheCurrentlyAuthenticatedUser(), $fetch);
    }
    /**
     * Delete a user. Deleting a user is only possible if they have no time entries or expenses associated with them. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $userId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUser(string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\DeleteUser($userId), $fetch);
    }
    /**
     * Retrieves the user with the given ID. Returns a user object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $userId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\User|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveUser(string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\RetrieveUser($userId), $fetch);
    }
    /**
     * Updates the specific user by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a user object and a 200 OK response code if the call succeeded.
     *
     * @param string $userId 
     * @param \JoliCode\Harvest\Api\Model\UsersUserIdPatchBody $payload json payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\User|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateUser(string $userId, \JoliCode\Harvest\Api\Model\UsersUserIdPatchBody $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UpdateUser($userId, $payload), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $from Only report on time entries with a spent_date on or after the given date.
     *     @var string $to Only report on time entries with a spent_date on or before the given date.
     *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *     @var int $per_page The number of records to return per page. Can range between 1 and 1000.  (Default: 1000)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\TimeReportsResults|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function clientsReport(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ClientsReport($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $from Only report on time entries with a spent_date on or after the given date.
     *     @var string $to Only report on time entries with a spent_date on or before the given date.
     *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *     @var int $per_page The number of records to return per page. Can range between 1 and 1000.  (Default: 1000)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\TimeReportsResults|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function projectsReport(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ProjectsReport($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $from Only report on expenses with a spent_date on or after the given date.
     *     @var string $to Only report on expenses with a spent_date on or before the given date.
     *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *     @var int $per_page The number of records to return per page. Can range between 1 and 1000.  (Default: 1000)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\ExpenseReportsResults|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function expenseCategoriesReport(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ExpenseCategoriesReport($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $from Only report on time entries with a spent_date on or after the given date.
     *     @var string $to Only report on time entries with a spent_date on or before the given date.
     *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *     @var int $per_page The number of records to return per page. Can range between 1 and 1000.  (Default: 1000)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\TimeReportsResults|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function teamReport(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\TeamReport($queryParameters), $fetch);
    }
    /**
    * The response contains an object with a results property that contains an array of up to per_page results. Each entry in the array is a separate result object. If no more results are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your results.
    
    Note: Each request requires both the from and to parameters to be supplied in the URL’s query string. The timeframe supplied cannot exceed 1 year (365 days).
    *
    * @param array $queryParameters {
    *     @var string $from Only report on time entries and expenses with a spent_date on or after the given date.
    *     @var string $to Only report on time entries and expenses with a spent_date on or before the given date.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 1000.  (Default: 1000)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\JoliCode\Harvest\Api\Model\UninvoicedReportResults|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function uninvoicedReport(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\UninvoicedReport($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $from Only report on time entries with a spent_date on or after the given date.
     *     @var string $to Only report on time entries with a spent_date on or before the given date.
     *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *     @var int $per_page The number of records to return per page. Can range between 1 and 1000.  (Default: 1000)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\TimeReportsResults|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function tasksReport(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\TasksReport($queryParameters), $fetch);
    }
    /**
     * The response contains an object with a results property that contains an array of up to per_page results. Each entry in the array is a separate result object. If no more results are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your results.
     *
     * @param array $queryParameters {
     *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *     @var int $per_page The number of records to return per page. Can range between 1 and 1000.  (Default: 1000)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\JoliCode\Harvest\Api\Model\ProjectBudgetReportResults|\JoliCode\Harvest\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function projectBudgetReport(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Harvest\Api\Endpoint\ProjectBudgetReport($queryParameters), $fetch);
    }
    public static function create($httpClient = null, \Jane\OpenApiRuntime\Client\Authentication $authentication = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://api.harvestapp.com/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (null !== $authentication) {
                $plugins[] = $authentication->getPlugin();
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \JoliCode\Harvest\Api\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}