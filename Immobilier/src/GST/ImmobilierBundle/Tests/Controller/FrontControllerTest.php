<?php

namespace GST\ImmobilierBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontControllerTest extends WebTestCase
{
    public function testSearchbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/bien/search');
    }

}
