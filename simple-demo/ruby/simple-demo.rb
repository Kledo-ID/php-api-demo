# Kledo API Demo - Ruby (tanpa gem eksternal)
# Jalankan: ruby simple-demo.rb

require 'net/http'
require 'json'

API_HOST = 'http://xxx.api.kledo.com/api/v1'
ACCESS_TOKEN = 'your_token_here'

uri = URI("#{API_HOST}/finance/accounts?sort_by=name&order_by=asc&per_page=5")
req = Net::HTTP::Get.new(uri)
req['Accept'] = 'application/json'
req['Authorization'] = "Bearer #{ACCESS_TOKEN}"

res = Net::HTTP.start(uri.hostname, uri.port) { |http| http.request(req) }
data = JSON.parse(res.body)
puts JSON.pretty_generate(data)
