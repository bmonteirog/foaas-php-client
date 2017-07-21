<?php

use PHPUnit\Framework\TestCase;

use Bmonteirog\FOAAS\Client as Client;

class ClientTeste extends TestCase
{

  protected $client;

  public function testCanCreateClient()
  {
    $this->client = new Client;

    $this->assertTrue($this->client instanceof Bmonteirog\);
  }

}
