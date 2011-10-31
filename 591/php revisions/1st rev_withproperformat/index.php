<html>
<body>
<?php
include 'vizAPI.php';
$players = array();
$i = 0;
$masterObj = new vizAPI();
//$players = $masterObj->getPlayers('ncstate');
/*print "<table border = 1>";
print "<tr><td>Name</td><td>start</td><td>end</td></tr>";
while($i < count($players)) {
    print "<tr>";
    //$players[$i]->nameFirst = $players[$i]->nameFirst." ".$players[$i]->nameLast;
    print "<td>".$players[$i]->title."</td>";
    print "<td>".$players[$i]->start."</td>";
    print "<td>".$players[$i]->end."</td>";
    print "</tr>";
    $i++;
}
print "</table>";*/
//print json_encode($players);
$players = $masterObj->getPlayers('duke');
print json_encode($players);


?>
</body>
</html>