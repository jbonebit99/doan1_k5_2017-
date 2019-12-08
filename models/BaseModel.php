<?php

class BaseModel
{
    public function connect()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'datawebnews');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        return $conn;
    }

}