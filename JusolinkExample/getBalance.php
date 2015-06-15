<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../Example.css" media="screen" />
		<title>주소링크 SDK PHP 4.X Example.</title>
	</head>
<?php
	include 'common.php';
	
	//잔여포인트 조회

	$remainPoint = $jusolinkService->GetBalance();

	if(is_a($remainPoint, 'JusolinkException')){
		$code = $remainPoint->code;
		$message = $remainPoint->message;
	}
?>
	<body>
		<div id="content">
			<p class="heading1">Response</p>
			<br/>
			<fieldset class="fieldset1">
				<legend>잔여포인트 확인 테스트</legend>
				<ul>
					<?
						if(isset($remainPoint)) { 
					?>
							<li>잔여포인트 : <? echo $remainPoint ?></li>
					<?
						} else {
					?>
							<li>Response.code : <? echo $code ?> </li>
							<li>Response.message : <? echo $message ?></li>
					<?
						}
					?>		
				</ul>
			</fieldset>
		 </div>
	</body>
</html>