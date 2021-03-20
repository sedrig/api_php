<?php


$code = $_GET['code'];
echo $code;
$CLIENT_ID = "1b54cbcc-adfe-4ce9-90ae-63ee2bf7c8a8/3c33d970-37bf-4f16-948c-5641bee7196f";
$CLIENT_SECRET = "g%zuSDHpvpFzM])RRA][";

$url = "https://oauth.accounting.sage.com/token";

$data_array = array(
    'client_id' => $CLIENT_ID,
    'client_secret' => $CLIENT_SECRET,
    'code' => $code,
    'grant_type' => "authorization_code",
    'redirect_uri' => "http://127.0.0.1:8080/callback.php",

);

$data = http_build_query($data_array);
//POST https://oauth.accounting.sage.com/token

//client_id,client_secret,code,grant_type,redirect_uri

echo "<br/>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if ($e = curl_error($ch)) {
    echo $e;
} else {
    $decode = json_decode($resp);
    foreach ($decode as $key => $value) {
        echo $key . ':' . $value . '<br>';
    }
}

curl_close($ch);
