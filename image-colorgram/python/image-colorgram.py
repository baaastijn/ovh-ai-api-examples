# Basic cURL POST call for OVH Colorgram API. Will return HEX, RGB and HSL values.
# coding: utf-8

import requests
import pprint

url = "https://api-market-place.ai.ovh.net/image-colorgram/detect"

payload = {
    'nb_colors': 5,
    'url': 'https://i.ibb.co/0Ghxy72/input.jpg'
    }
headers = {
    'X-OVH-Api-Key': "xxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxx",
    'accept': "application/json",
    'content-type': "application/json",
    'x-pretty-print': "4"
    }

response = requests.request("POST", url, data=payload, headers=headers, verify=False)

pp = pprint.PrettyPrinter()

pp.pprint(response.json())