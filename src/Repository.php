<?php

namespace PPP\DBTest;

class Repository
{
    /**
     * @var Connection
     */
    private $conn;

    public function __construct(Connection $conn)
    {
        $this->conn = $conn;
    }

    /**
     * @return array
     */
    public function get()
    {
        return $this->conn->execute('SELECT * FROM valami');
    }
}
