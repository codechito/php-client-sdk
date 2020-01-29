# Getting started

Specialty messaging services tailored towards your business

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=TransmitMessage-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the TransmitMessage library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=TransmitMessage-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=TransmitMessage-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=TransmitMessage-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=TransmitMessage-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=TransmitMessage-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=TransmitMessage-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=TransmitMessage-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=TransmitMessage-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=TransmitMessage-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=TransmitMessage-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=TransmitMessage-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=TransmitMessage-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| xApiKey | Your Api key |



API client can be initialized as following.

```php
$xApiKey = 'xApiKey'; // Your Api key

$client = new TransmitMessageLib\TransmitMessageClient($xApiKey);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [ContactsController](#contacts_controller)
* [AccountsController](#accounts_controller)
* [MMSController](#mms_controller)
* [SMSController](#sms_controller)

## <a name="contacts_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ContactsController") ContactsController

### Get singleton instance

The singleton instance of the ``` ContactsController ``` class can be accessed from the API Client.

```php
$contacts = $client->getContacts();
```

### <a name="get_lists"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.getLists") getLists

> Get metadata of all contact lists defined in your account. Metadata includes list names and corresponding descriptions, contact count within each list, created/updated date and time of each list, filters applied on the list (if any) and type of list.


```php
function getLists(
        $sort = 'updated_at',
        $filters = null,
        $page = 0,
        $limit = 25)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sort |  ``` Optional ```  ``` DefaultValue ```  | Sort by (field name) |
| filters |  ``` Optional ```  | Filter by (relevant field values) |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page number of the result to fetch |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of results to fetch per page; maximum 100 |



#### Example Usage

```php
$sort = 'updated_at';
$filters = 'filters';
$page = 0;
$limit = 25;

$result = $contacts->getLists($sort, $filters, $page, $limit);

```


### <a name="create_list"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.createList") createList

> Create a new (Static or Dynamic) contact list. 
> NOTE: Filters are required only in case of a Dynamic List, and are not necessary for a Static List.


```php
function createList($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | List details |



#### Example Usage

```php
$body = new ContactList();

$result = $contacts->createList($body);

