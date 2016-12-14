<?php

namespace PPP\DBTest;

class MysqlConnection implements Connection
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function execute($sql)
    {
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
