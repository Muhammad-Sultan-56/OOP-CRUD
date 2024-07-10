<?php

// class to connect with database
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

// class to perform crud operations
class crud extends connection
{
    public function __construct()
    {
        parent::__construct();
    }

    // insert query function
    public function insert($table, $params = array())
    {
        $table_columns = implode(", ", array_keys($params));
        $table_values = implode("', '", $params);

        $insert_query = "INSERT INTO $table ($table_columns) VALUES ('$table_values')";
        $insert_result = $this->con->query($insert_query);
    }

    // select all data function
    public function selectAll($table)
    {

        $select_all_qry = "SELECT * FROM $table";
        $select_result = $this->con->query($select_all_qry);

        return $select_result;
    }
    // select unique data function 
    public function select($table, $id)
    {
        $select_qry = "SELECT * FROM $table WHERE id='$id'";
        $select1_result = $this->con->query($select_qry);

        return $select1_result;
    }

    // delete data function
    public function delete($table, $id = null)
    {
        $delete_qry = "DELETE FROM $table ";

        if ($id != null) {
            $delete_qry .=  " WHERE id='$id'";
        }
        $delete_result = $this->con->query($delete_qry);
    }

    // update data function

    public function update($table, $params = array(), $id)
    {
        $args = array();

        foreach ($params as $key => $value) {
            $args[] = "$key = '$value'";
        }

        $update_qry = "UPDATE $table SET " . implode(", ", $args) . " WHERE id='$id'";
        $update_result = $this->con->query($update_qry);
    }
}
