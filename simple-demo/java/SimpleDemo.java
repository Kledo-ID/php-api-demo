// Kledo API Demo - Java (JDK 11+)
// Jalankan: javac SimpleDemo.java && java SimpleDemo

import java.net.URI;
import java.net.http.*;
import java.nio.charset.StandardCharsets;

public class SimpleDemo {
    public static void main(String[] args) throws Exception {
        var apiHost = "http://xxx.api.kledo.com/api/v1";
        var accessToken = "your_token_here";

        var req = HttpRequest.newBuilder()
            .uri(URI.create(apiHost + "/finance/accounts?sort_by=name&order_by=asc&per_page=5"))
            .header("Accept", "application/json")
            .header("Authorization", "Bearer " + accessToken)
            .GET()
            .build();

        var res = HttpClient.newHttpClient().send(req, HttpResponse.BodyHandlers.ofString(StandardCharsets.UTF_8));
        System.out.println(res.body());
    }
}
