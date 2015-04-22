<?php namespace Carbontwelve\Anonimail;

interface ConnectionInterface
{

    public function get( $action, array $options );
    public function post( $action, array $options );

}
