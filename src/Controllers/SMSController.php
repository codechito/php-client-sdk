<?php
/*
 * TransmitMessageLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace TransmitMessageLib\Controllers;

use TransmitMessageLib\APIException;
use TransmitMessageLib\APIHelper;
use TransmitMessageLib\Configuration;
use TransmitMessageLib\Models;
use TransmitMessageLib\Exceptions;
use TransmitMessageLib\Http\HttpRequest;
use TransmitMessageLib\Http\HttpResponse;
use TransmitMessageLib\Http\HttpMethod;
use TransmitMessageLib\Http\HttpContext;
use TransmitMessageLib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class SMSController extends BaseController
{
    /**
     * @var SMSController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return SMSController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get all the inbound SMS messages (MOs and Replies)
     *
     * @param string  $sort    (optional) Sort by (field name)
     * @param string  $filters (optional) Filter by (field value)
     * @param integer $page    (optional) The page of results to fetch
     * @param integer $limit   (optional) The number of results to fetch per page; maximum 100
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSMSInbox(
        $sort = 'received_at',
        $filters = null,
        $page = 0,
        $limit = 25
    ) {

        //prepare query string for API call
        $_queryBuilder = '/sms/inbound';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'sort'    => (null != $sort) ? $sort : 'received_at',
            'filters' => $filters,
            'page'    => (null != $page) ? $page : 0,
            'limit'   => (null != $limit) ? $limit : 25,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key' => Configuration::$xApiKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Cancel an SMS Campaign. NOTE: Only campaigns in SCHEDULED or VALIDATING status can be cancelled
     *
     * @param string $id SMS Campaign ID
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function cancelSMSCampaign(
        $id
    ) {

        //prepare query string for API call
        $_queryBuilder = '/sms/campaign/{id}/cancel';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key' => Configuration::$xApiKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Get SMS Campaign link hits
     *
     * @param string  $id      SMS Campaign ID
     * @param string  $sort    (optional) Sort by (field name)
     * @param string  $filters (optional) Filter by (field value)
     * @param integer $page    (optional) The page number of results to fetch
     * @param integer $limit   (optional) The number of results to fetch per page; maximum 100
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSMSCampaignLinkHits(
        $id,
        $sort = 'last_hit',
        $filters = null,
        $page = 0,
        $limit = 25
    ) {

        //prepare query string for API call
        $_queryBuilder = '/sms/campaign/{id}/link-hit';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'      => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'sort'    => (null != $sort) ? $sort : 'last_hit',
            'filters' => $filters,
            'page'    => (null != $page) ? $page : 0,
            'limit'   => (null != $limit) ? $limit : 25,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key' => Configuration::$xApiKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Fetch replies to a campaign from recipients
     *
     * @param string  $id      SMS Campaign ID
     * @param string  $sort    (optional) Sort by (field name)
     * @param string  $filters (optional) Filter by (field value)
     * @param integer $page    (optional) The page number of results to fetch
     * @param integer $limit   (optional) The number of results to fetch per page; maximum 100
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSMSCampaignReplies(
        $id,
        $sort = 'received_at',
        $filters = null,
        $page = 0,
        $limit = 25
    ) {

        //prepare query string for API call
        $_queryBuilder = '/sms/campaign/{id}/inbound';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'      => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'sort'    => (null != $sort) ? $sort : 'received_at',
            'filters' => $filters,
            'page'    => (null != $page) ? $page : 0,
            'limit'   => (null != $limit) ? $limit : 25,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key' => Configuration::$xApiKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Fetch the activity details report for an SMS campaign already sent. NOTE: The information can be
     * retrieved only for those campaigns that have either been already sent, is in the process of getting
     * sent or for throttled campaigns that is at least partially sent.
     *
     * @param string $id SMS Campaign ID
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSMSCampaignReport(
        $id
    ) {

        //prepare query string for API call
        $_queryBuilder = '/sms/campaign/{id}/report';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key' => Configuration::$xApiKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Fetch a list and details of all SMS campaigns in your TransmitMessage account across all statuses
     *
     * @param string  $sort    (optional) Sort by (field name)
     * @param string  $filters (optional) Filter by (field value)
     * @param integer $page    (optional) The page of results to fetch
     * @param integer $limit   (optional) The number of results to fetch per page; maximum 100
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSMSCampaigns(
        $sort = 'updated_at',
        $filters = null,
        $page = 0,
        $limit = 25
    ) {

        //prepare query string for API call
        $_queryBuilder = '/sms/campaign';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'sort'    => (null != $sort) ? $sort : 'updated_at',
            'filters' => $filters,
            'page'    => (null != $page) ? $page : 0,
            'limit'   => (null != $limit) ? $limit : 25,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key' => Configuration::$xApiKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Fetch details of a specific SMS Campaign
     *
     * @param string $id SMS Campaign ID
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSMSCampaign(
        $id
    ) {

        //prepare query string for API call
        $_queryBuilder = '/sms/campaign/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key' => Configuration::$xApiKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Send SMS
     *
     * @param Models\SMS $body SMS details (from, to and content)
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function sendSMS(
        $body
    ) {

        //prepare query string for API call
        $_queryBuilder = '/sms';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'x-api-key' => Configuration::$xApiKey
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Fetch details of an SMS sent
     *
     * @param string $id Message ID of the SMS
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSMSRecord(
        $id
    ) {

        //prepare query string for API call
        $_queryBuilder = '/sms/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key' => Configuration::$xApiKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Send SMS Campaign
     *
     * @param Models\SMSCampaign $body SMS campaign details
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function sendSMSCampaign(
        $body
    ) {

        //prepare query string for API call
        $_queryBuilder = '/sms/campaign';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'x-api-key' => Configuration::$xApiKey
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }
}