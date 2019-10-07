<!doctype html>
<html>
<head></head>

<body>

<?php
// Basic cURL POST call for OVH Bodyguard.ai API. Will return sentimnent analysis.
 
$data = array(
  'text' => 'Le PHP c est magique woohoo ! ou pas...'
);
 
$payload = json_encode($data);
 
$ch = curl_init('https://api-market-place.ai.ovh.net/text-cyberharcelement/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Content-Type: application/json',
  'Accept: image/jpg',
  'X-OVH-Api-Key: xxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxx',
  'Content-Length: ' . strlen($payload))
);
   
$response = curl_exec($ch);
$err = curl_error($ch);

curl_close($ch);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    echo '<pre>'.var_dump($data).'</pre>';
    echo '<pre>'.$response.'</pre>';
};
?>
     
</body>
</html>