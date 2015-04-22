<?php namespace Anonimail;

use Carbontwelve\Anonimail\ApiFactory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testFactoryMakeValidRequest()
    {
        $factory       = new ApiFactory();

        $guerrillaMail = $factory->make('guerrillaMail');
        $this->assertInstanceOf('Carbontwelve\\Anonimail\\Api\\GuerrillaMail', $guerrillaMail);

        $mailinator    = $factory->make('mailinator');
        $this->assertInstanceOf('Carbontwelve\\Anonimail\\Api\\Mailinator', $mailinator);
    }

    /**
     * @expectedException \Carbontwelve\Anonimail\Exceptions\InvalidApiException
     */
    public function testFactoryMakeInvalidRequest()
    {
        $factory       = new ApiFactory();
        $invalidMail   = $factory->make('googleMail');
    }

}
