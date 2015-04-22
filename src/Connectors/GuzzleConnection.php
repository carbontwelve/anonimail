<?php namespace Carbontwelve\Anonimail\Connectors;

use Carbontwelve\Anonimail\ConnectionInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Client;

class GuzzleConnection implements ConnectionInterface
{

    /**
     * @var ClientInterface
     */
    protected $connection;

    public function __construct( ClientInterface $connection )
    {
        $this->connection = $connection;
    }

    public function get($action, array $options)
    {

    }

    public function post($action, array $options)
    {

    }
}
