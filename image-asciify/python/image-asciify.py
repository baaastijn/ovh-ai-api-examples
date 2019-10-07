# Basic cURL POST call for OVH Asciify API. Will return ASCII art image.
# coding: utf-8

import requests

url = "https://api-market-place.ai.ovh.net/image-asciify/process"

payload = "{\"url\": \"https://www.example.com/image.png\"}"
headers = {
  'X-OVH-Api-Key': "xxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxx",
  'accept': "application/json",
  'content-type': "application/json"
}

response = requests.request("POST", url, data=payload, headers=headers, verify=False)

print(response.text)