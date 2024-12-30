<?php

namespace Dizconto\Pay\V1\MerchantsTransactions;

use Dizconto\Pay\Models\PaginatedMerchantTransactionDto;
use Dizconto\Pay\V1\MerchantsTransactions\Item\MerchantsTransactionsItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /v1/merchants-transactions
*/
class MerchantsTransactionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Dizconto/Pay.v1.merchantsTransactions.item collection
     * @param string $id Unique identifier of the item
     * @return MerchantsTransactionsItemRequestBuilder
    */
    public function byId(string $id): MerchantsTransactionsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new MerchantsTransactionsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MerchantsTransactionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/v1/merchants-transactions');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * @param MerchantsTransactionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PaginatedMerchantTransactionDto|null>
     * @throws Exception
    */
    public function get(?MerchantsTransactionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PaginatedMerchantTransactionDto::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * @param MerchantsTransactionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MerchantsTransactionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MerchantsTransactionsRequestBuilder
    */
    public function withUrl(string $rawUrl): MerchantsTransactionsRequestBuilder {
        return new MerchantsTransactionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
