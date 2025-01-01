<?php

namespace App\Services;

use App\Contracts\AuthServiceInterface;
use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;

class CognitoAuthService implements AuthServiceInterface
{
    private CognitoIdentityProviderClient $client;
    private string $clientId;
    private string $clientSecret;

    public function __construct()
    {
        $this->client = new CognitoIdentityProviderClient([
            "profile" => "default",
            "region" => config("services.cognito.region"),
            "version" => "latest"
        ]);
        $this->clientId = config("services.cognito.client_id");
        $this->clientSecret = config("services.cognito.client_secret");
    }

    public function register(string $email, string $password)
    {
        $this->client->signUp([
            "ClientId" => $this->clientId,
            "Username" => $email,
            "Password" => $password,
            "SecretHash" => base64_encode(
                hash_hmac("sha256", $email . $this->clientId, $this->clientSecret, true)
            )
        ]);
    }
}
