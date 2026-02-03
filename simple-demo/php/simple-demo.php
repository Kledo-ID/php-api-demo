<?php
/**
 * Kledo API Demo - PHP
 * Jalankan: php simple-demo.php
 */

$API_HOST = 'http://xxx.api.kledo.com/api/v1';
$ACCESS_TOKEN = 'your_token_here';

$url = $API_HOST . '/finance/accounts?sort_by=name&order_by=asc&per_page=5';
$ctx = stream_context_create([
    'http' => [
        'header' => "Accept: application/json\r\nAuthorization: Bearer $ACCESS_TOKEN\r\n"
    ],
    'ssl' => [
        'verify_peer' => false,       // Nonaktifkan untuk local (self-signed cert)
        'verify_peer_name' => false   // Hapus di production!
    ]
]);

$response = file_get_contents($url, false, $ctx);
$data = json_decode($response, true);
$json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

if (php_sapi_name() === 'cli') {
    echo $json;
} else {
    header('Content-Type: application/json; charset=utf-8');
    echo $json;
}
