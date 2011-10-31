<html>
<body>
<?php
include 'vizAPI.php';
$states = array();
$playersCountByState = array();
$jsonArray = array();
$stateCounter = 0;
$masterObj = new vizAPI();
$states = $masterObj->getStates();
while($stateCounter < count($states)) {
    $playersCountByState = $masterObj->getMajorLeaguePlayersCountByState($states[$stateCounter]->schoolState);
    $jsonArray[] = array($playersCountByState[0]->birthState => $playersCountByState[0]->count);
    $stateCounter++;
}
print json_encode($jsonArray);
?>
</body>
</html>