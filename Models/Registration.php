<?php
class Registration
{
    private $db;
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }
}