<?php namespace Carbontwelve\Api;

abstract class Api
{

    /**
     * @var string
     */
    protected $userAgent  = 'Anonimail_Library/1.0.0';

    /**
     * @var string
     */
    protected $apiBaseUrl = '';

    /**
     * @var string
     */
    protected $apiKey     = '';

    /**
     * @var \Carbontwelve\ConnectionInterface
     */
    protected $connection;

}
