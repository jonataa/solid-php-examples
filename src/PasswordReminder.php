<?php

interface DBConnectionInterface 
{
    public function connect();
} 

class MySQLConnection implements DBConnectionInterface 
{
    public function connect() 
    {
        return "Database connection";
    }
}

class PasswordReminder 
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection) 
    {
        $this->dbConnection = $dbConnection;
    }
} 