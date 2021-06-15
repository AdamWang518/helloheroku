<?php

class DataBaseConfig
{
    public $servername;
    public $username;
    public $password;
    public $databasename;
    public $report;

    public function __construct()
    {

        $this->servername = 'database-2.c3vujoluny2g.us-east-1.rds.amazonaws.com';
        $this->username = 'admin';
        $this->password = 'mysql518';
        $this->databasename = 'Final';

    }
}

?>
