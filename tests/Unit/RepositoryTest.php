<?php

namespace PPP\DBTest\Unit;

use PPP\DBTest\MockConnection;
use PPP\DBTest\Repository;

/**
 * @group unit
 */
class RepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function test_it_returns_correct_data()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Fincsi',
            ],
        ];

        $connection = new MockConnection($data);

        $repository = new Repository($connection);

        $this->assertEquals($data, $repository->get());
    }
}
