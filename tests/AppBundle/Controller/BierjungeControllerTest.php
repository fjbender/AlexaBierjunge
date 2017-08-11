<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BierjungeControllerTest extends WebTestCase
{
    public function testBierjunge()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/bierjunge');

        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        //$this->assertContains('Mjeh', $crawler->filter('#container h1')->text());

    }

    public function testTest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/test');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
