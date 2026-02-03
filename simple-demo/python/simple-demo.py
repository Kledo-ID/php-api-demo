"""
Kledo API Demo - Python (tanpa pip, pakai urllib bawaan)
Jalankan: python simple-demo.py
"""

import urllib.request
import json

API_HOST = 'http://xxx.api.kledo.com/api/v1'
ACCESS_TOKEN = 'your_token_here'

url = f'{API_HOST}/finance/accounts?sort_by=name&order_by=asc&per_page=5'
req = urllib.request.Request(url, headers={
    'Accept': 'application/json',
    'Authorization': f'Bearer {ACCESS_TOKEN}'
})
with urllib.request.urlopen(req) as r:
    data = json.load(r)
print(json.dumps(data, indent=2, ensure_ascii=False))
