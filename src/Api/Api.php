<?php namespace Carbontwelve\Anonimail\Api;

use Carbontwelve\Anonimail\ConnectionInterface;

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
     * @var \Carbontwelve\Anonimail\ConnectionInterface
     */
    protected $connection;

    public function __construct( ConnectionInterface $connection )
    {
        $this->connection = $connection;
    }

}
