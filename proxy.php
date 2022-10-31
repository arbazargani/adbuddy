<?php
// http://dynupdate.no-ip.com/ip.php

// 45.94.47.66 	8110 	ztmnfifq 	kod0af7rr99z

function doProxy($target, $cookies = null) {
    $list  = '45.94.47.66:8110
45.94.47.66:8110
45.155.68.129:8133
185.199.228.220:7300
185.199.231.45:8382
188.74.210.207:6286
188.74.210.21:6100
188.74.183.10:8279
154.95.36.199:6893
185.199.229.156:7492
144.168.217.88:8780';

    $proxies = explode(PHP_EOL, $list);
    $proxyauth = 'ztmnfifq:kod0af7rr99z';
    file_put_contents('logs/logs.txt', date("----------- Y/m/d H:i:s -----------").PHP_EOL , FILE_APPEND | LOCK_EX);
    try {
        foreach ($proxies as $proxy) {
            $log = "request " . substr($target, 25, 50) . " via $proxy";
            // error_log($log);
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => $target,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_COOKIE => $cookies,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5); 
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_PROXY, $proxy);
            curl_setopt($curl, CURLOPT_PROXYUSERPWD, $proxyauth);

            $response = curl_exec($curl);

            curl_close($curl);
            $op[] = [
                'msg' => $log,
                'http_code' => curl_getinfo($curl, CURLINFO_HTTP_CODE),
                // 'response' => $response
            ];
            file_put_contents('logs/logs.txt', $log.PHP_EOL , FILE_APPEND | LOCK_EX);
        }
        return $op;
    } catch(Exception $e) {

        trigger_error(sprintf(
            'Curl failed with error #%d: %s',
            $e->getCode(), $e->getMessage()),
            E_USER_ERROR);
    
    } finally {
        // Close curl handle unless it failed to initialize
        if (is_resource($curl)) {
            curl_close($curl);
        }
    }
}
