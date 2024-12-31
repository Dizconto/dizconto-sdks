<?php

namespace DizcontoPay\Common\Auth;

use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\Authentication\AccessTokenProvider;
use Microsoft\Kiota\Abstractions\Authentication\AllowedHostsValidator;

define('DIZCONTO_OAUTH2_TOKEN_URL', 'https://auth.dizconto.com/oauth/v2/token');

class Oauth2AccessTokenProvider implements AccessTokenProvider
{
    private string $clientId;
    private string $clientSecret;
    private ?string $accessToken = null;

    public function __construct(string $clientId, string $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function getAuthorizationTokenAsync(string $url, array $additionalAuthenticationContext = []): Promise
    {
        if ($this->accessToken === null) {
//            $data = [
//                'grant_type' => 'client_credentials',
//                'client_id' => $this->clientId,
//                'client_secret' => $this->clientSecret
//            ];
//            $curlHandle = curl_init(DIZCONTO_OAUTH2_TOKEN_URL);
//            curl_setopt($curlHandle, CURLOPT_POST, true);
//            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, http_build_query($data));
//            curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
//            $response = curl_exec($curlHandle);
//            curl_close($curlHandle);
//            $response = json_decode($response, true);
//            $this->accessToken = $response['access_token'];
            $this->accessToken = 'token';
        }
        return $this->accessToken;
    }

    public function getAllowedHostsValidator(): AllowedHostsValidator
    {
        return new AllowedHostsValidator();
    }

}