# Basic cURL POST call for OVH Colorization API. Will return a colorized image located in the script folder.
# Since we will receive non-text code, we will use shutil library to copy object to file
# coding: utf-8

import requests
import shutil

url = "https://api-market-place.ai.ovh.net/image-colorization/process"

payload = {
  'render_factor': 35,
  'source_url': 'https://compress-or-die.com/public/understanding-jpg/assets/improvement_sepia_1.jpg'
}

headers = {
  'X-OVH-Api-Key': "xxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxx",
  'accept': "image/jpg",
  'content-type': "application/json",
  'x-pretty-print': "4"
}

response = requests.request("POST", url, json=payload, headers=headers, stream=True, verify=False)

status = response.status_code

if status == 200:
  with open('colorized.jpg', 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
    del response
    print("Job done !")

else:
  print("Job failed. Error ".response.status_code)
