<?php

namespace Ebay\Sell\Inventory;

use OpenAPI\Runtime\ResponseHandler\GenericResponseHandler;
use OpenAPI\Runtime\ResponseHandler\JsonResponseHandler;
use OpenAPI\Runtime\ResponseHandler\UnexpectedResponseHandler;
use OpenAPI\Runtime\ResponseHandlerStack\ResponseHandlerStack as BaseClass;

class ResponseHandlerStack extends BaseClass
{
    public function __construct()
    {
        $genericResponseHandler = new GenericResponseHandler();
        $genericResponseHandler->setResponseTypes(new ResponseTypes());
        $handlers[] = $genericResponseHandler;
        $jsonResponseHandler = new JsonResponseHandler();
        $jsonResponseHandler->setResponseTypes(new ResponseTypes());
        $handlers[] = $jsonResponseHandler;
        $handlers[] = new UnexpectedResponseHandler();
        parent::__construct($handlers);
    }
}
