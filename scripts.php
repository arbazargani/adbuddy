<?php
// www.gostaresh.news changed to www.gostaresh.news
// gostaresh.news changed to gostaresh.news
function GetAds() {
  
	// Executing Curl
	$curl = curl_init();


	// Getting Native Scirpt JS
	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://cdn.yektanet.com/js/gostaresh.news/native-gostaresh.news-24637.js?v=20220901805',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
	CURLOPT_HTTPHEADER => array(
		'authority: cdn.yektanet.com',
		'accept: */*',
		'accept-language: en-US,en;q=0.9',
		'cache-control: no-cache',
		'pragma: no-cache',
		'referer: https://www.gostaresh.news/',
		'sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
		'sec-ch-ua-mobile: ?0',
		'sec-ch-ua-platform: "Windows"',
		'sec-fetch-dest: script',
		'sec-fetch-mode: no-cors',
		'sec-fetch-site: cross-site',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36'
	),
	));

	$response_native = curl_exec($curl);



	// Getting yn_bnr Scirpt JS
	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://cdn.yektanet.com/template/bnrs/yn_bnr.min.js?v=20220901805',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
	CURLOPT_HTTPHEADER => array(
		'authority: cdn.yektanet.com',
		'accept: */*',
		'accept-language: en-US,en;q=0.9',
		'cache-control: no-cache',
		'pragma: no-cache',
		'referer: https://www.gostaresh.news/',
		'sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
		'sec-ch-ua-mobile: ?0',
		'sec-ch-ua-platform: "Windows"',
		'sec-fetch-dest: script',
		'sec-fetch-mode: no-cors',
		'sec-fetch-site: cross-site',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36'
	),
	));

	$response_yn_bnr = curl_exec($curl);


	// Getting Publisher Scirpt JS
	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://cdn.yektanet.com/rg_woebegone/scripts_v3/w5IRTnSc/publisher.js?v=20220901805',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
		'authority: cdn.yektanet.com',
		'accept: */*',
		'accept-language: en-US,en;q=0.9',
		'cache-control: no-cache',
		'pragma: no-cache',
		'referer: https://www.gostaresh.news/',
		'sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
		'sec-ch-ua-mobile: ?0',
		'sec-ch-ua-platform: "Windows"',
		'sec-fetch-dest: script',
		'sec-fetch-mode: no-cors',
		'sec-fetch-site: cross-site',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36'
		),
	));


	$response_publisher = curl_exec($curl);








	// Working with BFetch
	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://bfetch.yektanet.com/',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'OPTIONS',
	CURLOPT_HTTPHEADER => array(
		'authority: bfetch.yektanet.com',
		'accept: */*',
		'accept-language: en-US,en;q=0.9',
		'access-control-request-headers: content-type',
		'access-control-request-method: POST',
		'cache-control: no-cache',
		'origin: https://www.gostaresh.news',
		'pragma: no-cache',
		'referer: https://www.gostaresh.news/',
		'sec-fetch-dest: empty',
		'sec-fetch-mode: cors',
		'sec-fetch-site: cross-site',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36'
	),
	));

	$response_op_bfetch = curl_exec($curl);






	// Checking the App ID
	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://audience.yektanet.com/api/v1/scripts/preview/validate/?app_id=rhjKlhlL',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
	CURLOPT_HTTPHEADER => array(
		'authority: audience.yektanet.com',
		'accept: */*',
		'accept-language: en-US,en;q=0.9',
		'cache-control: no-cache',
		'origin: https://www.gostaresh.news',
		'pragma: no-cache',
		'referer: https://www.gostaresh.news/',
		'sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
		'sec-ch-ua-mobile: ?0',
		'sec-ch-ua-platform: "Windows"',
		'sec-fetch-dest: empty',
		'sec-fetch-mode: cors',
		'sec-fetch-site: cross-site',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36'
	),
	));

	$response_app_id = curl_exec($curl);




	// Checking FakeGIF
	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://ua.yektanet.com/__fake.gif?aa=event&abe=L&abf=832b4f54-f0a4-41d5-9f34-c9026ee97421&abj=1&aed=pub&ac=https%253A%252F%252Fwww.gostaresh.news%252Fnews%252F22173%252F%2525D8%2525A7%2525D9%252581%2525D8%2525B2%2525D8%2525A7%2525DB%25258C%2525D8%2525B4-%2525D8%2525AC%2525D9%252587%2525D8%2525A7%2525D9%252586%2525DB%25258C-%2525D9%252582%2525DB%25258C%2525D9%252585%2525D8%2525AA-%2525DA%2525AF%2525D9%252586%2525D8%2525AF%2525D9%252585&ae=%257B%257D&ad=gostaresh.news&as=%25D8%25A7%25D9%2581%25D8%25B2%25D8%25A7%25DB%258C%25D8%25B4%2520%25D8%25AC%25D9%2587%25D8%25A7%25D9%2586%25DB%258C%2520%25D9%2582%25DB%258C%25D9%2585%25D8%25AA%2520%25DA%25AF%25D9%2586%25D8%25AF%25D9%2585%2520-%2520%25D8%25A8%25D8%25B1%25D8%25B1%25D8%25B3%25DB%258C%2520%25D9%2587%25D8%25A7%25DB%258C%2520%25D8%25B1%25D8%25B3%25D8%25A7%25D9%2586%25D9%2587%2520%25D8%25A7%25DB%258C%2520%25D8%25AA%25D8%25AD%25D8%25B1%25DB%258C%25D8%25B1%25DB%258C%25D9%2587&aef=rhjKlhlL&aec=166781&aaa=direct&aab=null&ai=c3cbd492-bd4f-00a9-5f7c-10a5f7380426&abw=1903&abb=3089&aby=1920&abz=1080&al=1920&am=937&abk=%25D8%25A8%25D8%25B1%25D8%25B1%25D8%25B3%25DB%258C%2520%25D9%2587%25D8%25A7%25DB%258C%2520%25D8%25B1%25D8%25B3%25D8%25A7%25D9%2586%25D9%2587%2520%25D8%25A7%25DB%258C%2520%25D8%25AA%25D8%25AD%25D8%25B1%25DB%258C%25D8%25B1%25DB%258C%25D9%2587',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
	CURLOPT_HTTPHEADER => array(
		'authority: ua.yektanet.com',
		'accept: image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8',
		'accept-language: en-US,en;q=0.9',
		'cache-control: no-cache',
		'pragma: no-cache',
		'referer: https://www.gostaresh.news/',
		'sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
		'sec-ch-ua-mobile: ?0',
		'sec-ch-ua-platform: "Windows"',
		'sec-fetch-dest: image',
		'sec-fetch-mode: no-cors',
		'sec-fetch-site: cross-site',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36'
	),
	));

	$response_fake_gif = curl_exec($curl);





	// Getting SabaVision Pixel
	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://plus.sabavision.com/csync/3P/pixel?id=yektanet',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
	CURLOPT_HTTPHEADER => array(
		'authority: plus.sabavision.com',
		'accept: image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8',
		'accept-language: en-US,en;q=0.9',
		'cache-control: no-cache',
		'pragma: no-cache',
		'referer: https://www.gostaresh.news/',
		'sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
		'sec-ch-ua-mobile: ?0',
		'sec-ch-ua-platform: "Windows"',
		'sec-fetch-dest: image',
		'sec-fetch-mode: no-cors',
		'sec-fetch-site: cross-site',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36'
	),
	));

	$response_sabavision_pixel = curl_exec($curl);




	// Getting Complete JS
	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://cdn.yektanet.com/rg_woebegone/scripts_v4/rhjKlhlL/complete.js?v=2022-10-18T02',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
	CURLOPT_HTTPHEADER => array(
		'authority: cdn.yektanet.com',
		'accept: */*',
		'accept-language: en-US,en;q=0.9',
		'cache-control: no-cache',
		'pragma: no-cache',
		'referer: https://www.gostaresh.news/',
		'sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
		'sec-ch-ua-mobile: ?0',
		'sec-ch-ua-platform: "Windows"',
		'sec-fetch-dest: script',
		'sec-fetch-mode: no-cors',
		'sec-fetch-site: cross-site',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36'
	),
	));

	$response_complete_js = curl_exec($curl);




	// Getting BFetch Main Content
	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://bfetch.yektanet.com/',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS =>'{
		"new-cdn":1,
		"big-product":1,
		"product-retargeting":1,
		"format":"json",
		"ids":["13101"],
		"w":1920,"h":937,
		"is-mobile":0,"android":0,"ios":0,
		"page_title":"افزایش جهانی قیمت گندم - بررسی های رسانه ای تحریریه","page_description":"نگرانی از تجارت با اوکراین در کنار تشدید حملات روسیه، قیمت گندم را در بازارهای جهانی به شدت افزایش داد.",
		"page_url":"https://www.gostaresh.news/news/22173/%D8%A7%D9%81%D8%B2%D8%A7%DB%8C%D8%B4-%D8%AC%D9%87%D8%A7%D9%86%DB%8C-%D9%82%DB%8C%D9%85%D8%AA-%DA%AF%D9%86%D8%AF%D9%85"
	}',
	CURLOPT_HTTPHEADER => array(
		'authority: bfetch.yektanet.com',
		'accept: */*',
		'accept-language: en-US,en;q=0.9',
		'cache-control: no-cache',
		'content-type: application/json',
		'origin: https://www.gostaresh.news',
		'pragma: no-cache',
		'referer: https://www.gostaresh.news/',
		'sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
		'sec-ch-ua-mobile: ?0',
		'sec-ch-ua-platform: "Windows"',
		'sec-fetch-dest: empty',
		'sec-fetch-mode: cors',
		'sec-fetch-site: cross-site',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
		'Cookie: yn_bsb=TbwEAEy8BAABAA%3D%3D.WcvdS9MKh9fgwWDkHdNzOAq2n8kgQ7Fe4vbQiEtX6%2FY'
	),
	));

	//Getting Headers
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

	$response_bfetch = curl_exec($curl);



	// Checking nFetch OPTIONS
	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://nfetch.yektanet.com/api/v2/load',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'OPTIONS',
	CURLOPT_HTTPHEADER => array(
		'authority: nfetch.yektanet.com',
		'accept: */*',
		'accept-language: en-US,en;q=0.9',
		'access-control-request-headers: content-type',
		'access-control-request-method: POST',
		'cache-control: no-cache',
		'origin: https://www.gostaresh.news',
		'pragma: no-cache',
		'referer: https://www.gostaresh.news/',
		'sec-fetch-dest: empty',
		'sec-fetch-mode: cors',
		'sec-fetch-site: cross-site',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36'
	),
	));

	//Disabling Getting Headers
	curl_setopt($curl, CURLOPT_HEADERFUNCTION, false);

	$response_nfetch_op = curl_exec($curl);

	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://nfetch.yektanet.com/api/v2/load',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS =>'{"
		ids":[69350,70311,70312,70313],
		"counts":[8,3,1,1],
		"image_types":[1,1,6,6],
		"w":1920,"h":937,
		"is-mobile":false,"android":false,"ios":false,
		"page_title":"افزایش جهانی قیمت گندم - بررسی های رسانه ای تحریریه","page_description":"نگرانی از تجارت با اوکراین در کنار تشدید حملات روسیه، قیمت گندم را در بازارهای جهانی به شدت افزایش داد.",
		"page_url":"https://www.gostaresh.news/news/22173/%D8%A7%D9%81%D8%B2%D8%A7%DB%8C%D8%B4-%D8%AC%D9%87%D8%A7%D9%86%DB%8C-%D9%82%DB%8C%D9%85%D8%AA-%DA%AF%D9%86%D8%AF%D9%85",
		"ref":"",
		"fingerprint":"330e85ea92becb9a384b7e2fbde2cdce
		"}',
	CURLOPT_HTTPHEADER => array(
		'authority: nfetch.yektanet.com',
		'accept: */*',
		'accept-language: en-US,en;q=0.9',
		'cache-control: no-cache',
		'content-type: application/json',
		'origin: https://www.gostaresh.news',
		'pragma: no-cache',
		'referer: https://www.gostaresh.news/',
		'sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
		'sec-ch-ua-mobile: ?0',
		'sec-ch-ua-platform: "Windows"',
		'sec-fetch-dest: empty',
		'sec-fetch-mode: cors',
		'sec-fetch-site: cross-site',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36'
	),
	));

	$response = curl_exec($curl);

	curl_close($curl);
	// echo $response;






	curl_close($curl);



	// echo "<pre style='word-wrap: anywhere;'>";
	// print_r($response_bfetch);
	// print_r($headers);
	// echo "</pre>";

	$arr = [
		'bfetch' => $response_bfetch,
		'headers' => $headers
	];
}

