<?php

namespace CA\PlatypusBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CheckerControllerControllerTest extends WebTestCase
{
    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{name}/show');
    }

}
