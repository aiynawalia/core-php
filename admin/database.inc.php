<?php
ob_start();
/*
session_start();
class database
{
    public $con=null;
    protected $hostname ="localhost:3306";
    protected $dbusername ="gdgoenka_sqldb";
    protected $dbpassword ="}S]3#g9z,0ff";
    protected $dbname ="gdgoenka_gdgoenka_db";

function __construct()
{
    $this->con=mysqli_connect($this->hostname,$this->dbusername,$this->dbpassword,$this->dbname);
    if(!$this->con)
    {
        die("Error".mysqli_connect_error($this->con));
    }
}

}
$db=new database();
*/
session_start();
class database
{
    public $con = null;
    protected $hostname = "localhost";
    protected $dbusername = "root";
    protected $dbpassword = "";
    protected $dbname = "schoolDemo";

    function __construct()
    {
        $this->con = mysqli_connect($this->hostname, $this->dbusername, $this->dbpassword, $this->dbname);
        if (!$this->con) {
            die("Error" . mysqli_connect_error($this->con));
        }
    }
}
$db = new database();
