<?php

namespace connection;

class database
{

    function con()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'unieat';
        $con = mysqli_connect($servername, $username, $password, $database);

        return $con;
    }

    function query($var)
    {
        $query = "SELECT $var FROM unieat";

        return $$query;
    }
}
