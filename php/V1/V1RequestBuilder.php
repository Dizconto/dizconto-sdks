<?php

namespace DizcontoPay\V1;

use DizcontoPay\V1\Charges\ChargesRequestBuilder;
use DizcontoPay\V1\Customers\CustomersRequestBuilder;
use DizcontoPay\V1\Fees\FeesRequestBuilder;
use DizcontoPay\V1\Merchants\MerchantsRequestBuilder;
use DizcontoPay\V1\MerchantsTransactions\MerchantsTransactionsRequestBuilder;
use DizcontoPay\V1\PaymentMethods\PaymentMethodsRequestBuilder;
use DizcontoPay\V1\Webhooks\WebhooksRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /v1
*/
class V1RequestBuilder extends BaseRequestBuilder 
{
    /**
     * The charges property
    */
    public function charges(): ChargesRequestBuilder {
        return new ChargesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customers property
    */
    public function customers(): CustomersRequestBuilder {
        return new CustomersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The fees property
    */
    public function fees(): FeesRequestBuilder {
        return new FeesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The merchants property
    */
    public function merchants(): MerchantsRequestBuilder {
        return new MerchantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The merchantsTransactions property
    */
    public function merchantsTransactions(): MerchantsTransactionsRequestBuilder {
        return new MerchantsTransactionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The paymentMethods property
    */
    public function paymentMethods(): PaymentMethodsRequestBuilder {
        return new PaymentMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The webhooks property
    */
    public function webhooks(): WebhooksRequestBuilder {
        return new WebhooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new V1RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/v1');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
