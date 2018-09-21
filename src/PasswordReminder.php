<?php

class PasswordReminder 
{
    private $dbConnection;

    public function __construct() 
    {
        $this->dbConnection = new MySQLConnection('foo:bar');
    }
} 