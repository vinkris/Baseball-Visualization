<?php

include_once 'dbConnection.php';
class getMysql
{

    function getMysql()
    {
        new dbConnection();
    }

    function getArrayHash($query)
    {
        $res = mysql_query($query);
        if(!$res){
            throw new Exception("getArrayHash failed");
        }
        $row = array();
        $num = mysql_num_rows($res);
        while ($row1 = mysql_fetch_object($res)) {
            $row[] = $row1;
        }
        return $row;
    }

    function escapeString($input)
    {
        $length = count($input);
        $i = 0;
        $strings = array();
        while($i < $length) {
            $strings[] = mysql_real_escape_string($input[$i]);
            $i++;
        }
        return $strings;
    }

}

?>