```


### <a name="delete_list"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.deleteList") deleteList

> Delete a contact list.


```php
function deleteList($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | List ID |



#### Example Usage

```php
$id = 'id';

$result = $contacts->deleteList($id);

```


### <a name="add_list_contacts"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.addListContacts") addListContacts

> Add contacts into a static list. NOTE: This end point cannot be used to add contacts into a dynamic list.


```php
function addListContacts(
        $id,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Static List ID |
| body |  ``` Required ```  | IDs of all contacts to be added to the list (max 100) |



#### Example Usage

```php
$id = 'id';
$body = new AddToContactList();

$result = $contacts->addListContacts($id, $body);

```


### <a name="remove_list_contacts"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.removeListContacts") removeListContacts

> Remove contacts from a list. NOTE: This endpoint can be used to remove contacts only from a Static list.


```php
function removeListContacts(
        $id,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Static List ID |
| body |  ``` Required ```  | IDs of all contacts to be removed from the list |



#### Example Usage

```php
$id = 'id';
$body = new AddToContactList();

$result = $contacts->removeListContacts($id, $body);

```


### <a name="format_number"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.formatNumber") formatNumber

> Format a valid mobile number from any format to an international format.


```php
function formatNumber($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Phone Number Object |



#### Example Usage

```php
$body = new PhoneNumber();

$result = $contacts->formatNumber($body);

```


### <a name="get_a_list"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.getAList") getAList

> Get metadata for a selected contact list.


```php
function getAList($iD)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| iD |  ``` Required ```  | List ID |



#### Example Usage

```php
$iD = 'ID';

$result = $contacts->getAList($iD);

```


### <a name="remove_contact_field"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.removeContactField") removeContactField

> Delete a custom contact field


```php
function removeContactField($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The custom contact field ID |



#### Example Usage

```php
$id = 'id';

$result = $contacts->removeContactField($id);

```


### <a name="update_contact_field"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.updateContactField") updateContactField

> Update contact field information


```php
function updateContactField(
        $id,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The custom contact field ID |
| body |  ``` Required ```  | The custom contact field details (name, type etc.) |



#### Example Usage

```php
$id = 'id';
$body = new ContactField();

$result = $contacts->updateContactField($id, $body);

```


### <a name="get_contact_fields"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.getContactFields") getContactFields

> Get a list of custom contact fields and corresponding field details (name, type etc.)


```php
function getContactFields()
```

#### Example Usage

```php

$result = $contacts->getContactFields();

```


### <a name="create_contact_field"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.createContactField") createContactField

> Create a custom contact field. Input additional relevant parameter values such as decimals for a numeric type field, or values for a list type field etc.


```php
function createContactField($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Contact field details |



#### Example Usage

```php
$body = new ContactField();

$result = $contacts->createContactField($body);

```


### <a name="get_list_contacts"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.getListContacts") getListContacts

> Get information of contacts within a contact list.


```php
function getListContacts(
        $id,
        $sort = 'updated_at',
        $filters = null,
        $page = 0,
        $limit = 25)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | List ID |
| sort |  ``` Optional ```  ``` DefaultValue ```  | Sorted by (field name) |
| filters |  ``` Optional ```  ``` Collection ```  | Filter by (contact data). Applicable for Static Lists only |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page of results to fetch |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of results to fetch per page; maximum 100 |



#### Example Usage

```php
$id = 'id';
$sort = 'updated_at';
$filters = array('filters');
$page = 0;
$limit = 25;

$result = $contacts->getListContacts($id, $sort, $filters, $page, $limit);

```


### <a name="get_contacts"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.getContacts") getContacts

> Get information of all contacts in the TransmitMessage contacts database


```php
function getContacts(
        $sort = 'updated_at',
        $filters = null,
        $page = 0,
        $limit = 25)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sort |  ``` Optional ```  ``` DefaultValue ```  | The output field to sort the results by |
| filters |  ``` Optional ```  | Filter by (field values) |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page number of results to fetch |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of results to fetch per page; maximum 100 |



#### Example Usage

```php
$sort = 'updated_at';
$filters = 'filters';
$page = 0;
$limit = 25;

$result = $contacts->getContacts($sort, $filters, $page, $limit);

```


### <a name="get_a_contact"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.getAContact") getAContact

> Get information about a contact in your TransmitMessage contact database


```php
function getAContact($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Contact Reference number |



#### Example Usage

```php
$id = 'id';

$result = $contacts->getAContact($id);

```


### <a name="create_or_update_contact"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.createOrUpdateContact") createOrUpdateContact

> Create a new contact or Update details of an existing contact


```php
function createOrUpdateContact(
        $contactRef,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contactRef |  ``` Required ```  | Contact reference number |
| body |  ``` Required ```  | Contact details |



#### Example Usage

```php
$contactRef = 'contact_ref';
$body = new Contact();

$result = $contacts->createOrUpdateContact($contactRef, $body);

```


### <a name="remove_a_contact"></a>![Method: ](https://apidocs.io/img/method.png ".ContactsController.removeAContact") removeAContact

> Remove a contact record


```php
function removeAContact($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Contact ID |



#### Example Usage

```php
$id = 'id';

$result = $contacts->removeAContact($id);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="accounts_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AccountsController") AccountsController

### Get singleton instance

The singleton instance of the ``` AccountsController ``` class can be accessed from the API Client.

```php
$accounts = $client->getAccounts();
```

### <a name="get_account_balance"></a>![Method: ](https://apidocs.io/img/method.png ".AccountsController.getAccountBalance") getAccountBalance

> Get Account Balance


```php
function getAccountBalance()
```

#### Example Usage

```php

$result = $accounts->getAccountBalance();

```


### <a name="get_sender_ids"></a>![Method: ](https://apidocs.io/img/method.png ".AccountsController.getSenderIds") getSenderIds

> Get Sender Ids


```php
function getSenderIds(
        $sort = 'name',
        $filters = null,
        $page = 0,
        $limit = 25)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sort |  ``` Optional ```  ``` DefaultValue ```  | Sort by (field name) |
| filters |  ``` Optional ```  | Filter results by (field value) |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page number of results to fetch |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of results to fetch per page; maximum 100 |



#### Example Usage

```php
$sort = 'name';
$filters = 'filters';
$page = 0;
$limit = 25;

$result = $accounts->getSenderIds($sort, $filters, $page, $limit);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="mms_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MMSController") MMSController

### Get singleton instance

The singleton instance of the ``` MMSController ``` class can be accessed from the API Client.

```php
$mMS = $client->getMMS();
```

### <a name="cancel_mms_campaign"></a>![Method: ](https://apidocs.io/img/method.png ".MMSController.cancelMMSCampaign") cancelMMSCampaign

> Cancel an MMS Campaign. NOTE: Can only cancel campaigns in SCHEDULED or VALIDATING status


```php
function cancelMMSCampaign($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | MMS Campaign ID |



#### Example Usage

```php
$id = 'id';

$result = $mMS->cancelMMSCampaign($id);

```


### <a name="get_mms_campaign_link_hits"></a>![Method: ](https://apidocs.io/img/method.png ".MMSController.getMMSCampaignLinkHits") getMMSCampaignLinkHits

> Get information about link hits from an MMS Campaign successfully sent


```php
function getMMSCampaignLinkHits(
        $id,
        $sort = 'last_hit',
        $filters = null,
        $page = 0,
        $limit = 25)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | MMS Campaign ID |
| sort |  ``` Optional ```  ``` DefaultValue ```  | Sort by (field name) |
| filters |  ``` Optional ```  | Filter by (field value) |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page number of results to fetch |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of results to fetch per page; maximum 100 |



#### Example Usage

```php
$id = 'id';
$sort = 'last_hit';
$filters = 'filters';
$page = 0;
$limit = 25;

$result = $mMS->getMMSCampaignLinkHits($id, $sort, $filters, $page, $limit);

```


### <a name="get_mms_message"></a>![Method: ](https://apidocs.io/img/method.png ".MMSController.getMMSMessage") getMMSMessage

> Get information about an MMS Message


```php
function getMMSMessage($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | MMS ID |



#### Example Usage

```php
$id = 'id';

$result = $mMS->getMMSMessage($id);

```


### <a name="get_mms_campaigns"></a>![Method: ](https://apidocs.io/img/method.png ".MMSController.getMMSCampaigns") getMMSCampaigns

> Get information of all MMS Campaigns


```php
function getMMSCampaigns(
        $sort = 'updated_at',
        $filters = null,
        $page = 0,
        $limit = 25)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sort |  ``` Optional ```  ``` DefaultValue ```  | Sort by (field name) |
| filters |  ``` Optional ```  | Filter by (field value) |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page of results to fetch |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of results to fetch per page; maximum 100 |



#### Example Usage

```php
$sort = 'updated_at';
$filters = 'filters';
$page = 0;
$limit = 25;

$result = $mMS->getMMSCampaigns($sort, $filters, $page, $limit);

```


### <a name="get_mms_campaign"></a>![Method: ](https://apidocs.io/img/method.png ".MMSController.getMMSCampaign") getMMSCampaign

> Get information about a specific MMS Campaign


```php
function getMMSCampaign($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Campaign ID |



#### Example Usage

```php
$id = 'id';

$result = $mMS->getMMSCampaign($id);

```


### <a name="send_mms"></a>![Method: ](https://apidocs.io/img/method.png ".MMSController.sendMMS") sendMMS

> Send MMS to single contact


```php
function sendMMS($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | MMS Details |



#### Example Usage

```php
$body = new MMS();

$result = $mMS->sendMMS($body);

```


### <a name="send_mms_campaign"></a>![Method: ](https://apidocs.io/img/method.png ".MMSController.sendMMSCampaign") sendMMSCampaign

> Send an MMS Campaign


```php
function sendMMSCampaign($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | MMS campaign details |



#### Example Usage

```php
$body = new MMSCampaign();

$result = $mMS->sendMMSCampaign($body);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="sms_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SMSController") SMSController

### Get singleton instance

The singleton instance of the ``` SMSController ``` class can be accessed from the API Client.

```php
$sMS = $client->getSMS();
```

### <a name="get_sms_inbox"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.getSMSInbox") getSMSInbox

> Get all the inbound SMS messages (MOs and Replies)


```php
function getSMSInbox(
        $sort = 'received_at',
        $filters = null,
        $page = 0,
        $limit = 25)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sort |  ``` Optional ```  ``` DefaultValue ```  | Sort by (field name) |
| filters |  ``` Optional ```  | Filter by (field value) |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page of results to fetch |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of results to fetch per page; maximum 100 |



#### Example Usage

```php
$sort = 'received_at';
$filters = 'filters';
$page = 0;
$limit = 25;

$result = $sMS->getSMSInbox($sort, $filters, $page, $limit);

```


### <a name="cancel_sms_campaign"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.cancelSMSCampaign") cancelSMSCampaign

> Cancel an SMS Campaign. NOTE: Only campaigns in SCHEDULED or VALIDATING status can be cancelled


```php
function cancelSMSCampaign($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | SMS Campaign ID |



#### Example Usage

```php
$id = 'id';

$result = $sMS->cancelSMSCampaign($id);

```


### <a name="get_sms_campaign_link_hits"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.getSMSCampaignLinkHits") getSMSCampaignLinkHits

> Get SMS Campaign link hits


```php
function getSMSCampaignLinkHits(
        $id,
        $sort = 'last_hit',
        $filters = null,
        $page = 0,
        $limit = 25)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | SMS Campaign ID |
| sort |  ``` Optional ```  ``` DefaultValue ```  | Sort by (field name) |
| filters |  ``` Optional ```  | Filter by (field value) |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page number of results to fetch |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of results to fetch per page; maximum 100 |



#### Example Usage

```php
$id = 'id';
$sort = 'last_hit';
$filters = 'filters';
$page = 0;
$limit = 25;

$result = $sMS->getSMSCampaignLinkHits($id, $sort, $filters, $page, $limit);

```


### <a name="get_sms_campaign_replies"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.getSMSCampaignReplies") getSMSCampaignReplies

> Fetch replies to a campaign from recipients


```php
function getSMSCampaignReplies(
        $id,
        $sort = 'received_at',
        $filters = null,
        $page = 0,
        $limit = 25)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | SMS Campaign ID |
| sort |  ``` Optional ```  ``` DefaultValue ```  | Sort by (field name) |
| filters |  ``` Optional ```  | Filter by (field value) |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page number of results to fetch |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of results to fetch per page; maximum 100 |



#### Example Usage

```php
$id = 'id';
$sort = 'received_at';
$filters = 'filters';
$page = 0;
$limit = 25;

$result = $sMS->getSMSCampaignReplies($id, $sort, $filters, $page, $limit);

```


### <a name="get_sms_campaign_report"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.getSMSCampaignReport") getSMSCampaignReport

> Fetch the activity details report for an SMS campaign already sent. NOTE: The information can be retrieved only for those campaigns that have either been already sent, is in the process of getting sent or for throttled campaigns that is at least partially sent.


```php
function getSMSCampaignReport($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | SMS Campaign ID |



#### Example Usage

```php
$id = 'id';

$result = $sMS->getSMSCampaignReport($id);

```


### <a name="get_sms_campaigns"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.getSMSCampaigns") getSMSCampaigns

> Fetch a list and details of all SMS campaigns in your TransmitMessage account across all statuses


```php
function getSMSCampaigns(
        $sort = 'updated_at',
        $filters = null,
        $page = 0,
        $limit = 25)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sort |  ``` Optional ```  ``` DefaultValue ```  | Sort by (field name) |
| filters |  ``` Optional ```  | Filter by (field value) |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page of results to fetch |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of results to fetch per page; maximum 100 |



#### Example Usage

```php
$sort = 'updated_at';
$filters = 'filters';
$page = 0;
$limit = 25;

$result = $sMS->getSMSCampaigns($sort, $filters, $page, $limit);

```


### <a name="get_sms_campaign"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.getSMSCampaign") getSMSCampaign

> Fetch details of a specific SMS Campaign


```php
function getSMSCampaign($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | SMS Campaign ID |



#### Example Usage

```php
$id = 'id';

$result = $sMS->getSMSCampaign($id);

```


### <a name="send_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.sendSMS") sendSMS

> Send SMS


```php
function sendSMS($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | SMS details (from, to and content) |



#### Example Usage

```php
$body = new SMS();

$result = $sMS->sendSMS($body);

```


### <a name="get_sms_record"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.getSMSRecord") getSMSRecord

> Fetch details of an SMS sent


```php
function getSMSRecord($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Message ID of the SMS |



#### Example Usage

```php
$id = 'id';

$result = $sMS->getSMSRecord($id);

```


### <a name="send_sms_campaign"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.sendSMSCampaign") sendSMSCampaign

> Send SMS Campaign


```php
function sendSMSCampaign($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | SMS campaign details |



#### Example Usage

```php
$body = new SMSCampaign();

$result = $sMS->sendSMSCampaign($body);

```


[Back to List of Controllers](#list_of_controllers)



