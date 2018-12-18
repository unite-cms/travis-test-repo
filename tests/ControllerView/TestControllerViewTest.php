<?php

namespace App\Tests\ControllerView;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerViewTest extends WebTestCase
{
    public function testview() {
        $client = $this->createClient();
        $client->request('GET', static::$container->get('router')->generate('view'));
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('view', $client->getResponse()->getContent());
    }
}