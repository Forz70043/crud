<?php

include 'config.php';

class MysqlConnection {

    private static $connection_;

    public function __construct()
    {
        if(!($mysqli = mysqli_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWD,DB_NAME))){
            error_log("connection failed ");
            return false;
        }
        MysqlConnection::$connection_ = $mysqli;
    }

    public static function getConnection()
    {
        if(!MysqlConnection::$connection_) new MysqlConnection;
        return MysqlConnection::$connection_;
    }

    /**
     * close Connection
     */
    public static function closeConnection()
    {
        if(self::$connection_)
        {
            mysqli_close(self::$connection_);
            self::$connection_=null;
        }
    }

    /**
     * Do query motherfucker
     */
    public function query($query)
    {
        if(defined('MYSQL_DEBUG')) error_log($query);
        return mysqli_query(self::getConnection(),$query);
    }

};
class_alias('MysqlConnection','DB');

?>
