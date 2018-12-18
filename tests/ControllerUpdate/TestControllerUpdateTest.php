<?php

namespace App\Tests\ControllerUpdate;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerUpdateTest extends WebTestCase
{
    public function testupdate() {
        $client = $this->createClient();
        $client->request('GET', static::$container->get('router')->generate('update'));
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('update', $client->getResponse()->getContent());
    }
}