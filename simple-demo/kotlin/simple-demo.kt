// Kledo API Demo - Kotlin (JDK 11+)
// Jalankan: kotlinc simple-demo.kt -include-runtime -d simple-demo.jar && java -jar simple-demo.jar
// Atau: kotlin simple-demo.jar

import java.net.URI
import java.net.http.HttpClient
import java.net.http.HttpRequest
import java.net.http.HttpResponse

fun main() {
    val apiHost = "http://xxx.api.kledo.com/api/v1"
    val accessToken = "your_token_here"

    val client = HttpClient.newHttpClient()
    val req = HttpRequest.newBuilder()
        .uri(URI.create("$apiHost/finance/accounts?sort_by=name&order_by=asc&per_page=5"))
        .header("Accept", "application/json")
        .header("Authorization", "Bearer $accessToken")
        .GET()
        .build()

    val res = client.send(req, HttpResponse.BodyHandlers.ofString())
    println(res.body())
}
