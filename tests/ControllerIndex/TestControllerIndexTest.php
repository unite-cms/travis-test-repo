<?php

namespace App\Tests\ControllerIndex;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerIndexTest extends WebTestCase
{
    public function testindex() {
        $client = $this->createClient();
        $client->request('GET', static::$container->get('router')->generate('index'));
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('index', $client->getResponse()->getContent());
    }
}