<?php namespace Carbontwelve\Anonimail;

use Carbontwelve\Anonimail\Connectors\GuzzleConnection;
use Carbontwelve\Anonimail\Exceptions\InvalidApiException;
use GuzzleHttp\Client;

class ApiFactory
{

    public function __construct( ConnectionInterface $connection = null )
    {
        $this->connection = $connection ?: new GuzzleConnection( new Client() );
    }

    /**
     * @param string $type
     * @return ApiInterface
     * @throws InvalidApiException
     */
    public function make( $type )
    {

        /** @var string|ApiInterface $class */
        $class = "\\Carbontwelve\\Anonimail\\Api\\" . $type;

        if ( ! class_exists($class) )
        {
            throw new InvalidApiException('There is no connector for the api request ['. $type .']');
        }

        return new $class( $this->connection );

    }

}
