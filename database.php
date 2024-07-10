<?php

class connection
{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "oop_crud";

    protected $con = "";

    protected function __construct()
    {
        $this->con = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    }
}
