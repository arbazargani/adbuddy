<?php
ini_set('max_execution_time', '300');
set_time_limit(300);

require 'vendor/autoload.php';
require_once 'get_cookie_yekta.php';
require_once 'scripts.php';
require_once 'proxy.php';
require_once 'agents.php';

// dd(doProxy(false, false, 'http://localhost:2222/listener.php'));

$agents = makeAgents();
$cookies = GetCookie();

$cookiebag = explode(';', $cookies);
/**
 * Last index of cookiebag will be empty, so we will destory that.
 */
// array_shift($cookiebag);
// array_pop($cookiebag);

foreach ($cookiebag as $item => $cookie) {
    $tmp = explode('=', $cookie);
    if (isset($tmp[1]))
        $cookiebag[$tmp[0]] = $tmp[1];
}
$first_impact = time();

$ads = GetAds();

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://nfetch.yektanet.com/api/v2/load',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"ids":[5527,4483,5773],"counts":[6,6,1],"image_types":[1,1,6],"w":1920,"h":580,"is-mobile":false,"uid":"00604f8a-ae1ae-e098b-be25b-bebae922dda98","android":false,"ios":false,"page_title":"چشم‌اندازی برای صادرات","page_description":"یکی از متغیرهای مهم اقتصادی در هر جامعه، میزان تولید و روند صادرات است. این امر در ایران یکی از اهداف مهم برنامه‌های عمرانی و توسعه کشور هم بوده و هست. ","page_url":"https://www.gostaresh.news/%D8%A8%D8%AE%D8%B4-%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF-7/277074-%DA%86%D8%B4%D9%85-%D8%A7%D9%86%D8%AF%D8%A7%D8%B2%DB%8C-%D8%A8%D8%B1%D8%A7%DB%8C-%D8%B5%D8%A7%D8%AF%D8%B1%D8%A7%D8%AA","ref":"","fingerprint":"1098b1674717b45487ac18f691d74c7f"}',
  CURLOPT_HTTPHEADER => array(
    'authority: nfetch.yektanet.com',
    'accept: */*',
    'accept-language: en-US,en;q=0.9,fa;q=0.8',
    'content-type: application/json',
    //'cookie: yn_urgn=RU1QVFk%3D.YEt9APuXRsH6lxmBnnF0%2FJXh7TcUvIiy6allyYrAbMo; gearbox_ad_token=00604f8a-ae1ae-e098b-be25b-bebae922dda98; analytics_global_token=00604f8a-ae1ae-e098b-be25b-bebae922dda98; yn_lrgn=RU1QVFk%3D.RZs3mj75GLaEpvmjaXBdUuuQurCz6ny%2Fv9hWekx5dt0; yn_urgn=RU1QVFk%3D.YEt9APuXRsH6lxmBnnF0%2FJXh7TcUvIiy6allyYrAbMo; yn_usg=AAAAAAAAAAAB.VfARxt0W5dWgo6pR3PzoEbPCZem%2FKav1e%2Ft8%2FZOvQpQ; yn_unrgc=q%2B8BAAMCAACCBgGrBgCCEwABAAAaZwA9GQAXAABbEQDsAAABAAAsBQAHAABiAABxAQABAAABAAABAACoAgA%3D.xQn8XrvR3yV6cSud4H%2BTTTtLxqhbis%2FHKAmGtNKUeFA; yn_unrgv=d3cDAMKsAwADTjUAg1kHAAAA.6e3di%2FEmyuc35AULgB1bjdffcIWTAIXOtYOFhhDW6NA',
    'cookie: '.$cookies,
    'origin: https://www.gostaresh.news',
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

// dd($response);

curl_close($curl);
$response = json_decode($response)->data;
$targets = [
    'cookies' => $cookies,
];
$final_destinations = [];
$itration = 0;
foreach ($response as $item => $childs) {
    foreach ($childs as $child) {
        $itration ++;
        $targets[$itration]['dataset'] = [
            'cookies' => explode(' ', $cookies),
            'lts' => $first_impact,
            'vts' => time(),
            'gat' => $cookiebag['gearbox_ad_token'],
            'destination' => $child->url,
            'pure_destination' => strtok($child->url, '?'),
            'hijack_destination' => '',
            'params' => explode('&', parse_url($child->url)['query']),
        ];
        $tmp = $targets[$itration]['dataset'];
        $params = $tmp['params'];
        $targets[$itration]['dataset']['hijack_destination'] = $tmp['pure_destination']
         . "?" . $params[0]
         . "&gat=" . $tmp['gat']
         . "&"  . $params[2];
        $final_destinations[] = $targets[$itration]['dataset']['hijack_destination'];
        // $final_destinations[] = urldecode(str_replace('redirect=', '', $params[0]));
    }
}


/**
 * 
 * 
 * https://ck.yektanet.com/a/click/v4-hNzkZhBhQ-v-bkt-bkZ-cXGC-x8d-bmpjQK-a-lt/pIXs4s3r3VvdzUa6uaLR8DJ95M3CI5NXmlnx6UOETDc
 * ?redirect=https%3A%2F%2Fnethoosh.com%2Frich
 * &gat=ef3d37dd-0360-4111-9c0f-3e9bad2d04e3
 * &pu=https%3A%2F%2Fwww.gostaresh.news%2F%25D8%25A8%25D8%25AE%25D8%25B4-%25D8%25A7%25D9%2582%25D8%25AA%25D8%25B5%25D8%25A7%25D8%25AF-7%2F277074-%25DA%2586%25D8%25B4%25D9%2585-%25D8%25A7%25D9%2586%25D8%25AF%25D8%25A7%25D8%25B2%25DB%258C-%25D8%25A8%25D8%25B1%25D8%25A7%25DB%258C-%25D8%25B5%25D8%25A7%25D8%25AF%25D8%25B1%25D8%25A7%25D8%25AA%2F 
 * 
 */

// dd($final_destinations);

// $test = doProxy($proxies[0][0], $proxies[0][1], urlencode($final_destinations[0]), $cookiebag);
// dd($test);

$binder = [];
foreach ($final_destinations as $index => $fd) {
    $test[$index] = doProxy($fd);
    // $binder[$index] = [
    //     $test['http_code'],
    //     $fd,
    //     $test['response']
    // ];
}
dd($test);
$tmp = $binder[0][2];
$tmp = explode('</body>', $tmp)[0];
$tmp = str_replace(['<html>', '<body onload="'], null, $tmp);
dd($binder);