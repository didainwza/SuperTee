<?php

abstract class BaseModel{
    public static $db;
    protected $host="localhost";
    
    protected $username="root";
    protected $password="root123456";
    protected $db_name="kkk";

    // protected $username="songserm_db";
	// protected $password="65Qqqk92lT";
    // protected $db_name="songserm_db";

    function __construct(){
        static::$db = mysqli_connect($host, $username, $password, $db_name);
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }
}
?>