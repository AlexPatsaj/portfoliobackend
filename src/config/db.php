<?php
    class db{
        private $dbhost = 'sql2.freemysqlhosting.net';
        private $dbuser = 'sql2252273';
        private $dbpass = 'jJ2%gX2%';
        private $dbname = 'sql2252273';

        //Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost; dbname=$this->dbname;";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }
    