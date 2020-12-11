<?php

class admindbcon
{
    public $dbhost;
    public $dbuser;
    public $dbpass;
    // public $dbname;
    public $conn;

    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'cedhosting1');

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}

?>

<script>

</script>