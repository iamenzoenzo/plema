<?php
class dbConfig {
    protected $serverName;
    protected $userName;
    protected $password;
    protected $dbName;
    function dbConfig() {
        $this -> serverName = 'teamlaban.chioee9qrhwf.us-east-1.rds.amazonaws.com:3306';
        $this -> userName = 'teamlaban';
        $this -> password = 'teamlaban';
        $this -> dbName = 'teamlaban';
    }
}
?>