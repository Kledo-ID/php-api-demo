# Kledo API Demo - PowerShell
# Jalankan: pwsh simple-demo.ps1  atau  powershell -File simple-demo.ps1

$API_HOST = "http://xxx.api.kledo.com/api/v1"
$ACCESS_TOKEN = "your_token_here"

$headers = @{
    "Accept" = "application/json"
    "Authorization" = "Bearer $ACCESS_TOKEN"
}
$response = Invoke-RestMethod -Uri "$API_HOST/finance/accounts?sort_by=name&order_by=asc&per_page=5" -Headers $headers -Method Get
$response | ConvertTo-Json -Depth 10
