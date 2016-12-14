<?php

namespace Tests\Integration\PPP\DBTest;

use PPP\DBTest\MysqlConnection;
use PPP\DBTest\Repository;

/**
 * @group integration
 */
class RepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function test_it_returns_correct_data()
    {
        $pdo = new \PDO('mysql:host=db;dbname=database', 'root', '');

        $connection = new MysqlConnection($pdo);

        $pdo->exec('DELETE FROM valami');
        $pdo->exec('INSERT INTO valami (id, name) VALUES (1, "Fincsi")');

        $data = [
            [
                'id' => '1',
                'name' => 'Fincsi',
            ],
        ];

        $repository = new Repository($connection);

        $this->assertEquals($data, $repository->get());
    }
}
