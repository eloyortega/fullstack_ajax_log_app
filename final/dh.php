<?php

$jd = file_get_contents('data.json');
$jd = json_decode($jd, true);

array_push($jd, $_POST);

$jd = json_encode($jd);
file_put_contents('data.json', $jd);

header('location:index.html');

?>