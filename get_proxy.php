<?php

// Gettings Ad URLS

// $url = 'https://www.asriran.com/fa/news/860528/%25D9%2581%25D9%2588%25D9%2584%25DA%25AF%25D9%2588%25D8%25B1%25D9%2587-%25D8%25A7%25D9%2588%25D9%2584%25DB%258C%25D9%2586-%25D8%25AE%25D9%2588%25D8%25AF%25D8%25B1%25D9%2588%25DB%258C-%25D8%25AA%25D9%2585%25D8%25A7%25D9%2585-%25D8%25A7%25D9%2584%25DA%25A9%25D8%25AA%25D8%25B1%25DB%258C%25DA%25A9%25DB%258C-%25D9%2585%25D8%25A7%25D8%25B2%25D8%25B1%25D8%25A7%25D8%25AA%25DB%258C-%25D9%2585%25D8%25B9%25D8%25B1%25D9%2581%25DB%258C-%25D9%2588-%25D9%2588%25D8%25A7%25D8%25B1%25D8%25AF-%25D8%25AE%25D8%25B7-%25D8%25AA%25D9%2588%25D9%2584%25DB%258C%25D8%25AF-%25D9%2585%25DB%258C-%25D8%25B4%25D9%2588%25D8%25AF-%25D9%2587%25D9%2585%25D8%25A7%25D9%2586-%25D9%2587%25DB%258C%25D9%2588%25D9%2584%25D8%25A7-%25D8%25A7%25D9%2585%25D8%25A7-%25DA%25A9%25D8%25A7%25D9%2585%25D9%2584%25D8%25A7-%25D8%25A8%25D8%25B1%25D9%2582%25DB%258C-%25D8%25B9%25DA%25A9%25D8%25B3';

$url = "https://www.tahririeh.com/news/22173/%D8%A7%D9%81%D8%B2%D8%A7%DB%8C%D8%B4-%D8%AC%D9%87%D8%A7%D9%86%DB%8C-%D9%82%DB%8C%D9%85%D8%AA-%DA%AF%D9%86%D8%AF%D9%85";


$proxy = '138.128.59.129:9058';
$proxyauth = 'ztmnfifq:kod0af7rr99z';


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:105.0) Gecko/20100101 Firefox/105.0",
    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8",
    "Accept-Language: en-US,en;q=0.5",
    "Accept-Encoding: gzip, deflate, br",
    "Connection: keep-alive",
    "Cookie: gearbox_ad_token=v8ts9r9vctvvtersd68cbf8r92drsdac; analytics_global_token=v8ts9r9vctvvtersd68cbf8r92drsdac; _yngt=v8ts9r9vctvvtersd68cbf8r92drsdac; _ga_JK4CN8ZVKW=GS1.1.1652257136.1.1.1652257158.0; _ga=GA1.1.1195157906.1652257136; analytics_campaign={%22source%22:%22PublisherBranding%22%2C%22medium%22:%22banner%22%2C%22term%22:%22728_90%22}; _ym_uid=1652257138657041459; _ym_d=1652257138; yn_lrgn=RU1QVFk%3D.RZs3mj75GLaEpvmjaXBdUuuQurCz6ny%2Fv9hWekx5dt0; _ga_PTCVLDH39L=GS1.1.1664816201.1.1.1664816201.60.0.0",
    "Upgrade-Insecure-Requests: 1",
    "Sec-Fetch-Dest: document",
    "Sec-Fetch-Mode: navigate",
    "Sec-Fetch-Site: none",
    "Sec-Fetch-User: ?1",
    "Pragma: no-cache",
    "Cache-Control: no-cache",
    "TE: trailers"
  ),
));

curl_setopt($curl, CURLOPT_PROXY, $proxy);
curl_setopt($curl, CURLOPT_PROXYUSERPWD, $proxyauth);


// Getting Headers
// curl_setopt($curl, CURLOPT_HEADERFUNCTION,
//   function($ch, $header) use (&$headers)
//   {
//     $len = strlen($header);
//     $header = explode(':', $header, 2);
//     if (count($header) < 2) // ignore invalid headers
//       return $len;

//     $headers[strtolower(trim($header[0]))][] = trim($header[1]);
    
//     return $len;
//   }
// );
// echo $headers;

$response = curl_exec($curl);
curl_close($curl);
echo $response;



?>

<script>
window.alert = function() {};
alert = function() {};

window.addEventListener("load", () => {
    let x = document.querySelectorAll("a");
    yekta_urls = [];
    x.forEach(element => {
        if(element.hasAttribute("href")){
            url = element.getAttribute("href");
            if(url.indexOf("ck.yektanet") != -1){
                yekta_urls.push(url);
            }
        }
    });
    console.table(yekta_urls);
});

</script>
