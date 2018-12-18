<?php

namespace App\Tests\ControllerList;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerListTest extends WebTestCase
{
    public function testlist() {
        $client = $this->createClient();
        $client->request('GET', static::$container->get('router')->generate('list'));
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('list', $client->getResponse()->getContent());
    }
}