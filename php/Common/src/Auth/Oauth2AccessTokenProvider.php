<?php

namespace DizcontoPay\Common\src\Auth;

use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\Authentication\AccessTokenProvider;
use Microsoft\Kiota\Abstractions\Authentication\AllowedHostsValidator;

class Oauth2AccessTokenProvider implements AccessTokenProvider
{
    private string $clientId;
    private string $clientSecret;
    private ?string $accessToken = null;

    private RequestAdapter $requestAdapter;

    public function __construct(string $clientId, string $clientSecret, RequestAdapter $requestAdapter)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->$requestAdapter = $requestAdapter;
    }

    public function getAuthorizationTokenAsync(string $url, array $additionalAuthenticationContext = []): Promise
    {
        if ($this->accessToken === null) {
            // TODO
            $data = [
                'grant_type' => 'client_credentials',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret
            ];
            $this->accessToken = '23123';
        }
        return $this->accessToken;
    }

    public function getAllowedHostsValidator(): AllowedHostsValidator
    {
        return new AllowedHostsValidator();
    }

}