<?php

namespace PPP\DBTest;

class MockConnection implements Connection
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function execute($sql)
    {
        return $this->data;
    }
}
