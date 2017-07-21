<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ClientTeste extends TestCase
{

  protected $client;

  public function testCanCreateClient() : void
  {
    $this->assertInstanceOf(
        Bmonteirog\FOAAS\Client::class,
        new Bmonteirog\FOAAS\Client
    );
  }

  public function testCanGetVersion() : void
  {
    $fuck = new Bmonteirog\FOAAS\Client;
    $version = $fuck->version();
    $this->assertRegexp('/FOAAS - Version /', $version);
  }

}
