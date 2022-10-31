<?php

function GetCookie() {
	$curl = curl_init();

	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://ua.yektanet.com/cookie/set',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
	CURLOPT_HTTPHEADER => array(
		'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:105.0) Gecko/20100101 Firefox/105.0',
		'Accept: */*',
		'Accept-Language: en-US,en;q=0.5',
		'Accept-Encoding: gzip, deflate, br',
		'Referer: https://ua.yektanet.com/cookie/iframe/',
		'Connection: keep-alive',
		'Sec-Fetch-Dest: empty',
		'Sec-Fetch-Mode: cors',
		'Sec-Fetch-Site: same-origin',
		'Pragma: no-cache',
		'Cache-Control: no-cache',
		'TE: trailers',
		// 'Cookie: analytics_global_token=0440f40b-02db-4dcf-9923-d143eecc6bb9; gearbox_ad_token=0440f40b-02db-4dcf-9923-d143eecc6bb9; yn_lrgn=RU1QVFk%3D.RZs3mj75GLaEpvmjaXBdUuuQurCz6ny%2Fv9hWekx5dt0'
	),
	));

	// Getting Headers
	curl_setopt($curl, CURLOPT_HEADERFUNCTION,
	function($ch, $header) use (&$headers)
	{
		$len = strlen($header);
		$header = explode(':', $header, 2);
		if (count($header) < 2) // ignore invalid headers
		return $len;

		$headers[strtolower(trim($header[0]))][] = trim($header[1]);
		
		return $len;
	}
	);


	$response = curl_exec($curl);

	curl_close($curl);
	// echo $response;

	// echo "<pre>";
	// var_dump($headers["set-cookie"]);
	// echo "</pre>";


	$sem1 = strpos($headers["set-cookie"][0] , ";");
	$sem2 = strpos($headers["set-cookie"][1] , ";");

	$ck1 = substr($headers["set-cookie"][0] , 0 , $sem1);
	$ck2 = substr($headers["set-cookie"][1] , 0 , $sem2);

	$ck3_temp = substr($headers["set-cookie"][0] , 0 , $sem1);
	$mos = strpos($ck3_temp , "=");
	$ck3 = substr($ck3_temp , $mos);

	$cookie = $ck1 . "; " . $ck2 . "; " . "_yngt" . $ck3 . ";";


	return $cookie;
}
