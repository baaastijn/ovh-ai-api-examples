<?php
// Basic cURL POST call for OVH colorgram API. Will return HEX, RGB and HSL.
 
$data = array(
  'url' => 'https://www.example.com/image.png',
  'nb_colors' => 6
);
 
$payload = json_encode($data);
 
$ch = curl_init('https://api-market-place.ai.ovh.net/image-colorgram/detect');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Content-Type: application/json',
  'Accept: application/json',
  'X-OVH-Api-Key: xxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxx',
  'Content-Length: ' . strlen($payload))
);
   
$response = curl_exec($ch);
$err = curl_error($ch);

curl_close($ch);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  print_r($response);
};
?>