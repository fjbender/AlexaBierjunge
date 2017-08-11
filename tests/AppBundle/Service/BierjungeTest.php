<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Service\Bierjunge;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BierjungeTest extends WebTestCase
{
    public function testHaengt()
    {
        $bierjunge = new Bierjunge();

        $this->assertInstanceOf(Bierjunge::class, $bierjunge);
    }
}
