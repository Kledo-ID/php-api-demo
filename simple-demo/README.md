# Kledo API Demo - Berbagai Bahasa

Contoh sederhana memanggil API Kledo (GET /finance/accounts) dalam berbagai bahasa pemrograman populer. Semua script menggunakan library bawaan, tanpa dependency eksternal (kecuali yang disebutkan).

## Setup

Edit `API_HOST` dan `ACCESS_TOKEN` di setiap file sesuai dengan kredensial Anda.

## Menjalankan

| Bahasa    | File              | Perintah                      | Catatan                    |
|-----------|-------------------|-------------------------------|----------------------------|
| PHP       | php/simple-demo.php | `php simple-demo.php`        | PHP 7.4+                   |
| Python    | python/simple-demo.py | `python simple-demo.py`   | Python 3.x (urllib bawaan) |
| Node.js   | [nodejs/simple-demo.js](nodejs/simple-demo.js) | `node simple-demo.js` | Node.js 18+ (fetch bawaan) |
| Go        | go/simple-demo.go | `go run simple-demo.go`       | Go 1.x                     |
| Ruby      | ruby/simple-demo.rb | `ruby simple-demo.rb`       | Ruby 2.x+                  |
| C#        | csharp/SimpleDemo.cs | `dotnet run` (dalam folder) | .NET 6+                    |
| Java      | java/SimpleDemo.java | `javac SimpleDemo.java && java SimpleDemo` | JDK 11+ |
| **Rust**  | rust/             | `cargo run` (dalam folder)   | Cargo + reqwest            |
| Kotlin    | kotlin/simple-demo.kt | `kotlinc simple-demo.kt -include-runtime -d simple-demo.jar && java -jar simple-demo.jar` | JDK 11+ |
| Perl      | perl/simple-demo.pl | `perl simple-demo.pl`       | Perlu: cpan LWP::UserAgent JSON |
| Swift     | swift/simple-demo.swift | `swift simple-demo.swift` | Swift 5.5+ (macOS/Linux)   |
| Dart      | dart/simple-demo.dart | `dart run simple-demo.dart` | Dart SDK                   |
| Bash      | bash/simple-demo.sh | `bash simple-demo.sh`       | curl + python (format JSON)       |
| PowerShell| powershell/simple-demo.ps1 | `pwsh simple-demo.ps1` | Windows native                  |

## API Endpoint

```
GET {API_HOST}/finance/accounts?sort_by=name&order_by=asc&per_page=5
Headers: Accept: application/json, Authorization: Bearer {ACCESS_TOKEN}
```
