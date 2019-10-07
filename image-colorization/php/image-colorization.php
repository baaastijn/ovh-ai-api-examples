<!doctype html>
<html>
<head></head>
<body>

<?php
// Basic cURL POST call for OVH colorization API. Will return colorized image.
 
$data = array(
  'source_url' => 'https://www.example.com/image.png',
  'render_factor' => 35
);
 
$payload = json_encode($data);
 
$ch = curl_init('https://api-market-place.ai.ovh.net/image-colorization/process');
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
  $fp = fopen('colorized.jpg', 'w');
  fwrite($fp, $response);
  fclose($fp);
  echo '<img src="colorized.jpg" alt="colorized image">';
};
?>
     
</body>
</html>