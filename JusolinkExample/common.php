<?php
require_once '../Jusolink/Jusolink.php';

//링크아이디
$LinkID = 'TESTER_JUSO';

//발급받은 비밀키. 유출에 주의하시기 바랍니다.
$SecretKey = 'FjaRgAfVUPvSDHTrdd/uw/dt/Cdo3GgSFKyE1+NQ+bc=';

$jusolinkService = new Jusolink($LinkID,$SecretKey);
?>