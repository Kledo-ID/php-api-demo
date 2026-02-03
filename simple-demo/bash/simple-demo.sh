#!/bin/bash
# Kledo API Demo - Bash (menggunakan curl)
# Jalankan: bash simple-demo.sh

API_HOST="http://xxx.api.kledo.com/api/v1"
ACCESS_TOKEN="your_token_here"

curl -s -X GET "$API_HOST/finance/accounts?sort_by=name&order_by=asc&per_page=5" \
  -H "Accept: application/json" \
  -H "Authorization: Bearer $ACCESS_TOKEN" | python3 -m json.tool
