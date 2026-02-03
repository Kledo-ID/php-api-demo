// Kledo API Demo - Swift (Swift 5.5+)
// Jalankan: swift simple-demo.swift

import Foundation

let apiHost = "http://xxx.api.kledo.com/api/v1"
let accessToken = "your_token_here"

var request = URLRequest(url: URL(string: "\(apiHost)/finance/accounts?sort_by=name&order_by=asc&per_page=5")!)
request.setValue("application/json", forHTTPHeaderField: "Accept")
request.setValue("Bearer \(accessToken)", forHTTPHeaderField: "Authorization")

let (data, _) = try await URLSession.shared.data(for: request)
if let json = try? JSONSerialization.jsonObject(with: data),
   let pretty = try? JSONSerialization.data(withJSONObject: json, options: .prettyPrinted) {
    print(String(data: pretty, encoding: .utf8)!)
}
