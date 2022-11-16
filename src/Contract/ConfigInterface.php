<?php

namespace Flutterwave\Contract;

use GuzzleHttp\ClientInterface;
use Psr\Log\LoggerInterface;


interface ConfigInterface
{
    public function getHttp(): ClientInterface;

    public static function setUp(string $secretKey, string $publicKey, string $enc, string $env);

    public function getLoggerInstance(): LoggerInterface;

    public function getEncryptkey(): string;

    public function getPublicKey():string;

    public function getSecretKey():string;

    public static function getBaseUrl(): string;

    public function getEnv():string;

    public static function getDefaultTransactionPrefix():string;

}