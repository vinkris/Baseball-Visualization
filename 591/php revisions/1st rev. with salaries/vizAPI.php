<?php

include_once 'getMysql.php';
class vizAPI
{
    var $objmysql;

    function vizAPI()
    {
        $this->objmysql = new getMysql();
    }


    function getPlayers($schoolID)
    {
        $result = array();
        $result = $this->objmysql->escapeString(array($schoolID));
        $schoolID = $result[0];
        $query = "select CONCAT(m.nameFirst, m.nameLast) as title, EXTRACT(YEAR FROM m.debut) as start, EXTRACT(YEAR from m.finalGame) as end, s.salary from master m, salaries s where m.playerID in (select playerID from schoolsplayers where schoolID='$schoolID') and m.playerID = s.playerID";
        $result = $this->objmysql->getArrayHash($query);
        return $result;
    }

     
    /*function updateChoice($uname, $site, $status)
    {
        $result = array();
        $result = $this->objmysql->escapeString(array($uname, $site, $status));
        $uname = $result[0]; $site = $result[1]; $status = $result[2];
        if($status == 1) {
            $query = "insert into usersite values ('$uname','$site')";
        }
        else {
            $query = "delete from usersite where uname = '$uname' and vcsite = '$site'";
        }
        $ret = mysql_query($query);
        if($ret == 0)
        die('FATAL ERROR, CANNOT UPDATE USER CHOICE');
    }*/

}

?>